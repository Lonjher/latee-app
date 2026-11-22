<?php

namespace Database\Seeders;

use App\Models\Priest;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PriestSeeder extends Seeder
{
    public function run(): void
    {
        $priests = [
            [
                'email'     => 'kh.abdala@annuqayahlatee.sch.id',
                'firstname' => 'KH. Abd.',
                'lastname'  => "A'la",
                'bio'       => "Pengasuh Pondok Pesantren Annuqayah Latee Putra.",
            ],
            [
                'email'     => 'kh.basith@annuqayahlatee.sch.id',
                'firstname' => 'KH. A. Basith',
                'lastname'  => 'Abdullah Sajjad',
                'bio'       => 'Pengasuh Pondok Pesantren Annuqayah Latee I Putri.',
            ],
            [
                'email'     => 'nyai.umamah@annuqayahlatee.sch.id',
                'firstname' => 'Nyai Hj. Umamah',
                'lastname'  => 'Makkiyah',
                'bio'       => 'Pengasuh Pondok Pesantren Annuqayah Latee II Putri.',
            ],
            [
                'email'     => 'kh.husaini@annuqayahlatee.sch.id',
                'firstname' => 'KH. Muhammad',
                'lastname'  => 'Husaini',
                'bio'       => 'Masyayikh Pondok Pesantren Annuqayah Latee.',
            ],
        ];

        foreach ($priests as $data) {
            // 1. Buat akun User untuk Pengasuh
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'password'          => Hash::make('password'),
                    'bio'               => $data['bio'],
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ]
            );

            if (! $user->hasRole('pengasuh')) {
                $user->assignRole('pengasuh');
            }

            // 2. Hubungkan data profil Priest dengan user_id
            Priest::updateOrCreate(
                ['firstname' => $data['firstname'], 'lastname' => $data['lastname']],
                [
                    'user_id'   => $user->id,
                    'firstname' => $data['firstname'],
                    'lastname'  => $data['lastname'],
                ]
            );
        }

        $this->command->info('👳‍♂️ 4 Pengasuh (Priests) dengan akun User & role pengasuh siap.');
    }
}
