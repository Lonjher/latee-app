<x-layouts::guest title="Peribadatan Latee II Putri">

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
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Peribadatan — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Ubudiyah &<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">Amaliah Harian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Program peribadatan untuk mengatur santri agar beribadah tepat waktu dan istiqamah, di bawah Departemen Peribadatan.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Peribadatan — VERSI FINAL -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar: redupkan di dark mode --}}
                    <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Peribadatan Santri"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Salat berjamaah dan amaliah harian di Mushalla Ar-Rahmah Latee II Putri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program Ubudiyah -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Program</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Rangkaian Kegiatan Ubudiyah</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['Salat Jamaah 5 Waktu', 'Rutinitas wajib di musalla. Dipimpin pengasuh pada Maghrib dan Subuh, diwakili pengurus pada waktu lain. Dilaksanakan juga di 6 lembaga dan blok masing-masing jika musalla penuh.'],
                        ['Ayat Hirsi', 'Kumpulan ayat-ayat pendek dibaca setiap hari sebelum Maghrib sekitar pukul 16.45 WIB, dipandu takmir atau pengurus peribadatan.'],
                        ['Ayat-Ayat Pendek', 'Membaca surah pendek juz 30 setelah adzan Maghrib dan Subuh di Mushalla Ar-Rahmah, dipandu takmir atau pengurus peribadatan.'],
                        ['Munjiyat', 'Dibaca bersama setelah hadiran Maghrib setiap malam Jumat.'],
                        ['Al-Kahfi', 'Dibaca bersama setiap hari Jumat setelah hadiran Subuh.'],
                        ['Tahlil', "Dibaca setiap malam Jum'at setelah hadiran Isya'."],
                        ['Hataman Juz 30', 'Dilaksanakan setiap minggu, tepatnya Selasa pagi sebelum berangkat sekolah. Format hataman, setiap blok bergantian setiap minggu.'],
                        ['Barzanji & Istighasah', 'Dilaksanakan setiap malam Jumat setelah tahlil bersama. Bergiliran: Jumat pertama Barzanji, Jumat berikutnya Istighasah.'],
                        ['Mengaji Bersama', 'Setiap selesai salat Subuh kecuali Selasa (mengaji Yasin), seluruh santri mengaji bersama dibimbing pengurus peribadatan.'],
                        ["Asma'ul Husna", 'Dibaca setelah membaca ayat-ayat pendek sebelum hadiran Maghrib.'],
                        ['Siraman Rohani', 'Diadakan satu kali dalam satu periode, diinisiasi Pengasuh PPA Latee II sebagai motivator. Dipetak sesuai tingkat sekolah formal.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} glass-card rounded-3xl p-5 md:p-6">
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
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Bergabunglah dalam Lingkaran Ibadah</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Rasakan suasana pesantren yang hidup dengan dzikir, tilawah, dan salat berjamaah di Latee II Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
