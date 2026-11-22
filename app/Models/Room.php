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
 * @property int $complex_id
 * @property string $room_name
 * @property string|null $block
 * @property int $capacity
 * @property bool $is_available
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read int $current_occupancy
 * @property-read int $remaining_capacity
 * @property-read bool $is_full
 */
#[Fillable(['complex_id', 'room_name', 'block', 'capacity', 'is_available'])]
class Room extends Model
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
            'complex_id'   => 'integer',
            'capacity'     => 'integer',
            'is_available' => 'boolean',
        ];
    }

    /* =========================================
       RELATIONS
       ========================================= */

    public function complex(): BelongsTo
    {
        return $this->belongsTo(Complex::class);
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
       ACCESSORS & HELPERS
       ========================================= */

    public function getCurrentOccupancyAttribute(): int
    {
        return $this->activeSantris()->count();
    }

    public function getRemainingCapacityAttribute(): int
    {
        return max(0, $this->capacity - $this->current_occupancy);
    }

    public function getIsFullAttribute(): bool
    {
        return $this->current_occupancy >= $this->capacity;
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopeAvailable(Builder $query): Builder
    {
        return $query->where('is_available', true);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $this->scopeAvailable($query);
    }

    public function scopeHasVacancy(Builder $query): Builder
    {
        return $query->where('is_available', true)
            ->whereHas('complex', fn($q) => $q->where('is_active', true))
            ->withCount(['santris as active_santri_count' => function ($q) {
                $q->where('status', Santri::STATUS_ACTIVE);
            }])
            ->havingRaw('active_santri_count < capacity');
    }
}
