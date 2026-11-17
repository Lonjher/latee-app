<x-layouts::guest title="Peribadatan Latee I Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Peribadatan — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Ubudiyah &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Amaliah Harian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Divisi Ubudiyah menjadi tombak pengarahan 'amaliyah-fiqhiyah santri, mengatur sholat, mengaji, berwudhu, dan bersuci dengan panduan SKIA.</p>
                </div>
            </div>
        </section>

        <!-- Hadiran 5 Waktu -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="hadiran">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Ubudiyah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Hadiran 5 Waktu</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?q=80&w=1200&auto=format&fit=crop" alt="Santri Latee I Beribadah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Shalat berjamaah di Mushalla Az-Zahra', diimami oleh pengasuh dan terkadang pengurus.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                        <h3 class="text-lg md:text-xl font-bold mb-3">Kewajiban Hadiran</h3>
                        <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Setiap santri wajib berjama'ah setiap shalat fardhu. Shalat berjamaah atau <strong>hadiran</strong> diprogramkan sebagai bagian kegiatan Div. Ubudiyah yang paling pokok. Santri yang tidak mengikuti akan dikenai sanksi sesuai tata tertib, kecuali yang telah meminta izin karena berhalangan (udzur). Pelaksanaan di <strong>Mushalla Az-Zahra'</strong> diimami oleh pengasuh dan terkadang pengurus.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Khatmil Quran</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kegiatan mingguan wajib bagi seluruh santri pada <strong class="text-slate-900 dark:text-white">malam Selasa</strong>. Dibentuk kelompok mengaji, setiap kelompok terdiri dari 10–11 santri dengan target 2 juz. Dilaksanakan setelah shalat Isya' berjamaah secara bergantian sesuai jadwal kelompok.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rutinitas Malam Jumat -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="malam-jumat">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Rutinitas</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Malam Jum'at</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-8">
                    @foreach ([
                        ['Shalawat Diba\'', "Pembacaan syair-syair sanjungan kepada Rasulullah SAW menggunakan Kitab Maulid ad-Diba'. Dipimpin oleh pengurus secara bergantian."],
                        ['Burdah', 'Pembacaan syair pujian kepada Nabi yang terdiri dari 160 bait dalam Qashidah Burdah.'],
                        ['Tahlil', 'Mendoakan para pendahulu kepada Allah SWT agar selalu dalam lindungan-Nya.'],
                        ['Shalat Tasbih Bersama', 'Dilaksanakan sebulan sekali pada malam Jum\'at legi, dipimpin pengurus bergantian. Awalnya khusus kelas I MA/SMA, kini mulai kelas IX MTs.'],
                        ['Siraman Rohani', 'Kegiatan rutin yang sangat dinanti santri. Pada malam Jum\'at yang dijadwalkan, seluruh santri duduk di teras dhalem pengasuh untuk mendengarkan siraman rohani. Diisi oleh K.H. Muqsith Idris, Nyai Fikriyah Basith, atau K. Ainul Haq di aula Madal 1.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-5 md:p-6 border border-slate-100 dark:border-slate-800 shadow-sm {{ $i === 4 ? 'sm:col-span-2' : '' }}">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- SKIA & Amaliah Lain -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="skia">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">SKIA & Amaliah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Praktik & Menghafal SKIA</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Pelaksanaan SKIA</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Dilaksanakan dari <strong class="text-slate-900 dark:text-white">Jumat sampai Rabu</strong>. Berbeda dengan Latee Putra dan Latee II, format SKIA di Latee I berbentuk <strong class="text-slate-900 dark:text-white">praktik dan sistem menghafal</strong> untuk semua tingkatan pendidikan.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Praktik pada bab shalat, wudhu', najis, dan tayammum. Menghafal do'a-do'a, tahlil, dan a'malul yaumiyah. Setiap pembimbing memiliki 6–8 santri didik.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Ujian Munaqasyah SKIA</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Dilaksanakan setiap tahun oleh Div. Ubudiyah untuk menguji pemahaman santri yang telah selesai menghafal SKIA.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Terdiri dari <strong class="text-slate-900 dark:text-white">4 penguji</strong> sesuai jumlah bab: Tauhid, Fiqih, Akhlak, dan Tajwid.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mt-8">
                    @foreach ([
                        ['Yasinan Setiap Maghrib', 'Pembacaan Yasin setelah hadiran Maghrib setiap hari, dipimpin pengurus Div. Ubudiyah. Awalnya surah Munjiyat, diganti Yasin oleh pengasuh.'],
                        ['Ratib al-Haddad', 'Dibaca setiap hari Minggu dan Rabu sore, dipimpin pengurus dan diikuti santri yang tidak memiliki jadwal lain.'],
                        ['Praktik Mengkafani Jenazah', "Diadakan Div. Ubudiyah dengan mengundang pengasuh atau guru senior, seperti K. Syafi'ie Anshori, untuk memberikan pemahaman tata cara mengkafani jenazah."],
                        ['Praktik Sholat Santri Baru', 'Bimbingan khusus setiap Sabtu pagi oleh Nyai Nafidzatin Nadhor. Digagas sejak periode 2019-2020 untuk santri baru yang masih minim pemahaman praktik sholat.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6 {{ $i === 3 ? 'sm:col-span-2 lg:col-span-1' : '' }}">
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
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Bergabunglah dalam Lingkaran Ibadah</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Rasakan suasana pesantren yang hidup dengan dzikir, tilawah, dan salat berjamaah di Latee I Putri.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
