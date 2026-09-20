<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="Kenali Pondok Pesantren Annuqayah Latee, Guluk-Guluk, Sumenep: profil, kompleks putra dan putri, pendidikan, serta informasi pendaftaran santri baru.">
<meta name="theme-color" content="#030404">
<title>Pondok Pesantren Annuqayah Latee — P2AL</title>
<link rel="icon" href="{{ asset('images/pesantren/logo.png') }}" type="image/png">
<link rel="preload" href="{{ asset('fonts/gilroy/Gilroy-Regular.woff2') }}" as="font" type="font/woff2"
    crossorigin>
<link rel="preload" href="{{ asset('fonts/gilroy/Gilroy-SemiBold.woff2') }}" as="font" type="font/woff2"
    crossorigin>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
</head>

<body class="welcome-page noise-bg" x-data="welcomePage" :class="{ 'motion-paused': reducedMotion || !pageVisible }"
    @keydown.escape.window="menuOpen = false"
    @visibilitychange.document="pageVisible = !document.hidden">
    <a class="welcome-skip" href="#main">Lewati ke konten</a>

    {{-- ===================== NAVBAR ===================== --}}
    <header
        class="welcome-header nav-glass fixed left-0 right-0 top-0 z-50 border-b border-stone-200/60 bg-stone-50/80 transition-colors duration-500 dark:border-stone-800/60 dark:bg-stone-950/80">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                {{-- Logo --}}
                <div class="animate-slide-right flex items-center gap-3">
                    <div class="dark:bg-sage-600 flex items-center justify-center rounded-lg">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-12" />
                    </div>
                    <div class="hidden sm:block">
                        <p
                            class="font-display text-md font-semibold leading-tight tracking-wide text-stone-900 dark:text-stone-50">
                            {{ __('LATEE APP') }}</p>
                        <p class="text-[10px] tracking-widest text-stone-500 dark:text-stone-400">PP. Annuqayah Latee
                        </p>
                    </div>
                </div>

                {{-- Desktop Nav Links --}}
                <div class="hidden items-center gap-1 md:flex">
                    @foreach ([['Home', '#home'], ['Fitur', '#fitur'], ['Tentang', '#tentang'], ['Kontak', '#kontak']] as $item)
                        <a href="{{ $item[1] }}"
                            class="hover:text-sage-700 dark:hover:text-sage-300 hover:bg-sage-50 dark:hover:bg-sage-900/20 rounded-lg px-4 py-2 text-sm font-medium text-stone-600 transition-all duration-200 dark:text-stone-400">
                            {{ $item[0] }}
                        </a>
                    @endforeach
                </div>

                {{-- Right Controls --}}
                <div class="flex items-center gap-2">
                    {{-- Dark Mode Toggle (navbar) --}}
                    <button type="button"
                        @click="toggleTheme"
                        class="flex h-9 w-9 items-center justify-center rounded-lg text-stone-500 transition-colors hover:bg-stone-100 hover:text-stone-900 dark:text-stone-400 dark:hover:bg-stone-800 dark:hover:text-white"
                        :aria-label="themeLabel"
                        :title="themeLabel">
                        {{-- Moon (tampil saat light) --}}
                        <svg x-show="theme !== 'dark'" x-cloak class="h-5 w-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646
               9.003 9.003 0 0012 21
               9.003 9.003 0 008.354-5.646z" />
                        </svg>

                        {{-- Sun (tampil saat dark) --}}
                        <svg x-show="theme === 'dark'" x-cloak class="h-5 w-5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3
               m15.364 6.364-.707-.707
               M6.343 6.343l-.707-.707
               m12.728 0-.707.707
               M6.343 17.657l-.707.707
               M16 12a4 4 0 11-8 0
               4 4 0 018 0z" />
                        </svg>
                    </button>

                    {{-- CTA Button --}}
                    @guest()
                        <a href="{{ route('login') }}"
                            class="bg-sage-600 dark:bg-sage-500 hover:bg-sage-700 dark:hover:bg-sage-400 hover:shadow-sage-600/20 hidden items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-white shadow-sm transition-all duration-200 hover:shadow-md sm:inline-flex">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Masuk
                        </a>
                    @endguest
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="bg-sage-600 dark:bg-sage-500 hover:bg-sage-700 dark:hover:bg-sage-400 hover:shadow-sage-600/20 hidden items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium text-white shadow-sm transition-all duration-200 hover:shadow-md sm:inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Dashboard
                        </a>
                    @endauth

                    {{-- Mobile Menu Button --}}
                    <button type="button"
                        @click="menuOpen = !menuOpen"
                        :aria-expanded="menuOpen"
                        aria-controls="mobile-menu"
                        aria-label="Buka menu navigasi"
                        class="rounded-lg p-2 text-stone-500 transition-colors hover:bg-stone-100 md:hidden dark:text-stone-400 dark:hover:bg-stone-800">
                        {{-- Hamburger --}}
                        <svg x-show="!menuOpen" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        {{-- Close --}}
                        <svg x-show="menuOpen" x-cloak class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        {{-- Mobile Menu Panel --}}
        <div id="mobile-menu" x-show="menuOpen" x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="border-t border-stone-200/60 bg-stone-50/95 backdrop-blur md:hidden dark:border-stone-800/60 dark:bg-stone-950/95">
            <nav class="mx-auto max-w-7xl px-4 py-3 sm:px-6">
                <ul class="flex flex-col gap-1">
                    @foreach ([['Home', '#home'], ['Fitur', '#fitur'], ['Tentang', '#tentang'], ['Kontak', '#kontak']] as $item)
                        <li>
                            <a href="{{ $item[1] }}" @click="menuOpen = false"
                                class="hover:text-sage-700 dark:hover:text-sage-300 hover:bg-sage-50 dark:hover:bg-sage-900/20 block rounded-lg px-3 py-2 text-sm font-medium text-stone-600 dark:text-stone-400">
                                {{ $item[0] }}
                            </a>
                        </li>
                    @endforeach
                    @guest
                        <li class="pt-1">
                            <a href="{{ route('login') }}" @click="menuOpen = false"
                                class="bg-sage-600 dark:bg-sage-500 block rounded-lg px-3 py-2 text-center text-sm font-medium text-white">
                                Masuk
                            </a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <section class="welcome-hero" x-data="{ heroVisible: false }" x-intersect:enter="heroVisible = true"
            x-intersect:leave="heroVisible = false"
            :class="{ 'hero-running': heroVisible && !reducedMotion && pageVisible }">
            <div class="hero-gradient" aria-hidden="true"></div>
            <div class="orb orb-primary" aria-hidden="true"></div>
            <div class="orb orb-secondary" aria-hidden="true"></div>
            <div class="welcome-container hero-content" :class="{ 'hero-entered': ready }">
                <span class="welcome-pill"><i></i> Pondok Pesantren Annuqayah Latee · P2AL</span>
                <h1>Melahirkan generasi<br><span>berilmu dan bertakwa.</span></h1>
                <p>Membentuk insan yang mendalami agama, berwawasan luas,<br>dan hadir membimbing masyarakat.</p>
                <div class="hero-actions"><a class="welcome-button"
                        href="https://pp.annuqayahlatee.id/santri-baru/">Informasi santri baru <span>↗</span></a><a
                        class="welcome-text-link" href="#profil"><span class="play-circle">↘</span> Mengenal
                        Annuqayah
                        Latee</a></div>
                <a class="hero-scroll" href="#kompleks"><span>JELAJAHI PESANTREN</span><span>↓</span></a>
            </div>
        </section>

        <section x-data="{ shown: false }" x-intersect.once="shown = true"
            :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"
            class="welcome-metrics welcome-container welcome-reveal" aria-label="Sekilas Annuqayah Latee">
            <div>
                <p>Tahun berdiri Latee</p><strong>1923</strong>
            </div>
            <div>
                <p>Kompleks pesantren</p><strong>3<span> Kompleks</span></strong>
            </div>
            <div>
                <p>Lokasi pesantren</p><strong><span>Guluk-Guluk</span></strong>
            </div>
            <small>Bagian dari Pondok Pesantren Annuqayah, Sumenep.</small>
        </section>

        <section class="welcome-section welcome-container welcome-cases" id="kompleks">
            <div class="welcome-section-heading welcome-reveal" x-data="{ shown: false }"
                x-intersect.once="shown = true"
                :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"><span
                    class="welcome-pill">Kompleks pesantren</span>
                <h2>Satu tradisi keilmuan.<br><span>Tiga lingkungan pendidikan.</span></h2>
                <p>Mengenal kompleks putra dan putri<br>di Pondok Pesantren Annuqayah Latee.</p>
            </div>

            <div class="case-tabs" role="tablist" aria-label="Kompleks Annuqayah Latee">
                <button id="case-tab-0" role="tab" aria-selected="true" aria-controls="case-panel-0" data-case="0"
                    @click="activeTab = 0" :aria-selected="activeTab === 0" :tabindex="activeTab === 0 ? 0 : -1"
                    @keydown="tabKey($event, 0)">Latee Putra <span>↗</span></button>
                <button id="case-tab-1" role="tab" aria-selected="false" aria-controls="case-panel-1" tabindex="-1"
                    data-case="1" @click="activeTab = 1" :aria-selected="activeTab === 1"
                    :tabindex="activeTab === 1 ? 0 : -1" @keydown="tabKey($event, 1)">Latee I Putri
                    <span>↗</span></button>
                <button id="case-tab-2" role="tab" aria-selected="false" aria-controls="case-panel-2" tabindex="-1"
                    data-case="2" @click="activeTab = 2" :aria-selected="activeTab === 2"
                    :tabindex="activeTab === 2 ? 0 : -1" @keydown="tabKey($event, 2)">Latee II Putri
                    <span>↗</span></button>
            </div>

            @php
                $complexes = [
                    [
                        'title' => 'Pondok Pesantren Annuqayah Latee Putra',
                        'copy' =>
                            'Kompleks putra menerapkan kepengasuhan kolektif. Laman resmi menyebut KH. Abd. A’la sebagai ketua Dewan Pengasuh.',
                        'value' => 'Putra',
                        'label' => 'Pondok Pesantren Annuqayah Latee',
                        'focus' => 'Kolektif',
                        'focus_label' => 'Sistem kepengasuhan',
                        'area' => 'Latee',
                        'image' => 'masjid.jpg',
                        'alt' => 'Masjid Latee, dokumentasi website pesantren',
                        'url' => 'program/',
                    ],
                    [
                        'title' => 'Pondok Pesantren Annuqayah Latee I Putri',
                        'copy' =>
                            'Kompleks Latee I menyediakan pendidikan, kegiatan peribadatan, peminatan, serta layanan publikasi dan perpustakaan bagi santri putri.',
                        'value' => 'Putri',
                        'label' => 'Pondok Pesantren Annuqayah Latee I',
                        'focus' => 'Pendidikan',
                        'focus_label' => 'Program santri',
                        'area' => 'Latee I',
                        'image' => 'kitab.jpg',
                        'alt' => 'Kitab dalam dokumentasi pendidikan Annuqayah Latee',
                        'url' => 'latee-i-putri/',
                    ],
                    [
                        'title' => 'Pondok Pesantren Annuqayah Latee II Putri',
                        'copy' =>
                            'Program Latee II mencakup pendidikan, peribadatan, peminatan, publikasi, dan pembinaan tata busana sesuai lingkungan pesantren.',
                        'value' => 'Putri',
                        'label' => 'Pondok Pesantren Annuqayah Latee II',
                        'focus' => 'Pembinaan',
                        'focus_label' => 'Kehidupan santri',
                        'area' => 'Latee II',
                        'image' => 'kegiatan.jpg',
                        'alt' => 'Dokumentasi kegiatan santri dari website Annuqayah Latee',
                        'url' => 'latee-ii-putri/',
                    ],
                ];
            @endphp

            <div class="case-panel-stage">
                @foreach ($complexes as $index => $complex)
                    <div class="case-panel" id="case-panel-{{ $index }}" role="tabpanel"
                        aria-labelledby="case-tab-{{ $index }}" tabindex="0"
                        x-show="activeTab === {{ $index }}" :inert="activeTab !== {{ $index }}"
                        :aria-hidden="activeTab !== {{ $index }}" x-transition:enter="panel-enter"
                        x-transition:enter-start="panel-from" x-transition:enter-end="panel-to"
                        x-transition:leave="panel-leave" x-transition:leave-start="panel-to"
                        x-transition:leave-end="panel-from" @if ($index !== 0) x-cloak @endif>
                        <div class="case-copy"><span class="welcome-overline">KOMPLEKS PESANTREN /
                                0{{ $index + 1 }}</span>
                            <h3>{{ $complex['title'] }}</h3>
                            <div class="case-highlight">{{ $complex['value'] }}<span>{{ $complex['label'] }}</span>
                            </div>
                            <p>{{ $complex['copy'] }}</p>
                            <div class="case-numbers">
                                <div>
                                    <strong>{{ $complex['focus'] }}</strong><span>{{ $complex['focus_label'] }}</span>
                                </div>
                                <div><strong>{{ $complex['area'] }}</strong><span>Kompleks pesantren</span></div>
                            </div><a class="welcome-text-link"
                                href="https://pp.annuqayahlatee.id/{{ $complex['url'] }}">Kenali kompleks
                                <span>↗</span></a>
                        </div>
                        <div class="case-art">
                            <div class="case-orbit"></div><img
                                src="{{ asset('images/pesantren/' . $complex['image']) }}"
                                alt="{{ $complex['alt'] }}" width="1024" height="637" loading="lazy"><span
                                class="platform-label">Dokumentasi Annuqayah Latee</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="welcome-fit" id="profil">
            <div class="welcome-container fit-grid">
                <div class="fit-art welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                    :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                    <img src="{{ asset('images/pesantren/masjid.jpg') }}"
                        alt="Masjid di lingkungan Pondok Pesantren Annuqayah Latee" loading="lazy" width="1024"
                        height="569">
                </div>
                <div class="fit-copy welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                    :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                    <span class="welcome-pill">Sejarah & profil</span>
                    <h2>Merawat tradisi.<br><span>Mengembangkan ilmu.</span></h2>
                    <p>KH. Abdullah Sajjad mendirikan Annuqayah Latee pada 1923. Beliau adalah putra KH. Muhammad
                        Syarqawi, pendiri Pondok Pesantren Annuqayah.</p>
                    <div class="fit-checks">
                        @foreach (['Pendidikan berakar pada tradisi keilmuan pesantren.', 'Pembelajaran Al-Qur’an dan kitab kuning.', 'Pembentukan ketakwaan dan kedalaman ilmu agama.', 'Pengamalan Ahlussunnah Wal Jamaah an-Nahdliyyah.'] as $value)
                            <div class="welcome-text-link"><span class="logo-period"
                                    aria-hidden="true">✓</span><span>{{ $value }}</span></div>
                        @endforeach
                    </div>
                    <p>Pengajaran sorogan, wetonan, dan bandongan menjadi bagian dari perjalanan pendidikan Latee, yang
                        kemudian berkembang melalui madrasah dan pengajian.</p><a class="welcome-button"
                        href="https://pp.annuqayahlatee.id/tentang/">Baca profil lengkap <span>↗</span></a>
                </div>
            </div>
        </section>

        <section class="welcome-section welcome-container" id="pendidikan">
            <div class="welcome-section-heading align-left welcome-reveal" x-data="{ shown: false }"
                x-intersect.once="shown = true"
                :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"><span
                    class="welcome-pill">Pendidikan pesantren</span>
                <h2>Menimba ilmu.<br><span>Membentuk pribadi santri.</span></h2>
            </div>
            <div class="services-grid">
                <div class="service-phone welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                    :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                    <img src="{{ asset('images/pesantren/santri.jpg') }}"
                        alt="Santri Annuqayah Latee dalam dokumentasi pesantren" loading="lazy" width="1024"
                        height="569">
                </div>
                <div class="service-stack">
                    <article class="service-card light welcome-reveal" x-data="{ shown: false }"
                        x-intersect.once="shown = true"
                        :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                        <span class="service-index">01 / MADRASAH</span>
                        <h3>Madrasah Diniyah</h3>
                        <p>Pendidikan klasikal Madrasah Diniyah Annuqayah Latee dimulai pada 1 Agustus 1983 atas
                            prakarsa KH. Ahmad Basyir AS.</p>
                        <ul>
                            <li>Tingkat persiapan Isti’dadi dan enam kelas Ibtida’i.</li>
                            <li>Kajian akidah, akhlak, fikih, dan ilmu bahasa.</li>
                            <li>Penguatan hafalan dan pembahasan persoalan keagamaan.</li>
                        </ul>
                    </article>
                    <article class="service-card welcome-reveal" x-data="{ shown: false }"
                        x-intersect.once="shown = true"
                        :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                        <span class="service-index">02 / PENGAJIAN</span>
                        <h3>Al-Qur’an & kitab</h3>
                        <p>Pembelajaran membaca Al-Qur’an berjalan beriringan dengan pendalaman kitab turats.</p>
                        <ul>
                            <li>Bimbingan Tilawati untuk santri baru.</li>
                            <li>Majelis santri lama berjenjang sesuai kemampuan.</li>
                            <li>Pengajian kitab selepas Subuh dan Asar.</li>
                        </ul>
                    </article>
                </div>
                <div class="service-stack service-secondary">
                    <article class="service-card tinted welcome-reveal" x-data="{ shown: false }"
                        x-intersect.once="shown = true"
                        :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                        <span class="service-index">03 / DASAR IBADAH</span>
                        <h3>Madrasah SKIA</h3>
                        <p>Santri baru mempelajari dasar akidah, fikih, akhlak, tajwid, dan amaliah sehari-hari selama
                            satu tahun pelajaran.</p>
                    </article>
                    <article class="service-card welcome-reveal" x-data="{ shown: false }"
                        x-intersect.once="shown = true"
                        :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                        <span class="service-index">04 / PRAKTIK</span>
                        <h3>Ilmu yang diamalkan</h3>
                        <p>Pembelajaran dilengkapi praktik wudu, salat, dan pengurusan jenazah untuk memperkuat
                            kecakapan ibadah santri.</p><a class="welcome-text-link"
                            href="https://pp.annuqayahlatee.id/program/pendidikan/">Selengkapnya tentang pendidikan
                            <span>↗</span></a>
                    </article>
                </div>
                <div class="service-website welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                    :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                    <img src="{{ asset('images/pesantren/kitab.jpg') }}"
                        alt="Kitab sebagai bagian dari tradisi belajar pesantren" loading="lazy" width="1024"
                        height="637">
                </div>
            </div>
            <div class="expertise-grid">
                @foreach ([['⌘', 'Peminatan', 'Ruang kegiatan untuk mengembangkan bakat dan minat santri.', 'latee-i-putri/peminatan/'], ['◈', 'Perpustakaan', 'Publikasi dan layanan bacaan untuk mendukung kegiatan santri.', 'latee-i-putri/publikasi-dan-perpustakaan/'], ['⌁', 'Lingkungan', 'Perawatan kesehatan santri dan kebersihan lingkungan pesantren.', 'latee-i-putri/kesehatan-dan-lingkungan-hidup/'], ['↗', 'Konseling', 'Pendampingan santri, ketertiban, dan keamanan kehidupan pondok.', 'latee-i-putri/ketertiban-dan-konseling/']] as [$icon, $title, $copy, $url])
                    <article class="welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                        :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"
                        style="--reveal-delay: {{ $loop->index * 80 }}ms"><span class="expertise-icon icon-ring"
                            aria-hidden="true">{{ $icon }}</span>
                        <h3><a href="https://pp.annuqayahlatee.id/{{ $url }}">{{ $title }}</a></h3>
                        <p>{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="welcome-section welcome-method" id="pendaftaran">
            <div class="welcome-container method-grid">
                <div class="method-heading welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                    :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }">
                    <span class="welcome-pill">Santri baru</span>
                    <h2>Memulai perjalanan<br>belajar di<br><span>Annuqayah Latee.</span></h2>
                    <p>Persyaratan dan tahapan mengikuti ketentuan masing-masing kompleks.</p><a
                        class="welcome-text-link" href="https://pp.annuqayahlatee.id/santri-baru/">Lihat panduan resmi
                        <span>↗</span></a>
                </div>
                <div class="method-steps">
                    @foreach ([['Pilih kompleks', 'Baca panduan untuk Latee Putra, Latee I Putri, atau Latee II Putri.'], ['Siapkan dokumen', 'Persiapkan salinan Kartu Keluarga serta foto dan dokumen tambahan sesuai kompleks tujuan.'], ['Lengkapi administrasi', 'Ikuti prosedur pengasuh dan sekretariat, isi formulir serta surat pernyataan, lalu selesaikan pembayaran yang ditetapkan.'], ['Ikuti pembinaan', 'Tempati kamar sesuai arahan pengurus. Santri baru Latee Putra mengikuti Bimbingan dan Pembinaan Santri Baru (Binasabar).']] as [$title, $copy])
                        <article class="welcome-reveal" x-data="{ shown: false }" x-intersect.once="shown = true"
                            :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"
                            style="--reveal-delay: {{ $loop->index * 80 }}ms"><span
                                class="step-number">0{{ $loop->iteration }}</span>
                            <div>
                                <h3>{{ $title }}</h3>
                                <p>{{ $copy }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="welcome-section welcome-container welcome-faq" id="faq">
            <div><span class="welcome-pill">Informasi pesantren</span>
                <h2>Mengenal Latee<br><span>lebih dekat.</span></h2>
                <p>Informasi bagi calon santri,<br>wali santri, dan masyarakat.</p>
            </div>
            <div class="faq-list">
                @foreach ([['Di mana lokasi Annuqayah Latee?', 'Pesantren berada di Jalan Makam Pahlawan, Kompleks Pondok Pesantren Annuqayah, Guluk-Guluk, Sumenep, Jawa Timur, kode pos 69463.'], ['Apakah tersedia kompleks santri putri?', 'Ya. Selain Latee Putra, terdapat kompleks Latee I Putri dan Latee II Putri.'], ['Bagaimana mendapatkan rincian biaya pendaftaran?', 'Buka tautan panduan pendaftaran resmi. Rincian biaya dan perlengkapan berbeda menurut kompleks yang dipilih.'], ['Di mana membaca berita dan karya santri?', 'Website pesantren menyediakan rubrik Rilis Berita dan Pena Santri. Tautannya tersedia di bagian kontak di bawah.']] as [$question, $answer])
                    <div class="faq-item" x-data="{ open: false }">
                        <h3><button type="button" class="faq-question" @click="open = !open" :aria-expanded="open"
                                aria-controls="faq-answer-{{ $loop->index }}"
                                id="faq-question-{{ $loop->index }}">{{ $question }}<span aria-hidden="true"
                                    :class="{ 'is-open': open }">＋</span></button></h3>
                        <div id="faq-answer-{{ $loop->index }}" role="region"
                            aria-labelledby="faq-question-{{ $loop->index }}" x-show="open"
                            x-collapse.duration.250ms x-cloak>
                            <p>{{ $answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section x-data="{ shown: false }" x-intersect.once="shown = true"
            :class="{ 'reveal-pending': !shown && !reducedMotion, 'reveal-visible': shown || reducedMotion }"
            class="welcome-cta welcome-container welcome-reveal" id="kontak"><span class="welcome-pill">PONDOK
                PESANTREN
                ANNUQAYAH LATEE</span>
            <h2>Menjalin silaturahmi.<br><span>Bersama keluarga pesantren.</span></h2>
            <p>Jln. Makam Pahlawan, Kompleks Pondok Pesantren Annuqayah<br>Guluk-Guluk, Sumenep, Jawa Timur ·
                69463<br><a href="mailto:pesantren@annuqayahlatee.net">pesantren@annuqayahlatee.net</a></p><a
                class="welcome-button" href="https://pp.annuqayahlatee.id/kontak/">Hubungi pesantren
                <span>↗</span></a><a class="cta-login" href="https://pp.annuqayahlatee.id/santri-baru/">Panduan
                pendaftaran santri baru <span>→</span></a>
            <div class="hero-actions"><a class="cta-login" href="https://pp.annuqayahlatee.id/category/berita/">Rilis
                    Berita ↗</a><a class="cta-login" href="https://pp.annuqayahlatee.id/category/pena-santri/">Pena
                    Santri ↗</a><a class="cta-login" href="https://www.instagram.com/ppa.latee/">Instagram ↗</a></div>
        </section>
    </main>

    <footer class="welcome-footer welcome-container"><a href="{{ route('home') }}" class="welcome-logo"
            aria-label="Annuqayah Latee"><span class="logo-star" aria-hidden="true">✳</span> latee<span
                class="logo-period">.</span></a>
        <p>© {{ date('Y') }} Pondok Pesantren Annuqayah Latee · <a href="https://pp.annuqayahlatee.id/">Sumber
                informasi</a></p><a href="#main">Kembali ke atas ↑</a>
    </footer>

    {{-- ===================== FLOATING THEME TOGGLE ===================== --}}
    <button type="button" class="welcome-theme-toggle"
        @click="toggleTheme"
        :aria-pressed="theme === 'dark'"
        :aria-label="themeLabel"
        :title="themeLabel">
        <svg class="theme-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
            aria-hidden="true">
            <circle cx="12" cy="12" r="4" />
            <path stroke-linecap="round"
                d="M12 2v2m0 16v2M2 12h2m16 0h2M5 5l1.5 1.5m11 11L19 19M5 19l1.5-1.5m11-11L19 5" />
        </svg>
        <svg class="theme-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
            aria-hidden="true">
            <path stroke-linejoin="round" d="M20.5 13.2A8.5 8.5 0 0 1 10.8 3.5a8.5 8.5 0 1 0 9.7 9.7Z" />
        </svg>
    </button>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('welcomePage', () => ({
                menuOpen: false,
                scrolled: false,
                activeTab: 0,
                ready: false,
                desktop: window.matchMedia('(min-width: 701px)').matches,
                reducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
                pageVisible: !document.hidden,
                cleanup: [],

                // Satu sumber kebenaran untuk tema: Flux
                get theme() {
                    return this.$flux?.appearance === 'dark' ? 'dark' : 'light';
                },
                get themeLabel() {
                    return this.theme === 'dark' ? 'Ganti ke mode terang' : 'Ganti ke mode gelap';
                },

                init() {
                    const listen = (query, update) => {
                        const media = window.matchMedia(query);
                        const handler = event => update(event.matches);
                        media.addEventListener('change', handler);
                        this.cleanup.push(() => media.removeEventListener('change', handler));
                    };

                    listen('(min-width: 701px)', value => {
                        this.desktop = value;
                        if (value) this.menuOpen = false;
                    });
                    listen('(prefers-reduced-motion: reduce)', value => {
                        this.reducedMotion = value;
                    });

                    // Scroll state
                    const onScroll = () => { this.scrolled = window.scrollY > 24; };
                    window.addEventListener('scroll', onScroll, { passive: true });
                    onScroll();
                    this.cleanup.push(() => window.removeEventListener('scroll', onScroll));

                    // Sinkronkan data-welcome-theme + theme-color dengan Flux
                    const syncAttr = () => {
                        const value = this.theme;
                        document.documentElement.dataset.welcomeTheme = value;
                        document.documentElement.style.colorScheme = value;
                        const meta = document.querySelector('meta[name="theme-color"]');
                        if (meta) meta.content = value === 'dark' ? '#030404' : '#f7faf8';
                    };
                    syncAttr();
                    this.$watch(() => this.$flux?.appearance, syncAttr);

                    this.$nextTick(() => requestAnimationFrame(() => {
                        this.ready = true;
                    }));
                },

                destroy() {
                    this.cleanup.forEach(dispose => dispose());
                },

                toggleTheme() {
                    if (!this.$flux) return;
                    this.$flux.appearance = this.$flux.appearance === 'dark' ? 'light' : 'dark';
                },

                tabKey(event, index) {
                    const next = {
                        ArrowRight: (index + 1) % 3,
                        ArrowLeft: (index + 2) % 3,
                        Home: 0,
                        End: 2,
                    }[event.key];
                    if (next === undefined) return;
                    event.preventDefault();
                    this.activeTab = next;
                    this.$nextTick(() => document.getElementById('case-tab-' + next)?.focus());
                },
            }));
        });
    </script>

    @fluxScripts
</body>
</html>
