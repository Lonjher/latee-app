<?php

namespace Database\Seeders;

use App\Models\Complex;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $putra  = Complex::where('complex_name', 'like', '%Putra%')->first();
        $putri1 = Complex::where('complex_name', 'like', '%Latee I%')->first();
        $putri2 = Complex::where('complex_name', 'like', '%Latee II%')->first();

        $rooms = [];

        // Kamar Latee Putra
        if ($putra) {
            $rooms = array_merge($rooms, [
                ['complex_id' => $putra->id, 'room_name' => 'Kamar Al-Ghazali', 'block' => 'Gedung A', 'capacity' => 15, 'is_available' => true],
                ['complex_id' => $putra->id, 'room_name' => 'Kamar Ibnu Rusyd', 'block' => 'Gedung A', 'capacity' => 15, 'is_available' => true],
                ['complex_id' => $putra->id, 'room_name' => 'Kamar Al-Farabi', 'block' => 'Gedung B', 'capacity' => 12, 'is_available' => true],
                ['complex_id' => $putra->id, 'room_name' => 'Kamar Asy-Syafi\'i', 'block' => 'Gedung B', 'capacity' => 12, 'is_available' => true],
                ['complex_id' => $putra->id, 'room_name' => 'Kamar Darul Lughah', 'block' => 'Gedung C', 'capacity' => 20, 'is_available' => true],
            ]);
        }

        // Kamar Latee I Putri
        if ($putri1) {
            $rooms = array_merge($rooms, [
                ['complex_id' => $putri1->id, 'room_name' => 'Kamar Khadijah', 'block' => 'Asrama Timur', 'capacity' => 14, 'is_available' => true],
                ['complex_id' => $putri1->id, 'room_name' => 'Kamar Aisyah', 'block' => 'Asrama Timur', 'capacity' => 14, 'is_available' => true],
                ['complex_id' => $putri1->id, 'room_name' => 'Kamar Fatimah', 'block' => 'Asrama Barat', 'capacity' => 16, 'is_available' => true],
                ['complex_id' => $putri1->id, 'room_name' => 'Kamar Hafshah', 'block' => 'Asrama Barat', 'capacity' => 14, 'is_available' => true],
            ]);
        }

        // Kamar Latee II Putri
        if ($putri2) {
            $rooms = array_merge($rooms, [
                ['complex_id' => $putri2->id, 'room_name' => 'Kamar Maryam', 'block' => 'Gedung Khodijah', 'capacity' => 15, 'is_available' => true],
                ['complex_id' => $putri2->id, 'room_name' => 'Kamar Asma\'', 'block' => 'Gedung Khodijah', 'capacity' => 15, 'is_available' => true],
                ['complex_id' => $putri2->id, 'room_name' => 'Kamar Masyithah', 'block' => 'Gedung Fatimah', 'capacity' => 12, 'is_available' => true],
                ['complex_id' => $putri2->id, 'room_name' => 'Kamar Ruqayyah', 'block' => 'Gedung Fatimah', 'capacity' => 12, 'is_available' => true],
            ]);
        }

        foreach ($rooms as $data) {
            Room::firstOrCreate(
                ['complex_id' => $data['complex_id'], 'room_name' => $data['room_name']],
                $data
            );
        }
    }
}
