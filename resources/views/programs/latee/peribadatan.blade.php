<x-layouts::guest title="Program Peribadatan">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Peribadatan</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Menjaga Istikamah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Ibadah & Dzikir</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">"Tirakat santri Latee adalah hadiran." Program peribadatan dirancang untuk membentuk karakter santri yang istikamah dalam salat berjamaah, tilawah, dan amaliah ubudiyah sehari-hari.</p>
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
                    <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?q=80&w=1200&auto=format&fit=crop" alt="Santri Membaca Al-Quran" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">"Tirakat santri Latee adalah hadiran" — kegiatan salat berjamaah dan tilawah menjadi ruh kehidupan pesantren.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left space-y-6">
                        <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                            <h3 class="text-lg md:text-xl font-bold mb-3">Tirakat Santri Latee</h3>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Semenjak dulu, hal yang selalu ditekankan oleh mendiang Alm. KH. Ahmad Basyir Abdullah Sajjad—dan hal ini yang paling utama—adalah istikamah hadiran. "Tirakat santri Latee adalah hadiran" dawuh beliau.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pengertian Hadiran</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Hadiran adalah sebutan santri bagi kegiatan salat berjamaah lima waktu: Zuhur, Ashar, Maghrib, Isya', dan Shubuh. Setiap santri wajib mengikuti salat berjamaah lima waktu di musala.</p>
                        </div>
                    </div>
                    <div class="reveal-right space-y-6">
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pelaksanaan</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Salat berjamaah ini diimami oleh dewan pengasuh, kecuali berhalangan maka diwakilkan oleh pengurus.</p>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Karena keterbatasan muatan musala yang belum dapat menampung seluruh santri, maka hadiran juga dilaksanakan di 6 lembaga. Jika masih tidak cukup, dilaksanakan di blok masing-masing dengan syarat tetap berjamaah.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Tujuan</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Menanamkan kedisiplinan, mempererat ukhuwah, dan menjaga keberkahan ilmu melalui salat berjamaah tepat waktu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pembacaan Yasin & Tahlil -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="yasin-tahlil">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Amaliah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pembacaan Yasin & Tahlil</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Kegiatan mingguan yang menjadi bagian tak terpisahkan dari budaya ubudiyah santri.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pembacaan Yasin dan Tahlil</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p>Kegiatan ini merupakan kegiatan mingguan yang <strong class="text-slate-900 dark:text-white">wajib diikuti oleh seluruh santri</strong> pada malam Jumat.</p>
                            <p>Dipandu oleh takmir, kegiatan ini dilaksanakan setelah zikir bakda salat Maghrib berjamaah sampai kira-kira 10 menit sebelum azan Isya dikumandangkan.</p>
                            <p>Pembacaan Yasin dan Tahlil ini pahalanya dikhususkan kepada masyayikh Annuqayah sekaligus keluarga dhalem dan kebaikan santri secara umum.</p>
                        </div>
                    </div>
                    <div class="reveal delay-200 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pembacaan Yasin Menjelang Shubuh</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p>Pada mulanya, takmir masjid Latee memutar lantunan qiraah agar para santri bangun lebih awal untuk melaksanakan qiyamul lail atau bersiap-siap untuk hadiran Shubuh.</p>
                            <p>Namun atas dasar saran salah satu dewan pengasuh, lantunan qiraah itu diubah menjadi <strong class="text-slate-900 dark:text-white">pembacaan Yasin</strong>.</p>
                            <p>Pembacaan Yasin ini dilaksanakan oleh takmir, bergantian dengan para santri yang telah mendapat persetujuan dari takmir.</p>
                        </div>
                    </div>
                    <div class="reveal delay-300 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pembacaan Yasin Menjelang Maghrib</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p>Kegiatan ini baru ada beberapa tahun terakhir, dilaksanakan pada <strong class="text-slate-900 dark:text-white">jam 17.00 WIB</strong> atau menjelang Maghrib.</p>
                            <p>Dipimpin oleh takmir masjid Annuqayah Latee, kegiatan ini menjadi penanda waktu bagi santri untuk bersiap menghadapi waktu Maghrib.</p>
                        </div>
                    </div>
                    <div class="reveal delay-400 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Shalat Witir Berjamaah</h3>
                        <div class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <p>Kegiatan ini juga baru ada beberapa tahun terakhir, dilaksanakan <strong class="text-slate-900 dark:text-white">setelah salat Isya berjamaah</strong>, diimami oleh pengurus sesuai jadwal.</p>
                            <p>Dilaksanakan setiap malam, kegiatan ini bertujuan agar santri lebih giat lagi dalam melaksanakan ibadah sunah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pembacaan Shalawat Nabi -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="shalawat">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Shalawat</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pembacaan Shalawat Nabi</h2>
                </div>

                <div class="reveal bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-12 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-center">
                        <div>
                            <h3 class="text-xl md:text-2xl font-bold mb-4">Maulid ad-Diba'i</h3>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed mb-4">Setelah salat witir berjamaah pada malam Jumat, dilaksanakanlah kegiatan pembacaan shalawat nabi bersama. Kegiatan yang dipimpin oleh takmir ini <strong>wajib diikuti oleh seluruh santri</strong>, dijadwal sesuai giliran rayon masing-masing.</p>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Adapun kitab shalawat yang dibaca adalah <strong>Kitab Maulid ad-Diba'i</strong>.</p>
                        </div>
                        <div class="flex justify-center">
                            <div class="w-28 h-28 md:w-48 md:h-48 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-sm border border-white/20">
                                <svg class="w-14 h-14 md:w-24 md:h-24 text-brand-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program Tambahan -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="program-tambahan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Program Pendukung</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Amaliah Harian & Mingguan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Rangkaian amaliah yang menghiasi hari-hari santri di kompleks Latee II Putri.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ([
                        ['title' => 'Ayat Hirsi', 'desc' => 'Kumpulan ayat-ayat pendek yang dibaca setiap hari sebelum salat Maghrib sekitar pukul 04.45 WIB dipandu oleh takmir atau pengurus peribadatan.'],
                        ['title' => 'Ayat-Ayat Pendek', 'desc' => 'Membaca surah-surah pendek dari juz 30 setelah adzan Maghrib dan Shubuh di Mushalla Ar-Rahmah yang dipandu takmir atau pengurus peribadatan.'],
                        ['title' => 'Munjiyat', 'desc' => 'Dibaca bersama setelah hadiran Maghrib setiap malam Jumat.'],
                        ['title' => 'Al-Kahfi', 'desc' => 'Dibaca bersama setiap hari Jumat setelah hadiran Shubuh.'],
                        ['title' => 'Tahlil', 'desc' => "Dibaca setiap malam Jum'at setelah hadiran Isya'."],
                        ['title' => 'Hataman Juz 30', 'desc' => 'Dilaksanakan setiap minggu tepatnya setiap hari Selasa pagi sebelum jam berangkat sekolah. Format hataman, setiap blok secara bergantian setiap minggunya.'],
                        ['title' => 'Barzanji dan Istighasah', 'desc' => 'Dilaksanakan setiap malam Jumat setelah membaca tahlil bersama. Dibaca secara bergiliran setiap minggu: Jumat pertama Barzanji, Jumat berikutnya Istighasah.'],
                        ['title' => 'Mengaji Bersama', 'desc' => 'Setiap selesai salat Subuh kecuali hari Selasa (mengaji Yasin), seluruh santri mengaji bersama yang bacaannya dibimbing pengurus peribadatan.'],
                        ['title' => "Asma'ul Husna", 'desc' => 'Dibaca setiap setelah membaca ayat-ayat pendek sebelum hadiran Maghrib dilaksanakan.'],
                        ['title' => 'Siraman Rohani', 'desc' => 'Kegiatan motivasi beribadah yang diadakan satu kali dalam satu periode, diinisiasi oleh Pengasuh PPA Latee II, dipetak sesuai tingkat sekolah formal.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-400 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Bergabunglah dalam Lingkaran Ibadah</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Rasakan suasana pesantren yang hidup dengan dzikir, tilawah, dan salat berjamaah. Mari bersama-sama menjaga istikamah.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
