<x-layouts::guest title="Kesehatan dan Lingkungan Hidup">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Kesehatan & Lingkungan Hidup</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Sehat Jasmani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Lingkungan Asri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Komitmen Annuqayah Latee dalam menjaga kesehatan santri dan melestarikan lingkungan hidup melalui program preventif, kuratif, dan partisipatif.</p>
                </div>
            </div>
        </section>

        <!-- Kesehatan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kesehatan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Kesehatan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pelayanan & Pola Hidup Sehat</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-3xl">Dalam upaya meningkatkan kesadaran hidup sehat dan peka terhadap hal-hal yang membahayakan diri serta lingkungan sekitar, PPA Latee memiliki serangkaian langkah nyata. Komitmen memberikan pelayanan terbaik bagi seluruh santri menjadi prioritas utama.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Senam dan Hidup Sehat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Senam santri, penanaman TOGA, dan kerja bakti demi terciptanya lingkungan yang sehat dan asri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ([
                        ['title' => 'Senam Santri', 'desc' => 'Diadakan di depan musala setiap Jumat pagi setelah kerja bakti. Formatnya digilir per blok; wajib bagi blok yang mendapat giliran, dan terbuka bagi blok lain. Bertujuan menjaga kebugaran dan kesehatan tubuh.'],
                        ['title' => 'Pembuatan Jamu Tradisional', 'desc' => 'Mengolah kunyit, jahe, dan temu lawak menjadi ekstrak jamu tumbuk kering siap saji agar lebih awet. Di Latee II, pembuatan bersifat wajib dan bergiliran setiap blok dengan bahan 1–2 kg per pekan. Di Latee I, kegiatan ini berlangsung tiga kali setahun dan menyediakan jamu stamina, temu lawak, serta nona wangi.'],
                        ['title' => 'Penyuluhan Kesehatan', 'desc' => 'Kegiatan rutin tahunan dengan mengundang pembicara ahli sesuai tema. Topik yang pernah dibahas meliputi kesehatan reproduksi, kebersihan diri dan lingkungan, hingga tema kecantikan. Tujuannya menambah wawasan dan menumbuhkan kesadaran santri akan pentingnya kesehatan.'],
                        ['title' => 'Kontrol Kebersihan Kuku', 'desc' => 'Dilakukan setiap setengah bulan, dan lebih sering menjelang berangkat sekolah atau liburan. Santri dilarang memanjangkan kuku kecuali satu jari. Pewarnaan kuku (henna/kutek) tidak diperbolehkan kecuali untuk kepentingan menikah.'],
                        ['title' => 'Penanaman TOGA', 'desc' => 'Tanaman Obat Keluarga ditanam untuk memudahkan santri mendapatkan obat herbal siap saji seperti kunyit, daun beluntas, dan cocor bebek. Di Latee I, tanaman yang dipelihara antara lain air mata ibu, pegagan, serta sirih biasa dan sirih merah.'],
                        ['title' => 'Obat Tradisional & Generik', 'desc' => 'Menyediakan obat herbal, tradisional, dan generik untuk penanganan pertama santri sakit sebelum dirujuk ke poskestren atau puskesmas. Jenis obat disesuaikan dengan keluhan umum seperti sakit kepala, demam, sakit perut, muntaber, dan sakit gigi. Tersedia juga kotak P3K untuk luka.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $item['title'] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Prosedur -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="prosedur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Prosedur</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Alur Penanganan Santri Sakit</h2>
                </div>

                <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                        <h3 class="font-bold text-slate-900 dark:text-white mb-2">Penanganan Awal</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Kantor pesantren menyediakan obat tradisional, generik, dan herbal untuk diambil sesuai keluhan santri.</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                        <h3 class="font-bold text-slate-900 dark:text-white mb-2">Rujukan ke Poskestren</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Jika dalam beberapa hari kondisi tidak membaik, santri dirujuk ke poskestren atau puskesmas terdekat. Poskestren menyediakan layanan rawat jalan dan rawat inap 24 jam.</p>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 text-center">
                        <div class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                        <h3 class="font-bold text-slate-900 dark:text-white mb-2">Rekomendasi Pulang</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">Santri baru diperbolehkan pulang apabila seluruh prosedur telah dilalui dan kondisi sakit tetap atau semakin parah, dibuktikan dengan memo resmi dari pengurus kesehatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lingkungan Hidup -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="lingkungan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Lingkungan Hidup</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kebersihan & Keindahan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-3xl">Kebersihan erat kaitannya dengan kesehatan dan merupakan sebagian dari iman. Hubungan baik antara manusia dan lingkungan adalah wujud manusia sebagai khalifah fil ardh. Oleh karena itu, pengurus membentuk Divisi Kebersihan dan Keindahan untuk menciptakan serta memelihara lingkungan yang asri.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach ([
                        ['title' => 'Pilah Sampah Organik & Anorganik', 'desc' => 'Pesantren menyediakan wadah khusus untuk botol plastik dan kardus. Hasil pemilahan dimanfaatkan kembali, dan keuntungannya masuk ke kas pesantren. Di Latee I, sosialisasi dilakukan agar santri membiasakan membuang sampah sesuai tempatnya.'],
                        ['title' => 'Kerja Bakti', 'desc' => 'Dilaksanakan setiap Jumat pagi untuk membersihkan seluruh lingkungan pesantren, termasuk area dhalem. Kegiatan ini dikoordinir oleh Divisi Kebersihan guna menciptakan lingkungan yang bersih dan asri.'],
                        ['title' => 'Menguras Kolam & Kamar Mandi', 'desc' => 'Di Latee II dilakukan setiap setengah bulan, sedangkan di Latee I setiap bulan dengan melibatkan pengurus pusat dan pengurus blok. Tujuannya memelihara kebersihan bak kolam dan kamar mandi.'],
                        ['title' => 'Lomba Kebersihan & Kerapian Kamar', 'desc' => 'Bentuk apresiasi bagi santri yang konsisten menjaga kebersihan kamar. Pengontrolan dilakukan setiap Kamis (Latee II) atau secara kondisional (Latee I). Pemenang diumumkan pada penutupan aktivitas pesantren.'],
                        ['title' => 'Piket Harian', 'desc' => 'Setiap kamar mendapat jadwal piket untuk menyapu halaman, membuang sampah, serta membersihkan kamar mandi dan kolam. Untuk memastikan pelaksanaannya, dibentuk "piket keliling" dari pengurus non-divisi kebersihan.'],
                        ['title' => 'Komunitas Peduli Lingkungan (KPL)', 'desc' => 'Dibentuk Januari 2020 di Latee I di bawah Divisi Kebersihan dan Keindahan. Kegiatannya meliputi memilah sampah, membersihkan jalanan umum di Annuqayah Putri, dan memulung sampah di area PPA Latee I.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $item['title'] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal delay-400 mt-8 bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                    <h3 class="text-lg md:text-xl font-bold mb-3">Kebijakan Pengurangan Sampah Plastik</h3>
                    <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Penanganan masalah sampah terus diupayakan melalui aturan baru: membatasi penggunaan plastik, mewajibkan membawa kotak nasi dan botol air pribadi, melarang pembalut sekali pakai, serta mengimbau santri membawa tas sendiri saat berbelanja. Semua ini demi menciptakan lingkungan yang higienis dan berkelanjutan.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Wujudkan Santri Sehat, Lingkungan Lestari</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah dengan kami dan rasakan lingkungan pesantren yang bersih, sehat, dan mendukung tumbuh kembang santri secara optimal.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
