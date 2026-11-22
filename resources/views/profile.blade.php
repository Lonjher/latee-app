<x-layouts::guest title="Profil Pesantren">

    @include('partials.header')

    <main>
        <!-- ============================================ -->
        <!-- BEGIN: Page Hero                             -->
        <!-- ============================================ -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Glow Hero: Hijau Zamrud & Biru Safir --}}
            <div class="glow-hero-emerald w-[450px] h-[450px] -top-20 -left-20 rounded-full"></div>
            <div class="glow-hero-sapphire w-[450px] h-[450px] -bottom-20 -right-20 rounded-full"></div>

            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">

                {{-- Background & Glow --}}
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>

                {{-- Konten --}}
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">
                            {{ $hero['badge'] ?? 'Tentang Kami' }}
                        </span>
                    </div>

                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        {{ $hero['title_prefix'] ?? 'Pondok Pesantren' }}<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">
                            {{ $hero['title_highlight'] ?? 'Annuqayah Latee' }}
                        </span>
                    </h1>

                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        {{ $hero['description'] ?? '' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Sejarah                               -->
        <!-- ============================================ -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="sejarah">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">{{ $sejarah['badge'] ?? 'Sejarah' }}</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">{{ $sejarah['heading'] ?? 'Jejak Langkah & Perjuangan' }}</h2>
                </div>

                <!-- Gambar Hero Sejarah -->
                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-xl border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    <img src="{{ $sejarah['image'] ?? 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?q=80&w=1200&auto=format&fit=crop' }}" alt="Sejarah Pesantren Annuqayah Latee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">{{ $sejarah['caption'] ?? '' }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left space-y-6">
                        <div class="glass-card rounded-3xl p-6 md:p-8">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Latar Belakang</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {!! $sejarah['latar_belakang'] ?? '' !!}
                            </p>
                        </div>
                        <div class="glass-card rounded-3xl p-6 md:p-8">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Berdirinya Latee</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {!! $sejarah['berdirinya_latee'] ?? '' !!}
                            </p>
                        </div>
                    </div>

                    <div class="reveal-right space-y-6">
                        <div class="glass-card rounded-3xl p-6 md:p-8">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Periode Kepemimpinan</h3>
                            <div class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {!! $sejarah['periode_kepemimpinan'] ?? '' !!}
                            </div>
                        </div>
                        <div class="glass-card rounded-3xl p-6 md:p-8">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Perkembangan Pendidikan</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {!! $sejarah['perkembangan_pendidikan'] ?? '' !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Visi & Misi                           -->
        <!-- ============================================ -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="visi-misi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Visi & Misi</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Arah & Tujuan Pendidikan</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <!-- Visi -->
                    <div class="reveal-left bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-8 md:p-12 shadow-xl flex flex-col justify-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Visi</h3>
                        <p class="text-base md:text-lg lg:text-xl font-semibold text-emerald-100 leading-relaxed italic">
                            "{{ $visiMisi['visi'] ?? '' }}"
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="reveal-right glass-card rounded-3xl p-8 md:p-12">
                        <h3 class="text-xl md:text-2xl font-bold text-slate-900 dark:text-white mb-6">Misi</h3>
                        <ul class="space-y-4 text-xs md:text-sm text-slate-600 dark:text-slate-300">
                            @foreach ($visiMisi['misi'] ?? [] as $index => $misi)
                                <li class="flex items-start gap-3">
                                    <span class="w-6 h-6 rounded-full bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">{{ $index + 1 }}</span>
                                    <span>{{ $misi }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Tiga Kompleks Kepengasuhan            -->
        <!-- ============================================ -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="struktur">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Struktur</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Tiga Kompleks Kepengasuhan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm max-w-xl mx-auto mt-2">Pondok Pesantren Annuqayah Latee saat ini terbagi menjadi tiga kompleks yang masing-masing dipimpin oleh pengasuh.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                    @foreach ($kompleks ?? [] as $i => $k)
                        <div class="reveal delay-{{ ($i + 1) * 100 }} glass-card rounded-3xl p-6 md:p-8 {{ $i === 0 ? 'sm:col-span-2 md:col-span-1' : '' }}">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center mb-4">
                                @if ($i === 0)
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                @elseif ($i === 1)
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                @else
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                @endif
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $k['name'] }}</h3>
                            <p class="text-[11px] md:text-xs font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-wide mb-3">Pengasuh: {{ $k['pengasuh'] }}</p>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">{!! $k['description'] !!}</p>
                            @if (!empty($k['rayon']))
                                <div class="bg-slate-100/60 dark:bg-white/5 border border-slate-200/50 dark:border-white/10 rounded-xl p-3 text-[11px] md:text-xs text-slate-600 dark:text-slate-400">
                                    <strong class="text-slate-800 dark:text-slate-200">Rayon:</strong> {{ $k['rayon'] }}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Statistik Singkat                     -->
        <!-- ============================================ -->
        <section class="relative py-12 md:py-16 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
                    @foreach ($stats ?? [
                        ['value' => '1923', 'label' => 'Tahun Berdiri'],
                        ['value' => '3', 'label' => 'Kompleks'],
                        ['value' => '1.251+', 'label' => 'Santri Aktif'],
                    ] as $stat)
                        <div class="glass-card rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-all duration-300">
                            <span class="block aurora-gradient-text text-3xl md:text-4xl font-black tracking-tight">{{ $stat['value'] }}</span>
                            <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: CTA                                   -->
        <!-- ============================================ -->
        <section class="py-12 md:py-16 overflow-hidden">
            <div class="max-w-4xl mx-auto px-6 text-center reveal glass-card rounded-3xl p-8 md:p-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Menjadi Bagian dari Sejarah Kami</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah bersama ribuan santri yang telah menimba ilmu dan membentuk karakter di Pondok Pesantren Annuqayah Latee.</p>
                <a href="{{ route('pendaftaran') }}" class="btn-primary-aurora px-8 py-3.5 text-sm md:text-base font-bold tracking-wide gap-2 group">
                    <span>Informasi Pendaftaran</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
