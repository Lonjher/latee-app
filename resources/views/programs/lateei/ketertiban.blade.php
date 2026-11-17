<x-layouts::guest title="Ketertiban & Konseling Latee I Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Ketertiban & Konseling — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        KAMTIB &<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Kedisiplinan Santri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Keamanan dan Ketertiban (KAMTIB) merupakan elemen penting dalam kepengurusan PPA Latee 1, membimbing santri untuk berbudi baik dan hidup disiplin.</p>
                </div>
            </div>
        </section>

        <!-- KAMTIB -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kamtib">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">KAMTIB</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Sejarah & Fungsi</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Ketertiban dan Konseling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">KAMTIB bertugas menjaga stabilitas dan ketenteraman lingkungan pesantren.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Sejarah Kepengurusan</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Dibentuk pertama kali pada tahun 1990-an. Pada masa Ustazah Ma'shumah Siraj (2002-2003) bernama Pengurus Keamanan. Pada masa Ustazah Layyinah Sajjad (2003-2004) bernama Ketentraman dan Kedisiplinan. Sejak periode 2008-2009 hingga sekarang bernama <strong class="text-slate-900 dark:text-white">Pengurus Keamanan dan Ketertiban</strong>.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Struktural: terdiri dari beberapa anggota dan koordinator. Sekretaris, inteligen, humas, dan pengembangan SDM ditangani bersama (freelance). Membawahi semua pengurus keamanan blok.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Fungsi & Pendekatan</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Menjaga PPA Latee 1 dari segala hal yang mengganggu kestabilan aktivitas pesantren. Menetapkan tata tertib yang disepakati pengurus dan disetujui pengasuh. Mengarahkan santri berperilaku baik dan sopan.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Pendekatan: <strong class="text-slate-900 dark:text-white">emosional</strong> (relaksasi, heart to heart), <strong class="text-slate-900 dark:text-white">spiritual</strong>, dan <strong class="text-slate-900 dark:text-white">intelektual</strong> (ceramah malam Jumat). Sanksi fisik dan non-fisik disesuaikan jenis pelanggaran.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rolling Kamar -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="rolling">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Rolling Kamar</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Program Tahunan KAMTIB</h2>
                </div>
                <div class="reveal bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Program setiap tahun yang dilaksanakan pada awal periode. Telah berjalan sejak masa Ustazah Hananah Al-Azmy (2006-2007). Awalnya untuk merangsang kepekaan bersosial santri dan mengurangi pengaruh kurang baik antar teman. Sejak 2019, rolling kamar cukup dilakukan bagi sebagian kamar yang dirasa perlu.</p>
                </div>
            </div>
        </section>

        <!-- Izin Pulang -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="izin-pulang">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Izin Pulang</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Prosedur Perizinan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-4 pb-2 border-b border-slate-200 dark:border-slate-700">Sebab Sakit</h3>
                        <ol class="space-y-2 text-[11px] md:text-xs text-slate-600 dark:text-slate-300 list-decimal list-inside">
                            <li>Surat rekomendasi pulang dari Div. Kesehatan.</li>
                            <li>Diajukan ke ketua pengurus; jika izin, pengurus kamar menelfon keluarga.</li>
                            <li>Wali menyetorkan kartu mahram dan menandatangani kolom wali pada kartu pulang.</li>
                            <li>Meminta tanda tangan pengurus KAMTIB dan mengisi data pulang.</li>
                            <li>Saat kembali, santri dan wali mengisi kolom tanda tangan pada data pulang-kembali.</li>
                            <li>Jika belum sembuh, wali dapat mengizinkan ulang via telepon atau langsung ke kantor.</li>
                        </ol>
                    </div>
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-4 pb-2 border-b border-slate-200 dark:border-slate-700">Kepentingan Pribadi/Keluarga</h3>
                        <ol class="space-y-2 text-[11px] md:text-xs text-slate-600 dark:text-slate-300 list-decimal list-inside">
                            <li>Kepentingan yang diperbolehkan dalam undang-undang PPA Latee 1.</li>
                            <li>Wali menyetorkan kartu mahram dan menandatangani kolom wali.</li>
                            <li>Sowan kepada pengasuh (dhalem timur dan barat).</li>
                            <li>Meminta tanda tangan KAMTIB, mengisi data pulang, pulang memakai kerudung dan bros almamater.</li>
                            <li>Kembali memakai kerudung almamater dan mengisi kolom tanda tangan.</li>
                            <li>Jika berhalangan kembali, wali harus mengizinkan kembali kepada pengurus dan pengasuh langsung.</li>
                        </ol>
                    </div>
                    <div class="reveal delay-300 bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                        <h3 class="text-base md:text-lg font-bold mb-4 pb-2 border-b border-white/20">Libur Pesantren</h3>
                        <ol class="space-y-2 text-[11px] md:text-xs text-brand-50 list-decimal list-inside">
                            <li>Melunasi seluruh kewajiban finansial dan non-finansial.</li>
                            <li>Menyetorkan kartu pulang ke kantor pesantren.</li>
                            <li>Wali menyetorkan kartu mahram (atau KTP jika lupa).</li>
                            <li>Sowan kepada pengasuh bersama seluruh santri.</li>
                            <li>Pulang memakai kerudung dan bros almamater.</li>
                            <li>Kembali memakai kerudung almamater dan mengisi kolom tanda tangan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Lingkungan yang Aman & Mendukung</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kami percaya ketertiban dan kepedulian adalah fondasi tumbuh kembang santri yang optimal.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
