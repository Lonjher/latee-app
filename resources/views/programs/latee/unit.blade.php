<x-layouts::guest title="Program Unit Usaha">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Unit Usaha</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Kemandirian Ekonomi<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Jiwa Kewirausahaan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Unit-unit usaha yang dikelola sepenuhnya oleh santri aktif sebagai ikhtiar kemandirian finansial pesantren, sekaligus laboratorium praktik kewirausahaan yang berlandaskan prinsip syariah.</p>
                </div>
            </div>
        </section>

        <!-- Filosofi -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300" id="filosofi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-12 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8 items-center">
                        <div>
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">Lebih dari Sekadar Berdagang</h2>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed mb-4">Unit usaha di Annuqayah Latee bukan sekadar sumber pemasukan. Ia adalah ruang belajar bagi santri untuk mengembangkan keterampilan manajerial, keuangan, dan pelayanan, sambil menerapkan nilai-nilai Islam seperti <em>amanah</em> (dapat dipercaya) dan <em>'adl</em> (keadilan).</p>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Seluruh operasional—dari manajer hingga karyawan—dijalankan oleh santri aktif, menjadikan setiap unit sebagai praktik nyata pendidikan kewirausahaan.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                                <span class="block text-xl md:text-2xl font-black">5</span>
                                <span class="text-[11px] md:text-xs text-brand-100">Unit Usaha</span>
                            </div>
                            <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                                <span class="block text-xl md:text-2xl font-black">100%</span>
                                <span class="text-[11px] md:text-xs text-brand-100">Dikelola Santri</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Daftar Unit Usaha -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="daftar-unit">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Unit Usaha</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">A Latee Business Units</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Lima unit usaha yang melayani kebutuhan santri dan masyarakat sekitar pesantren.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Unit Usaha Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Unit usaha dikelola sepenuhnya oleh santri aktif sebagai laboratorium kewirausahaan syariah.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <!-- A Latee Store -->
                    <div class="reveal-left delay-100 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">A Latee Store</h3>
                                <p class="text-[10px] md:text-[11px] font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide">Perdagangan Ritel</p>
                            </div>
                            <span class="bg-brand-50 dark:bg-brand-900/30 text-brand-700 dark:text-brand-300 text-[9px] md:text-[10px] font-bold px-3 py-1 rounded-full border border-brand-100 dark:border-brand-800">Main Player</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Menyediakan segala jenis barang kebutuhan santri, mulai dari peralatan MCK, aneka snack, alat tulis, hingga buku-buku bacaan. Terletak di sebelah barat halaman utama pesantren, persis di utara rayon Al-Ghazali. Dikelola oleh seorang manajer dan seorang karyawan, keduanya santri aktif.</p>
                        <div class="flex items-center gap-2 text-[11px] md:text-xs text-slate-500 dark:text-slate-400 bg-slate-50 dark:bg-slate-800/60 p-3 rounded-xl border border-slate-100 dark:border-slate-700">
                            <svg class="w-4 h-4 text-brand-500 dark:text-brand-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Posisi strategis di tengah pesantren, mudah dijangkau dari seluruh rayon.</span>
                        </div>
                    </div>

                    <!-- A Latee Canteen -->
                    <div class="reveal-right delay-200 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">A Latee Canteen</h3>
                                <p class="text-[10px] md:text-[11px] font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide">Konsumsi & Kuliner</p>
                            </div>
                            <span class="bg-amber-50 dark:bg-amber-900/20 text-amber-700 dark:text-amber-300 text-[9px] md:text-[10px] font-bold px-3 py-1 rounded-full border border-amber-100 dark:border-amber-800">Tertua</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Bangunan sederhana namun bersejarah—merupakan unit usaha tertua di antara yang lain, hanya mengalami pemugaran tanpa mengubah bentuk asli. Menyediakan snack, softdrink, hingga aneka sarapan seperti nasi bungkus. Ditenagai seorang manajer dan seorang karyawan, seluruhnya santri aktif. Terletak di barat A Latee Store, selatan gedung diniyah bagian barat.</p>
                    </div>

                    <!-- A Latee Warna -->
                    <div class="reveal-left delay-300 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">A Latee Warna</h3>
                                <p class="text-[10px] md:text-[11px] font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide">Warung Nasi</p>
                            </div>
                        </div>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan atas dasar keluhan santri akibat jauh dan lamanya waktu mengantre hanya untuk membeli nasi. Kini menyediakan kebutuhan makan santri, dari nasi pecel hingga lalapan ayam. Ditenagai satu manajer dan empat pramusaji, semuanya santri aktif. Terletak di utara dapur umum, merupakan bagian belakang dari A Latee Canteen.</p>
                    </div>

                    <!-- A Latee Printing -->
                    <div class="reveal-right delay-400 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">A Latee Printing</h3>
                                <p class="text-[10px] md:text-[11px] font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide">Percetakan & Kreatif</p>
                            </div>
                        </div>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Melayani segala kebutuhan percetakan: cetak banner, print offset, sablon, hingga cinderamata seperti piala dan gantungan kunci. Dipimpin seorang manajer dan lima karyawan, seluruhnya santri aktif. Terletak di sebelah timur halaman utama pesantren, diapit bangunan rayon As-Syafi'ie.</p>
                    </div>

                    <!-- A Latee Dotcom -->
                    <div class="reveal-left delay-500 lg:col-span-2 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">A Latee Dotcom</h3>
                                <p class="text-[10px] md:text-[11px] font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide">Jasa Digital</p>
                            </div>
                            <span class="bg-sky-50 dark:bg-sky-900/20 text-sky-700 dark:text-sky-300 text-[9px] md:text-[10px] font-bold px-3 py-1 rounded-full border border-sky-100 dark:border-sky-800">Termuda</span>
                        </div>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Unit usaha termuda yang bergerak di bidang penawaran jasa. Didirikan atas dasar kebutuhan santri—terutama yang berstatus mahasiswa—akan jasa pengetikan, internet, serta kebutuhan lain yang berkaitan dengan komputer. Ditenagai seorang manajer dan seorang operator, dengan total 5 komputer (1 untuk operator, 4 untuk client). Terletak persis di sebelah barat kantor pesantren.</p>
                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="bg-slate-50 dark:bg-slate-800/60 rounded-xl p-3 text-center border border-slate-100 dark:border-slate-700">
                                <span class="block text-sm font-bold text-slate-800 dark:text-slate-200">5</span>
                                <span class="text-[10px] text-slate-500 dark:text-slate-400">Unit Komputer</span>
                            </div>
                            <div class="bg-slate-50 dark:bg-slate-800/60 rounded-xl p-3 text-center border border-slate-100 dark:border-slate-700">
                                <span class="block text-sm font-bold text-slate-800 dark:text-slate-200">2</span>
                                <span class="text-[10px] text-slate-500 dark:text-slate-400">Personel</span>
                            </div>
                            <div class="bg-slate-50 dark:bg-slate-800/60 rounded-xl p-3 text-center border border-slate-100 dark:border-slate-700">
                                <span class="block text-sm font-bold text-slate-800 dark:text-slate-200">Jasa</span>
                                <span class="text-[10px] text-slate-500 dark:text-slate-400">Pengetikan & Internet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Belajar Berwirausaha Sejak Dini</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Jadilah bagian dari ekosistem kewirausahaan pesantren yang melahirkan generasi mandiri, amanah, dan profesional.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
