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
            ['email' => 'editor1@annuqayahlatee.sch.id', 'bio' => 'Editor konten Annuqayah Latee Putra.'],
            ['email' => 'editor2@annuqayahlatee.sch.id', 'bio' => 'Editor konten Annuqayah Latee Putri.'],
        ];

        foreach ($editors as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'password'          => Hash::make('password'),
                    'bio'               => $data['bio'],
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ]
            );

            if (! $user->hasRole('editor')) {
                $user->assignRole('editor');
            }
        }

        // 2 Umum / Wali / Tamu
        $users = [
            ['email' => 'user1@annuqayahlatee.sch.id', 'bio' => 'Wali Santri Annuqayah Latee.'],
            ['email' => 'user@annuqayahlatee.sch.id',  'bio' => 'Alumni Annuqayah Latee.'],
        ];

        foreach ($users as $data) {
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'password'          => Hash::make('password'),
                    'bio'               => $data['bio'],
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ]
            );

            if (! $user->hasRole('user')) {
                $user->assignRole('user');
            }
        }

        $this->command->info('👥 2 editor dan 2 user umum siap.');
    }
}
