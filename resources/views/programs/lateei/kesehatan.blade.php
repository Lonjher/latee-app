<x-layouts::guest title="Kesehatan & Lingkungan Hidup Latee I Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Kesehatan & Lingkungan — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Pelayanan kesehatan santri dan penanaman pola hidup sehat, serta pembentukan Divisi Kebersihan dan Keindahan untuk lingkungan yang asri.</p>
                </div>
            </div>
        </section>

        <!-- Kesehatan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kesehatan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pelayanan & Pola Hidup Sehat</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Kesehatan Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Divisi Kesehatan bergerak di bidang pelayanan kesehatan santri dan penanaman pola hidup sehat.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['Pembuatan Jamu Tradisional', 'Dilakukan <strong class="text-slate-900 dark:text-white">3 kali dalam satu tahun</strong> oleh Div. Kesehatan. Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji agar lebih awet. Menyediakan jamu stamina, temu lawak, dan nona wangi.'],
                        ['Penanaman & Pemeliharaan TOGA', 'Tanaman obat-obatan seperti air mata ibu, cocor bebek, kunyit, pegagan, daun sirih biasa, dan sirih merah.'],
                        ['Obat Tradisional & Generik', 'Menyediakan obat herbal, tradisional, dan generik sesuai keluhan (sakit perut, kepala, gigi). Juga menyediakan P3K untuk luka sebelum dirujuk ke Ponkestren atau Puskesmas.'],
                        ['Penanganan Kebutuhan Air', 'Dilakukan setiap hari, khususnya pagi dan malam, untuk mengecek penggunaan air santri.'],
                        ['Senam Santri', 'Dilakukan setiap pagi, tidak diwajibkan melainkan anjuran bagi santri yang memiliki waktu senggang sebelum berangkat sekolah atau kuliah.'],
                        ['Penyuluhan Kesehatan', 'Dilaksanakan <strong class="text-slate-900 dark:text-white">satu kali selama satu periode</strong> dengan harapan santri dapat menerapkan pola hidup sehat dan mengembangkan wawasan kesehatan.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2">{{ $item[0] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{!! $item[1] !!}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal mt-6 md:mt-8 bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                    <h3 class="text-lg md:text-xl font-bold mb-3">Penanganan Santri Sakit</h3>
                    <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Penanganan pertama dengan obat herbal, tradisional, dan generik. Apabila berlanjut, santri dihimbau periksa ke Ponkestren untuk rawat inap atau rawat jalan. Santri diperbolehkan pulang apabila belum membaik atau setelah konfirmasi dari Ponkestren kepada pengurus Div. Kesehatan.</p>
                </div>
            </div>
        </section>

        <!-- Lingkungan Hidup -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="lingkungan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Lingkungan Hidup</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kebersihan & Keindahan</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    @foreach ([
                        ['Memilah Sampah Organik & Anorganik', 'Sosialisasi dan penyediaan tempat sampah untuk membiasakan santri meletakkan sampah sesuai tempatnya.'],
                        ['Menguras Kolam & Kamar Mandi', 'Dilakukan <strong class="text-slate-900 dark:text-white">setiap bulan</strong> dengan melibatkan seluruh pengurus pusat dan beberapa pengurus blok.'],
                        ['Kerja Bakti', 'Dilaksanakan hari <strong class="text-slate-900 dark:text-white">Jumat setelah mengaji kitab</strong>, membersihkan seluruh lingkungan termasuk dhalem, dikoordinir Div. Kebersihan.'],
                        ['Piket Harian', 'Pagi dan sore, berlaku bagi seluruh santri: menyapu halaman blok, dhalem pengasuh, membuang sampah, membersihkan kamar mandi dan kolam.'],
                        ['Lomba Kebersihan & Kerapian Kamar', 'Bentuk apresiasi bagi santri yang menjaga kebersihan kamar. Pengontrolan secara kondisional setiap hari.'],
                        ['KPL (Komunitas Peduli Lingkungan)', 'Dibentuk Januari 2020 di bawah Div. Kebersihan dan Keindahan. Kegiatan: memilah sampah, membersihkan jalanan umum Annuqayah Putri, memulung sampah di area PPA Latee 1.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-5 md:p-6 border border-slate-100 dark:border-slate-800 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{!! $item[1] !!}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal mt-6 md:mt-8 bg-amber-50 dark:bg-amber-900/20 border border-amber-100 dark:border-amber-800 rounded-3xl p-6">
                    <h4 class="text-xs md:text-sm font-bold text-amber-800 dark:text-amber-200 mb-2">Kebijakan Pengurangan Plastik</h4>
                    <p class="text-[11px] md:text-xs text-amber-700 dark:text-amber-300 leading-relaxed">Membatasi penggunaan plastik, memakai kotak nasi dan botol air, melarang pembalut sekali pakai, membawa tas sendiri ketika belanja, dan lain sebagainya untuk menciptakan lingkungan yang higienis.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Wujudkan Santri Sehat, Lingkungan Lestari</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah dengan kami dan rasakan lingkungan pesantren yang bersih, sehat, dan mendukung tumbuh kembang santri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
