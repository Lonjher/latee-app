<x-layouts::guest title="Profil Pesantren">

    @include('partials.header')

    <main>
        <!-- ============================================ -->
        <!-- BEGIN: Page Hero                             -->
        <!-- ============================================ -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
    <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl dark:shadow-slate-950/60 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 bg-texture-noise transition-colors duration-300">

        {{-- Background & Glow --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            {{-- Base overlay --}}
            <div class="absolute inset-0 bg-slate-50/60 dark:bg-slate-950/70"></div>

            {{-- Glow Kiri Atas --}}
            <div class="absolute top-0 -left-20 w-[400px] h-[400px] rounded-full bg-brand-300/40 dark:bg-brand-500/25 mix-blend-multiply dark:mix-blend-screen filter blur-3xl animate-pulse-glow"></div>

            {{-- Glow Kanan Bawah --}}
            <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] rounded-full bg-teal-300/30 dark:bg-teal-500/20 mix-blend-multiply dark:mix-blend-screen filter blur-3xl animate-pulse-glow" style="animation-delay: 2s;"></div>

            {{-- Gradient overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/70 to-transparent dark:from-slate-900/95 dark:via-slate-900/70 dark:to-transparent"></div>
        </div>

        {{-- Konten --}}
        <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
            <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/90 dark:bg-slate-800/90 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">
                    Tentang Kami
                </span>
            </div>

            <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                Pondok Pesantren<br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">
                    Annuqayah Latee
                </span>
            </h1>

            <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                Bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur, berdiri sejak tahun 1923 dan terus berkhidmat mencetak generasi Qur'ani.
            </p>
        </div>
    </div>
</section>

        <!-- ============================================ -->
        <!-- BEGIN: Sejarah                               -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="sejarah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Sejarah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Jejak Langkah & Perjuangan</h2>
                </div>

                <!-- Gambar Hero Sejarah -->
                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?q=80&w=1200&auto=format&fit=crop" alt="Sejarah Pesantren Annuqayah Latee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Pondok Pesantren Annuqayah Latee, bagian dari sejarah panjang pendidikan Islam di Madura.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12">
                    <div class="reveal-left space-y-6">
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Latar Belakang</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Pondok Pesantren Annuqayah didirikan oleh K.H. Muhammad Syarqawi pada tahun 1887 M. Beliau adalah seorang ulama besar dari Kudus, Jawa Tengah, yang masih memiliki hubungan erat dengan silsilah Wali Songo, yaitu Sunan Kudus. Setelah menempuh pendidikan di Mekkah dan berbagai daerah, beliau menetap di Desa Guluk-Guluk, Sumenep, dan mendirikan Pondok Pesantren Annuqayah.
                            </p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Berdirinya Latee</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Pondok Pesantren Annuqayah Latee (P2AL) didirikan oleh <strong class="text-slate-900 dark:text-white">K.H. Abdullah Sajjad</strong> pada tahun <strong class="text-slate-900 dark:text-white">1923</strong>. Beliau adalah salah seorang putra K.H. Muhammad Syarqawi yang paling gigih dalam perjuangan fisik melawan penjajah. Pada tahun 1947, beliau gugur sebagai syahid dalam mempertahankan negara dari agresi militer Belanda, yang menyebabkan P2AL sempat mengalami kefakuman.
                            </p>
                        </div>
                    </div>

                    <div class="reveal-right space-y-6">
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Periode Kepemimpinan</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                                Kefakuman kepemimpinan dicoba diatasi ketika Kyai Anwar (santri kesayangan KH. Abdullah Sajjad) bersama KH. Moh. Mahfudz Husaini berusaha menjalankan kegiatan pendidikan di P2AL untuk sementara waktu.
                            </p>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Baru pada tahun <strong class="text-slate-900 dark:text-white">1953</strong>, kepemimpinan P2AL dialihkan kepada <strong class="text-slate-900 dark:text-white">KH. Achmad Basyir Abdullah Sajjad</strong> yang berlangsung hingga sekarang.
                            </p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Perkembangan Pendidikan</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Pada tahun-tahun pertama, kegiatan pendidikan di P2AL masih sangat sederhana, mengikuti metode konvensional tradisi pesantren seperti pengajian Al-Qur'an, pengajian kitab kuning dengan metode sorogan dan wetonan. Embrio sistem pendidikan ini kemudian dimapankan dengan tetap mempertahankan tradisi keilmuan pesantren klasik, seperti <strong class="text-slate-900 dark:text-white">Madrasah Diniyah Annuqayah Latee (MADAL)</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Visi & Misi                           -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="visi-misi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Visi & Misi</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Arah & Tujuan Pendidikan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <!-- Visi -->
                    <div class="reveal-left bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-8 md:p-12 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40 flex flex-col justify-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Visi</h3>
                        <p class="text-base md:text-lg lg:text-xl font-semibold text-brand-50 dark:text-brand-100 leading-relaxed italic">
                            "Kesalehan perilaku dan keunggulan mutu."
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="reveal-right bg-white dark:bg-slate-900 rounded-3xl p-8 md:p-12 shadow-sm border border-slate-100 dark:border-slate-800">
                        <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-6">Misi</h3>
                        <ul class="space-y-4 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-700 dark:text-brand-300 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</span>
                                <span>Meningkatkan pendidikan yang menghasilkan alumnus sesuai dengan visi.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-700 dark:text-brand-300 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</span>
                                <span>Mengembangkan tradisi kelimuan pesantren dan program pendidikan yang melayani santri dari berbagai daerah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-700 dark:text-brand-300 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</span>
                                <span>Mewujudkan nilai-nilai keislaman sesuai dengan manhaj salafi.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Struktur Kepengasuhan                 -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="struktur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Struktur</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Tiga Kompleks Kepengasuhan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Pondok Pesantren Annuqayah Latee saat ini terbagi menjadi tiga kompleks yang masing-masing dipimpin oleh pengasuh.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">

                    <!-- Latee Putra -->
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 sm:col-span-2 md:col-span-1">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-2">Latee Putra</h3>
                        <p class="text-[11px] md:text-xs font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide mb-3">Pengasuh: KH. Abd. A'la</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Kompleks putra dengan sistem kepengasuhan kolektif. Saat ini dihuni oleh lebih dari <strong class="text-slate-900 dark:text-white">1.251 santri</strong> dari berbagai daerah di Indonesia.</p>
                        <div class="bg-white dark:bg-slate-900 rounded-xl p-3 border border-slate-200 dark:border-slate-700 text-[11px] md:text-xs text-slate-500 dark:text-slate-400">
                            <strong class="text-slate-700 dark:text-slate-200">Rayon:</strong> Darul Lughah, Al-Ghazali, Al-Bukhari, Al-Farisi, As-Syafi'ie, dan EAL.
                        </div>
                    </div>

                    <!-- Latee I Putri -->
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-2">Latee I Putri</h3>
                        <p class="text-[11px] md:text-xs font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide mb-3">Pengasuh: KH. A. Basith AS</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kompleks putri yang diasuh oleh KH. A. Basith AS, dibantu oleh putra-putri dan menantu beliau. Menyelenggarakan berbagai program pendidikan dan amaliah khusus santri putri.</p>
                    </div>

                    <!-- Latee II Putri -->
                    <div class="reveal delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-2">Latee II Putri</h3>
                        <p class="text-[11px] md:text-xs font-semibold text-brand-600 dark:text-brand-400 uppercase tracking-wide mb-3">Pengasuh: Nyai Umamah Makkiyah</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kompleks putri yang diasuh oleh Nyai Umamah Makkiyah, dibantu oleh putra-putri dan menantu beliau. Memiliki program unggulan di bidang keagamaan dan pengembangan diri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Statistik Singkat                     -->
        <!-- ============================================ -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 text-center border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                        <span class="block text-3xl md:text-4xl font-black text-brand-600 dark:text-brand-400 tracking-tight">1923</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Tahun Berdiri</span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 text-center border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                        <span class="block text-3xl md:text-4xl font-black text-brand-600 dark:text-brand-400 tracking-tight">3</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Kompleks</span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 text-center border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-lg dark:hover:shadow-slate-950/50 transition-all duration-300">
                        <span class="block text-3xl md:text-4xl font-black text-brand-600 dark:text-brand-400 tracking-tight">1.251+</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Santri Putra</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: CTA                                   -->
        <!-- ============================================ -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Menjadi Bagian dari Sejarah Kami</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah bersama ribuan santri yang telah menimba ilmu dan membentuk karakter di Pondok Pesantren Annuqayah Latee.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
