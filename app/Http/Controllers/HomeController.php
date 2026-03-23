<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Diploma;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $locale = app()->getLocale();

        return Inertia::render('Home', [
            'banners' => $this->resolveBanners(Banner::active()->with('media')->get(), $locale),
            'experiences' => $this->resolveTranslations(Experience::ordered()->with('media')->get(), $locale),
            'diplomas' => $this->resolveTranslations(Diploma::ordered()->with('media')->get(), $locale),
            'skills' => Skill::ordered()->get()->groupBy('category'),
            'projects' => $this->resolveTranslations(Project::featured()->with('media')->get(), $locale),
            'latestArticles' => $this->resolveTranslations(Article::published()->with(['tags', 'media'])->limit(3)->get(), $locale),
        ]);
    }

    private function resolveBanners(Collection $models, string $locale): array
    {
        return $models->map(function (Banner $banner) use ($locale) {
            $roles = $banner->getTranslation('roles', $locale, false)
                ?? $banner->getTranslation('roles', 'fr', false)
                ?? [];

            return [
                'id' => $banner->id,
                'roles' => (array) $roles,
                'subtitle' => $banner->getTranslation('subtitle', $locale, false)
                    ?? $banner->getTranslation('subtitle', 'fr', false),
                'background_url' => $banner->getFirstMediaUrl('background') ?: null,
                'sort_order' => $banner->sort_order,
            ];
        })->all();
    }

    private function resolveTranslations(Collection $models, string $locale): array
    {
        return $models->map(function ($model) use ($locale) {
            $data = $model->toArray();

            foreach ($model->getTranslatableAttributes() as $attr) {
                $data[$attr] = $model->getTranslation($attr, $locale);
            }

            return $data;
        })->all();
    }
}
