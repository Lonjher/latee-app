<x-layouts::guest title="Infrastruktur Latee I Putri">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-teal-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Infrastruktur — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sarana &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Prasarana Pesantren</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Berbagai bangunan dan fasilitas yang menunjang kegiatan pendidikan, peribadatan, dan kehidupan santri di Latee I Putri.</p>
                </div>
            </div>
        </section>

        <!-- Mushalla & Gedung Utama -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="fasilitas-utama">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Fasilitas Utama</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Mushalla & Gedung</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" alt="Gedung Pesantren Latee I" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Mushalla Az-Zahra' dan gedung-gedung yang menunjang aktivitas santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Mushalla Az-Zahra'</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Tempat multifungsi: shalat, mengaji, belajar, diskusi, dan musyawarah. Terletak di lantai dua, berdempetan dengan kamar santri, di utara blok al-Jamal, selatan blok EEC, dan di atas blok al-Hidayah.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Didirikan tahun <strong class="text-slate-900 dark:text-white">1992</strong>, diresmikan tahun <strong class="text-slate-900 dark:text-white">2000</strong> bertepatan satu abad Annuqayah. Luas 105,3 m², daya tampung <strong class="text-slate-900 dark:text-white">±250 jamaah</strong>. Belum pernah direnovasi. Piket harian pagi dan sore oleh Div. Kebersihan.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Gedung Diniyah</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Diresmikan tahun <strong class="text-slate-900 dark:text-white">2016</strong> sebagai pusat kegiatan belajar mengajar santri PPA Latee 1 dan Aula berbagai aktivitas. Terdiri dari dua lantai dengan 6 ruang.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Lantai satu: 3 ruang (2 untuk belajar, 1 untuk bermukim santri putra/bhindara abdi dhalem). Lantai dua: 3 ruang yang dijadikan satu ruang memanjang berupa Aula.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mt-6 md:mt-8">
                    @foreach ([
                        ['Kantor Pesantren', 'Pusat administrasi PPA Latee 1. Terletak di tengah antara kantor MADAL 1 dan ruang operasional, berukuran relatif kecil.'],
                        ['Kantor MADAL 1', 'Pusat administrasi belajar mengajar diniyah. Terletak persis di sebelah barat kantor Pesantren, berukuran relatif kecil.'],
                        ['Ruang Perpustakaan', 'Berpindah-pindah mengikuti renovasi. Lokasi saat ini di lantai dasar, sebelah timur gedung koperasi, bersebelahan dengan gerbang utama. Dilengkapi 1 unit komputer.'],
                        ['Ruang Komunitas Santri', 'Untuk kegiatan KPL, Komunitas Design & Dekorasi, dan Komunitas Daur Ulang Sampah. Terletak di sebelah barat Gedung Andalas KUC.'],
                        ['Ruang Multifungsi', 'Berukuran 3×4, digunakan untuk rapat panitia, rapat pengurus harian, rapat KAMTIB, dan sekretariat penerimaan santri baru. Sejak Februari 2020 juga untuk fotocopy santri.'],
                        ['Mushalla Kotak', 'Ruangan kecil 3×3 m di selatan gerbang, terkadang untuk kunjungan santri dan menerima tamu oleh pengasuh.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Kamar Santri -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="kamar">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kamar Santri</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">38 Kamar di Berbagai Blok</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['Blok Izzaty', 'Bangunan timur 3 lantai, 9 kamar kapasitas 10–11 santri. Sejak 2019 khusus santri baru (awalnya di Blok An-Nur).'],
                        ['Blok Al-Qamary', '2 lantai. Atas: Al-Qamary 01 (11–12 santri) berdempetan dengan kamar Cafe Latte 52. Bawah: Al-Qamary 02 (5–6 santri) berdempetan dengan Gedung Koperasi.'],
                        ['Blok An-Nur', 'Bagian utara, 1 lantai, 5 kamar kapasitas 8–9 santri.'],
                        ['Blok Al-Hidayah', 'Di bawah bangunan Mushalla, 6 kamar kapasitas 7–8 santri. Bekas blok Izzaty, kemudian diganti Blok Billingual.'],
                        ['Blok Al-Jamal', 'Selatan Mushalla dan Al-Hidayah, 2 lantai, 8 kamar kapasitas 12–15 santri.'],
                        ['Blok NLA, EEC, MDQ, MDK, Cafe Latte 52', 'NLA: lantai 3, 3 kamar (11–12). EEC: lantai 2, 2 kamar (11–12). MDQ: lantai 1, kapasitas 7–8. MDK: lantai bawah, 7–8. Cafe Latte 52: 2 kamar (9–10).'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-5 md:p-6 border border-slate-100 dark:border-slate-800 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Fasilitas Nyaman untuk Belajar</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dengan infrastruktur yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri di Latee I Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
