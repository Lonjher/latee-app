<x-layouts::guest title="Pendaftaran Santri Baru">

    @include('partials.header')

    <main x-data="{ activeTab: 'putra' }">

        <!-- ============================================ -->
        <!-- BEGIN: Page Hero                             -->
        <!-- ============================================ -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-teal-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">
                            Penerimaan Santri Baru 2026
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Bergabunglah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">
                            Bersama Kami
                        </span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Informasi lengkap prosedur pendaftaran, persyaratan, dan rincian keuangan santri baru Pondok Pesantren Annuqayah Latee tahun ajaran 2026/2027.
                    </p>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Tab Navigation & Content              -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="prosedur">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">

                <!-- Tab Buttons — Scrollable di mobile -->
                <div class="reveal -mx-4 sm:mx-0 px-4 sm:px-0 flex items-center sm:justify-center gap-2 sm:gap-3 mb-10 md:mb-12 overflow-x-auto sm:overflow-visible pb-2 sm:pb-0 scrollbar-hide">
                    <button
                        @click="activeTab = 'putra'"
                        :class="activeTab === 'putra'
                            ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30 dark:bg-brand-500 dark:shadow-brand-400/20'
                            : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 dark:border-slate-700'"
                        class="flex-shrink-0 px-4 sm:px-6 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 flex items-center gap-2"
                    >
                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-current"></span>
                        Latee Putra
                    </button>
                    <button
                        @click="activeTab = 'latee1'"
                        :class="activeTab === 'latee1'
                            ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30 dark:bg-brand-500 dark:shadow-brand-400/20'
                            : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 dark:border-slate-700'"
                        class="flex-shrink-0 px-4 sm:px-6 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 flex items-center gap-2"
                    >
                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-current"></span>
                        Latee I Putri
                    </button>
                    <button
                        @click="activeTab = 'latee2'"
                        :class="activeTab === 'latee2'
                            ? 'bg-brand-600 text-white shadow-lg shadow-brand-500/30 dark:bg-brand-500 dark:shadow-brand-400/20'
                            : 'bg-slate-50 text-slate-600 hover:bg-slate-100 border border-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-700 dark:border-slate-700'"
                        class="flex-shrink-0 px-4 sm:px-6 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 flex items-center gap-2"
                    >
                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-current"></span>
                        Latee II Putri
                    </button>
                </div>

                <!-- Gambar Hero Pendaftaran -->
                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-80 relative group">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200&auto=format&fit=crop" alt="Pendaftaran Santri Baru" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Proses pendaftaran santri baru di Sekretariat Penerimaan Santri Baru Annuqayah Latee.</p>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE PUTRA                        -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'putra'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">

                        <!-- Prosedur & Berkas -->
                        <div class="space-y-6">
                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    <li>Mengisi formulir pendaftaran di Sekretariat Penerimaan Santri Baru 2026.</li>
                                    <li>Menyerahkan berkas pendaftaran dengan menyertakan persyaratan berupa:
                                        <ul class="ml-5 md:ml-6 mt-2 space-y-1 list-disc list-inside text-[11px] md:text-xs">
                                            <li>Fotokopi Kartu Keluarga (KK) satu lembar;</li>
                                            <li>Melampirkan fotokopi paspor atau Kitas bagi Warga Negara Asing (WNA).</li>
                                        </ul>
                                    </li>
                                    <li>Mengisi Surat Perjanjian sebagai bukti sanggup menaati semua peraturan Pondok Pesantren Annuqayah Latee dan bersedia untuk tidak pindah ke pesantren daerah lain yang tidak direkomendasi Pengasuh.</li>
                                    <li>Membayar keuangan santri kepada Bendahara.</li>
                                    <li>Menyiapkan dua potong baju putih lengan panjang untuk salat jamaah (hadiran) dan Program Santri Baru.</li>
                                    <li>Membawa songkok nasional dengan tinggi minimal 8 cm dan maksimal 10 cm.</li>
                                    <li>Menempati kamar di Rayon Lokal Santri Baru (LSB).</li>
                                    <li>Mengikuti kegiatan Bimbingan dan Pembinaan Santri Baru (Binasabar).</li>
                                </ol>
                                <div class="mt-4 bg-amber-50 dark:bg-amber-900/20 border border-amber-100 dark:border-amber-800 rounded-xl p-4 text-[11px] md:text-xs text-amber-800 dark:text-amber-200">
                                    <strong>Catatan:</strong> Pembayaran SPP Santri Baru bisa dilakukan dua tahap. Santri yatim dengan tingkat pendidikan MI s.d. MTs dibebaskan dari semua biaya administrasi pesantren.
                                </div>
                            </div>

                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Fotokopi Kartu Keluarga (KK) 1 lembar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Fotokopi paspor atau Kitas (untuk WNA)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Keuangan & Kebutuhan -->
                        <div class="space-y-6">
                            <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp20.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendidikan</span><span>Rp350.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pembangunan</span><span>Rp200.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Air (Per 1 Tahun)</span><span>Rp30.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Layanan Kesehatan</span><span>Rp40.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Saku</span><span>Rp20.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kegiatan Temporal</span><span>Rp150.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Tanda Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Kunjungan</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kibes</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku dan Kitab</span><span>Rp60.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Songkok Latee</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-base md:text-lg"><span>Total</span><span>Rp1.000.000</span></div>
                                </div>
                            </div>

                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Kebutuhan Santri</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Dua potong baju putih lengan panjang</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Songkok nasional tinggi 8–10 cm</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Perlengkapan pribadi lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE I PUTRI                      -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'latee1'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">

                        <div class="space-y-6">
                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    <li>Nyabis kepada pengasuh dhalem Timur: Nyai Hj. Maghfuroh Ihsan.</li>
                                    <li>Nyabis kepada pengasuh dhalem Barat: Nyai Mas'adah Shahib.</li>
                                    <li>Mengisi formulir dan surat pernyataan kesanggupan mengikuti seluruh tata tertib Pondok Pesantren Annuqayah Latee I.</li>
                                    <li>Menuju lokasi blok santri baru PP. Annuqayah Latee I.</li>
                                </ol>
                            </div>

                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Fotokopi Kartu Keluarga (KK) 1 lembar</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Foto orang tua/wali ukuran 2×3 (2 lembar)</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Fotokopi paspor atau Kitas (untuk WNA)</li>
                                </ul>
                                <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-3">Foto wali dibutuhkan untuk membuat kartu mahram (contoh: foto bapak 2 lembar, foto ibu 2 lembar, foto saudara 2 lembar).</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Gedung</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Air (0/Bln)</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Listrik (0/Bln)</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Biaya Kegiatan</span><span>Rp0</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Doa-Doa</span><span>Rp25.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Pulang Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Santri</span><span>Rp7.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Perpustakaan</span><span>Rp7.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Mahram</span><span>Rp3.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kerudung Almamater</span><span>Rp40.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Bros Almamater</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Bimbingan Mengaji</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Intisari Pegon</span><span>Rp13.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Mukena dan Sajadah Almamater</span><span>Rp190.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Al-Qur'an Qudusy</span><span>Rp80.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Yanbu'a</span><span>Rp55.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-base md:text-lg"><span>Total</span><span>Rp500.000</span></div>
                                </div>
                            </div>

                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Kebutuhan Santri</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Lemari ukuran maksimal 120×60 cm</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Kotak makan/piring dan botol air/tumbler</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Mukena terusan warna putih polos</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Sejadah ukuran lebar maksimal 50 cm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE II PUTRI                     -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'latee2'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">

                        <div class="space-y-6">
                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Administrasi Pesantren</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    <li>Sowan kepada Pengasuh Pondok Pesantren Annuqayah Latee II dengan diantar oleh wali atau wakil wali.</li>
                                    <li>Menaati semua tata tertib Pondok Pesantren Annuqayah Latee II dan ketentuan lain yang ditetapkan oleh Pesantren ditandai dengan mengisi Surat Pernyataan Menaati Tata Tertib Latee II.</li>
                                    <li>Mendaftar secara administratif di Kantor Pondok Pesantren Annuqayah Latee II dengan memenuhi persyaratan:
                                        <ul class="ml-5 md:ml-6 mt-2 space-y-1 list-disc list-inside text-[11px] md:text-xs">
                                            <li>Mengisi formulir pendaftaran yang telah disediakan.</li>
                                            <li>Menyerahkan fotokopi Kartu Keluarga (KK) 1 lembar.</li>
                                            <li>Membawa pas foto santri: 3×4 1 lembar, wali santri (Bapak & Ibu): 2×3 1 lembar.</li>
                                            <li>Melunasi keuangan santri.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>

                            <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Kaidah Busana</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Mukena terusan putih dan sajadah kecil.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Kerudung: menggunakan ciput yang menutup rambut, tidak transparan, menutupi dada dan bahu.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Baju: jumlah disesuaikan tingkat pendidikan (SLTP/SLTA/PT), di bawah pinggul, tidak membentuk lekuk tubuh, tidak transparan, tidak berbahan kaos, tidak berlengan seperempat/seperdelapan.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Kaos berlengan panjang.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Rok tidak transparan, bukan rok span, bukan rok belahan, bukan berbahan kaos.</li>
                                    <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Sandal tinggi 3 cm (belakang) dan 1,5 cm (depan).</li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pendaftaran</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Mahram</span><span>Rp5.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Bepergian</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Perpustakaan</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kartu Santri</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku SKIA</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku al-Adzkar</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Buku Tatib</span><span>Rp8.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kamus Mini Bahasa Madura</span><span>Rp6.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Baju Almamater</span><span>Rp250.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Jilbab Almamater</span><span>Rp35.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Bros Almamater</span><span>Rp10.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Lemari</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Pembangunan</span><span>Rp240.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kebersihan 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Listrik 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Air 1 Tahun</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kesehatan 1 Tahun</span><span>Rp50.000</span></div>
                                    <div class="flex justify-between py-1 border-b border-white/10"><span>Kegiatan Intensif</span><span>Rp100.000</span></div>
                                    <div class="flex justify-between py-3 mt-2 border-t-2 border-white/30 font-bold text-base md:text-lg"><span>Total</span><span>Rp1.200.000</span></div>
                                </div>
                            </div>

                            <div class="bg-amber-50 dark:bg-amber-900/20 border border-amber-100 dark:border-amber-800 rounded-3xl p-5 md:p-6">
                                <h4 class="text-xs md:text-sm font-bold text-amber-800 dark:text-amber-200 mb-2">Catatan Penting</h4>
                                <ul class="space-y-1.5 text-[11px] md:text-xs text-amber-700 dark:text-amber-300">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Administrasi Madrasah Diniyah dilakukan setelah menyelesaikan administrasi pesantren.</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Keluarga santri baru diperbolehkan mengantarkan santri dengan dua orang pendamping (sangat dianjurkan Bapak dan Ibu).</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">•</span> Waktu mengunjungi santri hanya pada hari Kamis dan Jumat, batas akhir pukul 16.30 WIB.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan Umum -->
                <div class="reveal mt-10 md:mt-12 bg-slate-50 dark:bg-slate-800/40 border border-slate-200 dark:border-slate-700 rounded-3xl p-5 md:p-8">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-brand-500 dark:text-brand-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h4 class="text-sm md:text-base font-bold text-slate-900 dark:text-white mb-1">Informasi Lebih Lanjut</h4>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Untuk pertanyaan seputar pendaftaran, silakan hubungi Sekretariat Pondok Pesantren Annuqayah Latee atau datang langsung ke kantor pesantren pada jam kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: CTA                                   -->
        <!-- ============================================ -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Siap Menjadi Santri Baru?</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Lengkapi persyaratan dan ikuti prosedur pendaftaran sesuai kompleks yang Anda pilih. Kami tunggu kehadiran Anda.</p>
                <flux:button variant="primary" size="lg" href="{{ route('contact') }}" icon-trailing="arrow-right">
                    Hubungi Kami
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
