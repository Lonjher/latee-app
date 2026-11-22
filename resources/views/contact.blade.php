<x-layouts::guest title="Kontak">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Glow Kontak: Emas hangat & Hijau zamrud --}}
            <div class="glow-contact-gold w-[450px] h-[450px] -top-20 -left-20 rounded-full opacity-60"></div>
            <div class="glow-contact-emerald w-[450px] h-[450px] -bottom-20 -right-20 rounded-full opacity-60"></div>

            <div class="relative w-full max-w-[1400px] min-h-[280px] md:min-h-[320px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">
                            {{ $hero['badge'] ?? 'Hubungi Kami' }}
                        </span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        {{ $hero['title_prefix'] ?? 'Mari Terhubung' }}<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">
                            {{ $hero['title_highlight'] ?? 'Dengan Kami' }}
                        </span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        {{ $hero['description'] ?? '' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Kartu Informasi Kontak -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="info-kontak">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <!-- Alamat -->
                    <div class="reveal delay-100 glass-card rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $infoCards['alamat']['title'] ?? 'Alamat' }}</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            @foreach ($infoCards['alamat']['lines'] ?? [] as $line)
                                {{ $line }}<br>
                            @endforeach
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="reveal delay-200 glass-card rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $infoCards['email']['title'] ?? 'Email' }}</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-2">
                            {{ $infoCards['email']['description'] ?? '' }}
                        </p>
                        <a href="mailto:{{ $infoCards['email']['main_email'] ?? 'ppa.lateeputra@gmail.com' }}" class="text-xs md:text-sm font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors break-all">
                            {{ $infoCards['email']['main_email'] ?? 'ppa.lateeputra@gmail.com' }}
                        </a>
                    </div>

                    <!-- Telepon -->
                    <div class="reveal delay-300 glass-card rounded-3xl p-6 md:p-8 text-center hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">{{ $infoCards['telepon']['title'] ?? 'Telepon / WhatsApp' }}</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            {{ $infoCards['telepon']['description'] ?? '' }}
                        </p>
                        <a href="tel:{{ $infoCards['telepon']['main_phone_raw'] ?? '+6282331558951' }}" class="text-xs md:text-sm font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors">
                            {{ $infoCards['telepon']['main_phone'] ?? '+62 823-3155-8951' }}
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Lokasi & Kontak -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="lokasi-kontak">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Lokasi & Kontak</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Temukan Kami di Peta</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2">Kunjungi langsung pesantren atau hubungi kami melalui informasi di samping.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start">

                    <!-- KOLOM KIRI: PETA -->
                    <div class="reveal-left lg:col-span-7 lg:sticky lg:top-24">
                        <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-200/80 dark:border-white/10 glass-card h-[350px] md:h-[600px] transition-colors duration-300">
                            <iframe
                                src="{{ $mapUrl ?? 'https://maps.google.com/maps?q=-7.063513125594612,113.6731071478099&t=&z=16&ie=UTF8&iwloc=&output=embed' }}"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Peta Lokasi Pondok Pesantren Annuqayah Latee">
                            </iframe>
                        </div>
                    </div>

                    <!-- KOLOM KANAN: KONTAK PER KOMPLEKS -->
                    <div class="reveal-right lg:col-span-5 space-y-4">
                        @foreach ($complexContacts ?? [] as $i => $contact)
                            <div class="glass-card rounded-3xl p-5 shadow-sm hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center gap-3 mb-3 pb-3 border-b border-slate-200/60 dark:border-white/10">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center shrink-0">
                                        @if ($i === 0)
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        @else
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                        @endif
                                    </div>
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $contact['name'] }}</h3>
                                </div>
                                <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                                    @if (!empty($contact['email']))
                                        <li class="flex items-start gap-2">
                                            <svg class="w-3.5 h-3.5 text-emerald-500 dark:text-emerald-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                            <a href="mailto:{{ $contact['email'] }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors break-all">{{ $contact['email'] }}</a>
                                        </li>
                                    @endif
                                    @foreach ($contact['phones'] ?? [] as $phone)
                                        <li class="flex items-start gap-2">
                                            <svg class="w-3.5 h-3.5 text-emerald-500 dark:text-emerald-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                            <a href="{{ $phone['link'] }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">{{ $phone['number'] }} <span class="text-slate-400 dark:text-slate-500">({{ $phone['label'] }})</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
