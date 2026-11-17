<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    public function run(): void
    {
        // Quotes dengan penulis asli
        $curated = [
            [
                'content' => 'Barangsiapa tidak mau merasakan lelahnya belajar, maka ia akan merasakan perihnya kebodohan.',
                'author'  => 'Imam Syafi\'i',
                'source'  => 'Diwan Asy-Syafi\'i',
            ],
            [
                'content' => 'Ilmu tanpa amal seperti pohon tanpa buah.',
                'author'  => 'Imam Al-Ghazali',
                'source'  => 'Ihya Ulumuddin',
            ],
            [
                'content' => 'Adab lebih tinggi dari pada ilmu. Ilmu tanpa adab seperti api tanpa kayu bakar.',
                'author'  => 'KH. Hasyim Asy\'ari',
                'source'  => 'Adabul Alim wal Muta\'allim',
            ],
            [
                'content' => 'Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lain.',
                'author'  => 'Sayyidina Ali bin Abi Thalib',
                'source'  => null,
            ],
            [
                'content' => 'Hati adalah raja, anggota tubuh adalah tentaranya. Jika raja baik, seluruh tentaranya baik.',
                'author'  => 'Imam Bukhari',
                'source'  => 'Shahih Bukhari',
            ],
        ];

        foreach ($curated as $i => $q) {
            Quote::create(array_merge($q, [
                'is_published' => true,
                'published_at' => now()->subDays($i * 3 + 1),
            ]));
        }

        // Random quotes via factory
        Quote::factory()->count(10)->create();

        $this->command->info('💬 ' . Quote::count() . ' quotes siap.');
    }
}
