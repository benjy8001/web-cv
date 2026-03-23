<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Inertia\Inertia;
use Inertia\Response;

class BlogController extends Controller
{
    public function index(?string $tagSlug = null): Response
    {
        $articles = Article::published()
            ->with(['tags', 'media'])
            ->when($tagSlug, function ($query) use ($tagSlug) {
                $query->whereHas('tags', fn ($q) => $q->where('slug', $tagSlug));
            })
            ->paginate(9);

        return Inertia::render('Blog/Index', [
            'articles' => $articles,
            'tags' => Tag::withCount('articles')->orderByDesc('articles_count')->get(),
            'activeTag' => $tagSlug,
        ]);
    }

    public function show(string $slug): Response
    {
        $article = Article::where('slug', $slug)
            ->published()
            ->with(['tags', 'media'])
            ->firstOrFail();

        $related = Article::published()
            ->where('id', '!=', $article->id)
            ->whereHas('tags', fn ($q) => $q->whereIn('id', $article->tags->pluck('id')))
            ->with(['tags', 'media'])
            ->limit(3)
            ->get();

        return Inertia::render('Blog/Show', [
            'article' => $article,
            'related' => $related,
        ]);
    }
}
