@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body
    class="min-h-screen text-slate-700 dark:text-slate-200 font-sans antialiased selection:bg-brand-600 selection:text-white dark:selection:bg-brand-400 dark:selection:text-slate-950 transition-colors duration-300">

    {{-- ============================================ --}}
    {{-- BACKGROUND LAYERS (fixed, behind everything) --}}
    {{-- ============================================ --}}
    <div class="fixed inset-0 z-0 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" aria-hidden="true"></div>
    <div class="pointer-events-none fixed inset-0 z-0 bg-texture-grid opacity-40 dark:opacity-20" aria-hidden="true">
    </div>


    {{-- ============================================ --}}
    {{-- LAYOUT: sidebar + (header + main)            --}}
    {{-- ============================================ --}}
    <div class="relative z-10 flex min-h-screen">

        {{-- ============================================ --}}
        {{-- SIDEBAR                                       --}}
        {{-- ============================================ --}}
        <flux:sidebar sticky collapsible="mobile"
            class="border-e border-slate-200 bg-white/95 backdrop-blur-sm dark:border-slate-800 dark:bg-slate-900/95 transition-colors duration-300">
            {{-- Logo + Brand --}}
            <flux:sidebar.header>
                <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3 min-w-0">
                    <div
                        class="w-9 h-9 shrink-0 rounded-full bg-white shadow-md shadow-slate-900/10 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 dark:bg-slate-800 dark:shadow-brand-500/20 dark:ring-slate-700 transition-all duration-300">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Annuqayah Latee"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span
                            class="text-sm font-bold text-slate-900 dark:text-white truncate transition-colors duration-300">
                            Annuqayah Latee
                        </span>
                        <span
                            class="text-[9px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-400 truncate transition-colors duration-300">
                            Sistem Informasi
                        </span>
                    </div>
                </a>
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>

            {{-- Navigation --}}
            <flux:sidebar.nav>
                <flux:sidebar.group :heading="__('Platform')" class="grid">
                    <flux:sidebar.item icon="home" :href="route('dashboard')"
                        :current="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>

                @role('admin')
                <flux:sidebar.group :heading="__('Administrasi')" class="grid mt-6">
                        <flux:sidebar.item icon="key" href="{{ route('admin.manage-roles') }}" :current="request()->is('admin/manage-roles*')"
                            wire:navigate>
                            {{ __('Peran') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="users" href="{{ route('admin.manage-users') }}" :current="request()->is('admin/manage-users*')"
                            wire:navigate>
                            {{ __('Pengguna') }}
                        </flux:sidebar.item>
                        <flux:sidebar.item icon="cog-6-tooth" href="#" :current="request()->routeIs('settings.*')"
                            wire:navigate>
                            {{ __('Pengaturan') }}
                        </flux:sidebar.item>
                    </flux:sidebar.group>
                @endrole

                <flux:sidebar.group :heading="__('Konten')" class="grid mt-6">
                    <flux:sidebar.item icon="document-text" href="#" :current="request()->routeIs('posts.*')"
                        wire:navigate>
                        {{ __('Posts') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="chat-bubble-left-right" href="#"
                        :current="request()->routeIs('quotes.*')" wire:navigate>
                        {{ __('Quotes') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="photo" href="#" :current="request()->routeIs('galleries.*')"
                        wire:navigate>
                        {{ __('Galeri') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="tag" href="#" :current="request()->routeIs('categories.*')"
                        wire:navigate>
                        {{ __('Kategori') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>

                <flux:sidebar.group :heading="__('Interaksi')" class="grid mt-6">
                    <flux:sidebar.item icon="chat-bubble-bottom-center-text" href="#"
                        :current="request()->routeIs('comments.*')" wire:navigate>
                        {{ __('Komentar') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />
        </flux:sidebar>


        {{-- ============================================ --}}
        {{-- MAIN COLUMN (header + content)                --}}
        {{-- ============================================ --}}
        <div class="flex-1 min-w-0 flex flex-col">

            {{-- HEADER: Title (left) + User Menu (right) --}}
            <flux:header
                class="border-b border-slate-200 bg-white/80 backdrop-blur-md dark:border-slate-800 dark:bg-slate-900/80 transition-colors duration-300">
                {{-- Mobile sidebar toggle --}}
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

                {{-- Page Title --}}
                <h1
                    class="font-display text-lg font-extrabold tracking-tight text-slate-900 dark:text-white truncate transition-colors duration-300 lg:text-xl">
                    {{ $title ?? __('Dashboard') }}
                </h1>

                <flux:spacer />

                {{-- Desktop User Menu (kanan) --}}
                <div class="hidden lg:block">
                    <x-desktop-user-menu :name="auth()->user()->full_name" />
                </div>

                {{-- Mobile User Menu (kanan) --}}
                <flux:dropdown position="top" align="end" class="lg:hidden">
                    <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <flux:avatar :name="auth()->user()->full_name"
                                        :initials="auth()->user()->initials()" />
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <flux:heading class="truncate">{{ auth()->user()->full_name }}</flux:heading>
                                        <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
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
                                class="w-full cursor-pointer" data-test="logout-button">
                                {{ __('Log out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            </flux:header>


            {{-- MAIN CONTENT --}}
            <main class="bg-texture-grid bg-glow-corner flex-1 min-w-0">
                <div>
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>


    {{-- Toasts --}}
    @persist('toast')
        <flux:toast.group>
            <flux:toast />
        </flux:toast.group>
    @endpersist

    @fluxScripts
</body>

</html>
