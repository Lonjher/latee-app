<x-layouts::guest title="Program Infrastruktur">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Infrastruktur</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sarana Prasarana<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Pendukung Pendidikan</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Pembangunan dan pemeliharaan infrastruktur pesantren untuk menciptakan lingkungan belajar yang nyaman, aman, dan kondusif bagi seluruh santri.</p>
                </div>
            </div>
        </section>

        <!-- Gambaran Umum -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="gambaran-umum">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Gambaran Umum</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Perkembangan Infrastruktur</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-3xl">Sejak didirikan pada tahun 1923, Pondok Pesantren Annuqayah Latee terus berbenah. Dari areal tanah seluas 2,5 hektare pada tahun 1978, kini pesantren telah berkembang pesat dengan berbagai fasilitas fisik yang menunjang kegiatan pendidikan dan peribadatan santri.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop" alt="Gedung dan Fasilitas Pesantren" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Pembangunan dan pemeliharaan infrastruktur untuk kenyamanan belajar santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-2xl md:text-3xl font-black text-brand-600 dark:text-brand-400">14 Ha</span>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-1">Luas Areal Pesantren</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-2xl md:text-3xl font-black text-brand-600 dark:text-brand-400">525</span>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-1">Asrama Santri</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-2xl md:text-3xl font-black text-brand-600 dark:text-brand-400">100</span>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-1">Ruang Kelas</p>
                    </div>
                    <div class="reveal delay-400 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6 text-center hover:shadow-lg transition-all duration-300">
                        <span class="text-2xl md:text-3xl font-black text-brand-600 dark:text-brand-400">9</span>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-1">Mushalla</p>
                    </div>
                </div>
                <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-4 text-center">*Data berdasarkan sumber pustaka dan dokumen pesantren.</p>
            </div>
        </section>

        <!-- Fasilitas Utama -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="fasilitas">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Fasilitas</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Sarana & Prasarana</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Berbagai fasilitas yang tersedia untuk mendukung aktivitas belajar, ibadah, dan kehidupan sehari-hari santri.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ([
                        ['title' => 'Asrama Santri', 'desc' => 'Terdapat 525 asrama santri yang tersebar di berbagai rayon, menyediakan tempat tinggal yang nyaman dan mendukung pembinaan karakter serta kemandirian santri.'],
                        ['title' => 'Ruang Kelas & Madrasah Diniyah', 'desc' => 'Tersedia 100 ruang kelas untuk kegiatan belajar mengajar formal dan diniyah. Madrasah Diniyah Annuqayah Latee (MADAL) memiliki ruang khusus, termasuk gedung dua lantai untuk menampung kegiatan pembelajaran kitab kuning.'],
                        ['title' => 'Masjid & Mushalla', 'desc' => 'Terdapat dua masjid jamik dan sembilan mushalla yang menjadi pusat kegiatan ubudiyah, salat berjamaah, dan berbagai aktivitas keagamaan santri.'],
                        ['title' => 'Perpustakaan', 'desc' => 'Perpustakaan pesantren menyediakan berbagai koleksi kitab kuning, buku umum, dan media publikasi yang dikelola oleh divisi terkait, mendukung literasi dan riset santri.'],
                        ['title' => 'Balai Kesehatan', 'desc' => 'Satu unit balai kesehatan (poskestren) yang memberikan layanan kesehatan dasar, penanganan pertama, hingga rujukan bagi santri yang membutuhkan perawatan lebih lanjut.'],
                        ['title' => 'Kantor & Administrasi', 'desc' => 'Tersedia ruang kantor untuk pengelolaan pesantren, madrasah, dan berbagai divisi, termasuk ruang tamu, dapur, dan gudang untuk mendukung operasional harian.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $item['title'] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Rencana Pengembangan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="pengembangan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Pengembangan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Arah Pembangunan ke Depan</h2>
                </div>

                <div class="reveal grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                        <h3 class="text-lg md:text-xl font-bold mb-3">Peningkatan Kualitas Fasilitas</h3>
                        <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Pesantren terus berupaya meningkatkan kualitas infrastruktur, termasuk pembangunan gedung madrasah diniyah dua lantai dan perluasan masjid, sebagaimana yang telah dilakukan melalui dukungan para alumni.</p>
                    </div>
                    <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Dukungan Pemerintah & Mitra</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Berbagai bantuan dari pemerintah dan mitra terus mengalir untuk pengembangan sarana pendidikan dan pelayanan santri, seperti bantuan pendidikan senilai Rp100 juta dari Kementerian Agama RI. Sinergi ini menjadi bukti komitmen bersama dalam memajukan pendidikan pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Infrastruktur Nyaman untuk Belajar</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dengan fasilitas yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri. Bergabunglah bersama kami.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
