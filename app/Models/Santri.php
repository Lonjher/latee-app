<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int|null $user_id
 * @property int $complex_id
 * @property int|null $room_id
 * @property string $nis
 * @property string|null $nisn
 * @property string|null $nik
 * @property string $firstname
 * @property string|null $lastname
 * @property string $gender
 * @property string|null $birth_place
 * @property Carbon|null $birth_date
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $formal_education
 * @property string|null $madrasah_diniyah
 * @property string $status
 * @property int|null $entry_year
 * @property Carbon|null $entry_date
 * @property Carbon|null $exit_date
 * @property string|null $photo
 * @property string|null $notes
 * @property Carbon|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $full_name
 */
#[Fillable([
    'user_id',
    'complex_id',
    'room_id',
    'nis',
    'nisn',
    'nik',
    'firstname',
    'lastname',
    'gender',
    'birth_place',
    'birth_date',
    'phone',
    'address',
    'postal_code',
    'formal_education',
    'madrasah_diniyah',
    'status',
    'entry_year',
    'entry_date',
    'exit_date',
    'photo',
    'notes',
])]
class Santri extends Model
{
    use HasFactory, SoftDeletes;

    /* =========================================
       STATUS & GENDER CONSTANTS
       ========================================= */

    public const STATUS_ACTIVE   = 'aktif';
    public const STATUS_ALUMNI   = 'alumni';
    public const STATUS_BOYONG   = 'boyong';
    public const STATUS_CUTI     = 'cuti';
    public const STATUS_SKORSING = 'skorsing';
    public const STATUS_PENDING  = 'pending';

    public const GENDER_PUTRA    = 'putra';
    public const GENDER_PUTRI    = 'putri';

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_id'    => 'integer',
            'complex_id' => 'integer',
            'room_id'    => 'integer',
            'entry_year' => 'integer',
            'birth_date' => 'date',
            'entry_date' => 'date',
            'exit_date'  => 'date',
        ];
    }

    /* =========================================
       ACCESSORS
       ========================================= */

    /**
     * Get the full name combining firstname and lastname.
     */
    public function getFullNameAttribute(): string
    {
        return trim("{$this->firstname} {$this->lastname}");
    }

    /* =========================================
       RELATIONS
       ========================================= */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function complex(): BelongsTo
    {
        return $this->belongsTo(Complex::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    /* =========================================
       SCOPES
       ========================================= */

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeAlumni(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_ALUMNI);
    }

    public function scopePutra(Builder $query): Builder
    {
        return $query->where('gender', self::GENDER_PUTRA);
    }

    public function scopePutri(Builder $query): Builder
    {
        return $query->where('gender', self::GENDER_PUTRI);
    }

    public function scopeOfComplex(Builder $query, int $complexId): Builder
    {
        return $query->where('complex_id', $complexId);
    }

    public function scopeOfRoom(Builder $query, int $roomId): Builder
    {
        return $query->where('room_id', $roomId);
    }
}
