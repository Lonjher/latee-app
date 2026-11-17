<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            // type         , name                , color
            ['news',         'Berita Pesantren',   'brand'],
            ['news',         'Kegiatan Santri',    'emerald'],
            ['news',         'Prestasi',           'amber'],
            ['pengumuman',   'Pengumuman',         'rose'],
            ['article',      'Artikel Islami',     'teal'],
            ['article',      'Kajian & Tafsir',    'sky'],
            ['opini',        'Opini Santri',       'violet'],
        ];

        foreach ($categories as $i => [$type, $name, $color]) {
            Category::firstOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name'  => $name,
                    'type'  => $type,
                    'color' => $color,
                    'order' => $i,
                ]
            );
        }

        $this->command->info('📂 ' . count($categories) . ' kategori siap.');
    }
}
