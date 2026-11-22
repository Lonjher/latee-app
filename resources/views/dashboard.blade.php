<x-layouts::app :title="__('Dashboard')">
    <div
        x-data="{
            timeFilter: 'this_year',
            activeChartTab: 'all',
            hoveredBarIndex: null,
            filterStatus: 'all',
            currentTime: new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' })
        }"
        x-init="setInterval(() => { currentTime = new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' }) }, 1000)"
        class="relative space-y-3 sm:space-y-3.5 w-full flex-1 overflow-hidden"
    >
        {{-- ========================================================== --}}
        {{-- AMBIENT ISLAMIC AURORA GLOW CANVAS (MATCHING LANDING PAGE)  --}}
        {{-- ========================================================== --}}
        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-24 -left-20 h-80 w-80 rounded-full bg-emerald-500/15 dark:bg-emerald-500/20 blur-3xl"></div>
            <div class="absolute top-48 -right-20 h-72 w-72 rounded-full bg-blue-500/10 dark:bg-blue-500/15 blur-3xl"></div>
            <div class="absolute top-[800px] left-1/3 h-80 w-80 rounded-full bg-amber-500/10 dark:bg-amber-500/15 blur-3xl"></div>
        </div>

        {{-- ========================================================== --}}
        {{-- 1. HEADER BANNER (PURE EXECUTIVE MONITORING & TIME STATUS)  --}}
        {{-- ========================================================== --}}
        <div class="glass-card relative overflow-hidden rounded-2xl p-4 sm:p-5">
            <div class="relative z-10 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="aurora-badge inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider backdrop-blur-md">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Tahun Ajaran 2026/2027 • Semester Ganjil
                        </span>
                        <span class="text-[11px] text-slate-500 dark:text-slate-400 font-medium">
                            Monitoring Eksekutif Pesantren
                        </span>
                    </div>

                    <h1 class="mt-1.5 text-lg sm:text-xl lg:text-2xl font-black tracking-tight text-slate-900 dark:text-white leading-tight">
                        Ringkasan Operasional & Akademik <span class="text-emerald-600 dark:text-emerald-400">Annuqayah Latee</span>
                    </h1>
                </div>

                {{-- Live Clock & Hijri Date Badge --}}
                <div class="flex items-center gap-2.5 self-start sm:self-auto shrink-0 rounded-xl border border-white/80 dark:border-white/10 bg-white/70 dark:bg-white/5 px-3 py-1.5 shadow-xs backdrop-blur-md">
                    <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 shrink-0">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="text-left leading-tight">
                        <p class="font-bold text-slate-900 dark:text-white font-mono text-xs" x-text="currentTime"></p>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Jumat, 21 Nov 2026 • 11 Jumadil Akhir 1448 H</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- 2. STATS OVERVIEW CARDS (FIT CONTENT & HIGH DENSITY)       --}}
        {{-- ========================================================== --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-6 gap-2.5 sm:gap-3.5">

            {{-- 1. Total Santri Aktif --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['total_santri']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-emerald-500/15 text-emerald-600 dark:text-emerald-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['total_santri']['value'] }}</span>
                    <span class="text-[10px] font-bold text-emerald-600 dark:text-emerald-400">{{ $stats['total_santri']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['total_santri']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-emerald-500 rounded-full" style="width: 78%"></div>
                </div>
            </div>

            {{-- 2. Kompleks Asrama --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['total_kompleks']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-amber-500/15 text-amber-600 dark:text-amber-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['total_kompleks']['value'] }}</span>
                    <span class="text-[10px] font-bold text-amber-600 dark:text-amber-400">{{ $stats['total_kompleks']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['total_kompleks']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-amber-500 rounded-full" style="width: 100%"></div>
                </div>
            </div>

            {{-- 3. Okupansi Asrama --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['okupansi_kamar']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-blue-500/15 text-blue-600 dark:text-blue-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['okupansi_kamar']['value'] }}</span>
                    <span class="text-[10px] font-bold text-blue-600 dark:text-blue-400">{{ $stats['okupansi_kamar']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['okupansi_kamar']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-blue-500 rounded-full" style="width: 91.8%"></div>
                </div>
            </div>

            {{-- 4. Pendaftar Santri Baru --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['santri_baru']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-purple-500/15 text-purple-600 dark:text-purple-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['santri_baru']['value'] }}</span>
                    <span class="text-[10px] font-bold text-purple-600 dark:text-purple-400">{{ $stats['santri_baru']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['santri_baru']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-purple-500 rounded-full" style="width: 89.7%"></div>
                </div>
            </div>

            {{-- 5. Asatidz & Masyayikh --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['asatidz']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-rose-500/15 text-rose-600 dark:text-rose-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['asatidz']['value'] }}</span>
                    <span class="text-[10px] font-bold text-rose-600 dark:text-rose-400">{{ $stats['asatidz']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['asatidz']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-rose-500 rounded-full" style="width: 100%"></div>
                </div>
            </div>

            {{-- 6. Warta & Publikasi --}}
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between group">
                <div class="flex items-center justify-between gap-1">
                    <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 truncate">{{ $stats['warta_publikasi']['title'] }}</span>
                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-teal-500/15 text-teal-600 dark:text-teal-400">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </span>
                </div>
                <div class="mt-2 flex items-baseline gap-1.5">
                    <span class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $stats['warta_publikasi']['value'] }}</span>
                    <span class="text-[10px] font-bold text-teal-600 dark:text-teal-400">{{ $stats['warta_publikasi']['growth'] }}</span>
                </div>
                <p class="mt-0.5 text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $stats['warta_publikasi']['subtext'] }}</p>
                <div class="mt-2 h-1 w-full rounded-full bg-slate-200/60 dark:bg-white/10 overflow-hidden">
                    <div class="h-full bg-teal-500 rounded-full" style="width: 85%"></div>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- 3. CHARTS ROW: TREN PENDAFTARAN & DISTRIBUSI PENDIDIKAN    --}}
        {{-- ========================================================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-5">

            {{-- Kolom Kiri: Tren Pendaftaran & Penerimaan Santri Baru (7/12) --}}
            <div class="lg:col-span-7 glass-card rounded-2xl p-4 sm:p-5 flex flex-col justify-between">
                <div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2.5">
                        <div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                                <span>Tren Pendaftaran & Penerimaan Santri</span>
                                <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">12 Bulan</span>
                            </h2>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Visualisasi rasio pendaftar masuk versus santri yang diterima per bulan</p>
                        </div>

                        {{-- View Filter Tabs (Read-only View Switcher) --}}
                        <div class="flex items-center rounded-xl border border-white/80 dark:border-white/10 bg-white/70 dark:bg-white/5 p-1 text-[11px] font-semibold self-start sm:self-auto backdrop-blur-md">
                            <button
                                type="button"
                                @click="activeChartTab = 'all'"
                                :class="activeChartTab === 'all' ? 'bg-emerald-600 text-white shadow-xs' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400'"
                                class="rounded-lg px-2.5 py-1 transition cursor-pointer"
                            >
                                Semua
                            </button>
                            <button
                                type="button"
                                @click="activeChartTab = 'pendaftar'"
                                :class="activeChartTab === 'pendaftar' ? 'bg-emerald-600 text-white shadow-xs' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400'"
                                class="rounded-lg px-2.5 py-1 transition cursor-pointer"
                            >
                                Pendaftar
                            </button>
                            <button
                                type="button"
                                @click="activeChartTab = 'diterima'"
                                :class="activeChartTab === 'diterima' ? 'bg-emerald-600 text-white shadow-xs' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400'"
                                class="rounded-lg px-2.5 py-1 transition cursor-pointer"
                            >
                                Diterima
                            </button>
                        </div>
                    </div>

                    {{-- Chart Legend --}}
                    <div class="mt-3 flex items-center gap-4 text-[11px] text-slate-600 dark:text-slate-300">
                        <div class="flex items-center gap-1.5">
                            <span class="h-2.5 w-2.5 rounded-xs bg-emerald-500"></span>
                            <span>Pendaftar Masuk</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="h-2.5 w-2.5 rounded-xs bg-blue-500"></span>
                            <span>Santri Diterima</span>
                        </div>
                    </div>

                    {{-- Compact SVG Interactive Bar Chart (Height 200px) --}}
                    <div class="relative mt-4 h-48 sm:h-52 w-full">
                        {{-- Horizontal Grid Lines --}}
                        <div class="absolute inset-0 flex flex-col justify-between pointer-events-none text-[9px] text-slate-400/80 dark:text-slate-500">
                            <div class="border-b border-dashed border-slate-200/80 dark:border-white/5 w-full pb-0.5">150</div>
                            <div class="border-b border-dashed border-slate-200/80 dark:border-white/5 w-full pb-0.5">100</div>
                            <div class="border-b border-dashed border-slate-200/80 dark:border-white/5 w-full pb-0.5">50</div>
                            <div class="border-b border-dashed border-slate-200/80 dark:border-white/5 w-full pb-0.5">0</div>
                        </div>

                        {{-- Bars Grid --}}
                        <div class="relative z-10 h-full flex items-end justify-between gap-1 sm:gap-1.5 px-1.5 pt-2 pb-5">
                            @foreach ($chartRegistrationData['labels'] as $idx => $month)
                                @php
                                    $pVal = $chartRegistrationData['pendaftar'][$idx];
                                    $dVal = $chartRegistrationData['diterima'][$idx];
                                    $pHeight = round(($pVal / $chartRegistrationData['max_value']) * 100);
                                    $dHeight = round(($dVal / $chartRegistrationData['max_value']) * 100);
                                @endphp
                                <div
                                    class="group/bar relative flex-1 h-full flex items-end justify-center gap-0.5 sm:gap-1 cursor-pointer"
                                    @mouseenter="hoveredBarIndex = {{ $idx }}"
                                    @mouseleave="hoveredBarIndex = null"
                                >
                                    {{-- Tooltip on Hover --}}
                                    <div
                                        x-show="hoveredBarIndex === {{ $idx }}"
                                        x-cloak
                                        x-transition:enter="transition ease-out duration-150"
                                        x-transition:enter-start="opacity-0 -translate-y-1"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        class="absolute bottom-full mb-1.5 left-1/2 -translate-x-1/2 z-30 pointer-events-none min-w-[110px] rounded-xl bg-slate-950/90 dark:bg-slate-900/95 p-2 text-center text-white shadow-xl border border-white/10 backdrop-blur-md"
                                    >
                                        <p class="text-[10px] font-bold text-slate-300">{{ $month }} 2026</p>
                                        <div class="mt-0.5 space-y-0.5 text-[9px]">
                                            <p class="text-emerald-400 font-semibold">Daftar: <span class="font-bold">{{ $pVal }}</span></p>
                                            <p class="text-blue-400 font-semibold">Diterima: <span class="font-bold">{{ $dVal }}</span></p>
                                        </div>
                                    </div>

                                    {{-- Bar Pendaftar --}}
                                    <div
                                        x-show="activeChartTab === 'all' || activeChartTab === 'pendaftar'"
                                        style="height: {{ $pHeight }}%;"
                                        class="w-full max-w-[12px] rounded-t-sm bg-emerald-500/85 hover:bg-emerald-500 transition-all duration-200"
                                    ></div>

                                    {{-- Bar Diterima --}}
                                    <div
                                        x-show="activeChartTab === 'all' || activeChartTab === 'diterima'"
                                        style="height: {{ $dHeight }}%;"
                                        class="w-full max-w-[12px] rounded-t-sm bg-blue-500/85 hover:bg-blue-500 transition-all duration-200"
                                    ></div>

                                    {{-- Label Bulan --}}
                                    <span class="absolute -bottom-4 text-[9px] font-semibold text-slate-500 dark:text-slate-400 group-hover/bar:text-emerald-600 dark:group-hover/bar:text-emerald-400 transition-colors">
                                        {{ $month }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Chart KPI Footer --}}
                <div class="mt-4 pt-3 border-t border-slate-200/70 dark:border-white/10 grid grid-cols-3 gap-2 text-center">
                    <div>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Total Pendaftar</p>
                        <p class="text-sm sm:text-base font-black text-slate-900 dark:text-white">{{ $chartRegistrationData['total_daftar'] }} <span class="text-[10px] font-normal text-slate-400">calon</span></p>
                    </div>
                    <div class="border-x border-slate-200/70 dark:border-white/10">
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Santri Diterima</p>
                        <p class="text-sm sm:text-base font-black text-emerald-600 dark:text-emerald-400">{{ $chartRegistrationData['total_terima'] }} <span class="text-[10px] font-normal text-slate-400">santri</span></p>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-500 dark:text-slate-400">Rasio Kelulusan</p>
                        <p class="text-sm sm:text-base font-black text-blue-600 dark:text-blue-400">{{ $chartRegistrationData['avg_acceptance'] }}%</p>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Distribusi Santri Berdasarkan Lembaga Pendidikan (5/12) --}}
            <div class="lg:col-span-5 glass-card rounded-2xl p-4 sm:p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white">Distribusi Lembaga Pendidikan</h2>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Proporsi santri di setiap unit formal & diniyah</p>
                        </div>
                        <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">4 Unit</span>
                    </div>

                    {{-- Donut Chart Visualizer (Compact & Glossy) --}}
                    <div class="mt-4 flex items-center justify-center">
                        <div class="relative h-36 w-36">
                            <svg class="h-full w-full -rotate-90 transform" viewBox="0 0 36 36">
                                <path
                                    class="text-slate-200/50 dark:text-white/10"
                                    stroke="currentColor"
                                    stroke-width="3.6"
                                    fill="none"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                {{-- Segment 1: MADAL (42%) --}}
                                <path
                                    class="text-emerald-500 hover:opacity-90 transition-opacity"
                                    stroke="currentColor"
                                    stroke-width="4.2"
                                    stroke-dasharray="42, 100"
                                    stroke-dashoffset="0"
                                    fill="none"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                {{-- Segment 2: Wustha (31%) --}}
                                <path
                                    class="text-blue-500 hover:opacity-90 transition-opacity"
                                    stroke="currentColor"
                                    stroke-width="4.2"
                                    stroke-dasharray="31, 100"
                                    stroke-dashoffset="-42"
                                    fill="none"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                {{-- Segment 3: Tahfidh (15%) --}}
                                <path
                                    class="text-amber-500 hover:opacity-90 transition-opacity"
                                    stroke="currentColor"
                                    stroke-width="4.2"
                                    stroke-dasharray="15, 100"
                                    stroke-dashoffset="-73"
                                    fill="none"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                                {{-- Segment 4: Bahasa (12%) --}}
                                <path
                                    class="text-purple-500 hover:opacity-90 transition-opacity"
                                    stroke="currentColor"
                                    stroke-width="4.2"
                                    stroke-dasharray="12, 100"
                                    stroke-dashoffset="-88"
                                    fill="none"
                                    d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                />
                            </svg>

                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="text-xl font-black text-slate-900 dark:text-white leading-tight">1.251</span>
                                <span class="text-[9px] uppercase font-bold tracking-wider text-slate-400">Santri</span>
                            </div>
                        </div>
                    </div>

                    {{-- Distribution Breakdown List --}}
                    <div class="mt-4 space-y-2">
                        @foreach ($educationDistribution as $unit)
                            <div class="flex items-center justify-between text-xs py-0.5">
                                <div class="flex items-center gap-2 min-w-0">
                                    <span class="h-2 w-2 rounded-full shrink-0 {{ $unit['tw_bg'] }}"></span>
                                    <div class="truncate">
                                        <p class="font-bold text-slate-800 dark:text-slate-200 truncate">{{ $unit['name'] }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <span class="font-extrabold text-slate-900 dark:text-white text-[11px]">{{ $unit['count'] }}</span>
                                    <span class="rounded-md px-1.5 py-0.5 text-[9px] font-bold {{ $unit['tw_light'] }}">
                                        {{ $unit['percentage'] }}%
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-4 pt-2.5 border-t border-slate-200/70 dark:border-white/10 text-center">
                    <p class="text-[10px] text-slate-500 dark:text-slate-400">
                        Sinkronisasi kurikulum Diniyah Salafiyah & Bahasa Asing aktif
                    </p>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- 4. KEDISIPLINAN & AKTIVITAS HARIAN PESANTREN (FIT CONTENT)  --}}
        {{-- ========================================================== --}}
        <div class="glass-card rounded-2xl p-4 sm:p-5">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <div>
                    <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                        <span>Kedisiplinan & Aktivitas Harian Pesantren</span>
                        <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">Rata-rata 96.2%</span>
                    </h2>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Pemantauan kehadiran shalat berjama'ah 5 waktu, pengajian kitab sorogan/wetonan, dan madrasah diniyah</p>
                </div>
                <div class="flex items-center gap-3 text-[10px] font-semibold text-slate-600 dark:text-slate-300">
                    <span class="flex items-center gap-1"><span class="h-2 w-2 rounded-full bg-emerald-500"></span> Jama'ah</span>
                    <span class="flex items-center gap-1"><span class="h-2 w-2 rounded-full bg-amber-500"></span> Ngaji</span>
                    <span class="flex items-center gap-1"><span class="h-2 w-2 rounded-full bg-blue-500"></span> Madrasah</span>
                </div>
            </div>

            <div class="mt-3.5 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-2 sm:gap-2.5">
                @foreach ($weeklyActivities['days'] as $idx => $day)
                    @php
                        $sholatVal = $weeklyActivities['sholat'][$idx];
                        $ngajiVal = $weeklyActivities['ngaji'][$idx];
                        $madrasahVal = $weeklyActivities['madrasah'][$idx];
                        $dayAvg = round(($sholatVal + $ngajiVal + $madrasahVal) / 3, 1);
                    @endphp
                    <div class="rounded-xl border border-white/60 dark:border-white/5 bg-white/50 dark:bg-white/5 p-2.5 backdrop-blur-sm">
                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-700 dark:text-slate-300">
                            <span>{{ $day }}</span>
                            <span class="text-emerald-600 dark:text-emerald-400 font-extrabold">{{ $dayAvg }}%</span>
                        </div>

                        <div class="mt-2 space-y-1">
                            <div>
                                <div class="flex justify-between text-[9px] text-slate-400">
                                    <span>Jama'ah</span>
                                    <span>{{ $sholatVal }}%</span>
                                </div>
                                <div class="h-1 w-full rounded-full bg-slate-200/70 dark:bg-white/10 overflow-hidden">
                                    <div class="h-full bg-emerald-500 rounded-full" style="width: {{ $sholatVal }}%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-[9px] text-slate-400">
                                    <span>Ngaji</span>
                                    <span>{{ $ngajiVal }}%</span>
                                </div>
                                <div class="h-1 w-full rounded-full bg-slate-200/70 dark:bg-white/10 overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: {{ $ngajiVal }}%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-[9px] text-slate-400">
                                    <span>Madrasah</span>
                                    <span>{{ $madrasahVal }}%</span>
                                </div>
                                <div class="h-1 w-full rounded-full bg-slate-200/70 dark:bg-white/10 overflow-hidden">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: {{ $madrasahVal }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- 5. TABLES ROW: SINGLE-LINE ROWS, TRIMMED & SCROLLABLE      --}}
        {{-- ========================================================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-5">

            {{-- Table 1: Pendaftaran Santri Baru Terkini (7/12) --}}
            <div class="lg:col-span-7 glass-card rounded-2xl p-4 sm:p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white">Pendaftaran Santri Baru Terkini</h2>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Pemantauan berkas pendaftar baru yang masuk</p>
                        </div>

                        {{-- Read-only View Status Filter --}}
                        <select
                            x-model="filterStatus"
                            class="rounded-xl border border-white/80 dark:border-white/10 bg-white/80 dark:bg-white/5 px-2.5 py-1 text-[11px] font-semibold text-slate-700 dark:text-slate-300 focus:outline-hidden focus:ring-1 focus:ring-emerald-500 cursor-pointer backdrop-blur-md"
                        >
                            <option value="all">Semua Status</option>
                            <option value="verified">Terverifikasi</option>
                            <option value="accepted">Diterima</option>
                            <option value="pending">Menunggu Berkas</option>
                        </select>
                    </div>

                    {{-- Scrollable & Single-Line Trimmed Table --}}
                    <div class="overflow-x-auto rounded-xl border border-slate-200/70 dark:border-white/10">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-slate-50/80 dark:bg-white/5 border-b border-slate-200/70 dark:border-white/10 text-[10px] uppercase font-bold tracking-wider text-slate-500 dark:text-slate-400 whitespace-nowrap">
                                <tr>
                                    <th class="py-2.5 px-3">Nama Santri</th>
                                    <th class="py-2.5 px-3">No. Reg</th>
                                    <th class="py-2.5 px-3">Asal Daerah</th>
                                    <th class="py-2.5 px-3">Kompleks</th>
                                    <th class="py-2.5 px-3">Program</th>
                                    <th class="py-2.5 px-3">Tanggal</th>
                                    <th class="py-2.5 px-3 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-white/5 text-[11px]">
                                @foreach ($recentRegistrations as $reg)
                                    <tr
                                        x-show="filterStatus === 'all' || filterStatus === '{{ $reg['status'] }}'"
                                        class="hover:bg-emerald-500/5 transition-colors whitespace-nowrap"
                                    >
                                        <td class="py-2 px-3">
                                            <div class="flex items-center gap-2">
                                                <span class="w-6 h-6 rounded-full bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold text-[10px] flex items-center justify-center shrink-0">
                                                    {{ substr($reg['name'], 0, 1) }}
                                                </span>
                                                <span class="font-bold text-slate-900 dark:text-white max-w-[130px] truncate block" title="{{ $reg['name'] }}">
                                                    {{ $reg['name'] }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-2 px-3 text-slate-500 dark:text-slate-400 font-mono text-[10px]">{{ $reg['nis'] }}</td>
                                        <td class="py-2 px-3 text-slate-500 dark:text-slate-400 max-w-[100px] truncate" title="{{ $reg['origin'] }}">
                                            {{ $reg['origin'] }}
                                        </td>
                                        <td class="py-2 px-3">
                                            <span class="inline-flex items-center gap-1.5 font-medium">
                                                <span class="w-1.5 h-1.5 rounded-full {{ $reg['gender'] === 'L' ? 'bg-emerald-500' : 'bg-pink-500' }}"></span>
                                                <span class="max-w-[90px] truncate">{{ $reg['complex'] }}</span>
                                            </span>
                                        </td>
                                        <td class="py-2 px-3 text-slate-600 dark:text-slate-300 max-w-[120px] truncate" title="{{ $reg['program'] }}">
                                            {{ $reg['program'] }}
                                        </td>
                                        <td class="py-2 px-3 text-slate-400 text-[10px]">{{ $reg['date'] }}</td>
                                        <td class="py-2 px-3 text-center">
                                            <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[9px] font-bold {{ $reg['badge_class'] }}">
                                                {{ $reg['status_label'] }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-3 pt-2.5 border-t border-slate-200/70 dark:border-white/10 flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                    <span>Data tersinkronisasi dengan portal PSB</span>
                    <span class="font-bold text-emerald-600 dark:text-emerald-400">Total 312 pendaftar</span>
                </div>
            </div>

            {{-- Table 2: Status Kamar & Okupansi Asrama (5/12) --}}
            <div class="lg:col-span-5 glass-card rounded-2xl p-4 sm:p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white">Status Kamar & Rayon</h2>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Keterisian asrama kompleks pondok</p>
                        </div>
                        <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">84 Kamar</span>
                    </div>

                    {{-- Scrollable & Single-Line Table --}}
                    <div class="overflow-x-auto rounded-xl border border-slate-200/70 dark:border-white/10">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-slate-50/80 dark:bg-white/5 border-b border-slate-200/70 dark:border-white/10 text-[10px] uppercase font-bold tracking-wider text-slate-500 dark:text-slate-400 whitespace-nowrap">
                                <tr>
                                    <th class="py-2.5 px-3">Kamar / Rayon</th>
                                    <th class="py-2.5 px-3">Kompleks</th>
                                    <th class="py-2.5 px-3 text-center">Terisi</th>
                                    <th class="py-2.5 px-3 text-center">Okupansi</th>
                                    <th class="py-2.5 px-3 text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-white/5 text-[11px]">
                                @foreach ($dormRooms as $room)
                                    <tr class="hover:bg-emerald-500/5 transition-colors whitespace-nowrap">
                                        <td class="py-2 px-3">
                                            <span class="font-bold text-slate-900 dark:text-white max-w-[120px] truncate block" title="{{ $room['room_name'] }}">
                                                {{ $room['room_name'] }}
                                            </span>
                                        </td>
                                        <td class="py-2 px-3 text-slate-500 dark:text-slate-400 max-w-[95px] truncate" title="{{ $room['complex'] }}">
                                            {{ $room['complex'] }}
                                        </td>
                                        <td class="py-2 px-3 text-center font-medium text-slate-700 dark:text-slate-300">
                                            {{ $room['filled'] }}<span class="text-slate-400">/{{ $room['capacity'] }}</span>
                                        </td>
                                        <td class="py-2 px-3 text-center">
                                            <div class="inline-flex items-center gap-1.5 justify-center">
                                                <div class="w-12 h-1.5 rounded-full bg-slate-200/70 dark:bg-white/10 overflow-hidden">
                                                    <div
                                                        class="h-full rounded-full {{ $room['rate'] >= 100 ? 'bg-rose-500' : 'bg-emerald-500' }}"
                                                        style="width: {{ $room['rate'] }}%"
                                                    ></div>
                                                </div>
                                                <span class="text-[9px] font-bold text-slate-700 dark:text-slate-300">{{ round($room['rate']) }}%</span>
                                            </div>
                                        </td>
                                        <td class="py-2 px-3 text-right">
                                            @if ($room['is_full'])
                                                <span class="rounded-full bg-rose-500/15 px-2 py-0.5 text-[9px] font-bold text-rose-700 dark:text-rose-400 border border-rose-500/20">Penuh</span>
                                            @else
                                                <span class="rounded-full bg-emerald-500/15 px-2 py-0.5 text-[9px] font-bold text-emerald-700 dark:text-emerald-400 border border-emerald-500/20">Sisa {{ $room['available'] }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-3 pt-2.5 border-t border-slate-200/70 dark:border-white/10 flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                    <span>Okupansi total: 91.8%</span>
                    <span class="font-bold text-emerald-600 dark:text-emerald-400">7 Kamar Siap Huni</span>
                </div>
            </div>
        </div>

        {{-- ========================================================== --}}
        {{-- 6. PENGAJIAN KITAB HARI INI & PAPAN INFORMASI PESANTREN    --}}
        {{-- ========================================================== --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 sm:gap-5">

            {{-- Jadwal Pengajian Kitab Kuning Hari Ini (7/12) --}}
            <div class="lg:col-span-7 glass-card rounded-2xl p-4 sm:p-5">
                <div class="flex items-center justify-between gap-2 mb-3">
                    <div>
                        <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                            <span>Jadwal Pengajian Kitab Kuning Hari Ini</span>
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                        </h2>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Tradisi pengajian sorogan & wetonan diasuh Masyayikh & Dewan Asatidz</p>
                    </div>
                    <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">Jumat Mubarok</span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                    @foreach ($todayLectures as $idx => $lec)
                        <div class="rounded-xl border border-white/70 dark:border-white/10 bg-white/60 dark:bg-white/5 p-3 backdrop-blur-sm">
                            <div class="flex items-center justify-between text-[10px] font-semibold text-slate-500 dark:text-slate-400 mb-1">
                                <span class="aurora-badge px-1.5 py-0.2 rounded-xs font-bold text-[9px]">{{ $lec['period'] }}</span>
                                <span class="font-mono">{{ $lec['time'] }}</span>
                            </div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white truncate" title="{{ $lec['kitab'] }}">
                                {{ $lec['kitab'] }}
                            </h3>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400 truncate mt-0.5">Karya: {{ $lec['author'] }}</p>
                            <div class="mt-2 pt-2 border-t border-slate-200/60 dark:border-white/5 flex items-center justify-between text-[10px]">
                                <span class="font-bold text-emerald-600 dark:text-emerald-400 truncate max-w-[140px]" title="{{ $lec['teacher'] }}">{{ $lec['teacher'] }}</span>
                                <span class="text-slate-400 truncate max-w-[100px] text-right" title="{{ $lec['location'] }}">{{ $lec['location'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Papan Informasi Pesantren (5/12) --}}
            <div class="lg:col-span-5 glass-card rounded-2xl p-4 sm:p-5 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-3">
                        <div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900 dark:text-white">Papan Informasi & Agenda</h2>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Warta kegiatan internal pondok pesantren</p>
                        </div>
                        <span class="aurora-badge px-2 py-0.5 rounded-md text-[9px] font-bold">Terbaru</span>
                    </div>

                    <div class="space-y-2.5">
                        @foreach ($announcements as $ann)
                            <div class="rounded-xl border border-white/70 dark:border-white/10 bg-white/60 dark:bg-white/5 p-2.5 backdrop-blur-sm">
                                <div class="flex items-center justify-between text-[10px] mb-1">
                                    <span class="font-bold text-slate-400">{{ $ann['category'] }} • {{ $ann['date'] }}</span>
                                    @if ($ann['priority'] === 'Tinggi')
                                        <span class="rounded-md bg-rose-500/15 px-1.5 py-0.5 text-[9px] font-bold text-rose-600 dark:text-rose-400 border border-rose-500/20">Penting</span>
                                    @elseif ($ann['priority'] === 'Penting')
                                        <span class="rounded-md bg-amber-500/15 px-1.5 py-0.5 text-[9px] font-bold text-amber-600 dark:text-amber-400 border border-amber-500/20">Akademik</span>
                                    @else
                                        <span class="rounded-md bg-emerald-500/15 px-1.5 py-0.5 text-[9px] font-bold text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">Info</span>
                                    @endif
                                </div>
                                <h3 class="text-xs font-bold text-slate-900 dark:text-white truncate" title="{{ $ann['title'] }}">{{ $ann['title'] }}</h3>
                                <p class="text-[10px] text-slate-500 dark:text-slate-400 mt-0.5 line-clamp-2 leading-relaxed">{{ $ann['snippet'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-3 pt-2 border-t border-slate-200/70 dark:border-white/10 text-center text-[10px] text-slate-400">
                    Sekretariat Pondok Pesantren Annuqayah Latee • Tahun 1923 - 2026
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>
