<x-layouts::guest title="Unit Usaha Latee II Putri">

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
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Unit Usaha — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Koperasi Jaya<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">& Rias Manten</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Unit usaha untuk menambah pemasukan PPA Latee II dan menunjang kebutuhan santri.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Unit Usaha -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1200&auto=format&fit=crop"
                        alt="Kegiatan Unit Usaha"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Koperasi Jaya dan Rias Manten menjadi unit usaha andalan Latee II Putri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Koperasi Jaya -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="kopja">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Koperasi Jaya</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kopja</h2>
                </div>

                <div class="reveal bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8">
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Didirikan untuk menambah pemasukan PPA Latee II dan menunjang kebutuhan santri. Dengan bilik yang relatif sempit, Koperasi Jaya melengkapi kebutuhan santri: peralatan mandi, alat sekolah, peralatan makan, aksesoris perempuan, snack, dan aneka kebutuhan lainnya.</p>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Menerima kerjasama dari alumni atau tetangga yang ingin menjual produk di pesantren, dengan prosedur: izin pengasuh, lapor ketua pengurus, hubungi pengurus koperasi, sistem bagi hasil.</p>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Omzet cukup membantu keuangan Latee II. Setiap akhir bulan, Koperasi Jaya rutin menyetor ke bendahara PPA Latee II minimal <strong class="text-slate-900 dark:text-white">Rp2 juta per bulan</strong>.</p>
                </div>
            </div>
        </section>

        <!-- Rias Manten -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="rias-manten">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Rias Manten</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Paket Busana & Make Up</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Pengasuh PPA Latee II mewanti-wanti santri yang akan menikah agar tetap dalam bingkai syariat Islam. Salah satu imbauannya: pakaian tidak vulgar dan menutup aurat.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">PPA Latee II menyediakan paket busana manten dan make up seperti wedding organizer (WO) tanpa dekorasi panggung maupun kursi manten. Ini menjadi salah satu usaha yang menambah pemasukan kas pesantren.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Santri, alumni, maupun masyarakat umum dipersilakan memakai jasa rias manten. Didukung perias ahli hasil kaderisasi turun-temurun di Latee II.</p>
                    </div>
                    <div class="reveal-right bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40">
                        <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Biaya</h3>
                        <ul class="space-y-2 text-xs md:text-sm text-brand-50">
                            @foreach ([
                                ['Make up wajah', 'Rp150.000'],
                                ['Sepaket baju pasutri (gaun lama)', 'Rp250.000'],
                                ['Sepaket baju pasutri (gaun baru)', 'Rp350.000'],
                                ['Make up lengkap + gaun + melati (lama)', 'Rp650.000'],
                                ['Make up lengkap + gaun + melati (baru)', 'Rp800.000'],
                                ['Ganti baju pasutri', 'Rp200.000'],
                                ['Ganti make up', 'Rp150.000'],
                                ['Melati pasutri', 'Rp250.000 – Rp300.000'],
                            ] as $i => $item)
                                <li class="flex justify-between border-b border-white/10 py-1 {{ $i === 7 ? 'border-b-0' : '' }}">
                                    <span>{{ $item[0] }}</span>
                                    <span class="font-semibold">{{ $item[1] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Dukung Kemandirian Ekonomi Pesantren</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Jadilah bagian dari ekosistem kewirausahaan Latee II Putri yang melahirkan generasi mandiri dan amanah.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
