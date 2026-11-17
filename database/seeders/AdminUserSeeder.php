<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@annuqayahlatee.id'],
            [
                'full_name'         => 'Administrator',
                'password'          => Hash::make('password'),
                'bio'               => 'Pengelola utama sistem informasi PP. Annuqayah Latee.',
                'is_active'         => true,
                'email_verified_at' => now(),
            ]
        );

        if (! $admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        $this->command->info('👑 Admin: admin@annuqayahlatee.sch.id / password');
    }
}
