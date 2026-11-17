<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $curated = [
            ['title' => 'Peringatan Maulid Nabi 1447 H',        'published_at' => now()->subDays(5)],
            ['title' => 'Wisuda Santri Angkatan 2026',          'published_at' => now()->subDays(15)],
            ['title' => 'Kegiatan Haul Masyayikh Annuqayah',    'published_at' => now()->subDays(30)],
            ['title' => 'Lomba Antar Santri Semester Ganjil',   'published_at' => now()->subDays(45)],
            ['title' => 'Kunjungan Tamu dari Kemenag Sumenep',  'published_at' => now()->subDays(60)],
            ['title' => 'Pesantren Kilat Ramadhan 1447 H',      'published_at' => now()->subDays(80)],
        ];

        foreach ($curated as $i => $data) {
            Gallery::factory()->create($data);
        }

        // Draft gallery
        Gallery::factory()->draft()->create([
            'title' => 'Dokumentasi Kegiatan Mendatang',
        ]);

        $this->command->info('🖼️  ' . Gallery::count() . ' galleries siap.');
    }
}
