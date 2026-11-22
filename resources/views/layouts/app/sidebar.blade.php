@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body
    class="min-h-screen text-slate-700 dark:text-slate-200 font-sans antialiased selection:bg-brand-600 selection:text-white dark:selection:bg-brand-400 dark:selection:text-slate-950 transition-colors duration-300 bg-aurora-page">

    {{-- Background layers --}}
    <div class="fixed inset-0 z-0 bg-slate-50/40 dark:bg-slate-950/40 transition-colors duration-300" aria-hidden="true"></div>
    <div class="pointer-events-none fixed inset-0 z-0 bg-texture-grid opacity-30 dark:opacity-20" aria-hidden="true"></div>

    {{-- Atmospheric Islamic Aurora Glow Layer (Behind Glossy Sidebar & Header) --}}
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden" aria-hidden="true">
        <div class="glow-hero-emerald w-[750px] h-[750px] -top-32 -left-32 rounded-full opacity-50 dark:opacity-60"></div>
        <div class="glow-hero-sapphire w-[650px] h-[650px] top-12 -right-28 rounded-full opacity-40 dark:opacity-45"></div>
        <div class="glow-contact-gold w-[600px] h-[600px] top-[700px] -left-20 rounded-full opacity-30 dark:opacity-35"></div>
        <div class="glow-education-teal w-[650px] h-[650px] top-[1400px] -right-20 rounded-full opacity-30 dark:opacity-35"></div>
    </div>

    {{-- Layout: sidebar + (header + main) --}}
    <div class="relative z-10 flex min-h-screen">

        {{-- ═══════════════════════════════════════════════════ --}}
        {{-- SIDEBAR — collapsible="true" untuk desktop collapse --}}
        {{-- ═══════════════════════════════════════════════════ --}}
        <flux:sidebar sticky collapsible="true"
            class="border-e border-white/80 dark:border-white/10 bg-white/75 dark:bg-[#050B14]/80 backdrop-blur-2xl shadow-[inset_-1px_0_0_rgba(255,255,255,0.8),_4px_0_24px_rgba(6,78,59,0.04)] dark:shadow-[inset_-1px_0_0_rgba(255,255,255,0.08),_4px_0_30px_rgba(0,0,0,0.5)] transition-[width,background-color,border-color] duration-300 ease-in-out">
            <flux:sidebar.header>
                <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3 min-w-0 group">
                    <div
                        class="w-9 h-9 shrink-0 rounded-full bg-white/90 shadow-md shadow-emerald-900/10 flex items-center justify-center overflow-hidden ring-1 ring-emerald-500/30 dark:bg-white/10 dark:shadow-emerald-500/20 dark:ring-emerald-400/30 group-hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Annuqayah Latee"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-sm font-bold text-slate-900 dark:text-white truncate group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Annuqayah Latee</span>
                        <span class="text-[9px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-400 truncate">
                            Sistem Informasi
                        </span>
                    </div>
                </a>
                {{-- Collapse button — tampil di desktop & mobile --}}
                <flux:sidebar.collapse />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Platform')" class="grid">
                    <flux:sidebar.item icon="home" :href="route('dashboard')"
                        :current="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>

                @role('admin')
                    <flux:sidebar.group :heading="__('Administrasi')" class="grid mt-6">
                        <flux:sidebar.item icon="key" href="{{ route('admin.manage-roles') }}"
                            :current="request()->is('admin/manage-roles*')" wire:navigate>
                            {{ __('Peran') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="users" href="{{ route('admin.manage-users') }}"
                            :current="request()->is('admin/manage-users*')" wire:navigate>
                            {{ __('Pengguna') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="adjustments-horizontal" href="{{ route('admin.manage-settings') }}"
                            :current="request()->is('admin/manage-settings*') || request()->routeIs('admin.manage-settings')" wire:navigate>
                            {{ __('Pengaturan Aplikasi') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="cog-6-tooth" href="{{ route('profile.edit') }}" :current="request()->routeIs('settings.*') || request()->routeIs('profile.edit') || request()->routeIs('security.edit') || request()->routeIs('appearance.edit')"
                            wire:navigate>
                            {{ __('Pengaturan Akun') }}
                        </flux:sidebar.item>
                    </flux:sidebar.group>
                @endrole

                <flux:sidebar.group :heading="__('Konten')" class="grid mt-6">
                    <flux:sidebar.item icon="document-text" href="{{ route('admin.manage-posts') }}"
                        :current="request()->routeIs('admin.posts.*') || request()->routeIs('admin.manage-posts')"
                        wire:navigate>
                        {{ __('Posts') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="chat-bubble-left-right" href="#"
                        :current="request()->routeIs('quotes.*')" wire:navigate>
                        <div class="flex items-center justify-between w-full">
                            <span>{{ __('Quotes') }}</span>
                            <span class="text-[9px] px-1.5 py-0.2 rounded-full bg-slate-200/60 dark:bg-white/10 text-slate-500 dark:text-slate-400 font-semibold tracking-normal">Segera</span>
                        </div>
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="photo" href="#" :current="request()->routeIs('galleries.*')"
                        wire:navigate>
                        <div class="flex items-center justify-between w-full">
                            <span>{{ __('Galeri') }}</span>
                            <span class="text-[9px] px-1.5 py-0.2 rounded-full bg-slate-200/60 dark:bg-white/10 text-slate-500 dark:text-slate-400 font-semibold tracking-normal">Segera</span>
                        </div>
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="tag" href="#" :current="request()->routeIs('categories.*')"
                        wire:navigate>
                        <div class="flex items-center justify-between w-full">
                            <span>{{ __('Kategori') }}</span>
                            <span class="text-[9px] px-1.5 py-0.2 rounded-full bg-slate-200/60 dark:bg-white/10 text-slate-500 dark:text-slate-400 font-semibold tracking-normal">Segera</span>
                        </div>
                    </flux:sidebar.item>
                </flux:sidebar.group>

                <flux:sidebar.group :heading="__('Interaksi')" class="grid mt-6">
                    <flux:sidebar.item icon="chat-bubble-bottom-center-text" href="#"
                        :current="request()->routeIs('comments.*')" wire:navigate>
                        <div class="flex items-center justify-between w-full">
                            <span>{{ __('Komentar') }}</span>
                            <span class="text-[9px] px-1.5 py-0.2 rounded-full bg-slate-200/60 dark:bg-white/10 text-slate-500 dark:text-slate-400 font-semibold tracking-normal">Segera</span>
                        </div>
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />
        </flux:sidebar>

        {{-- ═══════════════════════════════════════════════════ --}}
        {{-- MAIN COLUMN --}}
        {{-- ═══════════════════════════════════════════════════ --}}
        <div class="flex-1 min-w-0 flex flex-col">

            {{-- HEADER --}}
            <flux:header
                class="shrink-0 border-b border-white/80 dark:border-white/10 bg-white/75 dark:bg-[#050B14]/80 backdrop-blur-2xl shadow-[inset_0_-1px_0_rgba(255,255,255,0.8),_0_4px_20px_-2px_rgba(6,78,59,0.04)] dark:shadow-[inset_0_-1px_0_rgba(255,255,255,0.08),_0_4px_25px_-2px_rgba(0,0,0,0.45)] transition-colors duration-300">
                <flux:sidebar.toggle class="lg:hidden text-slate-700 dark:text-slate-200" icon="bars-2" inset="left" />
                <h1
                    class="font-display text-lg font-extrabold tracking-tight text-slate-900 dark:text-white truncate transition-colors duration-300 lg:text-xl">
                    {{ $title ?? __('Dashboard') }}
                </h1>
                <flux:spacer />

                {{-- Theme Switcher Pill in Dashboard Header --}}
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
                    class="cursor-pointer rounded-full p-2 transition-all duration-300 border border-slate-200/80 dark:border-white/15 bg-white/80 dark:bg-white/10 backdrop-blur-md hover:scale-105 shadow-xs hover:border-emerald-500/40 dark:hover:border-emerald-400/50 text-slate-700 dark:text-slate-200 mr-2"
                    title="Beralih Mode Tampilan"
                    aria-label="Beralih Mode Tampilan"
                >
                    {{-- Ikon Bulan: Tampil saat mode TERANG (klik untuk beralih ke Gelap) --}}
                    <svg x-show="!isDark" class="h-4 w-4 text-[#059669] dark:text-[#34D399]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    {{-- Ikon Matahari: Tampil saat mode GELAP (klik untuk beralih ke Terang) --}}
                    <svg x-show="isDark" x-cloak class="h-4 w-4 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <x-desktop-user-menu :name="auth()->user()->full_name" />
                </div>
                <flux:dropdown position="top" align="end" class="lg:hidden">
                    <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />
                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <flux:avatar :name="auth()->user()->full_name" :initials="auth()->user()->initials()" />
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <flux:heading class="truncate text-slate-900 dark:text-white font-bold">{{ auth()->user()->full_name }}</flux:heading>
                                        <flux:text class="truncate text-slate-500 dark:text-slate-400">{{ auth()->user()->email }}</flux:text>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>
                        <flux:menu.separator />
                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                                {{ __('Settings') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>
                        <flux:menu.separator />
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                                class="w-full cursor-pointer text-red-600 dark:text-red-400" data-test="logout-button">
                                {{ __('Log out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </flux:header>

            {{-- MAIN CONTENT — overflow-hidden saat halaman editor (via JS) --}}
            <main
                class="relative z-10 flex-1 min-w-0 flex flex-col {{ request()->routeIs('admin.posts.*') ? 'overflow-hidden' : '' }}">
                {{ $slot }}
            </main>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- SCRIPTS: Sidebar auto-collapse + overflow toggle --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <script>
        (function () {
            function syncEditorMode() {
                const isEditor = /^\/admin\/posts\/(create|[^\/]+\/edit)\/?$/.test(window.location.pathname);

                // 1. Auto-collapse sidebar saat masuk editor
                const sidebar = document.querySelector('[data-flux-sidebar]');
                if (sidebar && isEditor) {
                    const isCollapsed = sidebar.hasAttribute('data-flux-sidebar-collapsed-desktop');
                    if (!isCollapsed) {
                        window.dispatchEvent(new CustomEvent('flux-sidebar-toggle'));
                    }
                }

                // 2. Toggle overflow-hidden pada main (fallback kalau wire:navigate tidak re-render layout)
                const main = document.querySelector('main');
                if (main) {
                    main.classList.toggle('overflow-hidden', isEditor);
                }
            }

            document.addEventListener('DOMContentLoaded', syncEditorMode);
            document.addEventListener('livewire:navigated', syncEditorMode);
        })();
    </script>

    @persist('toast')
        <flux:toast.group>
            <flux:toast />
        </flux:toast.group>
    @endpersist

    @fluxScripts
</body>

</html>
