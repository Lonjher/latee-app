<x-layouts::guest title="Pendidikan Latee I Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Pendidikan — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Madrasah Diniyah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Annuqayah Latee I</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Sistem pendidikan diniyah yang terstruktur dengan tingkatan Isti'dadi dan Awwaliyah, dibimbing oleh para masyayikh, guru senior, dan ustazah senior.</p>
                </div>
            </div>
        </section>

        <!-- Struktur & Guru -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="struktur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Struktur & Guru</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kepengurusan Madrasah Diniyah</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Belajar Madrasah Diniyah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Suasana pembelajaran kitab kuning di Madrasah Diniyah Annuqayah Latee I.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Struktur Kepengurusan</h3>
                        <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            @foreach ([
                                ['Kepala MADAL I', 'K.H. A. Basith AS, BA.'],
                                ['DP3', "Nyai Fikriyah, S.Pd.I & Ustazah Siti Nur 'Aisyah, S.Ag"],
                                ['Wa. Ka. MADAL', 'Ustazah Luthfiyah Bayusuf'],
                                ['Wa. Ka. Administrasi', 'Ustazah Zumailah A. Khaliq'],
                                ['Wa. Ka. Keuangan', 'Ustazah Ulfatul Husna'],
                                ['Wa. Ka. Kurikulum', 'Ustazah Ana Fithratul Jannah'],
                                ['Wa. Ka. Kesiswaan', 'Ustazah Silmiyati Sholah'],
                                ['Bimbingan & Konseling', 'Ustazah Silfiatin Nauriyah, S.Pd'],
                            ] as $i => $row)
                                <li class="flex justify-between border-b border-slate-200 dark:border-slate-700 py-2 gap-3 {{ $i === 7 ? 'border-b-0' : '' }}">
                                    <span>{{ $row[0] }}</span>
                                    <span class="font-semibold text-slate-900 dark:text-white text-right">{{ $row[1] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Kategori Guru</h3>
                        <ul class="space-y-4 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            @foreach ([
                                'Para Masyayikh di lingkungan Pondok Pesantren Annuqayah.',
                                'Guru Senior, sebagian besar alumni Pondok Pesantren Annuqayah.',
                                'Guru Junior, yaitu santri senior (ustazah) yang bermukim di Latee I.',
                            ] as $i => $text)
                                <li class="flex items-start gap-3">
                                    <span class="w-6 h-6 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-700 dark:text-brand-300 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">{{ $i + 1 }}</span>
                                    <span>{{ $text }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tingkatan & Jadwal -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="tingkatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Tingkatan & Jadwal</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kelas Isti'dadi & Awwaliyah</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-10 md:mb-12">
                    @foreach ([['1', "Kelas Isti'dadi"], ['6', 'Kelas Awwaliyah'], ["45'", 'Alokasi per Sesi']] as $i => $item)
                        <div class="reveal delay-{{ ($i + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-6 text-center border border-slate-100 dark:border-slate-800 shadow-sm">
                            <span class="text-2xl md:text-3xl font-black text-brand-600 dark:text-brand-400">{{ $item[0] }}</span>
                            <p class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-1">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                    <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Jadwal Masuk</h3>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Jadwal masuk Madrasah Diniyah adalah setiap <strong class="text-slate-900 dark:text-white">bakda Ashar, Maghrib, dan Isya'</strong> dengan alokasi waktu minimal 45 menit sesuai jadwal masing-masing kelas. Hari <strong class="text-slate-900 dark:text-white">Kamis sore diliburkan</strong> karena memulai rutinitas mingguan Jum'at yang dimulai sejak Kamis sore.</p>
                </div>
            </div>
        </section>

        <!-- Kitab Materi -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kitab">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kitab Materi</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Rincian Kitab per Tingkatan</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['I\'dadi', ['Tafsir al-Jalalain (Al-Fatihah, Al-Ikhlas, Al-Falaq, An-Nas)', "Tauhid: 'Aqidatul 'Awam", 'Fiqh: Safinatun Najah', 'Tajwid: Tuhfatul Athfal', "Imla': Pengantar Belajar Imla'"]],
                        ['I Awwaliyah', ["Tafsir al-Jalalain (Al-Fatihah, An-Naba'-An-Nas)", 'Hadits: Al-Ahadits al-Nabawiyah', 'Tauhid: Mandzumah al-Risalah', 'Akhlak: Bidayah al-Hidayah', 'Tajwid: Matn al-Jazariyah', 'Fiqh: Sullam at-Taufiq', 'Nahwu: Nadzm al-Ajurumiyah', 'Sharraf: Nadzm al-Maqshud']],
                        ['II Awwaliyah', ['Tafsir al-Jalalain (Al-Fatihah, Al-Mulk, Ad-Dahr)', "Hadits Arba'in", 'Tauhid: Qatrul Ghaits', 'Akhlak: Nibrasun Nufus', 'Fiqh: Fathul Qarib (Bab Shalat)', 'Nahwu: Matn al-Ajurumiyyah']],
                        ['III Awwaliyah', ["Tafsir al-Jalalain (Al-Fatihah, Al-Waqi'ah, Yaasin)", 'Hadits: Riyadhus Shalihin', 'Tauhid: Itmam al-Dirayah', "Akhlak: Hidayatul Adzkiya'", 'Fiqh: Fathul Qarib (Bab Zakat)', 'Nahwu: Alfiyah ibn Malik']],
                        ['IV Awwaliyah', ['Tafsir al-Jalalain (Al-Fatihah, Ad-Dukhan, As-Sajadah)', 'Hadits: Riyadhus Shalihin', 'Tauhid: Hasyiyah ad-Dasuqi', 'Akhlak: Nashaihud Diniyah', "Fiqh: Fathul Mu'in (Bab 'Ariyah)"]],
                        ['V Awwaliyah', ["Tafsir al-Jalalain (Al-Fatihah, Yusuf, An-Nisa')", 'Hadits: Riyadhus Shalihin', 'Tauhid: Hasyiyah ad-Dasuqi', 'Akhlak: Nashaihud Diniyah', "Fiqh: Fathul Mu'in (Bab Puasa)"]],
                        ['VI Awwaliyah', ['Tafsir al-Jalalain (Al-Fatihah, Al-Kahfi, Ar-Rahman)', 'Hadits: Tajrid as-Sharih', 'Tauhid: Hasyiyah ad-Dasuqi', 'Akhlak: Nashaihud Diniyah', "Fiqh: Fathul Mu'in (Bab Haji)"]],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6">
                            <h4 class="font-bold text-brand-700 dark:text-brand-300 mb-3 text-sm md:text-base">{{ $item[0] }}</h4>
                            <ul class="space-y-1 text-[11px] md:text-xs text-slate-600 dark:text-slate-300">
                                @foreach ($item[1] as $kitab)
                                    <li>• {{ $kitab }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- HANSA & HIMDAL I -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="haflah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Haflah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">HANSA & HIMDAL I</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">HANSA</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Haflah Nishfu As-Sanah adalah acara untuk merayakan berakhirnya kegiatan pembelajaran semester I sekaligus evaluasi pengurus Madrasah Diniyah. Ditandai dengan pembagian raport, ranking kelas, siswa teladan, dan penghargaan santri berprestasi. Bertempat di Aula MADAL I dengan tausiyah pengasuh.</p>
                    </div>
                    <div class="reveal-right bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">HIMDAL I</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Haflatul Imtihan Madrasah Diniyah Annuqayah Latee I merupakan puncak perayaan berakhirnya kegiatan pembelajaran semester II. Dikemas dalam bentuk lomba antar kelas untuk menggali potensi per individu, baik bersifat edukatif maupun non-edukatif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Bergabunglah dengan Madrasah Diniyah Latee I</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dapatkan pendidikan diniyah yang komprehensif dengan bimbingan para masyayikh dan ustazah berpengalaman.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
