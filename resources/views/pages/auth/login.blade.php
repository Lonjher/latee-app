
<x-layouts::auth :title="__('Masuk')">

    <div
        class="relative min-h-screen max-h-screen overflow-hidden
               bg-[#f6f8f7] text-[#15201b]
               dark:bg-[#030404] dark:text-[#f4f5f5]
               font-[Gilroy]
               selection:bg-[#2ee5ad] selection:text-[#030404]
               transition-colors duration-300"
    >

        {{-- ============================================================
            BACKGROUND DECORATION
        ============================================================ --}}
        <div
            class="pointer-events-none absolute -left-52 -top-72 h-[600px] w-[600px]
                   rounded-full bg-[#41a287]/10 blur-[130px]
                   dark:bg-[#2ee5ad]/10"
            aria-hidden="true"
        ></div>

        <div
            class="pointer-events-none absolute -bottom-72 -right-52 h-[600px] w-[600px]
                   rounded-full bg-[#41a287]/5 blur-[130px]
                   dark:bg-[#2ee5ad]/5"
            aria-hidden="true"
        ></div>

        {{-- Grid Background --}}
        <div
            class="pointer-events-none absolute inset-0 opacity-[0.04] dark:opacity-[0.025]"
            style="
                background-image:
                    linear-gradient(rgba(30,67,77,.45) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(30,67,77,.45) 1px, transparent 1px);
                background-size: 40px 40px;
            "
            aria-hidden="true"
        ></div>


        {{-- ============================================================
            MAIN CONTAINER
        ============================================================ --}}
        <div
            class="relative z-10 mx-auto grid min-h-screen w-full max-w-[1180px] lg:grid-cols-2"
        >

            {{-- ========================================================
                LEFT SIDE
            ======================================================== --}}
            <section
                class="hidden min-h-screen flex-col
                       border-r border-[#dce5e1]
                       dark:border-[#26372f]/70
                       px-10 pb-10 pt-16
                       lg:flex xl:pr-20"
            >

                {{-- Logo --}}
                <div class="flex items-center gap-3">
                    <img
                        src="{{ asset('images/logo.webp') }}"
                        alt="Logo SMILE"
                        class="w-12"
                    >

                    <div class="flex flex-col">
                        <span
                            class="text-base font-semibold tracking-wide
                                   text-[#17231e] dark:text-white"
                        >
                            LATEE APP
                        </span>

                        <span
                            class="text-[9px] uppercase tracking-[0.18em]
                                   text-[#718079] dark:text-[#74827b]"
                        >
                            PP. Annuqayah Latee
                        </span>
                    </div>
                </div>


                {{-- Hero Content --}}
                <div class="my-auto max-w-[500px]">

                    {{-- Pill --}}
                    <div
                        class="inline-flex items-center gap-2 rounded-full
                               border border-[#bcd9ce]
                               bg-[#eaf5f1]
                               px-4 py-1.5
                               text-[10px] tracking-wide text-[#326b59]

                               dark:border-[#295244]/70
                               dark:bg-[#18312a]/30
                               dark:text-[#b4d7cc]"
                    >
                        <span
                            class="h-1.5 w-1.5 rounded-full
                                   bg-[#41a287]
                                   shadow-[0_0_12px_rgba(65,162,135,.45)]
                                   dark:bg-[#2ee5ad]
                                   dark:shadow-[0_0_12px_rgba(46,229,173,.7)]"
                        ></span>

                        Sistem Informasi Pesantren
                    </div>


                    {{-- Heading --}}
                    <h1
                        class="mt-7 text-[clamp(48px,5vw,68px)]
                               font-medium leading-[1.04]
                               tracking-[-2.5px]
                               text-[#17231e]
                               dark:text-[#f4f5f5]"
                    >
                        Selamat datang
                        <br>

                        <span
                            class="bg-gradient-to-r
                                   from-[#246c59]
                                   via-[#41a287]
                                   to-[#1e434d]
                                   bg-clip-text text-transparent

                                   dark:from-[#9be8d6]
                                   dark:via-[#2ee5ad]
                                   dark:to-[#41a287]"
                        >
                            kembali.
                        </span>
                    </h1>


                    {{-- Description --}}
                    <p
                        class="mt-6 max-w-[430px] text-sm leading-7
                               text-[#66756e]
                               dark:text-[#929d98]"
                    >
                        Masuk ke akun Anda untuk mengakses layanan dan informasi
                        Pondok Pesantren Annuqayah Latee.
                    </p>


                    {{-- Divider --}}
                    <div
                        class="my-9 h-px w-full
                               bg-gradient-to-r from-[#c7d8d1] to-transparent
                               dark:from-[#2e4c3e]"
                    ></div>


                    {{-- Location --}}
                    <div>
                        <span
                            class="text-[8px] font-medium uppercase tracking-[0.25em]
                                   text-[#82918a]
                                   dark:text-[#617069]"
                        >
                            PP. Annuqayah Latee
                        </span>

                        <p
                            class="mt-1.5 text-[11px]
                                   text-[#66756e]
                                   dark:text-[#a0aaa5]"
                        >
                            Guluk-Guluk · Sumenep
                        </p>
                    </div>
                </div>


                {{-- Footer --}}
                <div
                    class="flex items-center justify-between
                           text-[9px] tracking-wider
                           text-[#89958f]
                           dark:text-[#56635d]"
                >
                    <span>SMILE</span>
                    <span>© {{ date('Y') }}</span>
                </div>
            </section>


            {{-- ========================================================
                RIGHT SIDE
            ======================================================== --}}
            <main
                class="flex min-h-screen items-center justify-center
                       px-5 py-20 sm:px-10 lg:px-14 xl:pl-20"
            >
                <div class="w-full max-w-[410px]">


                    {{-- ==================================================
                        MOBILE LOGO
                    ================================================== --}}
                    <div class="mb-12 flex items-center gap-3 lg:hidden">
                        <img
                            src="{{ asset('images/logo.webp') }}"
                            alt="Logo SMILE"
                            class="w-12"
                        >

                        <div class="flex flex-col">
                            <span
                                class="text-base font-semibold tracking-wide
                                       text-[#17231e]
                                       dark:text-white"
                            >
                                SMILE
                            </span>

                            <span
                                class="text-[9px] uppercase tracking-[0.16em]
                                       text-[#718079]
                                       dark:text-[#75817b]"
                            >
                                PP. Annuqayah Latee
                            </span>
                        </div>
                    </div>


                    {{-- ==================================================
                        HEADING
                    ================================================== --}}
                    <div>
                        <span
                            class="text-[9px] font-semibold uppercase tracking-[0.25em]
                                   text-[#338268]
                                   dark:text-[#5fae8e]"
                        >
                            Akses Sistem
                        </span>

                        <h2
                            class="mt-3 text-[32px] font-medium leading-tight
                                   tracking-[-1px]
                                   text-[#17231e]
                                   dark:text-white"
                        >
                            Masuk ke akun Anda
                        </h2>

                        <p
                            class="mb-9 mt-2 text-xs leading-6
                                   text-[#718079]
                                   dark:text-[#8f9b95]"
                        >
                            Masukkan email dan password untuk melanjutkan.
                        </p>
                    </div>


                    {{-- ==================================================
                        SESSION STATUS
                    ================================================== --}}
                    @if (session('status'))
                        <div
                            class="mb-6 rounded-lg
                                   border border-[#b6decf]
                                   bg-[#eaf7f2]
                                   px-4 py-3 text-xs text-[#277159]

                                   dark:border-[#28503f]
                                   dark:bg-[#1e4b38]/20
                                   dark:text-[#8be0be]"
                        >
                            {{ session('status') }}
                        </div>
                    @endif


                    {{-- ==================================================
                        FORM
                    ================================================== --}}
                    <form
                        method="POST"
                        action="{{ route('login.store') }}"
                        class="flex flex-col gap-6"
                    >
                        @csrf


                        {{-- =================================================
                            EMAIL
                        ================================================= --}}
                        <div>
                            <label
                                for="email"
                                class="mb-2 block text-[11px] font-medium
                                       text-[#42534b]
                                       dark:text-[#bdc6c1]"
                            >
                                Email
                            </label>

                            <div class="group relative">

                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0
                                           flex items-center pl-4
                                           text-[#84938c]
                                           transition-colors
                                           group-focus-within:text-[#278568]

                                           dark:text-[#63736b]
                                           dark:group-focus-within:text-[#2ee5ad]"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-[18px] w-[18px]"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-8.69 5.793a1.5 1.5 0 0 1-1.664 0L2.25 6.75"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus
                                    autocomplete="email"
                                    placeholder="email@example.com"
                                    class="
                                        h-[52px]
                                        w-full
                                        rounded-lg
                                        border
                                        border-[#d3ddd8]
                                        bg-white
                                        px-12
                                        text-xs
                                        text-[#17231e]
                                        outline-none
                                        transition

                                        placeholder:text-[#9aa6a0]

                                        hover:border-[#b4c5bd]

                                        focus:border-[#41a287]
                                        focus:bg-white
                                        focus:ring-4
                                        focus:ring-[#41a287]/10

                                        dark:border-[#27362f]
                                        dark:bg-[#0a0f0d]/90
                                        dark:text-[#edf2ef]
                                        dark:placeholder:text-[#536159]

                                        dark:hover:border-[#35483f]

                                        dark:focus:border-[#39785e]
                                        dark:focus:bg-[#0c1511]
                                        dark:focus:ring-[#2ee5ad]/[0.06]
                                    "
                                >
                            </div>

                            @error('email')
                                <p class="mt-2 text-[10px] text-red-500 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        {{-- =================================================
                            PASSWORD
                        ================================================= --}}
                        <div x-data="{ showPassword: false }">

                            <div class="mb-2 flex items-center justify-between">
                                <label
                                    for="password"
                                    class="text-[11px] font-medium
                                           text-[#42534b]
                                           dark:text-[#bdc6c1]"
                                >
                                    Password
                                </label>

                                @if (Route::has('password.request'))
                                    <a
                                        href="{{ route('password.request') }}"
                                        wire:navigate
                                        class="text-[10px]
                                               text-[#338268]
                                               transition
                                               hover:text-[#216e58]

                                               dark:text-[#63bd99]
                                               dark:hover:text-[#2ee5ad]"
                                    >
                                        Lupa password?
                                    </a>
                                @endif
                            </div>


                            <div class="group relative">

                                {{-- Lock Icon --}}
                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0
                                           flex items-center pl-4
                                           text-[#84938c]
                                           transition-colors
                                           group-focus-within:text-[#278568]

                                           dark:text-[#63736b]
                                           dark:group-focus-within:text-[#2ee5ad]"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-[18px] w-[18px]"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6A2.25 2.25 0 0 1 17.25 21H6.75a2.25 2.25 0 0 1-2.25-2.25v-6a2.25 2.25 0 0 1 2.25-2.25Z"
                                        />
                                    </svg>
                                </div>


                                <input
                                    id="password"
                                    name="password"
                                    :type="showPassword ? 'text' : 'password'"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Masukkan password"
                                    class="
                                        h-[52px]
                                        w-full
                                        rounded-lg
                                        border
                                        border-[#d3ddd8]
                                        bg-white
                                        pl-12
                                        pr-12
                                        text-xs
                                        text-[#17231e]
                                        outline-none
                                        transition

                                        placeholder:text-[#9aa6a0]

                                        hover:border-[#b4c5bd]

                                        focus:border-[#41a287]
                                        focus:bg-white
                                        focus:ring-4
                                        focus:ring-[#41a287]/10

                                        dark:border-[#27362f]
                                        dark:bg-[#0a0f0d]/90
                                        dark:text-[#edf2ef]
                                        dark:placeholder:text-[#536159]

                                        dark:hover:border-[#35483f]

                                        dark:focus:border-[#39785e]
                                        dark:focus:bg-[#0c1511]
                                        dark:focus:ring-[#2ee5ad]/[0.06]
                                    "
                                >


                                {{-- Show Password --}}
                                <button
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="
                                        absolute inset-y-0 right-2 my-auto
                                        grid h-9 w-9 place-items-center rounded-md

                                        text-[#7e8d86]
                                        transition

                                        hover:bg-[#41a287]/10
                                        hover:text-[#278568]

                                        dark:text-[#65756d]
                                        dark:hover:bg-[#2ee5ad]/5
                                        dark:hover:text-[#2ee5ad]
                                    "
                                >
                                    {{-- Eye --}}
                                    <svg
                                        x-show="!showPassword"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-[17px] w-[17px]"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                                        />
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                        />
                                    </svg>

                                    {{-- Eye Slash --}}
                                    <svg
                                        x-show="showPassword"
                                        x-cloak
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-[17px] w-[17px]"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"
                                        />
                                    </svg>
                                </button>
                            </div>

                            @error('password')
                                <p class="mt-2 text-[10px] text-red-500 dark:text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        {{-- =================================================
                            REMEMBER ME
                        ================================================= --}}
                        <label
                            class="group flex w-fit cursor-pointer items-center gap-2.5
                                   text-[11px]
                                   text-[#6f7e77]
                                   dark:text-[#8d9a93]"
                        >
                            <input
                                type="checkbox"
                                name="remember"
                                value="1"
                                @checked(old('remember'))
                                class="
                                    h-4 w-4
                                    cursor-pointer
                                    rounded
                                    border-[#b8c7c0]
                                    bg-white
                                    text-[#41a287]
                                    accent-[#41a287]
                                    focus:ring-[#41a287]/20

                                    dark:border-[#3a4a42]
                                    dark:bg-[#0b100e]
                                    dark:text-[#2ee5ad]
                                    dark:accent-[#2ee5ad]
                                    dark:focus:ring-[#2ee5ad]/20
                                "
                            >

                            <span
                                class="transition
                                       group-hover:text-[#35473f]
                                       dark:group-hover:text-[#b4c0ba]"
                            >
                                Ingat saya
                            </span>
                        </label>


                        {{-- =================================================
                            SUBMIT
                        ================================================= --}}
                        <button
                            type="submit"
                            data-test="login-button"
                            class="
                                group
                                flex
                                h-[52px]
                                w-full
                                items-center
                                justify-between
                                rounded-lg
                                border
                                border-[#319277]
                                bg-gradient-to-r
                                from-[#68c7aa]
                                to-[#41a287]
                                px-5
                                text-xs
                                font-semibold
                                text-white
                                shadow-[0_5px_20px_rgba(65,162,135,.15)]
                                transition-all
                                duration-200

                                hover:-translate-y-0.5
                                hover:shadow-[0_8px_30px_rgba(65,162,135,.22)]

                                focus:outline-none
                                focus:ring-4
                                focus:ring-[#41a287]/20

                                dark:border-[#8fefd0]
                                dark:from-[#a5f2d5]
                                dark:to-[#2ee5ad]
                                dark:text-[#09251b]
                                dark:shadow-[0_0_25px_rgba(46,229,173,.05)]
                                dark:hover:shadow-[0_8px_30px_rgba(46,229,173,.14)]
                                dark:focus:ring-[#2ee5ad]/20
                            "
                        >
                            <span>Masuk</span>

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-[18px] w-[18px]
                                       transition-transform duration-200
                                       group-hover:translate-x-1"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                                />
                            </svg>
                        </button>
                    </form>


                    {{-- ==================================================
                        BOTTOM LABEL
                    ================================================== --}}
                    <div
                        class="mt-9 grid grid-cols-[1fr_auto_1fr] items-center gap-4"
                    >
                        <span
                            class="h-px bg-[#d7e0dc]
                                   dark:bg-[#202d27]"
                        ></span>

                        <p
                            class="whitespace-nowrap text-[8px] uppercase
                                   tracking-[0.15em]
                                   text-[#87948e]
                                   dark:text-[#56635d]"
                        >
                            Sistem Informasi Pesantren
                        </p>

                        <span
                            class="h-px bg-[#d7e0dc]
                                   dark:bg-[#202d27]"
                        ></span>
                    </div>

                </div>
            </main>
        </div>
    </div>

</x-layouts::auth>
