<x-layouts::guest title="Publikasi & Perpustakaan Latee I Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Publikasi & Perpustakaan — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Literasi &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Media Publikasi</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Divisi Informasi dan Publikasi mengurus Perpustakaan Latee 1 serta mengembangkan wawasan, potensi, kreativitas, minat baca, dan literasi santri.</p>
                </div>
            </div>
        </section>

        <!-- Div. Info-Pub -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="info-pub">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Div. Info-Pub</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Publikasi Umum</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Literasi dan Publikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Divisi Informasi dan Publikasi mengelola perpustakaan dan media publikasi santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Mading Blok</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kegiatan mingguan bergilir oleh semua blok sesuai jadwal Div. Info-Pub, dilaksanakan satu kali selama periode dan dilombakan. Tema bebas untuk mengukur kreasi dan wawasan santri. Rubrik wajib: artikel, opini, sal-red, berita, resensi, cerpen, dan puisi.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Majalah MADINA</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Majalah Madrasah Diniyah Annuqayah Latee 1 yang digagas oleh pengasuh K.H. Abd. Basith Abdullah Sajjad, BA. Ditulis oleh tenaga pengajar Madal 1 serta siswa dan partisipan.</p>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400">Rubrik: Sal-Red, Fokus Utama, Opini, Kata Mereka, Keannuqayahan, Kajian Keislaman, Renungan, Pesan Kiai, Sambutan Pengasuh, Seni & Sastra, Resensi, Kata Alumni, Album Latee 1, Kosa-Kata Bahasa Madura Halus.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mt-6 md:mt-8">
                    @foreach ([
                        ['Cafe Latte 52 — Mading Karya', 'Diterbitkan setiap dua minggu, berisi karya sajak, cerpen, prosa, dan puisi member secara bergantian.'],
                        ['Cafe Latte 52 — Buletin Latte 52', 'Awalnya selebaran karya member. Sejak 2016 bertransformasi menjadi buletin sastra berisi cerpen, puisi, esai sastra, dan komentar cerpen.'],
                        ['NLA — Mading Al-Laihah', 'Diterbitkan setiap minggu secara bergantian setiap kamar di NLA. Rubrik bebas ditentukan kamar masing-masing.'],
                        ['EEC — Mading', 'Diupdate setiap minggu dengan rubrik sal-red, opini, puisi, humor, cerpen, artikel, translite, album kegiatan.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Perpustakaan -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="perpustakaan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Perpustakaan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Gerakan Literasi Santri</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    @foreach ([
                        ['Gerakan Ayo Membaca', 'Diadakan setiap dua minggu dengan model berbeda: pertanyaan terbuka tentang isu surat kabar, permintaan pendapat buku yang ingin dibaca, dan penentuan santri paling sering berkunjung ke perpustakaan untuk mendapat penghargaan.'],
                        ['Diskusi Internal', 'Kegiatan mingguan khusus pengurus perpustakaan dengan mengundang santri senior untuk membahas isu surat kabar atau topik pesantren yang menarik.'],
                        ['Tukar Pijam Buku', 'Tukar pinjam buku dengan Perpustakaan Daerah atau perpustakaan pesantren lain untuk penyegaran bahan bacaan santri.'],
                        ['Lomba Menulis', 'Dilaksanakan sekali dalam satu periode untuk menambah wawasan dan mengembangkan bakat menulis santri, baik untuk santri Latee 1 maupun santri luar.'],
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
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Jadilah Bagian dari Tradisi Literasi</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kembangkan kemampuan menulismu dan berkontribusi dalam media publikasi Latee I Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
