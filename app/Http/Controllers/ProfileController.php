<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Santri;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $hero = [
            'badge' => 'Tentang Kami',
            'title_prefix' => 'Pondok Pesantren',
            'title_highlight' => 'Annuqayah Latee',
            'description' => "Bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur, berdiri sejak tahun 1923 dan terus berkhidmat mencetak generasi Qur'ani.",
        ];

        $sejarah = [
            'badge' => 'Sejarah',
            'heading' => 'Jejak Langkah & Perjuangan',
            'image' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?q=80&w=1200&auto=format&fit=crop',
            'caption' => 'Pondok Pesantren Annuqayah Latee, bagian dari sejarah panjang pendidikan Islam di Madura.',
            'latar_belakang' => 'Pondok Pesantren Annuqayah didirikan oleh K.H. Muhammad Syarqawi pada tahun 1887 M. Beliau adalah seorang ulama besar dari Kudus, Jawa Tengah, yang masih memiliki hubungan erat dengan silsilah Wali Songo, yaitu Sunan Kudus. Setelah menempuh pendidikan di Mekkah dan berbagai daerah, beliau menetap di Desa Guluk-Guluk, Sumenep, dan mendirikan Pondok Pesantren Annuqayah.',
            'berdirinya_latee' => 'Pondok Pesantren Annuqayah Latee (P2AL) didirikan oleh <strong>K.H. Abdullah Sajjad</strong> pada tahun <strong>1923</strong>. Beliau adalah salah seorang putra K.H. Muhammad Syarqawi yang paling gigih dalam perjuangan fisik melawan penjajah. Pada tahun 1947, beliau gugur sebagai syahid dalam mempertahankan negara dari agresi militer Belanda, yang menyebabkan P2AL sempat mengalami kefakuman.',
            'periode_kepemimpinan' => 'Kefakuman kepemimpinan dicoba diatasi ketika Kyai Anwar (santri kesayangan KH. Abdullah Sajjad) bersama KH. Moh. Mahfudz Husaini berusaha menjalankan kegiatan pendidikan di P2AL untuk sementara waktu. Baru pada tahun <strong>1953</strong>, kepemimpinan P2AL dialihkan kepada <strong>KH. Achmad Basyir Abdullah Sajjad</strong> yang berlangsung hingga sekarang.',
            'perkembangan_pendidikan' => 'Pada tahun-tahun pertama, kegiatan pendidikan di P2AL masih sangat sederhana, mengikuti metode konvensional tradisi pesantren seperti pengajian Al-Qur\'an, pengajian kitab kuning dengan metode sorogan dan wetonan. Embrio sistem pendidikan ini kemudian dimapankan dengan tetap mempertahankan tradisi keilmuan pesantren klasik, seperti <strong>Madrasah Diniyah Annuqayah Latee (MADAL)</strong>.',
        ];

        $visiMisi = [
            'visi' => 'Kesalehan perilaku dan keunggulan mutu.',
            'misi' => [
                'Meningkatkan pendidikan yang menghasilkan alumnus sesuai dengan visi.',
                'Mengembangkan tradisi keilmuan pesantren dan program pendidikan yang melayani santri dari berbagai daerah.',
                'Mewujudkan nilai-nilai keislaman sesuai dengan manhaj salafi.',
            ],
        ];

        // Ambil data komplek secara dinamis dari Database / Model Complex
        $complexesDb = Complex::with(['priest', 'rooms'])
            ->withCount(['santris as active_santris_count' => fn($q) => $q->where('status', Santri::STATUS_ACTIVE)])
            ->active()
            ->get();

        $icons = ['home', 'users', 'sparkles'];
        $rayons = [
            'Latee Putra'    => 'Darul Lughah, Al-Ghazali, Al-Bukhari, Al-Farisi, As-Syafi\'ie, dan EAL.',
            'Latee I Putri'  => 'Asrama Timur, Asrama Barat.',
            'Latee II Putri' => 'Gedung Khodijah, Gedung Fatimah.',
        ];

        $kompleks = $complexesDb->map(function ($c, $idx) use ($icons, $rayons) {
            $santriCount = $c->active_santris_count > 0 ? $c->active_santris_count : 1251;
            $desc = $c->description ?? '';
            if (str_contains(strtolower($c->complex_name), 'putra')) {
                $desc .= " Saat ini dihuni oleh lebih dari <strong>{$santriCount} santri</strong> dari berbagai daerah di Indonesia.";
            }

            return [
                'name'        => $c->complex_name,
                'pengasuh'    => $c->priest?->full_name ?? '-',
                'description' => $desc,
                'rayon'       => $rayons[$c->complex_name] ?? null,
                'icon'        => $icons[$idx % count($icons)],
                'room_count'  => $c->rooms->count(),
            ];
        })->toArray();

        // Fallback jika database belum ada isinya
        if (empty($kompleks)) {
            $kompleks = [
                [
                    'name'        => 'Latee Putra',
                    'pengasuh'    => "KH. Abd. A'la",
                    'description' => 'Kompleks putra dengan sistem kepengasuhan kolektif. Saat ini dihuni oleh lebih dari <strong>1.251 santri</strong> dari berbagai daerah di Indonesia.',
                    'rayon'       => 'Darul Lughah, Al-Ghazali, Al-Bukhari, Al-Farisi, As-Syafi\'ie, dan EAL.',
                    'icon'        => 'home',
                ],
                [
                    'name'        => 'Latee I Putri',
                    'pengasuh'    => 'KH. A. Basith AS',
                    'description' => 'Kompleks putri yang diasuh oleh KH. A. Basith AS, dibantu oleh putra-putri dan menantu beliau. Menyelenggarakan berbagai program pendidikan dan amaliah khusus santri putri.',
                    'rayon'       => null,
                    'icon'        => 'users',
                ],
                [
                    'name'        => 'Latee II Putri',
                    'pengasuh'    => 'Nyai Umamah Makkiyah',
                    'description' => 'Kompleks putri yang diasuh oleh Nyai Umamah Makkiyah. Memiliki fokus khas pada Pembinaan Akhlak dan Busana Islami (PABI) serta keterampilan santri putri.',
                    'rayon'       => null,
                    'icon'        => 'sparkles',
                ],
            ];
        }

        $totalSantri   = Santri::active()->count();
        $totalKompleks = Complex::active()->count();
        $stats = [
            ['value' => '1923', 'label' => 'Tahun Berdiri'],
            ['value' => (string) ($totalKompleks > 0 ? $totalKompleks : 3), 'label' => 'Kompleks'],
            ['value' => ($totalSantri > 0 ? number_format($totalSantri, 0, ',', '.') : '1.251') . '+', 'label' => 'Santri Aktif'],
        ];

        return view('profile', compact('hero', 'sejarah', 'visiMisi', 'kompleks', 'stats'));
    }
}
