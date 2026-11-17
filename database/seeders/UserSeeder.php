<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 2 Editor
        $editors = [
            ['full_name' => 'Ahmad Fauzi',      'email' => 'editor1@annuqayahlatee.sch.id'],
            ['full_name' => 'Muhammad Ridwan',  'email' => 'editor2@annuqayahlatee.sch.id'],
        ];

        foreach ($editors as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                array_merge($data, [
                    'password'          => Hash::make('password'),
                    'bio'               => 'Editor konten Annuqayah Latee.',
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ])
            );

            if (! $user->hasRole('editor')) {
                $user->assignRole('editor');
            }
        }

        $users = [
            ['full_name' => 'Kamiluddin Zafi',      'email' => 'user1@annuqayahlatee.sch.id'],
            ['full_name' => 'Habibuddin Alawi',  'email' => 'user@annuqayahlatee.sch.id'],
        ];

        foreach ($users as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                array_merge($data, [
                    'password'          => Hash::make('password'),
                    'bio'               => 'User Satri Annuqayah Latee.',
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ])
            );

            if (! $user->hasRole('user')) {
                $user->assignRole('user');
            }
        }

        $this->command->info('👥 2 user siap.');
    }
}
