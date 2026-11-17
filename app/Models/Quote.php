<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $content
 * @property string|null $author
 * @property string|null $source
 * @property string|null $featured_image
 * @property bool $is_published
 * @property Carbon|null $published_at
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable([
    'content', 'author', 'source',
    'featured_image', 'is_published', 'published_at',
])]
class Quote extends Model
{
    use SoftDeletes, HasFactory;

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
                     ->where('published_at', '<=', now());
    }

    /* =========================================
       ACCESSORS
       ========================================= */

    public function getAuthorDisplayAttribute(): string
    {
        return $this->author ?: 'Anonim';
    }
}
