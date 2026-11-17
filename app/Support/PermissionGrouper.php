<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

class PermissionGrouper
{
    public static function get(): Collection
    {
        $verbs = [
            'view', 'viewany', 'create', 'edit', 'update', 'delete', 'restore',
            'forcedelete', 'force-delete', 'manage', 'list', 'show', 'export',
            'import', 'publish', 'assign', 'sync',
        ];

        return Permission::orderBy('name')->get()
            ->groupBy(function (Permission $perm) use ($verbs) {
                $parts = preg_split('/[\s._-]+/', $perm->name);

                if (count($parts) < 2) {
                    return 'general';
                }

                return in_array(strtolower($parts[0]), $verbs, true)
                    ? $parts[1]
                    : $parts[0];
            })
            ->sortKeys()
            ->map(fn ($perms, $name) => [
                'name' => $name,
                'permissions' => $perms,
            ])
            ->values();
    }
}
