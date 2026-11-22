<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable(['name', 'value'])]
class Setting extends Model
{
    use HasFactory;

    /**
     * Get a setting value by name, with fallback.
     */
    public static function get(string $name, mixed $default = null): mixed
    {
        $setting = static::where('name', $name)->first();

        return $setting !== null ? $setting->value : $default;
    }

    /**
     * Set/update a setting value by name.
     */
    public static function set(string $name, mixed $value): static
    {
        $stringVal = is_bool($value)
            ? ($value ? '1' : '0')
            : (string) ($value ?? '');

        return static::updateOrCreate(
            ['name' => $name],
            ['value' => $stringVal]
        );
    }

    /**
     * Check if a boolean setting is true / '1'.
     */
    public static function isTrue(string $name, bool $default = false): bool
    {
        $val = static::get($name, null);

        if ($val === null) {
            return $default;
        }

        return in_array(strtolower((string) $val), ['1', 'true', 'on', 'yes'], true);
    }
}
