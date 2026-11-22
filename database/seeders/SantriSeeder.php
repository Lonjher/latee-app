<?php

namespace Database\Seeders;

use App\Models\Complex;
use App\Models\Room;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SantriSeeder extends Seeder
{
    public function run(): void
    {
        $putra  = Complex::where('complex_name', 'like', '%Putra%')->first();
        $putri1 = Complex::where('complex_name', 'like', '%Latee I%')->first();
        $putri2 = Complex::where('complex_name', 'like', '%Latee II%')->first();

        $roomGhazali  = $putra ? Room::where('complex_id', $putra->id)->first() : null;
        $roomKhadijah = $putri1 ? Room::where('complex_id', $putri1->id)->first() : null;
        $roomMaryam   = $putri2 ? Room::where('complex_id', $putri2->id)->first() : null;

        $santris = [
            [
                'email'            => 'zainuddin@annuqayahlatee.sch.id',
                'complex_id'       => $putra?->id ?? 1,
                'room_id'          => $roomGhazali?->id,
                'nis'              => '202401001',
                'nisn'             => '0061234567',
                'nik'              => '3529012345670001',
                'firstname'        => 'Muhammad',
                'lastname'         => 'Zainuddin',
                'gender'           => 'putra',
                'birth_place'      => 'Sumenep',
                'birth_date'       => '2008-04-12',
                'phone'            => '081234567890',
                'address'          => 'Guluk-Guluk, Sumenep',
                'postal_code'      => '69463',
                'formal_education' => 'MA 1 Annuqayah',
                'madrasah_diniyah' => 'Wustho',
                'status'           => 'aktif',
                'entry_year'       => 2024,
                'entry_date'       => '2024-07-15',
                'notes'            => 'Santri teladan tahfidz 5 juz',
            ],
            [
                'email'            => 'habibi@annuqayahlatee.sch.id',
                'complex_id'       => $putra?->id ?? 1,
                'room_id'          => $roomGhazali?->id,
                'nis'              => '202401002',
                'nisn'             => '0061234568',
                'nik'              => '3529012345670002',
                'firstname'        => 'Ahmad',
                'lastname'         => 'Habibi',
                'gender'           => 'putra',
                'birth_place'      => 'Pamekasan',
                'birth_date'       => '2009-08-20',
                'phone'            => '081234567891',
                'address'          => 'Proppo, Pamekasan',
                'postal_code'      => '69371',
                'formal_education' => 'MTs 1 Annuqayah',
                'madrasah_diniyah' => 'Ula',
                'status'           => 'aktif',
                'entry_year'       => 2024,
                'entry_date'       => '2024-07-15',
                'notes'            => 'Santri aktif bahasa Arab',
            ],
            [
                'email'            => 'fatimah@annuqayahlatee.sch.id',
                'complex_id'       => $putri1?->id ?? 2,
                'room_id'          => $roomKhadijah?->id,
                'nis'              => '202402001',
                'nisn'             => '0061234569',
                'nik'              => '3529012345670003',
                'firstname'        => 'Nurul',
                'lastname'         => 'Fatimah',
                'gender'           => 'putri',
                'birth_place'      => 'Surabaya',
                'birth_date'       => '2008-11-05',
                'phone'            => '081234567892',
                'address'          => 'Rungkut, Surabaya',
                'postal_code'      => '60293',
                'formal_education' => 'SMA Annuqayah',
                'madrasah_diniyah' => 'Wustho',
                'status'           => 'aktif',
                'entry_year'       => 2024,
                'entry_date'       => '2024-07-16',
                'notes'            => 'Santriwati tahfidh putri',
            ],
            [
                'email'            => 'aisyah@annuqayahlatee.sch.id',
                'complex_id'       => $putri2?->id ?? 3,
                'room_id'          => $roomMaryam?->id,
                'nis'              => '202403001',
                'nisn'             => '0061234570',
                'nik'              => '3529012345670004',
                'firstname'        => 'Siti',
                'lastname'         => 'Aisyah',
                'gender'           => 'putri',
                'birth_place'      => 'Bangkalan',
                'birth_date'       => '2009-02-14',
                'phone'            => '081234567893',
                'address'          => 'Burneh, Bangkalan',
                'postal_code'      => '69121',
                'formal_education' => 'MTs 3 Annuqayah',
                'madrasah_diniyah' => 'Ula',
                'status'           => 'aktif',
                'entry_year'       => 2024,
                'entry_date'       => '2024-07-16',
                'notes'            => 'Santriwati peminatan tata busana',
            ],
        ];

        foreach ($santris as $data) {
            $email = $data['email'];
            unset($data['email']);

            // 1. Buat akun User untuk Santri
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'password'          => Hash::make('password'),
                    'bio'               => "Santri aktif Annuqayah Latee (NIS: {$data['nis']})",
                    'is_active'         => true,
                    'email_verified_at' => now(),
                ]
            );

            if (! $user->hasRole('santri')) {
                $user->assignRole('santri');
            }

            // 2. Hubungkan data Santri ke user_id yang valid
            $data['user_id'] = $user->id;

            Santri::updateOrCreate(
                ['nis' => $data['nis']],
                $data
            );
        }

        $this->command->info('📖 4 Santri siap lengkap dengan akun User (user_id) & role santri.');
    }
}
