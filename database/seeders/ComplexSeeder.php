<?php

namespace Database\Seeders;

use App\Models\Complex;
use App\Models\Priest;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ComplexSeeder extends Seeder
{
    public function run(): void
    {
        $priestAla    = Priest::where('firstname', 'like', '%A\'la%')->orWhere('lastname', 'like', '%A\'la%')->first();
        $priestBasith = Priest::where('firstname', 'like', '%Basith%')->first();
        $priestUmamah = Priest::where('firstname', 'like', '%Umamah%')->first();

        // Buat akun user untuk Ketua / Lurah Komplek
        $lurahPutra = User::firstOrCreate(
            ['email' => 'lurah.putra@annuqayahlatee.sch.id'],
            [
                'password'          => Hash::make('password'),
                'bio'               => 'Lurah / Ketua Pengurus Kompleks Latee Putra.',
                'is_active'         => true,
                'email_verified_at' => now(),
            ]
        );
        if (! $lurahPutra->hasRole('user')) {
            $lurahPutra->assignRole('user');
        }

        $lurahPutri1 = User::firstOrCreate(
            ['email' => 'lurah.putri1@annuqayahlatee.sch.id'],
            [
                'password'          => Hash::make('password'),
                'bio'               => 'Ketua Pengurus Kompleks Latee I Putri.',
                'is_active'         => true,
                'email_verified_at' => now(),
            ]
        );
        if (! $lurahPutri1->hasRole('user')) {
            $lurahPutri1->assignRole('user');
        }

        $lurahPutri2 = User::firstOrCreate(
            ['email' => 'lurah.putri2@annuqayahlatee.sch.id'],
            [
                'password'          => Hash::make('password'),
                'bio'               => 'Ketua Pengurus Kompleks Latee II Putri.',
                'is_active'         => true,
                'email_verified_at' => now(),
            ]
        );
        if (! $lurahPutri2->hasRole('user')) {
            $lurahPutri2->assignRole('user');
        }

        $complexes = [
            [
                'complex_name'       => 'Latee Putra',
                'description'        => 'Kompleks putra dengan sistem kepengasuhan kolektif. Menampung santri putra dari berbagai daerah di Indonesia.',
                'head_of_complex_id' => $lurahPutra->id,
                'priest_id'          => $priestAla?->id,
                'is_active'          => true,
            ],
            [
                'complex_name'       => 'Latee I Putri',
                'description'        => 'Kompleks putri yang diasuh oleh KH. A. Basith AS. Menyelenggarakan berbagai program pendidikan dan amaliah khusus santri putri.',
                'head_of_complex_id' => $lurahPutri1->id,
                'priest_id'          => $priestBasith?->id,
                'is_active'          => true,
            ],
            [
                'complex_name'       => 'Latee II Putri',
                'description'        => 'Kompleks putri yang diasuh oleh Nyai Umamah Makkiyah. Memiliki fokus khas pada Pembinaan Akhlak dan Busana Islami (PABI) serta keterampilan santri putri.',
                'head_of_complex_id' => $lurahPutri2->id,
                'priest_id'          => $priestUmamah?->id,
                'is_active'          => true,
            ],
        ];

        foreach ($complexes as $data) {
            Complex::updateOrCreate(
                ['complex_name' => $data['complex_name']],
                $data
            );
        }

        $this->command->info('🏢 3 Kompleks siap dengan penanggung jawab Lurah & Pengasuh.');
    }
}
