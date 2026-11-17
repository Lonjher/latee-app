<x-layouts::guest title="Infrastruktur Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Infrastruktur — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sarana &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Prasarana Pesantren</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Musalla multifungsi, kantor pesantren, dan kantor MADAL II yang menunjang kegiatan santri.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Infrastruktur -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200&auto=format&fit=crop"
                        alt="Gedung Pesantren Latee II"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Musalla multifungsi dan gedung-gedung yang menunjang aktivitas santri Latee II Putri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Musalla -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="musalla">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Musalla</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pusat Aktivitas Multifungsi</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Hampir seluruh aktivitas, baik program pesantren maupun 6 lembaga, dilaksanakan di musalla PPA Latee II. Musalla multifungsi: tempat ubudiyah, halaqah ilmiyah, dan seluruh kegiatan yang membutuhkan ruangan menampung ±300 orang.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Acara seperti pentas seni 6 lembaga, muhadlarah siswa dan mahasiswa, lomba HIMADAL II, nonton bersama, munaqasyah, rapat evaluasi, dan sebagainya.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Keterbatasan utama: tidak mampu menampung seluruh santri saat acara besar (Maulid Nabi, Haflah Nishfu Sanah, dll). Alternatifnya memakai Halaman MA Putri.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Letak Geografis & Pengelolaan</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Musalla tepat berada di tengah bangunan kamar santri: utara blok al-Faradis, barat blok al-Qudusy dan al-Mahfudzy, timur kamar mandi tamu.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Blok lantai dasar mudah menjangkau musalla; blok lantai dua/tiga kesulitan saat aktivitas harian (sering tidak dapat tempat karena penuh). Pengurus Peribadatan membagi giliran tiap blok untuk berjamaah di musalla, sementara yang lain di 6 lembaga.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kebersihan musalla menjadi tugas seluruh santri: dipiketi oleh 5 santri dari tiap kamar, dikoordinir pengurus Kebersihan PPA Latee II.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kantor -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="kantor">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kantor</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kantor Pesantren & MADAL II</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Kantor Pesantren</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Pusat seluruh administrasi pesantren, rental komputer, dan posko pengunjung. Terletak di bagian paling utara batas PPA Latee II, utara blok al-Qamary, tepat di belakang dhalem Pengasuh.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Dua ruang dipisah dinding triplek, ukurannya relatif kecil untuk setidaknya tiga aktivitas sekaligus. Satu ruang lebih kecil khusus penyimpanan berkas, data, dan keperluan kepengurusan.</p>
                    </div>
                    <div class="reveal delay-200 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Kantor MADAL II</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Sebagai lembaga pendidikan independen, madrasah diniyah memerlukan kantor sebagai pusat administrasi dan penyimpanan data. Terletak di lantai dasar depan serambi musalla, tepat di bawah tangga menuju lantai dua.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Strategis karena di depannya menjadi jalan lalu-lalang santri, dekat dengan kamar-kamar santri di lantai dasar sekitar area musalla. Memiliki dua ruang saling berhadapan dan satu serambi dengan serambi depan musalla.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Fasilitas Nyaman untuk Belajar</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dengan infrastruktur yang memadai, santri dapat fokus menuntut ilmu dan mengembangkan diri di Latee II Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
