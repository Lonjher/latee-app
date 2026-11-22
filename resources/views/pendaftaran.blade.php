<x-layouts::guest title="Pendaftaran Santri Baru">

    @include('partials.header')

    <main x-data="{ activeTab: 'putra' }">

        <!-- ============================================ -->
        <!-- BEGIN: Page Hero                             -->
        <!-- ============================================ -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Glow Hero: Hijau Zamrud & Biru Safir --}}
            <div class="glow-hero-emerald w-[450px] h-[450px] -top-20 -left-20 rounded-full"></div>
            <div class="glow-hero-sapphire w-[450px] h-[450px] -bottom-20 -right-20 rounded-full"></div>

            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">
                            {{ $hero['badge'] ?? 'Penerimaan Santri Baru 2026' }}
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        {{ $hero['title_prefix'] ?? 'Bergabunglah' }}<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">
                            {{ $hero['title_highlight'] ?? 'Bersama Kami' }}
                        </span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        {{ $hero['description'] ?? '' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Tab Navigation & Content              -->
        <!-- ============================================ -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="prosedur">
            {{-- Ambient Glow Info PSB: Emas madu & Zamrud pastel --}}
            <div class="glow-contact-gold w-[500px] h-[500px] top-1/3 -right-20 rounded-full opacity-60"></div>
            <div class="glow-contact-emerald w-[500px] h-[500px] bottom-10 -left-20 rounded-full opacity-60"></div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 z-10">

                <!-- Tab Buttons — Scrollable di mobile -->
                <div class="reveal -mx-4 sm:mx-0 px-4 sm:px-0 flex items-center sm:justify-center gap-2 sm:gap-3 mb-10 md:mb-12 overflow-x-auto sm:overflow-visible pb-2 sm:pb-0 scrollbar-hide">
                    @foreach ($tabs ?? [] as $key => $tab)
                        <button
                            @click="activeTab = '{{ $key }}'"
                            :class="activeTab === '{{ $key }}'
                                ? 'btn-primary-aurora text-white shadow-lg'
                                : 'glass-card text-slate-700 dark:text-slate-300 hover:scale-105'"
                            class="flex-shrink-0 px-5 sm:px-7 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 flex items-center gap-2 cursor-pointer"
                        >
                            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-current"></span>
                            {{ $tab['name'] }}
                        </button>
                    @endforeach
                </div>

                @if (isset($totalKamarTersedia) && $totalKamarTersedia > 0)
                    <div class="reveal mb-8 flex flex-wrap items-center justify-center gap-3">
                        <span class="glass-card px-4 py-2 rounded-full text-xs font-semibold text-emerald-700 dark:text-emerald-300 flex items-center gap-2 shadow-xs">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Tersedia {{ $totalKamarTersedia }} Kamar Asrama Terbuka untuk Santri Baru
                        </span>
                        <span class="glass-card px-4 py-2 rounded-full text-xs font-semibold text-slate-700 dark:text-slate-300 shadow-xs">
                            {{ $totalSantri }} Santri Telah Terdaftar Aktif
                        </span>
                    </div>
                @endif

                <!-- Gambar Hero Pendaftaran -->
                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-xl border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-80 relative group">
                    <img src="{{ $heroImage['src'] ?? 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1200&auto=format&fit=crop' }}" alt="{{ $heroImage['alt'] ?? 'Pendaftaran Santri Baru' }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">{{ $heroImage['caption'] ?? '' }}</p>
                    </div>
                </div>

                <!-- ========================================== -->
                <!-- KONTEN: LATEE PUTRA                        -->
                <!-- ========================================== -->
                <div x-show="activeTab === 'putra'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">

                        <!-- Prosedur & Berkas -->
                        <div class="space-y-6">
                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    @foreach ($tabs['putra']['prosedur'] ?? [] as $prosedur)
                                        <li>{{ $prosedur }}</li>
                                    @endforeach
                                </ol>
                                @if (!empty($tabs['putra']['catatan']))
                                    <div class="mt-4 bg-amber-500/10 dark:bg-amber-500/15 border border-amber-500/30 rounded-xl p-4 text-[11px] md:text-xs text-amber-800 dark:text-amber-300">
                                        <strong>Catatan:</strong> {{ $tabs['putra']['catatan'] }}
                                    </div>
                                @endif
                            </div>

                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    @foreach ($tabs['putra']['berkas'] ?? [] as $berkas)
                                        <li class="flex items-start gap-2"><span class="text-emerald-500 dark:text-emerald-400 mt-1">•</span> {{ $berkas }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Keuangan & Kebutuhan -->
                        <div class="space-y-6">
                            <div class="bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    @foreach ($tabs['putra']['keuangan'] ?? [] as $item)
                                        <div class="flex justify-between py-1 border-b border-white/10"><span>{{ $item['item'] }}</span><span class="font-semibold">{{ $item['amount'] }}</span></div>
                                    @endforeach
                                </div>
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
                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    @foreach ($tabs['latee1']['prosedur'] ?? [] as $prosedur)
                                        <li>{{ $prosedur }}</li>
                                    @endforeach
                                </ol>
                                @if (!empty($tabs['latee1']['catatan']))
                                    <div class="mt-4 bg-amber-500/10 dark:bg-amber-500/15 border border-amber-500/30 rounded-xl p-4 text-[11px] md:text-xs text-amber-800 dark:text-amber-300">
                                        <strong>Catatan:</strong> {{ $tabs['latee1']['catatan'] }}
                                    </div>
                                @endif
                            </div>

                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    @foreach ($tabs['latee1']['berkas'] ?? [] as $berkas)
                                        <li class="flex items-start gap-2"><span class="text-emerald-500 dark:text-emerald-400 mt-1">•</span> {{ $berkas }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    @foreach ($tabs['latee1']['keuangan'] ?? [] as $item)
                                        <div class="flex justify-between py-1 border-b border-white/10"><span>{{ $item['item'] }}</span><span class="font-semibold">{{ $item['amount'] }}</span></div>
                                    @endforeach
                                </div>
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
                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Prosedur Pendaftaran</h3>
                                <ol class="space-y-3 text-xs md:text-sm text-slate-600 dark:text-slate-300 list-decimal list-inside">
                                    @foreach ($tabs['latee2']['prosedur'] ?? [] as $prosedur)
                                        <li>{{ $prosedur }}</li>
                                    @endforeach
                                </ol>
                                @if (!empty($tabs['latee2']['catatan']))
                                    <div class="mt-4 bg-amber-500/10 dark:bg-amber-500/15 border border-amber-500/30 rounded-xl p-4 text-[11px] md:text-xs text-amber-800 dark:text-amber-300">
                                        <strong>Catatan:</strong> {{ $tabs['latee2']['catatan'] }}
                                    </div>
                                @endif
                            </div>

                            <div class="glass-card rounded-3xl p-6 md:p-8">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Berkas Pendaftaran</h3>
                                <ul class="space-y-2 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                                    @foreach ($tabs['latee2']['berkas'] ?? [] as $berkas)
                                        <li class="flex items-start gap-2"><span class="text-emerald-500 dark:text-emerald-400 mt-1">•</span> {{ $berkas }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                                <h3 class="text-lg md:text-xl font-bold mb-4">Rincian Keuangan</h3>
                                <div class="space-y-2 text-xs md:text-sm">
                                    @foreach ($tabs['latee2']['keuangan'] ?? [] as $item)
                                        <div class="flex justify-between py-1 border-b border-white/10"><span>{{ $item['item'] }}</span><span class="font-semibold">{{ $item['amount'] }}</span></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan Umum -->
                <div class="reveal mt-10 md:mt-12 glass-card rounded-3xl p-5 md:p-8">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
        <section class="py-12 md:py-16 overflow-hidden">
            <div class="max-w-4xl mx-auto px-6 text-center reveal glass-card rounded-3xl p-8 md:p-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Siap Menjadi Santri Baru?</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Lengkapi persyaratan dan ikuti prosedur pendaftaran sesuai kompleks yang Anda pilih. Kami tunggu kehadiran Anda.</p>
                <a href="{{ route('contact') }}" class="btn-primary-aurora px-8 py-3.5 text-sm md:text-base font-bold tracking-wide gap-2 group">
                    <span>Hubungi Kami</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
