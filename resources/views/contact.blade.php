<x-layouts::guest title="Kontak">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="relative w-full max-w-[1400px] min-h-[280px] md:min-h-[320px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-teal-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Hubungi Kami</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Mari Terhubung<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Dengan Kami</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                        Kami siap membantu Anda. Sampaikan pertanyaan, saran, atau kebutuhan informasi seputar Pondok Pesantren Annuqayah Latee.
                    </p>
                </div>
            </div>
        </section>

        <!-- Kartu Informasi Kontak -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="info-kontak">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                    <!-- Alamat -->
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Alamat</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            Jln. Makam Pahlawan Kompleks Pondok Pesantren Annuqayah<br>
                            Guluk-Guluk, Sumenep, Jawa Timur<br>
                            Pos: 69463
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Email</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-2">
                            Kirimkan pertanyaan atau dokumen melalui surel resmi kami.
                        </p>
                        <a href="mailto:pesantren@annuqayahlatee.net" class="text-xs md:text-sm font-semibold text-brand-600 dark:text-brand-400 hover:text-brand-700 dark:hover:text-brand-300 transition-colors break-all">
                            pesantren@annuqayahlatee.net
                        </a>
                    </div>

                    <!-- Media Sosial -->
                    <div class="reveal delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="w-14 h-14 rounded-2xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Media Sosial</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Ikuti informasi dan kegiatan terbaru kami.
                        </p>
                        <div class="flex items-center justify-center gap-3">
                            <a href="#" aria-label="Facebook" class="w-10 h-10 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-brand-600 dark:hover:bg-brand-500 hover:text-white hover:border-brand-600 dark:hover:border-brand-500 transition-all duration-300">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.592 9 4.825V8z"></path></svg>
                            </a>
                            <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-brand-600 dark:hover:bg-brand-500 hover:text-white hover:border-brand-600 dark:hover:border-brand-500 transition-all duration-300">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                            </a>
                            <a href="#" aria-label="YouTube" class="w-10 h-10 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 hover:bg-brand-600 dark:hover:bg-brand-500 hover:text-white hover:border-brand-600 dark:hover:border-brand-500 transition-all duration-300">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Lokasi & Kontak -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="lokasi-kontak">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Lokasi & Kontak</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Temukan Kami di Peta</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2">Kunjungi langsung pesantren atau hubungi kami melalui informasi di samping.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start">

                    <!-- KOLOM KIRI: PETA -->
                    <div class="reveal-left lg:col-span-7 lg:sticky lg:top-24">
                        <div class="overflow-hidden rounded-3xl shadow-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 h-[350px] md:h-[600px] transition-colors duration-300">
                            <iframe
                                src="https://maps.google.com/maps?q=-7.063513125594612,113.6731071478099&t=&z=16&ie=UTF8&iwloc=&output=embed"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Peta Lokasi Pondok Pesantren Annuqayah Latee">
                            </iframe>
                        </div>
                    </div>

                    <!-- KOLOM KANAN: KONTAK PER KOMPLEKS -->
                    <div class="reveal-right lg:col-span-5 space-y-4">

                        <!-- Kartu Latee Putra -->
                        <div class="bg-white dark:bg-slate-900 rounded-3xl p-5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center gap-3 mb-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                </div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Latee Putra</h3>
                            </div>
                            <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <a href="mailto:ppa.lateeputra@gmail.com" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors break-all">ppa.lateeputra@gmail.com</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6282331558951" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-823-3155-8951 <span class="text-slate-400 dark:text-slate-500">(Office)</span></a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6285235875705" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-852-3587-5705 <span class="text-slate-400 dark:text-slate-500">(Madal)</span></a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6285232028342" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-852-3202-8342 <span class="text-slate-400 dark:text-slate-500">(Kamtib)</span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Kartu Latee I Putri -->
                        <div class="bg-white dark:bg-slate-900 rounded-3xl p-5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center gap-3 mb-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Latee I (Putri)</h3>
                            </div>
                            <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <a href="mailto:annuqayahlatee1@gmail.com" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors break-all">annuqayahlatee1@gmail.com</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6282335509029" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-823-3550-9029 <span class="text-slate-400 dark:text-slate-500">(Office)</span></a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6282333586567" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-823-3358-6567 <span class="text-slate-400 dark:text-slate-500">(Madal I)</span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Kartu Latee II Putri -->
                        <div class="bg-white dark:bg-slate-900 rounded-3xl p-5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center gap-3 mb-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                                <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-900/50 text-brand-600 dark:text-brand-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Latee II (Putri)</h3>
                            </div>
                            <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <a href="mailto:eldejaya@gmail.com" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors break-all">eldejaya@gmail.com</a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6285336577854" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-853-3657-7854 <span class="text-slate-400 dark:text-slate-500">(Office)</span></a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6282334956872" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-823-3495-6872 <span class="text-slate-400 dark:text-slate-500">(Madal II)</span></a>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-3.5 h-3.5 text-brand-500 dark:text-brand-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <a href="tel:+6282337145089" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">+62-823-3714-5089 <span class="text-slate-400 dark:text-slate-500">(Kamtib II)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulir Kontak -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="form-kontak">
            <div class="max-w-3xl mx-auto px-6">
                <div class="reveal mb-10 text-center">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Pesan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kirim Pesan Langsung</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2">Isi formulir di bawah ini, kami akan merespons secepat mungkin.</p>
                </div>

                <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-10 shadow-sm">
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">Nama Lengkap <span class="text-rose-500 dark:text-rose-400">*</span></label>
                                <input type="text" id="name" name="name" required placeholder="Masukkan nama Anda"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:border-brand-500 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20 outline-none transition-all">
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">Alamat Email <span class="text-rose-500 dark:text-rose-400">*</span></label>
                                <input type="email" id="email" name="email" required placeholder="Masukkan email Anda"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:border-brand-500 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20 outline-none transition-all">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">Subjek <span class="text-rose-500 dark:text-rose-400">*</span></label>
                            <input type="text" id="subject" name="subject" required placeholder="Contoh: Informasi Pendaftaran Santri Baru"
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:border-brand-500 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20 outline-none transition-all">
                        </div>
                        <div>
                            <label for="message" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">Pesan <span class="text-rose-500 dark:text-rose-400">*</span></label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tuliskan pesan Anda di sini..."
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-sm text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:border-brand-500 focus:ring-2 focus:ring-brand-200/50 dark:focus:ring-brand-500/20 outline-none transition-all resize-none"></textarea>
                        </div>
                        <div class="flex justify-end pt-2">
                            <button type="submit" class="inline-flex items-center gap-2 bg-brand-600 dark:bg-brand-500 hover:bg-brand-700 dark:hover:bg-brand-600 text-white font-semibold px-6 md:px-8 py-3 rounded-full transition-all duration-300 hover:-translate-y-0.5 shadow-lg shadow-brand-500/30">
                                <span>Kirim Pesan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Butuh Informasi Lebih Lanjut?</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kunjungi langsung pesantren atau hubungi kami melalui surel resmi. Kami akan dengan senang hati membantu Anda.</p>
                <flux:button variant="primary" size="lg" href="mailto:pesantren@annuqayahlatee.net" icon-leading="envelope">
                    Kirim Email
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
