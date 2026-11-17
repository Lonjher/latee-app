<x-layouts::guest title="Ketertiban & Konseling Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Ketertiban & Konseling — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        KAMTIB &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Kedisiplinan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Departemen Keamanan dan Ketertiban menciptakan suasana tertib dan aman, menjaga stabilitas, dan menyelesaikan masalah dengan penuh kekeluargaan.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Ketertiban -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Ketertiban Santri"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">KAMTIB menjaga stabilitas dan ketenteraman lingkungan Latee II Putri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program KAMTIB -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">KAMTIB</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Program & Kebijakan</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    @foreach ([
                        ['Sosialisasi Tata Tertib', 'Tindakan preventif kepada tiga objek: wali santri (saat Temu Wali), santri baru (saat BINASABA), dan santri lama (sosialisasi ke setiap kamar setelah Pembukaan Aktivitas).'],
                        ['Koordinasi dengan Keamanan Daerah', 'Memudahkan pengawasan santri di luar lingkungan PPA Latee II serta menjaga keamanan antar daerah dan organisasi lain.'],
                        ['Rekapitulasi Kepulangan', 'Mendata poin kepulangan santri (tiga poin pulang selain sakit). Berlaku juga bagi kepulangan melebihi ketentuan, terlambat kembali, tidak memperpanjang izin, atau tidak sesuai prosedur.'],
                        ['Rapat Evaluasi dengan Keamanan Blok', 'Mendengar kritik dan aspirasi santri, menyelesaikan permasalahan, dan meminimalisir pelanggaran.'],
                        ['Mendata Mahram', 'Santri melapor jika mempunyai mahram di Pesantren Daerah Annuqayah maupun di luar pesantren untuk dibukukan sebagai legalisasi berkunjung.'],
                        ['Audensi & Permohonan Maaf', "Bentuk 'penebusan' atas pelanggaran. Bersifat edukatif, konstruktif, dan menambah kesadaran diri. Contoh: menghafal doa, memahami SKIA, membersihkan lingkungan."],
                        ['Prosedur Tamu/Alumni Bermalam', 'Meminta izin langsung kepada Pengasuh diantar pengurus dan menitipkan alat elektronik di kantor PPA Latee II.'],
                        ['Drop Out', 'Penonaktifan santri dari PPA Latee II yang hak patennya berada pada keputusan Pengasuh. Diberlakukan bagi pelanggaran pasal berat dan menyalahi syariat.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-5 md:p-6">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Lingkungan yang Aman & Mendukung</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kami percaya ketertiban dan kepedulian adalah fondasi tumbuh kembang santri yang optimal.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
