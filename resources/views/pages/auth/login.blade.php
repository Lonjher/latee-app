<x-layouts::auth :title="__('Masuk')">

    <div class="relative min-h-screen bg-slate-50 text-slate-700 dark:bg-slate-950 dark:text-slate-200 font-sans selection:bg-brand-600 selection:text-white dark:selection:bg-brand-400 dark:selection:text-slate-950 transition-colors duration-300">

        {{-- ============================================ --}}
        {{-- BACKGROUND DECORATION (fixed, clipped)       --}}
        {{-- ============================================ --}}
        <div class="pointer-events-none fixed inset-0 z-0 overflow-hidden bg-texture-grid" aria-hidden="true">
            {{-- Glow Kiri Atas --}}
            <div class="absolute -left-52 -top-72 h-[600px] w-[600px] rounded-full bg-brand-300/30 blur-[130px] animate-pulse-glow dark:bg-brand-500/15"></div>
            {{-- Glow Kanan Bawah --}}
            <div class="absolute -bottom-72 -right-52 h-[600px] w-[600px] rounded-full bg-teal-300/20 blur-[130px] animate-pulse-glow dark:bg-teal-500/10" style="animation-delay: 2s;"></div>
            {{-- Noise Texture --}}
            <div class="absolute inset-0 bg-texture-noise opacity-60 dark:opacity-30"></div>
        </div>


        {{-- ============================================ --}}
        {{-- MAIN — CARD CONTAINER                        --}}
        {{-- ============================================ --}}
        <div class="relative z-10 flex min-h-screen items-center justify-center px-4 py-8">

            {{-- 🔲 CARD: left + right dalam satu div, shadow besar --}}
            <div class="w-full max-w-[1180px] overflow-hidden rounded-3xl bg-white shadow-2xl shadow-slate-900/10 ring-1 ring-slate-200/60 dark:bg-slate-900 dark:shadow-black/40 dark:ring-slate-800 transition-colors duration-300">
                <div class="grid lg:min-h-[580px] lg:grid-cols-2">

                    {{-- ============================================ --}}
                    {{-- LEFT SIDE — BRANDING PANEL                  --}}
                    {{-- ============================================ --}}
                    <section class="hidden flex-col border-r border-slate-200 p-10 dark:border-slate-800 lg:flex xl:pr-16">

                        {{-- Logo --}}
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full bg-white shadow-md shadow-slate-900/10 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 dark:bg-slate-900 dark:shadow-brand-500/20 dark:ring-slate-800 transition-all duration-300">
                                <img src="{{ asset('images/logo.webp') }}" alt="Logo Annuqayah Latee" class="w-full h-full object-cover">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-base font-extrabold tracking-wider text-slate-900 dark:text-white transition-colors duration-300">
                                    ANNUQAYAH LATEE
                                </span>
                                <span class="text-[9px] uppercase tracking-[0.18em] text-slate-500 dark:text-slate-400 transition-colors duration-300">
                                    Sistem Informasi Pesantren
                                </span>
                            </div>
                        </div>

                        {{-- Hero Content (my-auto → center secara vertikal) --}}
                        <div class="my-auto max-w-[500px]">

                            {{-- Pill --}}
                            <div class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white/80 backdrop-blur px-4 py-1.5 text-[10px] font-semibold tracking-wider text-brand-700 shadow-sm transition-colors duration-300 dark:border-brand-800 dark:bg-brand-950/40 dark:text-brand-300">
                                <span class="h-1.5 w-1.5 rounded-full bg-brand-600 shadow-[0_0_12px_rgba(44,62,80,.45)] animate-pulse dark:bg-brand-400 dark:shadow-[0_0_12px_rgba(148,163,184,.6)]"></span>
                                Portal Akses Resmi
                            </div>

                            {{-- Heading --}}
                            <h1 class="delay-100 mt-7 text-[clamp(44px,5vw,64px)] font-extrabold leading-[1.05] tracking-tight text-slate-900 dark:text-white transition-colors duration-300">
                                Selamat datang<br>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 via-brand-500 to-teal-500 animate-gradient-x text-gradient-animated dark:from-brand-300 dark:via-brand-400 dark:to-teal-300">
                                    kembali.
                                </span>
                            </h1>

                            {{-- Description --}}
                            <p class="delay-200 mt-6 max-w-[430px] text-sm leading-7 text-slate-600 dark:text-slate-400 transition-colors duration-300">
                                Masuk ke akun Anda untuk mengakses layanan dan informasi Pondok Pesantren Annuqayah Latee — mulai dari data santri, akademik, hingga administrasi pesantren.
                            </p>

                            {{-- Divider --}}
                            <div class="delay-300 my-9 h-px w-full bg-gradient-to-r from-slate-300 to-transparent dark:from-slate-700"></div>

                            {{-- Location --}}
                            <div class="delay-400">
                                <span class="text-[8px] font-bold uppercase tracking-[0.25em] text-slate-400 dark:text-slate-500 transition-colors duration-300">
                                    Annuqayah Latee
                                </span>
                                <p class="mt-1.5 text-[11px] text-slate-500 dark:text-slate-400 transition-colors duration-300">
                                    Guluk-Guluk · Sumenep · Jawa Timur
                                </p>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="flex items-center justify-between text-[9px] tracking-wider text-slate-400 dark:text-slate-500 transition-colors duration-300">
                            <span>P2AL</span>
                            <span>© {{ date('Y') }} Annuqayah Latee</span>
                        </div>
                    </section>


                    {{-- ============================================ --}}
                    {{-- RIGHT SIDE — LOGIN FORM                     --}}
                    {{-- ============================================ --}}
                    <main class="flex items-center justify-center px-6 py-12 sm:px-10 lg:px-14">
                        <div class="w-full max-w-[410px]">

                            {{-- Mobile Logo --}}
                            <div class="mb-12 flex items-center gap-3 lg:hidden">
                                <div class="w-11 h-11 rounded-full bg-white shadow-md shadow-slate-900/10 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 dark:bg-slate-900 dark:shadow-brand-500/20 dark:ring-slate-800 transition-all duration-300">
                                    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base font-extrabold tracking-wider text-slate-900 dark:text-white transition-colors duration-300">ANNUQAYAH LATEE</span>
                                    <span class="text-[9px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-400 transition-colors duration-300">Sistem Informasi Pesantren</span>
                                </div>
                            </div>

                            {{-- Heading --}}
                            <div>
                                <span class="text-[9px] font-bold uppercase tracking-[0.25em] text-brand-600 dark:text-brand-400 transition-colors duration-300">
                                    Akses Sistem
                                </span>
                                <h2 class="mt-3 text-[32px] font-extrabold leading-tight tracking-tight text-slate-900 dark:text-white transition-colors duration-300">
                                    Masuk ke akun Anda
                                </h2>
                                <p class="mb-9 mt-2 text-xs leading-6 text-slate-500 dark:text-slate-400 transition-colors duration-300">
                                    Masukkan email dan password untuk melanjutkan.
                                </p>
                            </div>

                            {{-- Session Status --}}
                            @if (session('status'))
                                <div class="mb-6 rounded-2xl border border-brand-200 bg-brand-50 px-4 py-3 text-xs font-medium text-brand-700 dark:border-brand-800 dark:bg-brand-950/40 dark:text-brand-300 transition-colors duration-300">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{-- Form --}}
                            <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
                                @csrf

                                {{-- ========================================== --}}
                                {{-- EMAIL                                       --}}
                                {{-- ========================================== --}}
                                <div class="delay-100">
                                    <label for="email" class="mb-2 block text-[11px] font-semibold text-slate-700 dark:text-slate-300 transition-colors duration-300">
                                        Email
                                    </label>
                                    <flux:input
                                        id="email"
                                        name="email"
                                        type="email"
                                        :value="old('email')"
                                        required
                                        autofocus
                                        autocomplete="email"
                                        placeholder="email@example.com"
                                        color-theme="brand"
                                        size="base"
                                    >
                                        <x-slot:icon-leading>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[18px] w-[18px]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-8.69 5.793a1.5 1.5 0 0 1-1.664 0L2.25 6.75" />
                                            </svg>
                                        </x-slot:icon-leading>
                                    </flux:input>
                                    @error('email')
                                        <p class="mt-2 text-[10px] font-medium text-rose-500 dark:text-rose-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- ========================================== --}}
                                {{-- PASSWORD                                    --}}
                                {{-- ========================================== --}}
                                <div x-data="{ showPassword: false }" class="delay-200">
                                    <div class="mb-2 flex items-center justify-between">
                                        <label for="password" class="text-[11px] font-semibold text-slate-700 dark:text-slate-300 transition-colors duration-300">
                                            Password
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" wire:navigate class="text-[10px] font-semibold text-brand-600 transition-colors duration-300 hover:text-brand-700 dark:text-brand-400 dark:hover:text-brand-300">
                                                Lupa password?
                                            </a>
                                        @endif
                                    </div>
                                    <flux:input
                                        id="password"
                                        name="password"
                                        type="password"
                                        ::type="showPassword ? 'text' : 'password'"
                                        required
                                        autocomplete="current-password"
                                        placeholder="Masukkan password"
                                        color-theme="brand"
                                        size="base"
                                    >
                                        <x-slot:icon-leading>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[18px] w-[18px]">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6A2.25 2.25 0 0 1 17.25 21H6.75a2.25 2.25 0 0 1-2.25-2.25v-6a2.25 2.25 0 0 1 2.25-2.25Z" />
                                            </svg>
                                        </x-slot:icon-leading>
                                        <x-slot:icon-trailing>
                                            <button type="button" @click="showPassword = !showPassword" class="grid h-8 w-8 place-items-center rounded-full text-slate-400 transition-all duration-300 hover:bg-slate-100 hover:text-brand-600 dark:text-slate-500 dark:hover:bg-slate-800 dark:hover:text-brand-400">
                                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[17px] w-[17px]">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                <svg x-show="showPassword" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-[17px] w-[17px]">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                                                </svg>
                                            </button>
                                        </x-slot:icon-trailing>
                                    </flux:input>
                                    @error('password')
                                        <p class="mt-2 text-[10px] font-medium text-rose-500 dark:text-rose-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- ========================================== --}}
                                {{-- REMEMBER ME                                 --}}
                                {{-- ========================================== --}}
                                <label class="delay-300 group flex w-fit cursor-pointer items-center gap-2.5 text-[11px] text-slate-600 dark:text-slate-400 transition-colors duration-300">
                                    <input type="checkbox" name="remember" value="1" @checked(old('remember')) class="h-4 w-4 cursor-pointer rounded border-slate-300 bg-white text-brand-600 accent-brand-600 transition-colors duration-300 focus:ring-brand-500/30 dark:border-slate-600 dark:bg-slate-800 dark:text-brand-500 dark:accent-brand-500 dark:focus:ring-brand-500/30">
                                    <span class="transition-colors duration-300 group-hover:text-slate-900 dark:group-hover:text-slate-200">Ingat saya</span>
                                </label>

                                {{-- ========================================== --}}
                                {{-- SUBMIT BUTTON                               --}}
                                {{-- ========================================== --}}
                                <flux:button type="submit" variant="primary" color="slate" size="base">
                                    Login
                                </flux:button>
                            </form>

                            {{-- Bottom Label --}}
                            <div class="delay-500 mt-9 grid grid-cols-[1fr_auto_1fr] items-center gap-4">
                                <span class="h-px bg-slate-200 dark:bg-slate-800 transition-colors duration-300"></span>
                                <p class="whitespace-nowrap text-[8px] font-semibold uppercase tracking-[0.15em] text-slate-400 dark:text-slate-500 transition-colors duration-300">
                                    Sistem Informasi Pesantren
                                </p>
                                <span class="h-px bg-slate-200 dark:bg-slate-800 transition-colors duration-300"></span>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-layouts::auth>
