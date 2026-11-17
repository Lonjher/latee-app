<x-layouts::guest title="Pendidikan Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Pendidikan — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Madrasah Diniyah<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Latee II Putri</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Program unggulan berbasis agama dengan jenjang I'dadiyah, Awwaliyah, Wustha, dan Ulya. Seluruh santri wajib mengenyam pendidikan madrasah diniyah.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Pendidikan -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar: redupkan di dark mode --}}
                    <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop"
                        alt="Suasana Belajar Madrasah Diniyah Latee II"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Kegiatan belajar-mengajar kitab kuning di Madrasah Diniyah Annuqayah Latee II.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sejarah & Dinamika -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="sejarah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Sejarah</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Dinamika Pengembangan Madrasah Diniyah</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan pada <strong class="text-slate-900 dark:text-white">1996 M</strong>, jenjang madrasah diniyah di Latee II mengalami dinamika pengembangan yang cukup progresif sesuai tuntutan zaman. Dari jenjang Awwaliyah, pada pertengahan tahun 2002 didirikan jenjang Wustha sebagai lanjutannya.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Pada tahun 2008 didirikan juga jenjang <strong class="text-slate-900 dark:text-white">I'dadiyah</strong> sebagai respon bagi santri yang belum mampu masuk di jenjang Awwaliyah. Yang terakhir, pada <strong class="text-slate-900 dark:text-white">2012</strong> didirikan kelas khusus yang disebut <strong class="text-slate-900 dark:text-white">Kelas Mumtaz</strong> untuk mewadahi santri pilihan dan mempunyai kemampuan baca kitab yang mumpuni.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Kelas khusus ini kemudian diubah menjadi jenjang kelas <strong class="text-slate-900 dark:text-white">Ulya</strong> sebagai lanjutan dari kelas Wustha.</p>
                    </div>
                    <div class="reveal-right bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Durasi & Sistem</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Durasi belajar-mengajar adalah <strong class="text-slate-900 dark:text-white">dua jam</strong> dengan 2 materi setiap malamnya, dimulai setelah hadiran Maghrib sampai jam 20.15.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Sistem kenaikan kelas ditentukan nilai raport dari akumulasi ujian tulis (Awwaliyah & Wustha) serta ujian lisan (Ulya).</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Tiga nilai teratas per semester akan menjadi bintang pada setiap kelas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Empat Jenjang -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="jenjang">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Jenjang</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Empat Jenjang Pendidikan</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    @foreach ([
                        ['I\'dadiyah', 'Kelas paling dasar dari empat jenjang. Persiapan masuk Awwaliyah yang dituntut bisa baca-tulis Arab. Materi dasar: menulis, membaca huruf Arab, dan fikih. Terdiri dari empat kelas hasil tes masuk santri baru dan tes kelayakan naik kelas.'],
                        ['Awwaliyah', "Enam kelas (1–6). Metode pengajaran bebas, rata-rata bandongan. Jumlah materi berbeda: kelas 1–3 (10 materi), kelas 4 (9), kelas 5 (8), kelas 6 (7). Materi: Tauhid (Minahu as-Saniyah), Akhlak (Ta'lim al-Muta'allim, Muraqi al-'Ubudiyah), Fikih (Fath al-Qarib), Tajwid, Hadits (Riyad as-Shalihin), Imla', Tarikh (Nur al-Yaqin), Sharraf (Kaylani), Nahwu ('Imrithi)."],
                        ['Wustha', 'Jenjang lanjutan dari Awwaliyah, didirikan pada pertengahan tahun 2002. Materi lebih mendalam dengan kitab-kitab yang lebih tinggi.'],
                        ['Ulya', 'Awalnya kelas Mumtaz (2012) untuk santri pilihan dengan kemampuan baca kitab mumpuni, berorientasi pengkaderan dan pendelegasian lomba kitab. Kemudian diubah menjadi jenjang Ulya sebagai lanjutan Wustha. Ujian akhir berupa ujian lisan.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i + 1) * 100) }} bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                            <h3 class="text-lg md:text-xl font-bold text-brand-700 dark:text-brand-300 mb-3">{{ $item[0] }}</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Bergabunglah dengan Madrasah Diniyah Latee II</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Dapatkan pendidikan diniyah yang komprehensif dengan empat jenjang terstruktur.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
