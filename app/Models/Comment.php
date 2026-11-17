<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int|null $user_id
 * @property int|null $parent_id
 * @property string $commentable_type
 * @property int $commentable_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string $body
 * @property bool $is_approved
 * @property bool $is_pinned
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $display_name
 * @property-read User|null $user
 * @property-read Comment|null $parent
 */
#[Fillable([
    'user_id', 'parent_id', 'commentable_type', 'commentable_id',
    'name', 'email', 'ip_address', 'user_agent',
    'body', 'is_approved', 'is_pinned',
])]
class Comment extends Model
{
    use SoftDeletes, HasFactory;

    protected function casts(): array
    {
        return [
            'is_approved' => 'boolean',
            'is_pinned'   => 'boolean',
        ];
    }

    /* =========================================
       RELATIONS
       ========================================= */

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id')->latest();
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopeApproved(Builder $query): Builder
    {
        return $query->where('is_approved', true);
    }

    public function scopeRoots(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function scopePinnedFirst(Builder $query): Builder
    {
        return $query->orderByDesc('is_pinned')->latest();
    }

    /* =========================================
       ACCESSORS
       ========================================= */

    public function getDisplayNameAttribute(): string
    {
        return $this->user?->full_name
            ?? $this->name
            ?? 'Anonim';
    }
}
