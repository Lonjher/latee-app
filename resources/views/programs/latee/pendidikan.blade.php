<x-layouts::guest title="Program Pendidikan">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Pendidikan</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Membentuk Santri<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Berilmu & Berakhlak</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Berbagai program pendidikan dirancang untuk mencetak generasi Qur'ani yang menguasai ilmu agama, kitab kuning, dan amaliah ibadah sehari-hari.</p>
                </div>
            </div>
        </section>

        <!-- Madrasah Diniyah -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="diniyah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Madrasah Diniyah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Jantung Pendidikan Annuqayah Latee</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" alt="Suasana Belajar Kitab Kuning" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Kegiatan belajar mengajar kitab kuning di Madrasah Diniyah Annuqayah Latee.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-12">
                    <div class="reveal-left space-y-6">
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Sejarah</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Madrasah Diniyah adalah jantung bagi Annuqayah Latee. Alm. KH. Ahmad Basyir AS pernah menegaskan bahwa jika tidak mau sekolah diniyah, sebaiknya pamit saja dari Latee. Ditetapkan pada 1 Agustus 1983, Madrasah Diniyah Annuqayah Latee dengan sistem klasikal pun didirikan.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Tingkatan Kelas</h3>
                            <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> 1 kelas tingkat Isti'dadi</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> 6 kelas tingkat Ibtida'i</li>
                            </ul>
                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-3">Pembagian kategori kelas secara umum dibagi menjadi 2: Tingkat Isti'dadi dan Ibtida'i.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Jadwal</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Jadwal masuk Diniyah malam Sabtu sampai malam Kamis, dengan alokasi waktu minimal 45 menit, dimulai pukul 19.30 WIB atau bakda salat witir berjamaah.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Kategori Guru</h3>
                            <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Para Masyayikh di lingkungan Pondok Pesantren Annuqayah</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Guru Senior (mayoritas alumni Annuqayah Latee)</li>
                                <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Guru Junior (santri senior/ustaz yang bermukim)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="reveal-right space-y-6">
                        <div class="bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                            <h3 class="text-lg md:text-xl font-bold mb-4">Program Terbaru</h3>
                            <ul class="space-y-4">
                                <li>
                                    <h4 class="font-bold text-brand-100 text-sm md:text-base">Hafalan Wajib</h4>
                                    <p class="text-[11px] md:text-xs text-brand-50 leading-relaxed">Berangkat dari usulan guru senior dan masyayikh, hafalan diwajibkan sebagai persyaratan naik ke jenjang kelas berikutnya.</p>
                                </li>
                                <li>
                                    <h4 class="font-bold text-brand-100 text-sm md:text-base">Bahtsul Masa'il</h4>
                                    <p class="text-[11px] md:text-xs text-brand-50 leading-relaxed">Wadah bagi murid untuk mengasah khazanah ilmu diniyah dalam menjawab problematika di sekitar, sekaligus dokumentasi Madrasah Diniyah.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Hamdala (Haflatul Imtihan)</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Wadah bagi santri untuk mengasah bakat edukatif dan non-edukatif. Dikemas dalam lomba antar kelas, dilaksanakan akhir tahun setelah ujian semester 2, sebagai evaluasi pengurus. Even ini diparipurnai dengan penutupan, pembagian hadiah, ranking, siswa teladan, sekaligus Temu Wali Santri.</p>
                        </div>
                        <div class="bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Kitab Materi (Contoh)</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-[11px] md:text-xs text-slate-600 dark:text-slate-300">
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Tauhid: 'Aqidatul 'Awam</span>
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Akhlak: Durusul Akhlaq</span>
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Fiqh: Mabadi' al-Fiqhiyyah</span>
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Tajwid: Tuhfatul Athfal</span>
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Nahwu: Alfiyah ibn Malik</span>
                                <span class="bg-white dark:bg-slate-900 p-2 rounded-lg border border-slate-200 dark:border-slate-700">Sharraf: Al-Amtsilah at-Tashrifiyyah</span>
                            </div>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-3">Rincian lengkap kitab materi per tingkatan kelas tersedia di situs resmi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pengajian Al-Quran & Kitab -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="pengajian">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Pengajian Al-Quran & Kitab</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Elemen Vital Kultur Pesantren</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Penekanan untuk bisa membaca Al-Quran dengan fasih dan benar sama pentingnya dengan sekolah Madrasah Diniyah. Begitupun dengan Kitab Turats (Kitab Kuning).</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 flex justify-center">
                    <div class="relative w-full max-w-3xl overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 md:h-72 group">
                        <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?q=80&w=1000&auto=format&fit=crop" alt="Membaca Al-Quran" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/40 dark:bg-black/60 flex items-center justify-center">
                            <p class="text-white font-bold text-base md:text-xl text-center px-6 drop-shadow-md">"Sebaik-baik kalian adalah yang belajar Al-Quran dan mengajarkannya."</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4 border-b border-slate-100 dark:border-slate-800 pb-3">Pengajian Al-Quran</h3>
                        <div class="space-y-4 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Alokasi Waktu</h4><p>Dilaksanakan setelah salat Maghrib berjamaah.</p></div>
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Majlis Santri Lama</h4><p>Dibagi menjadi 4 tingkatan: Mubtadi' (pemula), Mutawassith (menengah), Mutaqaddim (lanjutan), dan Khusus (dibimbing dewan pengasuh).</p></div>
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Majlis Tilawati</h4><p>Ditujukan bagi santri baru yang minim pengetahuan tajwid, fashahah, mad, dan makharijul huruf.</p></div>
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Metode Bimbingan</h4><p>Menggunakan metode Sorogan dan Tadarus, disesuaikan dengan tingkatan majlis.</p></div>
                        </div>
                    </div>

                    <div class="reveal delay-200 bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4 border-b border-slate-100 dark:border-slate-800 pb-3">Pengajian Kitab</h3>
                        <div class="space-y-4 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Jadwal</h4><p>Dilaksanakan dua waktu: Pagi (bakda salat Shubuh) dan Sore (bakda salat Ashar).</p></div>
                            <div>
                                <h4 class="font-bold text-slate-800 dark:text-slate-200 mb-2">Kitab yang Digunakan</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Tafsir Jalalain</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Kifayatul Atqiya'</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Fathul Mu'in</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Riyadhus Shalihin</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Minhajul Qawim</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Ayyuhal Walad</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Ta'limul Muta'allim</span>
                                    <span class="bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full text-[11px] md:text-xs">Nashaihul Ibad</span>
                                </div>
                            </div>
                            <div><h4 class="font-bold text-slate-800 dark:text-slate-200 mb-1">Dewan Pengasuh</h4><p class="text-[11px] md:text-xs">KH. Abd A'la, KH. A. Hanif Hasan, KH. M. Syafi'i Anshari, KH. Muhammad Musthafa Erfan, KH. Moh. Ramdhan, KH. Maimun Syamsuddin, Lora Nubail ibn Hanif Hasan.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Madrasah SKIA -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="skia">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Madrasah SKIA</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pondasi Pemahaman Dasar Agama</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Madrasah SKIA memberikan pemahaman kepada santri baru mengenai isi buku SKIA (Syarat Kecakapan Ibadah Amaliah) yang menjadi pegangan wajib santri.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-8">
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">Materi Pokok</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Buku SKIA berisi pokok dasar agama, ushuluddin, yang terdiri dari ilmu fikih (syariah), tauhid (akidah), akhlak (tasawuf), dan ilmu tajwid serta amaliyah yaumiyah seperti tahlil dan doa-doa penting.</p>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">Sistem Pembelajaran</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Berbentuk klasikal, masuk setiap hari (kecuali Jumat) bakda salat Ashar berjamaah. Kelas dipetakkan berdasarkan jenjang pendidikan formal (SD/SLTP, SLTA, atau Perguruan Tinggi). Wajib diikuti seluruh santri baru selama satu tahun pelajaran (dua semester).</p>
                    </div>
                    <div class="reveal delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300 sm:col-span-2 lg:col-span-1">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3">Program Pendukung</h3>
                        <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Praktek ubudiyah (berwudu, salat wajib dan sunah, amaliyah yaumiyah)</li>
                            <li class="flex items-start gap-2"><span class="text-brand-500 dark:text-brand-400 mt-1">•</span> Praktek mengkafani jenazah</li>
                        </ul>
                    </div>
                </div>

                <div class="reveal delay-400 mt-8 bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40 flex flex-col md:flex-row items-center gap-6 md:gap-8 overflow-hidden relative group">
                    <div class="w-full md:w-1/3 shrink-0 relative overflow-hidden rounded-2xl shadow-md h-48 md:h-56">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" alt="Santri Madrasah SKIA" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="w-full md:w-2/3 relative z-10">
                        <h3 class="text-lg md:text-xl font-bold mb-3">Kelulusan & Harapan</h3>
                        <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Hafalan wajib menjadi syarat utama kelulusan santri di Madrasah SKIA. Dewan guru terdiri dari ustaz-ustaz senior yang dianggap mampu. Dengan adanya Madrasah SKIA, diharapkan santri baru memiliki pemahaman dasar agama yang penting sebagai pondasi kearifan seorang santri.</p>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Siap Bergabung Menjadi Santri?</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dapatkan pendidikan agama yang komprehensif dan lingkungan yang mendukung untuk membentuk generasi Qur'ani.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
