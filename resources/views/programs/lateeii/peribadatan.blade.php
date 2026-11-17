<x-layouts::guest title="Peribadatan Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Peribadatan — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Ubudiyah &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Amaliah Harian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Program peribadatan untuk mengatur santri agar beribadah tepat waktu dan istiqamah, di bawah Departemen Peribadatan.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Peribadatan — VERSI FINAL -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
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
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Program</span>
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
