<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $type
 * @property string $color
 * @property string|null $description
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable(['name', 'slug', 'type', 'color', 'description', 'order'])]
class Category extends Model
{
    use HasFactory;
    /* =========================================
       TYPE CONSTANTS
       ========================================= */

    public const TYPE_NEWS          = 'news';
    public const TYPE_ARTICLE       = 'article';
    public const TYPE_OPINION       = 'opini';
    public const TYPE_ANNOUNCEMENT  = 'pengumuman';

    /* =========================================
       RELATIONS
       ========================================= */

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopeOfType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

    /* =========================================
       HELPERS
       ========================================= */

    public function isNews(): bool
    {
        return $this->type === self::TYPE_NEWS;
    }

    public function isArticle(): bool
    {
        return $this->type === self::TYPE_ARTICLE;
    }
}
