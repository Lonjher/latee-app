<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'post.view', 'post.create', 'post.update', 'post.delete', 'post.publish',
            'quote.view', 'quote.create', 'quote.update', 'quote.delete', 'quote.publish',
            'gallery.view', 'gallery.create', 'gallery.update', 'gallery.delete', 'gallery.publish',
            'category.manage',
            'comment.view', 'comment.approve', 'comment.delete',
            'user.manage', 'setting.manage',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions(Permission::all());

        $editor = Role::firstOrCreate(['name' => 'editor']);
        $editor->syncPermissions([
            'post.view', 'post.create', 'post.update', 'post.delete', 'post.publish',
            'quote.view', 'quote.create', 'quote.update', 'quote.delete', 'quote.publish',
            'gallery.view', 'gallery.create', 'gallery.update', 'gallery.delete', 'gallery.publish',
            'category.manage',
            'comment.view', 'comment.approve', 'comment.delete',
        ]);

        $pengasuh = Role::firstOrCreate(['name' => 'pengasuh']);
        $pengasuh->syncPermissions([
            'post.view', 'post.create', 'post.update', 'post.publish',
            'quote.view',
            'gallery.view',
        ]);

        $user = Role::firstOrCreate(['name' => 'user']);
        $user->syncPermissions([
            'post.view', 'quote.view', 'gallery.view',
        ]);

        $this->command->info('✅ Roles & permissions siap.');
    }
}
