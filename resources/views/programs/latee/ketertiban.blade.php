<x-layouts::guest title="Ketertiban dan Konseling">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Aurora Glow Orbs --}}
            <div class="glow-hero-emerald w-[500px] h-[500px] -top-20 -left-20 rounded-full"></div>
            <div class="glow-hero-sapphire w-[500px] h-[500px] -bottom-20 -right-20 rounded-full"></div>
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Ketertiban & Konseling</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Harmoni dalam<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">Kedisiplinan & Kepedulian</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Membangun lingkungan pesantren yang aman, tertib, dan penuh perhatian melalui pendekatan bimbingan konseling serta penegakan aturan yang humanis.</p>
                </div>
            </div>
        </section>

        <!-- Satgas BK -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="satgas-bk">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Satgas BK</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Bimbingan & Konseling</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-3xl">Satuan Tugas Bimbingan dan Konseling (BK) berada di bawah struktur Pengurus Harian. BK dibentuk sebagai upaya memberikan solusi psikologis bagi santri yang membutuhkan bimbingan konseling atau tempat curhat yang nyaman, layaknya bersama orang tua mereka di rumah.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Konseling dan Keamanan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Satgas BK dan KAMTIB bekerja bersama menciptakan lingkungan pesantren yang aman, tertib, dan penuh perhatian.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Program BK</h3>
                        <ul class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            <li class="flex items-start gap-3"><span class="text-brand-500 dark:text-brand-400 mt-1 font-bold">1.</span><span>Pembinaan bagi siswa yang bermasalah.</span></li>
                            <li class="flex items-start gap-3"><span class="text-brand-500 dark:text-brand-400 mt-1 font-bold">2.</span><span>Rehabilitasi bagi santri yang memiliki masalah psikis yang cukup.</span></li>
                            <li class="flex items-start gap-3"><span class="text-brand-500 dark:text-brand-400 mt-1 font-bold">3.</span><span>Motivasi ala santri via mading (status BK).</span></li>
                        </ul>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-4 italic">Program-program ini bersifat kondisional, mengingat umur BK yang masih muda.</p>
                    </div>

                    <div class="reveal-right bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                        <h3 class="text-lg md:text-xl font-bold mb-3">Program Non-Formal</h3>
                        <p class="text-xs md:text-sm text-brand-50 leading-relaxed mb-4">BK juga berperan sebagai teman curhat santri sekaligus orang tua mereka di pesantren. Program ini menjadi wadah untuk menampung curahan santri terkait serba-serbi masalah kecil kehidupan sehari-hari, disertai solusi dan motivasi yang membuat mereka kembali semangat.</p>
                        <div class="bg-white/10 rounded-xl p-4 border border-white/20">
                            <h4 class="text-[11px] md:text-xs font-bold text-brand-100 mb-1">Tenaga Asuh</h4>
                            <p class="text-[11px] md:text-xs text-brand-50">Terdiri dari berbagai elemen pengurus dan santri senior yang dianggap mampu mengemban tugas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KAMTIB -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="kamtib">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8 md:mb-12">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">KAMTIB</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Keamanan dan Ketertiban</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-3xl">Secara fungsional, Kamtib berperan aktif dalam penertiban serta penerapan regulasi yang ada dalam Undang-undang serta peraturan tak tertulis Pondok Pesantren Annuqayah Latee, serta menjaga keamanan pondok dari segala hal yang bisa mengganggu eksistensinya.</p>
                </div>

                <div class="reveal bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 shadow-sm border border-slate-100 dark:border-slate-800">
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Secara nilai, peran Kamtib tak jauh berbeda dengan peran BK. Atas dasar itulah, departemen ini menjadi salah satu elemen penting di samping elemen lainnya dalam menjaga stabilitas dan ketenteraman lingkungan pesantren.</p>
                </div>
            </div>
        </section>

        <!-- Prosedur Pulang Santri -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="prosedur-pulang">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Prosedur</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Prosedur Perizinan Pulang Santri</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-xl mx-auto">Ketentuan dan alur perizinan pulang bagi santri Annuqayah Latee, baik dalam keadaan sakit maupun keperluan lainnya.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    <div class="reveal delay-100 glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-4 pb-2 border-b border-slate-200 dark:border-slate-700">Pulang Sakit</h3>
                        <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                            <li>Wali meminta memo kesehatan ke Balai Kesehatan Tradisional (BKT).</li>
                            <li>Meminta rekomendasi pengurus rayon.</li>
                            <li>Meminta rekomendasi pengurus Keamanan dan Ketertiban (Kamtib).</li>
                            <li>Santri diberikan izin pulang selama <strong class="text-slate-900 dark:text-white">3 hari</strong>. Lebih dari itu, wali harus memperpanjang dengan membawa surat keterangan dari dokter setempat.</li>
                            <li>Untuk santri di luar pulau Madura, perpanjangan dapat dilakukan melalui telepon ke kantor Kamtib.</li>
                        </ol>
                    </div>
                    <div class="reveal delay-200 glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-4 pb-2 border-b border-slate-200 dark:border-slate-700">Pulang Selain Sakit</h3>
                        <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                            <li>Santri meminta memo hafalan ke kantor Kamtib.</li>
                            <li>Santri menyetorkan hafalan wajib kepada pengurus yang telah ditentukan sesuai tingkatan kelas diniyah.</li>
                            <li>Santri meminta memo rayon bersama wali.</li>
                            <li>Santri diberikan izin pulang selama <strong class="text-slate-900 dark:text-white">1 hari</strong>. Lebih dari itu harus izin kepada pengasuh.</li>
                        </ol>
                    </div>
                    <div class="reveal delay-300 bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                        <h3 class="text-base md:text-lg font-bold mb-4 pb-2 border-b border-white/20">Pulang Kifayah</h3>
                        <ol class="space-y-3 text-xs md:text-sm text-brand-50 list-decimal list-inside">
                            <li>Santri diberikan izin pulang dengan syarat <strong>diparani oleh wali</strong>.</li>
                            <li>Santri diberikan izin pulang selama <strong>1 hari</strong>. Lebih dari itu harus izin kepada pengasuh.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Lingkungan yang Aman & Mendukung</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kami percaya bahwa ketertiban dan kepedulian adalah fondasi tumbuh kembang santri yang optimal. Mari menjadi bagian dari komunitas yang harmonis ini.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
