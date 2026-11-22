<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Room;
use App\Models\Santri;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function index(): View
    {
        $complexesDb = Complex::with(['rooms' => fn($q) => $q->available()])
            ->withCount(['santris as active_count' => fn($q) => $q->where('status', Santri::STATUS_ACTIVE)])
            ->active()
            ->get();

        $totalKamarTersedia = Room::available()->count();
        $totalSantri        = Santri::active()->count();

        $hero = [
            'badge' => 'Penerimaan Santri Baru 2026',
            'title_prefix' => 'Bergabunglah',
            'title_highlight' => 'Bersama Kami',
            'description' => 'Informasi lengkap prosedur pendaftaran, persyaratan, dan rincian keuangan santri baru Pondok Pesantren Annuqayah Latee tahun ajaran 2026/2027.',
        ];

        $heroImage = [
            'src' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200&auto=format&fit=crop',
            'alt' => 'Pendaftaran Santri Baru',
            'caption' => 'Proses pendaftaran santri baru di Sekretariat Penerimaan Santri Baru Annuqayah Latee.',
        ];

        $tabs = [
            'putra' => [
                'name' => 'Latee Putra',
                'prosedur' => [
                    'Mengisi formulir pendaftaran di Sekretariat Penerimaan Santri Baru 2026.',
                    'Menyerahkan berkas pendaftaran dengan menyertakan persyaratan berupa: Fotokopi Kartu Keluarga (KK) 1 lembar; serta paspor/Kitas bagi WNA.',
                    'Mengisi Surat Perjanjian sebagai bukti sanggup menaati semua peraturan Pondok Pesantren Annuqayah Latee.',
                    'Membayar keuangan santri kepada Bendahara.',
                    'Menyiapkan dua potong baju putih lengan panjang untuk salat jamaah (hadiran) dan Program Santri Baru.',
                    'Membawa songkok nasional dengan tinggi minimal 8 cm dan maksimal 10 cm.',
                    'Menempati kamar di Rayon Lokal Santri Baru (LSB).',
                    'Mengikuti kegiatan Bimbingan dan Pembinaan Santri Baru (Binasabar).',
                ],
                'catatan' => 'Pembayaran SPP Santri Baru bisa dilakukan dua tahap. Santri yatim dengan tingkat pendidikan MI s.d. MTs dibebaskan dari semua biaya administrasi pesantren.',
                'berkas' => [
                    'Fotokopi Kartu Keluarga (KK) 1 lembar',
                    'Fotokopi paspor atau Kitas (untuk WNA)',
                    'Pas foto ukuran 3x4 (3 lembar)',
                ],
                'keuangan' => [
                    ['item' => 'Pendaftaran', 'amount' => 'Rp20.000'],
                    ['item' => 'Pendidikan', 'amount' => 'Rp350.000'],
                    ['item' => 'Pembangunan', 'amount' => 'Rp200.000'],
                    ['item' => 'Air (Per 1 Tahun)', 'amount' => 'Rp30.000'],
                    ['item' => 'Layanan Kesehatan', 'amount' => 'Rp40.000'],
                    ['item' => 'Buku Saku', 'amount' => 'Rp20.000'],
                    ['item' => 'Kegiatan Temporal', 'amount' => 'Rp150.000'],
                ],
            ],
            'putri1' => [
                'name' => 'Latee I Putri',
                'prosedur' => [
                    'Sowan kepada Pengasuh Latee I Putri bersama orang tua/wali.',
                    'Mendaftarkan diri ke kantor pengurus Latee I Putri.',
                    'Mengisi dan menandatangani formulir pendaftaran serta surat pernyataan kesediaan menaati tata tertib pesantren.',
                    'Menyerahkan berkas kelengkapan administrasi.',
                    'Membayar biaya administrasi pendaftaran dan iuran awal ke bagian keuangan.',
                    'Mendapatkan nomor kamar dan lemari santriwati baru.',
                ],
                'catatan' => 'Santriwati wajib mengenakan busana muslimah yang sopan dan longgar serta jilbab yang menutup dada saat proses pendaftaran.',
                'berkas' => [
                    'Fotokopi Akta Kelahiran (2 lembar)',
                    'Fotokopi Kartu Keluarga (2 lembar)',
                    'Pas foto berjilbab putih background biru ukuran 3x4 (4 lembar)',
                    'Surat keterangan sehat dari dokter/puskesmas',
                ],
                'keuangan' => [
                    ['item' => 'Infaq Pendaftaran', 'amount' => 'Rp25.000'],
                    ['item' => 'Iuran Pondok (Semester 1)', 'amount' => 'Rp300.000'],
                    ['item' => 'Pengembangan Sarana', 'amount' => 'Rp250.000'],
                    ['item' => 'Kartu Tanda Santri (KTS)', 'amount' => 'Rp15.000'],
                    ['item' => 'Buku Panduan & Doa', 'amount' => 'Rp35.000'],
                ],
            ],
            'putri2' => [
                'name' => 'Latee II Putri',
                'prosedur' => [
                    'Menghadap Pengasuh Latee II Putri didampingi orang tua/wali santri.',
                    'Mengisi formulir pendaftaran di Sekretariat Latee II Putri.',
                    'Menyerahkan seluruh berkas persyaratan yang ditentukan.',
                    'Menandatangani komitmen Pembinaan Akhlak dan Busana Islami (PABI).',
                    'Menyelesaikan kewajiban pembayaran administrasi.',
                    'Mengikuti orientasi dan penempatan kamar santriwati.',
                ],
                'catatan' => 'Santriwati yang memiliki bakat di bidang tata busana atau kerajinan tangan dapat mendaftarkan diri pada program peminatan khusus setelah masa orientasi selesai.',
                'berkas' => [
                    'Fotokopi Ijazah / SKL terakhir legalisir (2 lembar)',
                    'Fotokopi Kartu Keluarga (2 lembar)',
                    'Fotokopi KTP kedua orang tua',
                    'Pas foto ukuran 3x4 (4 lembar)',
                ],
                'keuangan' => [
                    ['item' => 'Pendaftaran Santri Baru', 'amount' => 'Rp25.000'],
                    ['item' => 'Syahriyah Pondok', 'amount' => 'Rp280.000'],
                    ['item' => 'Dana Pembangunan & Fasilitas', 'amount' => 'Rp200.000'],
                    ['item' => 'Seragam Pesantren & Jilbab Khusus', 'amount' => 'Rp180.000'],
                    ['item' => 'Buku Tata Tertib & Amaliah', 'amount' => 'Rp30.000'],
                ],
            ],
        ];

        return view('pendaftaran', compact('hero', 'heroImage', 'tabs', 'complexesDb', 'totalKamarTersedia', 'totalSantri'));
    }
}
