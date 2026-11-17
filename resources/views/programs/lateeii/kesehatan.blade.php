<x-layouts::guest title="Kesehatan & Lingkungan Hidup Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Kesehatan & Lingkungan — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Langkah nyata meningkatkan kesadaran hidup sehat dan peka terhadap hal-hal yang membahayakan diri serta lingkungan sekitar.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Kesehatan -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Kesehatan Santri"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Senam santri dan pembuatan jamu tradisional menjadi program rutin Departemen Kesehatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kesehatan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kesehatan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Program Kesehatan</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['Senam Santri', 'Diadakan di depan musalla setiap Jumat setelah kerja bakti. Format digilir per blok, wajib bagi blok tertentu dan boleh bagi blok lain. Bertujuan menjaga kesehatan dan kebugaran tubuh.'],
                        ['Pembuatan Jamu Tradisional', 'Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji. Wajib dan bergiliran setiap blok, bahan mentah 1–2 kg setiap pembuatan. Dilaksanakan setiap Jumat pagi.'],
                        ['Penyuluhan Kesehatan', 'Kegiatan rutin tahunan dengan mengundang pembicara ahli sesuai tema. Topik: kesehatan reproduksi, kebersihan diri dan lingkungan, hingga kecantikan diri.'],
                        ['Kontrol Kebersihan Kuku', 'Setiap setengah bulan, lebih sering menjelang sekolah dan liburan. Santri dilarang memanjangkan kuku kecuali satu jari. Pewarnaan kuku (henna/kutek) tidak diperbolehkan kecuali untuk menikah.'],
                        ['Penanaman TOGA', 'Tanaman Obat Keluarga untuk memenuhi dan memudahkan santri mendapatkan obat herbal siap saji seperti kunyit, daun beluntas, dan cocor bebek.'],
                        ['Obat Tradisional & Generik', 'Menyediakan obat herbal, tradisional, dan generik untuk penanganan pertama sebelum dirujuk ke ponkestren atau puskesmas. Jenis obat disesuaikan keluhan umum. Tersedia kotak P3K untuk luka.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2">{{ $item[0] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
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
