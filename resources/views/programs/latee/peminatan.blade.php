<x-layouts::guest title="Program Peminatan">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Peminatan</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Wadah Minat<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Bakat & Kreativitas</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Berbagai unit lokal khusus dan ekstrakurikuler dirancang untuk mengembangkan potensi santri di bidang bahasa, seni, literasi, olahraga, dan keagamaan.</p>
                </div>
            </div>
        </section>

        <!-- Program Unggulan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="unit-lokal">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Unit Lokal Khusus</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Program Intensif & Spesialisasi</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Unit lokal khusus yang mewadahi minat santri secara mendalam, mulai dari bahasa Arab, tahfidh, hingga pengembangan Bahasa Inggris.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Ekstrakurikuler Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Berbagai unit lokal khusus dan ekstrakurikuler menjadi wadah pengembangan minat dan bakat santri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ([
                        [
                            'title' => "Darul Lughah al-'Arabiyah wal Fiqh as-Salafi",
                            'subtitle' => 'DALFIS — Berdiri 2001',
                            'desc' => 'Lembaga pengembangan Bahasa Arab dan Fiqh yang berawal dari inisiatif para ustaz, diresmikan sebagai lokal khusus pada tahun 2001.',
                            'programs' => ["Ta'lim, Hifdhul Mufradat, Bimbingan Baca Al-Quran", "Ta'lif dan Terjemah, Bimbingan Kitab Kuning", "Munaqasyah & Debat, Tadrib Maharatul Kalam"],
                            'prestasi' => 'Juara 1 Lomba Esai Bahasa Arab tingkat Internasional (UIN Jakarta, 2021) dan berbagai juara nasional lainnya.',
                        ],
                        [
                            'title' => 'Lembaga Tahfidhul Quran',
                            'subtitle' => 'LTQ — Berdiri 16 Agustus 2006',
                            'desc' => 'Berawal dari mimpi sederhana untuk mengumpulkan santri yang ingin menghafal Al-Quran, kini menjadi lembaga tahfidh yang terstruktur.',
                            'programs' => ["Setoran Hafalan & Saling Menyima' (3x/minggu)", "Muraja'ah kelompok & Pengajian Kitab at-Tibyan", "Bimbingan Tahsinul Qira'ah & Ikhtibar (Ujian Semester)", 'Khotmil Quran bil-Ghaib & Takhtiman'],
                            'prestasi' => 'Juara 1 MQK tingkat Nasional (Kemenag RI, NTB, 2011) dan Juara 1 Kaligrafi Hiasan Mushaf Nasional (2015).',
                        ],
                        [
                            'title' => 'English Area of Latee',
                            'subtitle' => 'EAL — Berdiri 2009',
                            'desc' => 'Unit lokal khusus yang mewadahi minat santri dalam pengembangan Bahasa Inggris, didirikan atas restu pengasuh dengan syarat adanya pengajian kitab.',
                            'programs' => ['Harian: Irregular Verb, Practice Speaking, KBM', 'Mingguan: Ziarah Maqbarah, Speech & Story Telling', 'Bulanan: Debat Bahasa Inggris', 'Semester: Ujian & Graduation'],
                            'prestasi' => 'Juara 1 Speech Contest se-Jawa Timur (PP. Nurul Jadid Paiton, 2019).',
                        ],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i + 1) * 100) }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <div class="bg-brand-600 dark:bg-brand-700 p-6 text-white">
                                <h3 class="text-lg md:text-xl font-bold">{{ $item['title'] }}</h3>
                                <p class="text-brand-100 text-xs mt-1">{{ $item['subtitle'] }}</p>
                            </div>
                            <div class="p-5 md:p-6 space-y-4 text-xs md:text-sm">
                                <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['desc'] }}</p>
                                <div>
                                    <h4 class="font-bold text-slate-800 dark:text-slate-200 text-[11px] md:text-xs mb-2">Program Unggulan:</h4>
                                    <ul class="space-y-1 text-[11px] md:text-xs text-slate-600 dark:text-slate-300">
                                        @foreach ($item['programs'] as $p)
                                            <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> {{ $p }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="bg-white dark:bg-slate-900 p-3 rounded-xl border border-slate-200 dark:border-slate-700">
                                    <h4 class="font-bold text-slate-800 dark:text-slate-200 text-[11px] md:text-xs mb-1">Prestasi Unggulan</h4>
                                    <p class="text-[10px] md:text-[11px] text-slate-500 dark:text-slate-400">{{ $item['prestasi'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Rayon & LSB -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="rayon">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Rayon & Lokal</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pendidikan Berbasis Kedisiplinan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Rayon KH. Ahmad Basyir</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan atas keinginan Alm. KH. Ahmad Basyir Abdullah Sajjad agar santri lebih fokus pada pembelajaran diniyah. Dikenal juga sebagai Rayon Salaf.</p>
                        <div class="space-y-4 text-[11px] md:text-xs text-slate-600 dark:text-slate-300">
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Fokus & Perekrutan</h4>
                                <p>Tafaqquh fii ad-Din dan Akhlaqul Karimah. Terbuka bagi santri kelas X SLTA sederajat, baik dari Annuqayah maupun santri baru.</p>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Materi</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Santri Baru: Nadzam 'Imrithi, Hillul Ma'qud, Ta'limul Muta'allim</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Santri Lama: Ad-Dasuqi (Tauhid), Fathul Mu'in (Fiqh), Alfiyah Ibnu Malik</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="reveal-right bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Rayon Lokal Santri Baru (LSB)</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan atas inisiatif KH. M. Ainul Yaqin pada awal tahun pelajaran 2022-2023. Sistem lokalisasi kelompok untuk memberikan perhatian dan bimbingan khusus bagi santri baru.</p>
                        <div class="space-y-4 text-[11px] md:text-xs text-slate-600 dark:text-slate-300">
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Program Formal (1 Tahun)</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Fiqih Dasar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Khat / Imla'</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Bimbingan Mengaji Al-Qur'an</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Program Non-Formal</h4>
                                <ul class="space-y-1">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Sapa Santri & Bimbingan Private</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Penanganan Kasus Santri Baru</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ekstrakurikuler -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="ekstrakurikuler">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Ekstrakurikuler</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Seni, Budaya & Literasi</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Wadah kreativitas santri di bawah naungan Departemen PORSENI dan DOK.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['title' => 'Hadrah Al-Banjari (Hubbul Basyir)', 'desc' => 'Berdiri 2015, wadah shalawat dengan format hybrid (Banjari & Al-Habsyi). Juara 1 Fesban se-Madura dan se-Kabupaten Sumenep.'],
                        ['title' => 'Teater SaKSI', 'desc' => 'Komunitas literasi & kebudayaan tertua (berdiri 1991). Menerima Anugerah Sutasoma 2019 kategori Komunitas Sastra dari Balai Bahasa Jatim.'],
                        ['title' => 'Pencak Silat', 'desc' => 'Melestarikan budaya melalui perguruan Perisai Putih, Cipta Sejati, Sinar Putih, dan Pagar Nusa. Latihan rutin malam Jumat pukul 20.30–23.00.'],
                        ['title' => 'Kaligrafi', 'desc' => 'Diikuti 36 santri, dilaksanakan malam Minggu & Rabu pukul 21.00 di gedung diniyah lantai atas, dengan mentor berpengalaman.'],
                        ['title' => 'Beatbox', 'desc' => 'Ekstrakurikuler seni vokal musik mulut, dilaksanakan malam Selasa pukul 21.00 WIB, diikuti santri dari SLTP hingga Perguruan Tinggi.'],
                        ['title' => 'Liga Futsal Latee (LFL)', 'desc' => 'Wadah hobi bola dengan 8 klub terdaftar. Sistem poin (Menang 3, Seri 1, Kalah 0), juara diumumkan saat penutupan Hamdala.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6 hover:shadow-lg transition-all duration-300">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item['title'] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Kembangkan Potensimu Bersama Kami</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Temukan minat dan bakatmu di lingkungan pesantren yang mendukung pengembangan diri secara menyeluruh.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
