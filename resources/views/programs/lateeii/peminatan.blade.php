<x-layouts::guest title="Peminatan Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Peminatan — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        RLA &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Aphrodite English Club</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Wadah pengembangan bakat dan minat santri di bidang Bahasa Arab dan Bahasa Inggris.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Peminatan -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Peminatan Bahasa"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Pengembangan bakat bahasa Arab dan Inggris melalui RLA dan AEC.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- RLA -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="rla">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">RLA</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Raudlah al-Lughah al-'Arabiyah</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Lembaga yang didirikan sejak tahun <strong class="text-slate-900 dark:text-white">2002</strong> ini fokus pada pengembangan Bahasa Arab. Santri PPA Latee II yang memiliki bakat dan minat dalam Bahasa Arab diasah dengan beberapa kegiatan berbasis dan bernuansa Arab.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Tidak semua santri bisa mendaftar. Ada kriteria tertentu, nilai minimal, serta batasan sekolah formal yang harus dipenuhi. RLA memiliki tiga tingkatan: <strong class="text-slate-900 dark:text-white">Mubtadi'ah, Mutawasithah, dan Mutaqaddimah</strong>.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Kegiatan RLA</h3>
                        <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            @foreach ([
                                'Hifdz al-Mufradat (harian, menambah kosakata)',
                                "Ta'miq al-Mauhibah (3 minggu sekali, memperdalam maharatul kalam)",
                                'Al-Majallah ad-Daftariyyah (1 periode, maharatul kitabah)',
                                "Istima' (1 minggu sekali, mendengarkan kalam Arab)",
                                'Musyahadah (nonton film Arab dan diresensi)',
                                'Musabaqah (lomba antar-marhalah, 1 periode)',
                                'Ibtikar al-Musyarikat (pentas seni dan pembagian hadiah)',
                                'Darsul Muqaranah (studi banding ke PP. DALWA Putri)',
                            ] as $kegiatan)
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> {{ $kegiatan }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- AEC -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="aec">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">AEC</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Aphrodite English Club</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan pada tahun <strong class="text-slate-900 dark:text-white">2007</strong> sebagai lembaga fokus pendalaman Bahasa Inggris. Santri yang tertarik mendalami Bahasa Inggris ditampung di AEC. Serangkaian tes, karantina, dan pendaftaran menjadi prasyarat wajib.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">AEC memiliki cabang (<strong class="text-slate-900 dark:text-white">AEC Branch</strong>) di Latee II yang dibentuk pada tahun <strong class="text-slate-900 dark:text-white">2018</strong>, dibuka bagi santri yang berminat selain anggota AEC serta non-lembaga. Program AEC Branch lebih sedikit dibanding program intensif di lembaga AEC sendiri.</p>
                    </div>
                    <div class="reveal-right bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                        <h3 class="text-lg md:text-xl font-bold mb-4">Kegiatan AEC</h3>
                        <ul class="space-y-2 text-xs md:text-sm text-brand-50">
                            <li class="flex items-start gap-2"><span class="text-brand-200 mt-1">•</span> Reading irregular verb and morning chat (setiap pagi)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-200 mt-1">•</span> Adding vocabularies (penambahan kosakata oleh pengurus)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Kembangkan Bakat Bahasamu</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah dengan RLA atau AEC dan kuasai Bahasa Arab serta Bahasa Inggris di Latee II Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
