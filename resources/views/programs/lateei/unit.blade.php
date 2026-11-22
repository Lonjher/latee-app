<x-layouts::guest title="Unit Usaha Latee I Putri">

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
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Unit Usaha — Latee I Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Kemandirian<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">Ekonomi Pesantren</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Unit usaha yang dikembangkan untuk memenuhi kebutuhan operasional pondok dan membiayai pembangunan gedung, dikelola langsung oleh santri aktif.</p>
                </div>
            </div>
        </section>

        <!-- Filosofi -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300" id="filosofi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-12 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">Dua Kategori Unit Usaha</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="bg-white/10 rounded-2xl p-5 md:p-6 border border-white/20">
                            <h3 class="font-bold text-brand-100 mb-2 text-sm md:text-base">Kebutuhan Operasional Pondok</h3>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Unit usaha yang dikelola untuk memenuhi kebutuhan operasional sehari-hari pesantren.</p>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-5 md:p-6 border border-white/20">
                            <h3 class="font-bold text-brand-100 mb-2 text-sm md:text-base">Pembiayaan Pembangunan Gedung</h3>
                            <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Unit usaha yang dikelola untuk membiayai kebutuhan pembangunan infrastruktur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Unit Usaha Operasional -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="operasional">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Operasional</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Andalas KUC & Koperasi</h2>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Unit Usaha Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Andalas KUC menjadi tombak penggerak sirkulasi perekonomian di Latee I Putri.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Andalas Koperasi Unit Campus (KUC)</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Dikelola langsung oleh pengurus, menjadi tombak sirkulasi perekonomian operasional. Setiap akhir bulan, seluruh divisi menyetorkan keuangannya; dikelola bendahara untuk membayar listrik, air, sarana prasarana, dan biaya acara.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-3">Menyediakan peralatan mandi, aneka snack, softdrink, nasi bungkus, dan jajanan. Tenaga kerja: santri aktif yang diangkat di Div. Koperasi (1 koordinator + 4 anggota).</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Gedung koperasi dipindah ke bangunan baru tahun <strong class="text-slate-900 dark:text-white">2016</strong>, berlokasi di sebelah barat Perpustakaan, berdempetan dengan kamar Al-Qamary 02 dan Ruang Komunitas.</p>
                    </div>
                    <div class="reveal-right glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Pembatasan Kebutuhan</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Berdasarkan rapat pengurus yang dibimbing Nyai Hani'ah Muqsith, pemenuhan kebutuhan dibatasi untuk mengontrol tingkat konsumsi dan meminimalisir gaya hidup hedon (isyrof). Barang yang dijual dirampingkan hanya yang benar-benar dibutuhkan santri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Unit Usaha Pembangunan -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="pembangunan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Pembangunan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Unit Usaha Pembiayaan Gedung</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['Andalas Kantin 1', 'Kantin pertama milik PPA Latee 1, diresmikan <strong class="text-slate-900 dark:text-white">2018</strong>. Pendapatan disetorkan langsung kepada pengasuh untuk biaya pembangunan. Dikelola sepasang suami istri abdi dhalem.'],
                        ['Andalas Kantin 2', 'Menyediakan kebutuhan pangan santri, dilengkapi kebutuhan santri putra karena lokasinya di jalur lalu-lintas MAT dan SMA. Beroperasi sejak akhir 2018. Dikelola sepasang suami istri alumni.'],
                        ['Andalas Toko Baju', 'Menyediakan sandang: pakaian, sarung, sepatu, dan kopyah. Diresmikan <strong class="text-slate-900 dark:text-white">2016</strong> bersamaan dengan gedung diniyah. Tenaga kerja: santri abdi dhalem putra.'],
                        ['Andalas Fotocopy 1', 'Baru digagas dan gedung masih dalam penyelesaian. Bergerak di bidang fotocopy untuk masyarakat Brumbung. Tenaga kerja: alumni PPA Latee 1.'],
                        ['Andalas Fotocopy 2', 'Melayani fotocopy untuk santri PPA Latee 1. Beroperasi sejak <strong class="text-slate-900 dark:text-white">Februari 2020</strong>, sementara memakai ruang multifungsi di samping kantor PPA. Tenaga kerja: santri PPA Latee 1 didampingi pengurus.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 3) + 1) * 100 }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 md:p-6">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{!! $item[1] !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Belajar Berwirausaha Sejak Dini</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Jadilah bagian dari ekosistem kewirausahaan pesantren Latee I Putri yang melahirkan generasi mandiri dan amanah.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
