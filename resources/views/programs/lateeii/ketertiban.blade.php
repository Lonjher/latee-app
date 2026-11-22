<x-layouts::guest title="Ketertiban & Konseling Latee II Putri">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Aurora Glow Orbs --}}
            <div class="glow-hero-emerald w-[500px] h-[500px] -top-20 -left-20 rounded-full"></div>
            <div class="glow-hero-sapphire w-[500px] h-[500px] -bottom-20 -right-20 rounded-full"></div>
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Ketertiban & Konseling — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        KAMTIB &<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">Kedisiplinan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Departemen Keamanan dan Ketertiban menciptakan suasana tertib dan aman, menjaga stabilitas, dan menyelesaikan masalah dengan penuh kekeluargaan.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Ketertiban -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
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
        <section class="relative py-16 md:py-20 overflow-hidden" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">KAMTIB</span>
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
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} glass-card rounded-3xl p-5 md:p-6">
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
