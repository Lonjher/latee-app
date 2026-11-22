<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property int $id
 * @property string $email
 * @property string|null $avatar
 * @property string|null $bio
 * @property bool $is_active
 * @property Carbon|null $deleted_at
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $full_name
 * @property-read string $name
 */
#[Fillable(['email', 'avatar', 'bio', 'is_active', 'password'])]
#[Hidden(['password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'is_active'         => 'boolean',
        ];
    }

    /* =========================================
       RELATIONS
       ========================================= */

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function santri(): HasOne
    {
        return $this->hasOne(Santri::class);
    }

    public function priest(): HasOne
    {
        return $this->hasOne(Priest::class);
    }

    /* =========================================
       ACCESSORS & HELPERS
       ========================================= */

    /**
     * Resolve full name dynamically from related profile model (Santri, Priest), or fallback to email.
     */
    public function getFullNameAttribute(): string
    {
        if ($this->relationLoaded('santri') && $this->santri) {
            return $this->santri->full_name;
        }

        if ($this->relationLoaded('priest') && $this->priest) {
            return $this->priest->full_name;
        }

        if ($this->santri) {
            return $this->santri->full_name;
        }

        if ($this->priest) {
            return $this->priest->full_name;
        }

        $emailPrefix = explode('@', $this->email)[0] ?? 'User';
        return ucfirst(str_replace(['.', '_', '-'], ' ', $emailPrefix));
    }

    public function getNameAttribute(): string
    {
        return $this->full_name;
    }

    public function setFullNameAttribute(?string $value): void
    {
        // No-op: full_name is determined by role-specific profile models (Santri, Priest)
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        $initials = Str::initials($this->full_name, true);

        return Str::length($initials) > 1
            ? Str::substr($initials, 0, 1) . Str::substr($initials, -1)
            : Str::upper(Str::substr($this->full_name, 0, 2));
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isEditor(): bool
    {
        return $this->hasRole('editor');
    }

    public function isPengasuh(): bool
    {
        return $this->hasRole('pengasuh');
    }

    public function isSantri(): bool
    {
        return $this->hasRole('santri');
    }
}
