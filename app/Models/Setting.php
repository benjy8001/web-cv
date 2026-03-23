<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'key',
        'value',
    ];

    public static function get(string $key, mixed $default = null): mixed
    {
        return static::where('key', $key)->value('value') ?? $default;
    }

    public static function set(string $key, mixed $value): void
    {
        static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    public static function allAsArray(): array
    {
        return static::where('key', '!=', '_global')->pluck('value', 'key')->toArray();
    }

    public static function getGlobal(): self
    {
        return static::firstOrCreate(['key' => '_global']);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
        $this->addMediaCollection('cv_pdf')->singleFile();
    }

    public static function defaults(): array
    {
        return [
            'name' => 'Benjamin Mabille',
            'title' => 'Développeur PHP Full Stack',
            'bio' => '',
            'email' => 'benjy80@gmail.com',
            'phone' => '06 14 63 61 41',
            'address' => '18 rue Principale, 80110 AUBERCOURT',
            'linkedin' => '',
            'github' => '',
            'is_available' => true,
            'is_maintenance' => false,
        ];
    }
}
