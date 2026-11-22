<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $complex_name
 * @property string|null $description
 * @property int|null $head_of_complex_id
 * @property int|null $priest_id
 * @property bool $is_active
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable(['complex_name', 'description', 'head_of_complex_id', 'priest_id', 'is_active'])]
class Complex extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'head_of_complex_id' => 'integer',
            'priest_id'          => 'integer',
            'is_active'          => 'boolean',
        ];
    }

    /* =========================================
       RELATIONS
       ========================================= */

    /**
     * Get the head of complex (Ketua / Lurah Komplek).
     */
    public function headOfComplex(): BelongsTo
    {
        return $this->belongsTo(User::class, 'head_of_complex_id');
    }

    /**
     * Get the priest / pengasuh of the complex.
     */
    public function priest(): BelongsTo
    {
        return $this->belongsTo(Priest::class, 'priest_id');
    }

    /**
     * Alias for priest() in Indonesian domain language (Pengasuh).
     */
    public function pengasuh(): BelongsTo
    {
        return $this->priest();
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function santris(): HasMany
    {
        return $this->hasMany(Santri::class);
    }

    public function activeSantris(): HasMany
    {
        return $this->hasMany(Santri::class)->where('status', Santri::STATUS_ACTIVE);
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }
}
