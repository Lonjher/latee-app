<?php

namespace App\Models;

use App\Concerns\HasSlug;
use Arm092\RichTextEditor\Casts\RichTextCast;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property-read string|null $type
 * @property string $title
 * @property string $slug
 * @property string|null $excerpt
 * @property string $content
 * @property string|null $featured_image
 * @property bool $is_published
 * @property bool $is_featured
 * @property Carbon|null $published_at
 * @property int $views_count
 * @property int $likes_count
 * @property int $comments_count
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $author
 * @property-read Category|null $category
 */
#[Fillable([
    'user_id', 'category_id', 'title', 'slug',
    'excerpt', 'content', 'featured_image', "type",
    'is_published', 'is_featured', 'published_at',
])]
class Post extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'is_featured'  => 'boolean',
            'published_at' => 'datetime',
            'content'      => RichTextCast::class,
        ];
    }

    /* =========================================
       RELATIONS
       ========================================= */

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    /* =========================================
       ATTRIBUTES
       ========================================= */

    /**
     * Type diambil dari kategori (single source of truth).
     */
    protected function type(): Attribute
    {
        return Attribute::get(fn () => $this->category?->type);
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
                     ->where('published_at', '<=', now());
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeOfType(Builder $query, string $type): Builder
    {
        return $query->whereHas('category', fn ($q) => $q->where('type', $type));
    }

    public function scopeInCategory(Builder $query, string $slug): Builder
    {
        return $query->whereHas('category', fn ($q) => $q->where('slug', $slug));
    }

    /* =========================================
       HELPERS
       ========================================= */

    public function isLikedBy(?User $user): bool
    {
        if (! $user) {
            return false;
        }

        return $this->likes()->where('user_id', $user->id)->exists();
    }

    public function isNews(): bool
    {
        return $this->type === Category::TYPE_NEWS;
    }

    public function isArticle(): bool
    {
        return $this->type === Category::TYPE_ARTICLE;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
