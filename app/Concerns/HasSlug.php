<?php

namespace App\Concerns;

use Illuminate\Support\Str;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = $model->generateUniqueSlug($model->slugSource());
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('title') && ! $model->isDirty('slug')) {
                $model->slug = $model->generateUniqueSlug(
                    $model->slugSource(),
                    $model->id
                );
            }
        });
    }

    /**
     * Kolom sumber untuk slug. Override di model jika perlu.
     * Default: title, fallback ke name.
     */
    protected function slugSource(): string
    {
        return $this->title ?? $this->name ?? '';
    }

    protected function generateUniqueSlug(string $source, ?int $ignoreId = null): string
    {
        $base = Str::slug($source);

        // Fallback jika title kosong / hanya simbol
        if ($base === '') {
            $base = 'untitled';
        }

        $slug = $base;
        $i = 2;

        while (
            static::query()
                ->where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$base}-{$i}";
            $i++;
        }

        return $slug;
    }
}
