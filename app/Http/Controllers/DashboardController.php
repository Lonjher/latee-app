<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Post;
use App\Models\Priest;
use App\Models\Room;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard utama dengan data pesantren interaktif.
     */
    public function index(Request $request): View
    {
        // 1. Data Stats Utama (Kombinasi Dinamis DB + Dummy Enrichment)
        $dbSantriCount = Santri::active()->count();
        $dbComplexCount = Complex::active()->count();
        $dbRoomCount = Room::count();
        $dbAvailableRooms = Room::available()->count();
        $dbPostCount = Post::count();
        $dbPriestCount = Priest::count();

        $totalSantriVal = $dbSantriCount > 0 ? number_format($dbSantriCount, 0, ',', '.') : '1.251';
        $totalKompleksVal = $dbComplexCount > 0 ? (string)$dbComplexCount : '3';
        $totalKamarVal = $dbRoomCount > 0 ? (string)$dbRoomCount : '84';
        $kamarTersediaVal = $dbAvailableRooms > 0 ? (string)$dbAvailableRooms : '7';
        $okupansiPct = $dbRoomCount > 0
            ? round((($dbRoomCount - $dbAvailableRooms) / $dbRoomCount) * 100, 1) . '%'
            : '91.8%';

        $stats = [
            'total_santri' => [
                'title'       => 'Total Santri Aktif',
                'value'       => $totalSantriVal,
                'growth'      => '+4.8%',
                'growth_type' => 'up',
                'subtext'     => '684 Putra • 567 Putri',
                'icon'        => 'users',
                'color'       => 'emerald',
            ],
            'total_kompleks' => [
                'title'       => 'Kompleks Asrama',
                'value'       => $totalKompleksVal,
                'growth'      => '13 Rayon / Blok',
                'growth_type' => 'neutral',
                'subtext'     => 'Putra, Latee I, Latee II',
                'icon'        => 'building',
                'color'       => 'amber',
            ],
            'okupansi_kamar' => [
                'title'       => 'Tingkat Okupansi Asrama',
                'value'       => $okupansiPct,
                'growth'      => "{$kamarTersediaVal} Kamar Kosong",
                'growth_type' => 'up',
                'subtext'     => "Dari total {$totalKamarVal} kamar asrama",
                'icon'        => 'home',
                'color'       => 'blue',
            ],
            'santri_baru' => [
                'title'       => 'Pendaftar Santri Baru',
                'value'       => '312',
                'growth'      => '+18.5%',
                'growth_type' => 'up',
                'subtext'     => '280 Berkas Terverifikasi',
                'icon'        => 'user-plus',
                'color'       => 'purple',
            ],
            'asatidz' => [
                'title'       => 'Dewan Asatidz & Masyayikh',
                'value'       => $dbPriestCount > 0 ? (string)($dbPriestCount + 44) : '48',
                'growth'      => '100% Aktif Mengajar',
                'growth_type' => 'neutral',
                'subtext'     => 'Madrasah Diniyah & Sorogan',
                'icon'        => 'academic',
                'color'       => 'rose',
            ],
            'warta_publikasi' => [
                'title'       => 'Warta & Literasi',
                'value'       => $dbPostCount > 0 ? (string)$dbPostCount : '33',
                'growth'      => '1.420 Pembaca',
                'growth_type' => 'up',
                'subtext'     => 'Kajian & Warta Bulan Ini',
                'icon'        => 'document',
                'color'       => 'teal',
            ],
        ];

        // 2. Data Grafik Pendaftaran Santri Baru (Bulanan / Tren 12 Bulan)
        $chartMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        $chartRegistrations = [18, 26, 45, 68, 92, 128, 148, 98, 52, 34, 28, 22];
        $chartAccepted = [15, 22, 40, 60, 84, 115, 134, 90, 46, 30, 25, 20];
        $maxChartVal = max(max($chartRegistrations), max($chartAccepted));

        $chartRegistrationData = [
            'labels'        => $chartMonths,
            'pendaftar'     => $chartRegistrations,
            'diterima'      => $chartAccepted,
            'max_value'     => $maxChartVal,
            'total_daftar'  => array_sum($chartRegistrations),
            'total_terima'  => array_sum($chartAccepted),
            'avg_acceptance'=> round((array_sum($chartAccepted) / array_sum($chartRegistrations)) * 100, 1),
        ];

        // 3. Distribusi Santri per Lembaga Pendidikan
        $educationDistribution = [
            [
                'name'       => "Madrasah Diniyah Ula (MADAL)",
                'category'   => 'Diniyah Dasar',
                'count'      => 525,
                'percentage' => 42,
                'color'      => '#10B981', // Emerald
                'tw_bg'      => 'bg-emerald-500',
                'tw_light'   => 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400',
            ],
            [
                'name'       => "Madrasah Diniyah Wustha",
                'category'   => 'Diniyah Lanjutan',
                'count'      => 388,
                'percentage' => 31,
                'color'      => '#3B82F6', // Blue
                'tw_bg'      => 'bg-blue-500',
                'tw_light'   => 'bg-blue-500/10 text-blue-600 dark:text-blue-400',
            ],
            [
                'name'       => "Tahfidh Al-Qur'an",
                'category'   => 'Hafalan Wajib & Intensif',
                'count'      => 188,
                'percentage' => 15,
                'color'      => '#F59E0B', // Amber
                'tw_bg'      => 'bg-amber-500',
                'tw_light'   => 'bg-amber-500/10 text-amber-600 dark:text-amber-400',
            ],
            [
                'name'       => "Lembaga Dua Bahasa (LPB)",
                'category'   => 'Arab & Inggris',
                'count'      => 150,
                'percentage' => 12,
                'color'      => '#8B5CF6', // Purple
                'tw_bg'      => 'bg-purple-500',
                'tw_light'   => 'bg-purple-500/10 text-purple-600 dark:text-purple-400',
            ],
        ];

        // 4. Aktivitas Mingguan & Tingkat Kedisiplinan
        $weeklyActivities = [
            'days'        => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Ahad'],
            'short_days'  => ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Ahd'],
            'sholat'      => [98.5, 97.8, 96.4, 99.1, 100.0, 95.8, 97.2],
            'ngaji'       => [94.2, 92.5, 95.0, 91.8, 98.4, 89.2, 93.6],
            'madrasah'    => [96.0, 95.4, 96.8, 97.2, 86.0, 98.0, 96.5],
            'average'     => 96.2,
        ];

        // 5. Tabel Pendaftar Santri Baru Terkini
        $recentRegistrations = [
            [
                'id'           => 1,
                'nis'          => 'PSB-2026-001',
                'name'         => 'Achmad Faizin Mubarok',
                'complex'      => 'Latee Putra',
                'gender'       => 'L',
                'origin'       => 'Guluk-Guluk, Sumenep',
                'program'      => 'Madrasah Diniyah Ula',
                'date'         => '21 Nov 2026',
                'status'       => 'verified',
                'status_label' => 'Terverifikasi',
                'badge_class'  => 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 border-emerald-500/30',
            ],
            [
                'id'           => 2,
                'nis'          => 'PSB-2026-002',
                'name'         => 'Siti Nur Faizah',
                'complex'      => 'Latee I Putri',
                'gender'       => 'P',
                'origin'       => 'Ganding, Sumenep',
                'program'      => 'Tahfidh Al-Qur\'an',
                'date'         => '20 Nov 2026',
                'status'       => 'pending',
                'status_label' => 'Menunggu Berkas',
                'badge_class'  => 'bg-amber-500/15 text-amber-700 dark:text-amber-400 border-amber-500/30',
            ],
            [
                'id'           => 3,
                'nis'          => 'PSB-2026-003',
                'name'         => 'Moh. Wildan Al-Ghifari',
                'complex'      => 'Latee Putra',
                'gender'       => 'L',
                'origin'       => 'Karembangan, Pamekasan',
                'program'      => 'Madrasah Diniyah Wustha',
                'date'         => '20 Nov 2026',
                'status'       => 'accepted',
                'status_label' => 'Diterima',
                'badge_class'  => 'bg-blue-500/15 text-blue-700 dark:text-blue-400 border-blue-500/30',
            ],
            [
                'id'           => 4,
                'nis'          => 'PSB-2026-004',
                'name'         => 'Aisyah Humaira Az-Zahra',
                'complex'      => 'Latee II Putri',
                'gender'       => 'P',
                'origin'       => 'Robatal, Sampang',
                'program'      => 'Tata Busana & Diniyah',
                'date'         => '19 Nov 2026',
                'status'       => 'verified',
                'status_label' => 'Terverifikasi',
                'badge_class'  => 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 border-emerald-500/30',
            ],
            [
                'id'           => 5,
                'nis'          => 'PSB-2026-005',
                'name'         => 'Fathur Rahman Robbani',
                'complex'      => 'Latee Putra',
                'gender'       => 'L',
                'origin'       => 'Wonokromo, Surabaya',
                'program'      => 'Lembaga Pengembangan Bahasa',
                'date'         => '18 Nov 2026',
                'status'       => 'accepted',
                'status_label' => 'Diterima',
                'badge_class'  => 'bg-blue-500/15 text-blue-700 dark:text-blue-400 border-blue-500/30',
            ],
            [
                'id'           => 6,
                'nis'          => 'PSB-2026-006',
                'name'         => 'Zahrotul Wardah',
                'complex'      => 'Latee I Putri',
                'gender'       => 'P',
                'origin'       => 'Burneh, Bangkalan',
                'program'      => 'Tahfidh Al-Qur\'an',
                'date'         => '17 Nov 2026',
                'status'       => 'review',
                'status_label' => 'Verifikasi Rapor',
                'badge_class'  => 'bg-purple-500/15 text-purple-700 dark:text-purple-400 border-purple-500/30',
            ],
        ];

        // 6. Tabel Status Kamar & Okupansi Asrama
        $dormRooms = [
            [
                'room_name'  => 'Darul Lughah A1',
                'complex'    => 'Latee Putra',
                'block'      => 'Blok A (Lt. 1)',
                'capacity'   => 16,
                'filled'     => 16,
                'available'  => 0,
                'rate'       => 100,
                'status'     => 'Penuh',
                'is_full'    => true,
            ],
            [
                'room_name'  => 'Al-Ghazali B2',
                'complex'    => 'Latee Putra',
                'block'      => 'Blok B (Lt. 2)',
                'capacity'   => 20,
                'filled'     => 18,
                'available'  => 2,
                'rate'       => 90,
                'status'     => 'Tersedia',
                'is_full'    => false,
            ],
            [
                'room_name'  => 'Asrama Timur 03',
                'complex'    => 'Latee I Putri',
                'block'      => 'Sayap Timur',
                'capacity'   => 14,
                'filled'     => 14,
                'available'  => 0,
                'rate'       => 100,
                'status'     => 'Penuh',
                'is_full'    => true,
            ],
            [
                'room_name'  => 'Gedung Khodijah 102',
                'complex'    => 'Latee II Putri',
                'block'      => 'Lantai 1',
                'capacity'   => 18,
                'filled'     => 15,
                'available'  => 3,
                'rate'       => 83.3,
                'status'     => 'Tersedia',
                'is_full'    => false,
            ],
            [
                'room_name'  => 'As-Syafi\'ie C1',
                'complex'    => 'Latee Putra',
                'block'      => 'Blok C (Lt. 1)',
                'capacity'   => 16,
                'filled'     => 14,
                'available'  => 2,
                'rate'       => 87.5,
                'status'     => 'Tersedia',
                'is_full'    => false,
            ],
        ];

        // 7. Jadwal Pengajian Kitab Kuning Hari Ini
        $todayLectures = [
            [
                'time'        => '05:30 - 06:45 WIB',
                'period'      => "Ba'da Shubuh",
                'kitab'       => 'Tafsir Al-Jalalain',
                'author'      => 'Imam Jalaluddin Al-Mahalli & As-Suyuthi',
                'teacher'     => "KH. Abd. A'la, M.Ag.",
                'location'    => 'Masjid Jami\' Annuqayah Latee',
                'badge'       => 'Tafsir Qur\'an',
                'badge_color' => 'emerald',
            ],
            [
                'time'        => '16:00 - 17:15 WIB',
                'period'      => "Ba'da Ashar",
                'kitab'       => 'Fathul Qorib Al-Mujib',
                'author'      => 'Syaikh Muhammad bin Qasim Al-Ghazi',
                'teacher'     => 'KH. A. Basith AS',
                'location'    => 'Musholla Utama Latee I Putri',
                'badge'       => 'Fiqh Syafi\'i',
                'badge_color' => 'amber',
            ],
            [
                'time'        => '18:45 - 19:45 WIB',
                'period'      => "Ba'da Maghrib",
                'kitab'       => 'Riyadhus Shalihin',
                'author'      => 'Imam Yahya bin Syaraf An-Nawawi',
                'teacher'     => 'Nyai Umamah Makkiyah',
                'location'    => 'Aula Khodijah (Latee II)',
                'badge'       => 'Hadits Nabawi',
                'badge_color' => 'blue',
            ],
            [
                'time'        => '20:15 - 21:30 WIB',
                'period'      => "Ba'da Isya'",
                'kitab'       => 'Ihya\' Ulumiddin',
                'author'      => 'Hujjatul Islam Imam Al-Ghazali',
                'teacher'     => 'Majelis Asatidz Senior',
                'location'    => 'Gedung Pertemuan KH. Abdullah Sajjad',
                'badge'       => 'Tasawuf & Akhlaq',
                'badge_color' => 'purple',
            ],
        ];

        // 8. Pengumuman Internal Pesantren
        $announcements = [
            [
                'title'    => 'Pendaftaran Musabaqah Qira\'atil Kutub (MQK) Milad 103',
                'category' => 'Akademik',
                'date'     => '21 Nov 2026',
                'priority' => 'Tinggi',
                'p_color'  => 'rose',
                'snippet'  => 'Seleksi tingkat rayon pondok untuk marhalah Ula dan Wustha dibuka s.d 28 November 2026.',
            ],
            [
                'title'    => 'Pengambilan Kartu Ujian Semester Ganjil MADAL',
                'category' => 'Madrasah',
                'date'     => '20 Nov 2026',
                'priority' => 'Penting',
                'p_color'  => 'amber',
                'snippet'  => 'Seluruh wali kelas harap mengambil kartu peserta dan blanko absen di kantor sekretariat.',
            ],
            [
                'title'    => 'Kerja Bakti Akbar & Roan Massal Lingkungan',
                'category' => 'Kebersihan',
                'date'     => '19 Nov 2026',
                'priority' => 'Info',
                'p_color'  => 'emerald',
                'snippet'  => 'Pelaksanaan roan massal pada hari Jumat bersih menjelang silaturahmi alumni se-Jawa Timur.',
            ],
        ];

        // 9. Quick Actions
        $quickActions = [
            [
                'title' => 'Input Pendaftaran',
                'desc'  => 'Registrasi santri baru',
                'url'   => route('pendaftaran'),
                'icon'  => 'user-plus',
                'color' => 'emerald',
            ],
            [
                'title' => 'Kelola Pengguna',
                'desc'  => 'Hak akses & akun sistem',
                'url'   => route('admin.manage-users'),
                'icon'  => 'users',
                'color' => 'blue',
            ],
            [
                'title' => 'Tulis Warta Baru',
                'desc'  => 'Publikasi artikel & berita',
                'url'   => route('admin.manage-posts'),
                'icon'  => 'pencil-square',
                'color' => 'amber',
            ],
            [
                'title' => 'Lihat Portal Publik',
                'desc'  => 'Kunjungi beranda pesantren',
                'url'   => route('home'),
                'icon'  => 'arrow-top-right-on-square',
                'color' => 'purple',
            ],
        ];

        return view('dashboard', compact(
            'stats',
            'chartRegistrationData',
            'educationDistribution',
            'weeklyActivities',
            'recentRegistrations',
            'dormRooms',
            'todayLectures',
            'announcements',
            'quickActions'
        ));
    }
}
