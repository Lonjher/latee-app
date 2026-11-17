<x-layouts::guest title="Publikasi Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Publikasi — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Media &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Karya Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Berbagai media publikasi dari pengurus pesantren, 6 lembaga, perpustakaan, dan blok di Latee II Putri.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Publikasi -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Publikasi Santri"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Media publikasi santri Latee II Putri, dari selebaran hingga majalah.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Umum -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="umum">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Umum</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Publikasi Umum</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">I News</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Media publikasi selebaran yang ditempel dan ditangani pengurus Publikasi Latee II. Berisi berita, kabar, dan informasi teranyar di Latee II. Terbit setiap ada momen atau even tertentu (kondisional).</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Info Kesehatan</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Selebaran informasi seputar kesehatan: makanan sehat, penyakit yang harus dihindari, dan semacamnya. Terbit setiap minggu.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lembaga -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="lembaga">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Lembaga</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Publikasi Lembaga</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-brand-700 dark:text-brand-300 mb-4">FLP</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p><strong class="text-slate-900 dark:text-white">Majalah Iltizam:</strong> Majalah unggulan PPA Latee II, ditangani FLP sebagai komunitas menulis. Tema remaja dan ringan, bahasa mudah. Terbit setiap awal periode, dipasarkan di Annuqayah dan luar Annuqayah.</p>
                            <p><strong class="text-slate-900 dark:text-white">Buletin Variez:</strong> Memuat tema lebih serius seperti isu kontemporer. Didistribusikan di komplek Annuqayah dan luar Annuqayah. Terbit satu kali dalam satu periode.</p>
                            <p><strong class="text-slate-900 dark:text-white">Radar FLP:</strong> Selebaran berisi karya terbaik anggota FLP (cerpen, puisi, resensi, opini). Terbit setiap minggu.</p>
                        </div>
                    </div>
                    <div class="reveal delay-200 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-brand-700 dark:text-brand-300 mb-4">JQK</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p><strong class="text-slate-900 dark:text-white">Mukalamah:</strong> Media tanya-jawab permasalahan fikih. Menyebar kotak pertanyaan, dicarikan ibarah dalam kitab turats, didesain dan ditempel. Terbit dua kali seminggu.</p>
                            <p><strong class="text-slate-900 dark:text-white">Buku Saku Hasil Bahtsul Masa'il:</strong> Buku kecil berisi jawaban persoalan fikih dari bahtsul masa'il JQK. Terbit satu kali dalam satu periode.</p>
                        </div>
                    </div>
                    <div class="reveal delay-300 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-brand-700 dark:text-brand-300 mb-4">AEC</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p><strong class="text-slate-900 dark:text-white">Heirloom:</strong> Leaflet/selebaran berbentuk buletin yang disebar ke seluruh komplek Annuqayah. Berisi karya terbaik anggota AEC dan karya luar yang lulus seleksi. Terbit setiap minggu.</p>
                            <p><strong class="text-slate-900 dark:text-white">The Best Opus:</strong> Karya terbaik anggota AEC (poem, short story, book review) yang di-lay out, disebarkan, dan ditempel di lingkungan PPA Latee II.</p>
                        </div>
                    </div>
                    <div class="reveal delay-400 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-brand-700 dark:text-brand-300 mb-4">RLA</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p><strong class="text-slate-900 dark:text-white">Ra'id:</strong> Buletin yang diedar ke seluruh komplek Annuqayah setiap bulan. Berisi rubrik berita dan lainnya seputar Latee II secara umum dan RLA secara khusus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Jadilah Bagian dari Tradisi Literasi</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kembangkan kemampuan menulismu dan berkontribusi dalam media publikasi Latee II Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
