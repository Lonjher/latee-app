<x-layouts::guest title="Peminatan Latee I Putri">

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
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Peminatan — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Tata Boga, Shalawat<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">& Sastra</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Wadah pengembangan bakat dan minat santri Latee I Putri di bidang kuliner, seni shalawat, dan kesusastraan.</p>
                </div>
            </div>
        </section>

        <!-- Tata Boga -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="tata-boga">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Tata Boga</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kreativitas di Dapur</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Tata Boga Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Santri Latee I Putri mengembangkan bakat masak-memasak melalui kegiatan Tata Boga.</p>
                    </div>
                </div>

                <div class="reveal glass-card rounded-3xl p-6 md:p-8">
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Berawal dari bakat santri dalam bidang masak-memasak yang perlu dikembangkan. Mulanya dilaksanakan dengan sistem kursus, namun pada masa kepemimpinan Ustadzah Layyinah Sajjad (2004-2005) mulai diformat dengan <strong class="text-slate-900 dark:text-white">sistem lomba</strong>.</p>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Dilaksanakan setiap minggu pada <strong class="text-slate-900 dark:text-white">hari Rabu</strong>. Dibentuk kelompok berisi 10–15 santri dengan 1–2 pengurus sebagai pengoordinir. Kelompok terbaik diumumkan di akhir periode bertepatan dengan penutupan aktivitas.</p>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Di akhir periode, Div. Pengembangan Bakat dan Minat mengadakan <strong class="text-slate-900 dark:text-white">Tata Boga Akbar</strong> dengan mengundang ahli untuk memberikan inspirasi inovasi masak-memasak.</p>
                </div>
            </div>
        </section>

        <!-- Club Cinta Shalawat -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="shalawat">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Club Cinta Shalawat</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Membina Bakat Shalawat</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Kegiatan mingguan setiap <strong class="text-slate-900 dark:text-white">malam Selasa</strong> di Mushalla Az-Zahra' setelah shalat Maghrib berjamaah sampai azan Isya'. Dihadiri seluruh santri dan dibimbing pengurus.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Shalawat yang diajarkan bervariasi, dari Shalawat Diba' hingga nasyid islami tanpa alat musik. Bertujuan membina santri yang memiliki bakat shalawat dan menumbuhkan kecintaan bershalawat kepada Nabi.</p>
                    </div>
                    <div class="reveal-right bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                        <h3 class="text-lg md:text-xl font-bold mb-3">Club Cinta Shalawat</h3>
                        <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Pada masa kepemimpinan Ustazah Lailatul Qomariyah (awal 2020), kegiatan ini dikembangkan menjadi komunitas <strong>Club Cinta Shalawat</strong> beranggotakan 7 orang. Mereka mendapatkan pembinaan khusus untuk tampil mengisi kegiatan-kegiatan pondok.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cafe Latte 52 -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="cafe-latte">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Cafe Latte 52</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Komunitas Menulis Santri</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Sejarah</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Berdiri dari kebiasaan rutinitas mingguan anggota setelah berdiskusi atau membuat karya sastra yang diakhiri dengan minum kopi panas bersama. Angka <strong class="text-slate-900 dark:text-white">52</strong> adalah gabungan tanggal, bulan, dan tahun diresmikan: <strong class="text-slate-900 dark:text-white">16 Januari 2015</strong>.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Awalnya fokus pada sastra Indonesia, sejak 2018 mulai menggeluti sastra Bahasa Madura. Awalnya di bawah Div. Informasi dan Publikasi, pada 2016 pindah asuh ke Div. Pengembangan Bakat dan Minat.</p>
                    </div>
                    <div class="reveal-right glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Visi & Misi</h3>
                        <p class="text-xs md:text-sm font-semibold text-brand-700 dark:text-brand-400 mb-2">Visi:</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Mewadahi pecinta sastra di Pondok Pesantren Annuqayah Latee 1.</p>
                        <p class="text-xs md:text-sm font-semibold text-brand-700 dark:text-brand-400 mb-2">Misi:</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Membiasakan santri mengapresiasi karya sastra.</p>
                    </div>
                </div>

                <div class="reveal mt-6 md:mt-8 glass-card rounded-3xl p-6 md:p-8">
                    <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Program</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                        @foreach ([
                            'Menulis Puisi (setiap malam, disetor sebelum pukul 22.00 WIB)',
                            'Sekolah Sastra (dibimbing Kiai M. Faizi, M.Hum di dhalem beliau)',
                            'Bedah Karya (setiap minggu, karya member Cafe Latte 52)',
                            'Diskusi Sastra (setengah bulan, bergantian dengan bedah puisi)',
                            'Menerbitkan Buletin (dua kali dalam satu periode)',
                            'Peringatan Hari Jadi',
                            'Kunjungan ke Perpustakaan Pribadi Alm. K. M. Zamiel el-Muttaqien',
                            'Kunjungan ke Komunitas Tore Maos di Sumenep',
                            'Menempelkan Karya Member di Mading Latee 1',
                            'Penerimaan Anggota Baru',
                            'Mengirimkan karya member ke media',
                        ] as $program)
                            <div class="flex items-start gap-2">
                                <span class="text-brand-500 dark:text-brand-400 mt-1">•</span>
                                <span>{{ $program }}</span>
                            </div>
                        @endforeach
                    </div>
                    <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-4"><strong class="text-slate-700 dark:text-slate-200">Prestasi:</strong> Karya member berhasil dimuat di Jawa Pos Radar Madura, Koran Kabar, dan media lainnya.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Kembangkan Bakatmu di Latee I Putri</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Temukan minat dan bakatmu dalam Tata Boga, Shalawat, atau Sastra bersama kami.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
