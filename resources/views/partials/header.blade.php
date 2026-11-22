<div
    x-data="{ scrolled: false, mobileMenuOpen: false }"
    @keydown.escape.window="mobileMenuOpen = false"
    x-effect="document.body.classList.toggle('overflow-hidden', mobileMenuOpen)"
    class="relative z-50">

    {{-- ============================================================== --}}
    {{-- TOP FLOATING NAVBAR                                            --}}
    {{-- ============================================================== --}}
    <header
        @scroll.window="scrolled = (window.pageYOffset > 15)"
        :class="scrolled ? 'floating-navbar-scrolled' : 'floating-navbar-top'"
        class="sticky top-0 z-40 floating-navbar transition-all duration-500 ease-out">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">

            {{-- Logo --}}
            <a class="flex items-center gap-2.5 text-slate-900 dark:text-white group z-10" href="/">
                <div
                    class="w-9 h-9 rounded-full flex items-center justify-center text-white text-base font-bold shadow-md shadow-slate-900/10 dark:shadow-brand-500/20 group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
                </div>
                <span class="font-extrabold tracking-wider text-sm sm:text-base">Annuqayah Latee</span>
            </a>

            {{-- Desktop Navigation (Hidden on mobile) --}}
            <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-600 dark:text-slate-300">

                {{-- BERANDA --}}
                <a class="{{ request()->is('/') ? 'text-emerald-600 dark:text-emerald-400' : '' }} hover:text-emerald-600 dark:hover:text-emerald-400 relative group transition-colors flex items-center py-4"
                    href="/">
                    Beranda
                    <span
                        class="absolute bottom-3 left-0 {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                </a>

                {{-- PROFIL --}}
                <a class="{{ request()->is('profile') ? 'text-emerald-600 dark:text-emerald-400' : '' }} hover:text-emerald-600 dark:hover:text-emerald-400 relative group transition-colors flex items-center py-4"
                    href="{{ route('profile') }}">
                    Profil
                    <span
                        class="absolute bottom-3 left-0 {{ request()->is('profile') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                </a>

                {{-- PENDAFTARAN --}}
                <a class="{{ request()->is('pendaftaran') ? 'text-emerald-600 dark:text-emerald-400' : '' }} hover:text-emerald-600 dark:hover:text-emerald-400 relative group transition-colors flex items-center py-4"
                    href="{{ route('pendaftaran') }}">
                    Pendaftaran
                    <span
                        class="absolute bottom-3 left-0 {{ request()->is('pendaftaran') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                </a>

                {{-- DROPDOWN LATEE PUTRA --}}
                <div class="relative group">
                    <button
                        class="{{ request()->is('programs/latee/*') ? 'text-emerald-600 dark:text-emerald-400' : '' }} flex items-center gap-1 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors py-4 cursor-pointer">
                        Latee Putra
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute bottom-3 left-0 {{ request()->is('programs/latee/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                    </button>
                    <div
                        class="absolute top-full left-0 w-56 glass-card shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden p-2">
                        <div class="space-y-0.5">
                            <a href="{{ route('latee.programs.pendidikan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.pendidikan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Pendidikan</a>
                            <a href="{{ route('latee.programs.peribadatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.peribadatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peribadatan</a>
                            <a href="{{ route('latee.programs.peminatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.peminatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peminatan</a>
                            <a href="{{ route('latee.programs.publikasi') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.publikasi') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Publikasi</a>
                            <a href="{{ route('latee.programs.kesehatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.kesehatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Kesehatan
                                & Lingkungan</a>
                            <a href="{{ route('latee.programs.ketertiban') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.ketertiban') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Ketertiban
                                & Konseling</a>
                            <a href="{{ route('latee.programs.infrastruktur') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('latee.programs.infrastruktur') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Infrastruktur</a>
                            <a href="{{ route('latee.programs.unit') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors border-t border-slate-200/50 dark:border-white/10 mt-1 pt-1.5 {{ request()->routeIs('latee.programs.unit') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Unit
                                Usaha</a>
                        </div>
                    </div>
                </div>

                {{-- DROPDOWN LATEE I PUTRI --}}
                <div class="relative group">
                    <button
                        class="{{ request()->is('programs/lateei/*') ? 'text-emerald-600 dark:text-emerald-400' : '' }} flex items-center gap-1 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors py-4 cursor-pointer">
                        Latee I Putri
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute bottom-3 left-0 {{ request()->is('programs/lateei/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                    </button>
                    <div
                        class="absolute top-full left-0 w-56 glass-card shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden p-2">
                        <div class="space-y-0.5">
                            <a href="{{ route('lateei.programs.pendidikan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.pendidikan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Pendidikan</a>
                            <a href="{{ route('lateei.programs.peribadatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.peribadatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peribadatan</a>
                            <a href="{{ route('lateei.programs.peminatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.peminatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peminatan</a>
                            <a href="{{ route('lateei.programs.publikasi') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.publikasi') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Publikasi</a>
                            <a href="{{ route('lateei.programs.kesehatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.kesehatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Kesehatan
                                & Lingkungan</a>
                            <a href="{{ route('lateei.programs.ketertiban') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.ketertiban') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Ketertiban
                                & Konseling</a>
                            <a href="{{ route('lateei.programs.infrastruktur') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateei.programs.infrastruktur') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Infrastruktur</a>
                            <a href="{{ route('lateei.programs.unit') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors border-t border-slate-200/50 dark:border-white/10 mt-1 pt-1.5 {{ request()->routeIs('lateei.programs.unit') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Unit
                                Usaha</a>
                        </div>
                    </div>
                </div>

                {{-- DROPDOWN LATEE II PUTRI --}}
                <div class="relative group">
                    <button
                        class="{{ request()->is('programs/lateeii/*') ? 'text-emerald-600 dark:text-emerald-400' : '' }} flex items-center gap-1 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors py-4 cursor-pointer">
                        Latee II Putri
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <span
                            class="absolute bottom-3 left-0 {{ request()->is('programs/lateeii/*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                    </button>
                    <div
                        class="absolute top-full left-0 w-56 glass-card shadow-2xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden p-2">
                        <div class="space-y-0.5">
                            <a href="{{ route('lateeii.programs.pendidikan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.pendidikan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Pendidikan</a>
                            <a href="{{ route('lateeii.programs.peribadatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.peribadatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peribadatan</a>
                            <a href="{{ route('lateeii.programs.peminatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.peminatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Peminatan</a>
                            <a href="{{ route('lateeii.programs.publikasi') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.publikasi') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Publikasi</a>
                            <a href="{{ route('lateeii.programs.kesehatan') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.kesehatan') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Kesehatan
                                & Lingkungan</a>
                            <a href="{{ route('lateeii.programs.tata-busana') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.tata-busana') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Tata
                                Busana</a>
                            <a href="{{ route('lateeii.programs.ketertiban') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.ketertiban') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Ketertiban
                                & Konseling</a>
                            <a href="{{ route('lateeii.programs.infrastruktur') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors {{ request()->routeIs('lateeii.programs.infrastruktur') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Infrastruktur</a>
                            <a href="{{ route('lateeii.programs.unit') }}"
                                class="block px-3.5 py-2 text-xs rounded-xl transition-colors border-t border-slate-200/50 dark:border-white/10 mt-1 pt-1.5 {{ request()->routeIs('lateeii.programs.unit') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-semibold' : 'hover:bg-emerald-500/10 hover:text-emerald-600 dark:hover:text-emerald-400' }}">Unit
                                Usaha</a>
                        </div>
                    </div>
                </div>

                {{-- WARTA & ARTIKEL --}}
                <a class="{{ request()->is('blogs*') ? 'text-emerald-600 dark:text-emerald-400' : '' }} hover:text-emerald-600 dark:hover:text-emerald-400 relative group transition-colors flex items-center py-4"
                    href="{{ route('blogs.index') }}">
                    Warta
                    <span
                        class="absolute bottom-3 left-0 {{ request()->is('blogs*') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                </a>

                {{-- KONTAK --}}
                <a class="{{ request()->is('contact') ? 'text-emerald-600 dark:text-emerald-400' : '' }} hover:text-emerald-600 dark:hover:text-emerald-400 relative group transition-colors flex items-center py-4"
                    href="{{ route('contact') }}">
                    Kontak
                    <span
                        class="absolute bottom-3 left-0 {{ request()->is('contact') ? 'w-full' : 'w-0 group-hover:w-full' }} h-0.5 bg-emerald-500 dark:bg-emerald-400 transition-all duration-300"></span>
                </a>
            </nav>

            {{-- Actions: Desktop Theme Toggle + Desktop Login / Mobile Hamburger Only --}}
            <div class="flex items-center gap-2 sm:gap-3">

                {{-- Desktop-Only Theme Switcher Pill (HIDDEN on Mobile) --}}
                <button
                    type="button"
                    x-data="{
                        get isDark() {
                            if (typeof $flux !== 'undefined' && $flux) {
                                return $flux.dark;
                            }
                            return document.documentElement.classList.contains('dark');
                        },
                        toggleTheme() {
                            if (typeof $flux !== 'undefined' && $flux) {
                                $flux.dark = !$flux.dark;
                            } else {
                                const nextDark = !document.documentElement.classList.contains('dark');
                                document.documentElement.classList.toggle('dark', nextDark);
                                localStorage.setItem('flux.appearance', nextDark ? 'dark' : 'light');
                            }
                        }
                    }"
                    @click="toggleTheme()"
                    class="hidden md:inline-flex cursor-pointer rounded-full p-2 sm:p-2.5 transition-all duration-300 border border-slate-200/80 dark:border-white/15 bg-white/80 dark:bg-white/10 backdrop-blur-md hover:scale-105 shadow-xs hover:border-emerald-500/40 dark:hover:border-emerald-400/50"
                    title="Beralih Mode Tampilan"
                    aria-label="Beralih Mode Tampilan"
                >
                    {{-- Ikon bulan sabit (Light Mode) --}}
                    <svg x-show="!isDark"
                        class="h-4 w-4 sm:h-4.5 sm:w-4.5 text-[#059669] dark:text-[#34D399] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>

                    {{-- Ikon matahari (Dark Mode) --}}
                    <svg x-show="isDark" x-cloak
                        class="h-4 w-4 sm:h-4.5 sm:w-4.5 text-[#F59E0B] transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>

                {{-- Desktop-Only Login / Dashboard (HIDDEN on Mobile) --}}
                @auth
                    <a href="{{ route('dashboard') }}" class="hidden md:inline-flex btn-primary-aurora px-3.5 sm:px-4 py-1.5 sm:py-2 text-xs font-bold tracking-wide">
                        Dashboard
                    </a>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="hidden md:inline-flex btn-primary-aurora px-3.5 sm:px-4 py-1.5 sm:py-2 text-xs font-bold tracking-wide">
                        Login
                    </a>
                @endguest

                {{-- Tombol Hamburger Mobile (HANYA MUNCUL DI MOBILE / HP) --}}
                <button
                    id="mobile-nav-toggle-btn"
                    type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden flex items-center justify-center cursor-pointer rounded-xl p-2 sm:p-2.5 transition-all duration-300 border border-slate-200/80 dark:border-white/15 bg-white/80 dark:bg-white/10 backdrop-blur-md hover:scale-105 shadow-xs text-slate-700 dark:text-slate-200 hover:text-emerald-600 dark:hover:text-emerald-400 focus:outline-hidden"
                    aria-label="Buka Menu Navigasi"
                    :aria-expanded="mobileMenuOpen.toString()"
                >
                    {{-- Ikon Hamburger saat drawer tertutup --}}
                    <svg x-show="!mobileMenuOpen" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    {{-- Ikon Silang (X) saat drawer terbuka --}}
                    <svg x-show="mobileMenuOpen" x-cloak class="w-5 h-5 text-emerald-600 dark:text-emerald-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    {{-- ============================================================== --}}
    {{-- MOBILE SIDEBAR DRAWER & BACKDROP (OUTSIDE HEADER FOR VIEWPORT FIX) --}}
    {{-- ============================================================== --}}

    {{-- Backdrop Overlay --}}
    <div
        id="mobile-nav-backdrop"
        x-show="mobileMenuOpen"
        x-cloak
        @click="mobileMenuOpen = false"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm z-50 md:hidden"
        aria-hidden="true"
    ></div>

    {{-- Sliding Sidebar Drawer --}}
    <aside
        id="mobile-nav-drawer"
        x-show="mobileMenuOpen"
        x-cloak
        x-transition:enter="transition transform ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 bottom-0 w-[85%] max-w-sm z-50 md:hidden bg-[#F4F8F7]/95 dark:bg-[#050B14]/95 backdrop-blur-2xl border-l border-emerald-500/20 dark:border-white/10 shadow-2xl flex flex-col justify-between overflow-hidden"
        role="dialog"
        aria-modal="true"
        aria-label="Menu Navigasi Mobile"
    >
        {{-- Ambient Islamic Aurora Glow Orbs di Dalam Drawer --}}
        <div class="absolute -top-12 -right-12 w-48 h-48 bg-emerald-500/20 dark:bg-emerald-500/25 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-amber-500/15 dark:bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>

        {{-- Top Header Drawer --}}
        <div class="relative z-10 p-4 sm:p-5 border-b border-slate-200/70 dark:border-white/10 flex items-center justify-between bg-white/40 dark:bg-white/5">
            <a class="flex items-center gap-2.5 text-slate-900 dark:text-white" href="/" @click="mobileMenuOpen = false">
                <div class="w-8 h-8 rounded-full overflow-hidden shadow-xs ring-1 ring-emerald-500/30">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col">
                    <span class="font-extrabold text-sm tracking-wide leading-tight">Annuqayah Latee</span>
                    <span class="text-[9px] uppercase tracking-wider text-emerald-600 dark:text-emerald-400 font-bold">Pesantren Digital</span>
                </div>
            </a>
            <button
                id="mobile-nav-close-btn"
                type="button"
                @click="mobileMenuOpen = false"
                class="w-8 h-8 rounded-full flex items-center justify-center text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white bg-slate-100 dark:bg-white/10 transition-colors cursor-pointer"
                aria-label="Tutup Menu Navigasi"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- Menu Links List (Scrollable) --}}
        <div class="relative z-10 flex-1 overflow-y-auto p-4 space-y-1.5 text-sm font-semibold text-slate-700 dark:text-slate-300"
            x-data="{ openPutra: false, openPutri1: false, openPutri2: false }">

            {{-- BERANDA --}}
            <a
                href="/"
                @click="mobileMenuOpen = false"
                class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all {{ request()->is('/') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold' : 'hover:bg-slate-100/70 dark:hover:bg-white/5' }}"
            >
                <span class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Beranda</span>
                </span>
                @if (request()->is('/'))
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                @endif
            </a>

            {{-- PROFIL --}}
            <a
                href="{{ route('profile') }}"
                @click="mobileMenuOpen = false"
                class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all {{ request()->is('profile') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold' : 'hover:bg-slate-100/70 dark:hover:bg-white/5' }}"
            >
                <span class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <span>Profil Pesantren</span>
                </span>
                @if (request()->is('profile'))
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                @endif
            </a>

            {{-- PENDAFTARAN --}}
            <a
                href="{{ route('pendaftaran') }}"
                @click="mobileMenuOpen = false"
                class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all {{ request()->is('pendaftaran') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold' : 'hover:bg-slate-100/70 dark:hover:bg-white/5' }}"
            >
                <span class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Pendaftaran Santri Baru</span>
                </span>
                @if (request()->is('pendaftaran'))
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                @endif
            </a>

            {{-- Section Divider --}}
            <div class="pt-3 pb-1 border-t border-slate-200/60 dark:border-white/10 my-2">
                <span class="px-3.5 text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Kompleks & Program</span>
            </div>

            {{-- ACCORDION: LATEE PUTRA --}}
            <div class="rounded-xl overflow-hidden {{ request()->is('programs/latee/*') ? 'bg-emerald-500/5' : '' }}">
                <button
                    type="button"
                    @click="openPutra = !openPutra"
                    class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-colors hover:bg-slate-100/70 dark:hover:bg-white/5 cursor-pointer {{ request()->is('programs/latee/*') ? 'text-emerald-600 dark:text-emerald-400 font-bold' : '' }}"
                >
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Latee Putra</span>
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="openPutra ? 'rotate-180 text-emerald-600 dark:text-emerald-400' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="openPutra"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="pl-5 pr-2 pb-2 pt-1 space-y-1 text-xs text-slate-600 dark:text-slate-400 border-l-2 border-emerald-500/20 ml-4 my-1"
                >
                    <a href="{{ route('latee.programs.pendidikan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.pendidikan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Pendidikan</a>
                    <a href="{{ route('latee.programs.peribadatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.peribadatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peribadatan</a>
                    <a href="{{ route('latee.programs.peminatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.peminatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peminatan</a>
                    <a href="{{ route('latee.programs.publikasi') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.publikasi') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Publikasi</a>
                    <a href="{{ route('latee.programs.kesehatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.kesehatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Kesehatan & Lingkungan</a>
                    <a href="{{ route('latee.programs.ketertiban') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.ketertiban') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Ketertiban & Konseling</a>
                    <a href="{{ route('latee.programs.infrastruktur') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.infrastruktur') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Infrastruktur</a>
                    <a href="{{ route('latee.programs.unit') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('latee.programs.unit') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Unit Usaha</a>
                </div>
            </div>

            {{-- ACCORDION: LATEE I PUTRI --}}
            <div class="rounded-xl overflow-hidden {{ request()->is('programs/lateei/*') ? 'bg-emerald-500/5' : '' }}">
                <button
                    type="button"
                    @click="openPutri1 = !openPutri1"
                    class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-colors hover:bg-slate-100/70 dark:hover:bg-white/5 cursor-pointer {{ request()->is('programs/lateei/*') ? 'text-emerald-600 dark:text-emerald-400 font-bold' : '' }}"
                >
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span>Latee I Putri</span>
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="openPutri1 ? 'rotate-180 text-emerald-600 dark:text-emerald-400' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="openPutri1"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="pl-5 pr-2 pb-2 pt-1 space-y-1 text-xs text-slate-600 dark:text-slate-400 border-l-2 border-emerald-500/20 ml-4 my-1"
                >
                    <a href="{{ route('lateei.programs.pendidikan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.pendidikan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Pendidikan</a>
                    <a href="{{ route('lateei.programs.peribadatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.peribadatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peribadatan</a>
                    <a href="{{ route('lateei.programs.peminatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.peminatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peminatan</a>
                    <a href="{{ route('lateei.programs.publikasi') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.publikasi') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Publikasi</a>
                    <a href="{{ route('lateei.programs.kesehatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.kesehatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Kesehatan & Lingkungan</a>
                    <a href="{{ route('lateei.programs.ketertiban') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.ketertiban') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Ketertiban & Konseling</a>
                    <a href="{{ route('lateei.programs.infrastruktur') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.infrastruktur') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Infrastruktur</a>
                    <a href="{{ route('lateei.programs.unit') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateei.programs.unit') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Unit Usaha</a>
                </div>
            </div>

            {{-- ACCORDION: LATEE II PUTRI --}}
            <div class="rounded-xl overflow-hidden {{ request()->is('programs/lateeii/*') ? 'bg-emerald-500/5' : '' }}">
                <button
                    type="button"
                    @click="openPutri2 = !openPutri2"
                    class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-colors hover:bg-slate-100/70 dark:hover:bg-white/5 cursor-pointer {{ request()->is('programs/lateeii/*') ? 'text-emerald-600 dark:text-emerald-400 font-bold' : '' }}"
                >
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                        <span>Latee II Putri</span>
                    </span>
                    <svg class="w-4 h-4 transition-transform duration-300" :class="openPutri2 ? 'rotate-180 text-emerald-600 dark:text-emerald-400' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="openPutri2"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="pl-5 pr-2 pb-2 pt-1 space-y-1 text-xs text-slate-600 dark:text-slate-400 border-l-2 border-emerald-500/20 ml-4 my-1"
                >
                    <a href="{{ route('lateeii.programs.pendidikan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.pendidikan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Pendidikan</a>
                    <a href="{{ route('lateeii.programs.peribadatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.peribadatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peribadatan</a>
                    <a href="{{ route('lateeii.programs.peminatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.peminatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Peminatan</a>
                    <a href="{{ route('lateeii.programs.publikasi') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.publikasi') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Publikasi</a>
                    <a href="{{ route('lateeii.programs.kesehatan') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.kesehatan') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Kesehatan & Lingkungan</a>
                    <a href="{{ route('lateeii.programs.tata-busana') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.tata-busana') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Tata Busana</a>
                    <a href="{{ route('lateeii.programs.ketertiban') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.ketertiban') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Ketertiban & Konseling</a>
                    <a href="{{ route('lateeii.programs.infrastruktur') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.infrastruktur') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Infrastruktur</a>
                    <a href="{{ route('lateeii.programs.unit') }}" @click="mobileMenuOpen = false" class="block px-3 py-1.5 rounded-lg hover:text-emerald-600 dark:hover:text-emerald-400 hover:bg-emerald-500/10 {{ request()->routeIs('lateeii.programs.unit') ? 'text-emerald-600 dark:text-emerald-400 font-bold bg-emerald-500/10' : '' }}">Unit Usaha</a>
                </div>
            </div>

            {{-- BERITA / ARTIKEL --}}
            <a
                href="{{ route('blogs.index') }}"
                @click="mobileMenuOpen = false"
                class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all {{ request()->is('blogs*') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold' : 'hover:bg-slate-100/70 dark:hover:bg-white/5' }}"
            >
                <span class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <span>Warta & Artikel</span>
                </span>
                @if (request()->is('blogs*'))
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                @endif
            </a>

            {{-- KONTAK --}}
            <a
                href="{{ route('contact') }}"
                @click="mobileMenuOpen = false"
                class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-all {{ request()->is('contact') ? 'bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold' : 'hover:bg-slate-100/70 dark:hover:bg-white/5' }}"
            >
                <span class="flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>Kontak & Lokasi</span>
                </span>
                @if (request()->is('contact'))
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                @endif
            </a>
        </div>

        {{-- ============================================================== --}}
        {{-- BOTTOM FOOTER DRAWER (THEME SWITCHER & LOGIN ACTION FOR MOBILE) --}}
        {{-- ============================================================== --}}
        <div class="relative z-10 p-4 border-t border-slate-200/70 dark:border-white/10 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-md space-y-2.5">

            {{-- Mobile Dark Mode / Light Mode Switcher --}}
            <button
                type="button"
                id="mobile-theme-toggle-btn"
                x-data="{
                    get isDark() {
                        if (typeof $flux !== 'undefined' && $flux) {
                            return $flux.dark;
                        }
                        return document.documentElement.classList.contains('dark');
                    },
                    toggleTheme() {
                        if (typeof $flux !== 'undefined' && $flux) {
                            $flux.dark = !$flux.dark;
                        } else {
                            const nextDark = !document.documentElement.classList.contains('dark');
                            document.documentElement.classList.toggle('dark', nextDark);
                            localStorage.setItem('flux.appearance', nextDark ? 'dark' : 'light');
                        }
                    }
                }"
                @click="toggleTheme()"
                class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl border border-slate-200/80 dark:border-white/10 bg-white/70 dark:bg-white/5 hover:bg-slate-100 dark:hover:bg-white/10 transition-colors text-xs font-semibold text-slate-700 dark:text-slate-200 cursor-pointer shadow-xs"
                title="Beralih Mode Gelap/Terang"
            >
                <div class="flex items-center gap-2.5">
                    {{-- Icon Light Mode --}}
                    <span x-show="!isDark" class="p-1 rounded-md bg-emerald-500/10 text-emerald-600">
                        <svg class="h-4 w-4 text-[#059669]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </span>
                    {{-- Icon Dark Mode --}}
                    <span x-show="isDark" x-cloak class="p-1 rounded-md bg-amber-500/15 text-[#F59E0B]">
                        <svg class="h-4 w-4 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                    <span x-text="isDark ? 'Mode Tampilan: Gelap' : 'Mode Tampilan: Terang'">Mode Tampilan</span>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-md bg-emerald-500/15 text-emerald-600 dark:text-emerald-400">
                    <span x-show="isDark">Gelap</span>
                    <span x-show="!isDark">Terang</span>
                </span>
            </button>

            {{-- Mobile Login / Dashboard Button --}}
            @auth
                <a href="{{ route('dashboard') }}" class="btn-primary-aurora w-full py-2.5 text-xs font-bold text-center flex items-center justify-center gap-2 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard Pengguna</span>
                </a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="btn-primary-aurora w-full py-2.5 text-xs font-bold text-center flex items-center justify-center gap-2 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    <span>Masuk ke Akun (Login)</span>
                </a>
            @endguest

            <p class="text-[10px] text-center text-slate-400 dark:text-slate-500 pt-1">
                &copy; {{ date('Y') }} Pondok Pesantren Annuqayah Latee
            </p>
        </div>
    </aside>
</div>
