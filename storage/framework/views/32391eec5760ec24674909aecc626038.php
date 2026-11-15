<?php # [BlazeFolded]:{flux::button}:{D:\PUJASERA\latee-app\resources\views/flux/button/index.blade.php}:{1794593020} ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" x-data>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kenali Pondok Pesantren Annuqayah Latee, Guluk-Guluk, Sumenep: profil, kompleks putra dan putri, pendidikan, serta informasi pendaftaran santri baru.">
    
    <title>Pondok Pesantren Annuqayah Latee — P2AL</title>
    <link rel="icon" href="<?php echo e(asset('images/pesantren/logo.png')); ?>" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400..700&family=Manrope:wght@400..800&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo app('flux')->fluxAppearance(); ?>

</head>

<body class="bg-slate-50 text-slate-700 antialiased selection:bg-brand-600 selection:text-white dark:bg-slate-950 dark:text-slate-300 dark:selection:bg-brand-400 dark:selection:text-slate-950 font-sans overflow-x-hidden bg-texture-grid transition-colors duration-300">

    <!-- BEGIN: MainHeader -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <!-- ============================================ -->
        <!-- BEGIN: Hero Section                          -->
        <!-- ============================================ -->
        <section class="relative w-full py-6 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            <div class="relative w-full max-w-[1400px] min-h-[480px] sm:min-h-[520px] md:min-h-[600px] lg:min-h-[650px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex flex-col lg:flex-row items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">

                <!-- Background & Glow -->
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/50"></div>
                    <div class="absolute top-0 -left-20 w-[500px] h-[500px] bg-brand-300/25 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/15"></div>
                    <div class="absolute top-0 -right-20 w-[500px] h-[500px] bg-brand-400/25 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-600/15" style="animation-delay: 2s;"></div>
                    <div class="absolute -bottom-40 left-1/2 w-[500px] h-[500px] bg-brand-200/40 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-30 animate-pulse-glow dark:bg-brand-400/10" style="animation-delay: 4s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60 lg:to-transparent"></div>
                </div>

                <!-- Konten Teks -->
                <div class="relative z-30 w-full lg:w-[55%] px-6 sm:px-8 md:px-12 lg:px-16 py-10 sm:py-12 lg:py-16 space-y-4 sm:space-y-5 md:space-y-6 flex flex-col justify-center text-center lg:text-left">

                    <div class="reveal inline-flex items-center justify-center lg:justify-start gap-3">
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">
                            Selamat Datang di Annuqayah Latee
                        </span>
                    </div>

                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] xl:text-[4rem] font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Membangun<br />
                        Generasi Qur'ani<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">
                            Berakhlak Mulia
                        </span>
                    </h1>

                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        Pondok Pesantren Annuqayah Latee merupakan bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur. Didirikan pada tahun 1923 oleh KH. Abdullah Sajjad.
                    </p>

                    <div class="reveal delay-300 flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                        <?php ob_start(); ?><a href="<?php echo e(route('pendaftaran')); ?>" data-flux-button="data-flux-button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-12 text-sm rounded-full gap-2.5 ps-8 pe-6 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20  [--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]" data-flux-group-target="data-flux-group-target">
        <span><?php ob_start(); ?>
                            Informasi Pendaftaran
                        <?php echo trim(ob_get_clean()); ?></span>
        
        
                                <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
</svg>
    </a>
<?php echo ltrim(ob_get_clean()); ?>
                    </div>
                </div>

                <!-- Objek Gambar — Tampil di semua ukuran -->
                <div class="relative z-20 w-full lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 lg:w-[50%] xl:w-[45%] lg:translate-x-[10%] pointer-events-none reveal-right delay-400 flex justify-center px-6 lg:px-0 pb-8 lg:pb-0">
                    <div class="relative w-[85%] sm:w-[70%] max-w-md lg:max-w-none lg:w-full transform lg:scale-100 xl:scale-110 drop-shadow-[0_25px_25px_rgba(0,0,0,0.15)] dark:drop-shadow-[0_25px_25px_rgba(0,0,0,0.5)] flex justify-center animate-float">
                        <img alt="Santri Annuqayah Latee" class="w-full h-auto object-contain lg:mix-blend-multiply dark:lg:mix-blend-screen" src="<?php echo e(asset('images/boys.png')); ?>" onerror="this.src='https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop'" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Partner Trust Bar                     -->
        <!-- ============================================ -->
        <section class="border-y border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 py-6 md:py-8 reveal transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-wrap items-center justify-between gap-4 md:gap-8">
                    <div class="flex items-center gap-3 md:gap-4 bg-slate-50 dark:bg-slate-800/60 px-4 py-2 rounded-full border border-slate-200 dark:border-slate-700">
                        <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">Ikuti</span>
                        <div class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <a aria-label="Facebook" class="hover:text-brand-600 dark:hover:text-brand-400 hover:-translate-y-1 transition-all duration-300" href="#"><svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.592 9 4.825V8z"></path></svg></a>
                            <a aria-label="Instagram" class="hover:text-brand-600 dark:hover:text-brand-400 hover:-translate-y-1 transition-all duration-300" href="#"><svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center gap-6 md:gap-14 opacity-70 hover:opacity-100 transition-opacity duration-500 font-semibold text-sm md:text-base tracking-tight text-slate-700 dark:text-slate-300">
                        <span class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors cursor-pointer">Latee Putra</span>
                        <span class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors cursor-pointer">Latee I Putri</span>
                        <span class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors cursor-pointer">Latee II Putri</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Unit Pendidikan                       -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="pendidikan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-10 md:mb-12 gap-4 reveal">
                    <div>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Unit Pendidikan</h2>
                        <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Lembaga pendidikan formal dan diniyah di lingkungan Annuqayah Latee</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                    <!-- Card 1 -->
                    <article class="reveal delay-100 bg-white dark:bg-slate-900 rounded-3xl overflow-hidden p-3.5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                        <div class="relative h-56 md:h-60 rounded-2xl overflow-hidden">
                            <img alt="Madrasah Diniyah" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" src="https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=800&auto=format&fit=crop" />
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base md:text-lg group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Madrasah Diniyah</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400 flex items-center gap-1 mt-1">Tingkat Isti'dadi & Awwaliyah</p>
                            </div>
                            <span class="bg-brand-600 dark:bg-brand-500 text-white text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Ula</span>
                        </div>
                    </article>
                    <!-- Card 2 -->
                    <article class="reveal delay-200 bg-white dark:bg-slate-900 rounded-3xl overflow-hidden p-3.5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                        <div class="relative h-56 md:h-60 rounded-2xl overflow-hidden">
                            <img alt="Tahfidhul Quran" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=800&auto=format&fit=crop" />
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base md:text-lg group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Tahfidhul Quran</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400 flex items-center gap-1 mt-1">Program Hafalan Wajib</p>
                            </div>
                            <span class="bg-brand-600 dark:bg-brand-500 text-white text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Qur'an</span>
                        </div>
                    </article>
                    <!-- Card 3 -->
                    <article class="reveal delay-300 bg-white dark:bg-slate-900 rounded-3xl overflow-hidden p-3.5 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                        <div class="relative h-56 md:h-60 rounded-2xl overflow-hidden">
                            <img alt="Lembaga Dua Bahasa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop" />
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base md:text-lg group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Lembaga Dua Bahasa</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400 flex items-center gap-1 mt-1">Arab & Inggris</p>
                            </div>
                            <span class="bg-brand-600 dark:bg-brand-500 text-white text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">Bahasa</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Alur Pendaftaran                      -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="daftar">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <div class="reveal">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Alur Pendaftaran Santri Baru</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm max-w-xl mx-auto mt-2">Prosedur pendaftaran santri baru di masing-masing kompleks, baik putra maupun putri meliputi alur, syarat, keuangan, dan beberapa catatan penting.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16 items-stretch md:items-center">

                    <div class="reveal-left delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 flex flex-col items-center justify-center min-h-[280px] md:min-h-[360px] text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 rounded-2xl bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center text-brand-600 dark:text-brand-400 mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">Ambil Formulir<br />Pendaftaran</h3>
                    </div>

                    <div class="reveal-zoom delay-200 bg-brand-600 dark:bg-brand-700 text-white rounded-3xl p-6 md:p-8 flex flex-col items-center text-center shadow-xl shadow-brand-500/20 dark:shadow-brand-900/40 relative overflow-hidden hover:scale-[1.02] transition-transform duration-300">
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                        <div class="w-full h-28 md:h-32 rounded-2xl overflow-hidden mb-4 md:mb-6 relative">
                            <img alt="Pendaftaran" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800&auto=format&fit=crop" />
                            <div class="absolute inset-0 bg-brand-900/30"></div>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold mb-3">Lengkapi<br />Berkas Persyaratan</h3>
                        <p class="text-brand-50 dark:text-brand-100 text-xs leading-relaxed max-w-xs mb-5 md:mb-6">Siapkan dokumen seperti fotokopi KK, akta kelahiran, dan pas foto sesuai ketentuan.</p>
                        <a class="inline-flex items-center gap-2 text-xs font-bold tracking-wider uppercase text-white hover:text-brand-200 dark:hover:text-brand-100 transition-colors group" href="#">
                            <span>Unduh Panduan</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </a>
                    </div>

                    <div class="reveal-right delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 flex flex-col items-center justify-center min-h-[280px] md:min-h-[360px] text-center hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div class="w-14 h-14 rounded-2xl bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center text-brand-600 dark:text-brand-400 mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">Verifikasi &<br />Pembayaran</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Info Pendaftaran                      -->
        <!-- ============================================ -->
        <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-center">
                    <div class="reveal-left lg:col-span-5 relative group">
                        <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] bg-slate-200 dark:bg-slate-800">
                            <img alt="Suasana Pesantren" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop" />
                        </div>
                        <div class="absolute -bottom-6 left-4 sm:left-6 bg-white dark:bg-slate-800 rounded-2xl shadow-xl px-4 sm:px-6 py-3 sm:py-4 flex items-center gap-3 sm:gap-4 border border-slate-100 dark:border-slate-700 hover:-translate-y-2 transition-transform duration-300">
                            <span class="text-xl sm:text-2xl font-black text-brand-600 dark:text-brand-400">1923</span>
                            <div class="h-8 w-px bg-slate-200 dark:bg-slate-700"></div>
                            <span class="text-[10px] sm:text-xs text-slate-500 dark:text-slate-400 font-semibold leading-tight">Tahun<br />Berdiri</span>
                        </div>
                    </div>
                    <div class="reveal-right delay-100 lg:col-span-7 space-y-5 md:space-y-6 pt-6 lg:pt-0">
                        <div class="flex flex-col gap-2">
                            <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-black text-slate-900 dark:text-white leading-[1.05]">MULAI<br />PERJALANAN<br />ILMU ANDA</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4 pt-4 text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed">
                                <p>Pendaftaran santri baru dibuka setiap tahun ajaran. Pastikan Anda memenuhi seluruh persyaratan administratif yang telah ditentukan.</p>
                                <p>Untuk informasi lebih lanjut, silakan hubungi kantor pesantren atau kunjungi langsung kompleks Annuqayah Latee.</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <a class="inline-flex items-center justify-center gap-3 w-full bg-brand-50 hover:bg-brand-100 dark:bg-brand-900/30 dark:hover:bg-brand-900/50 text-brand-700 dark:text-brand-200 font-bold py-4 md:py-5 rounded-2xl transition-all duration-300 group" href="#daftar">
                                <span class="text-base sm:text-lg">Daftar Sekarang</span>
                                <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: About & Metrics                       -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="about">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start mb-12 md:mb-16">
                    <div class="reveal lg:col-span-3">
                        <span class="text-[10px] md:text-xs font-bold tracking-widest text-slate-700 dark:text-slate-300 uppercase bg-slate-100 dark:bg-slate-800 px-4 py-2 rounded-full border border-slate-200 dark:border-slate-700">TENTANG KAMI</span>
                    </div>
                    <div class="reveal delay-100 lg:col-span-9 space-y-5 md:space-y-6">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-white leading-snug">
                            Pondok Pesantren Annuqayah Latee merupakan bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur. Saat ini terbagi menjadi tiga kompleks; Latee Putra, Latee I (Putri), dan Latee II (Putri).
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed border-t border-slate-100 dark:border-slate-800 pt-6">
                            <div class="border-l-2 border-brand-500 dark:border-brand-400 pl-4 hover:border-brand-600 dark:hover:border-brand-300 transition-colors">
                                Kompleks Latee Putra saat ini dihuni oleh 1.251 santri dari berbagai daerah, menggunakan sistem kepengasuhan kolektif yang dipimpin oleh KH. Abd. A'la.
                            </div>
                            <div class="border-l-2 border-brand-500 dark:border-brand-400 pl-4 hover:border-brand-600 dark:hover:border-brand-300 transition-colors">
                                Latee I Putri diasuh oleh KH. A. Basith AS, dibantu oleh putra-putri dan menantu beliau; Latee II Putri diasuh oleh Nyai Umamah Makkiyah.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
                    <div class="reveal delay-100 bg-brand-50/60 dark:bg-brand-900/20 rounded-3xl p-6 md:p-10 text-center border border-brand-100 dark:border-brand-800 flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
                        <span class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-600 dark:text-brand-400 tracking-tight">1.251</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Santri Putra</span>
                    </div>
                    <div class="reveal delay-200 bg-brand-50/60 dark:bg-brand-900/20 rounded-3xl p-6 md:p-10 text-center border border-brand-100 dark:border-brand-800 flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
                        <span class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-600 dark:text-brand-400 tracking-tight">3</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Kompleks</span>
                    </div>
                    <div class="reveal delay-300 bg-brand-50/60 dark:bg-brand-900/20 rounded-3xl p-6 md:p-10 text-center border border-brand-100 dark:border-brand-800 flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
                        <span class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-600 dark:text-brand-400 tracking-tight">1923</span>
                        <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">Tahun Berdiri</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Fasilitas                             -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <div class="reveal">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Fasilitas & Keunggulan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm max-w-xl mx-auto mt-2">Berbagai sarana dan program untuk mendukung kegiatan belajar santri.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-10 mt-12 md:mt-16 text-center">
                    <div class="reveal delay-100 flex flex-col items-center group cursor-default">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-brand-200 dark:group-hover:bg-brand-900/60 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Musalla<br />Multifungsi</h3>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 max-w-xs leading-relaxed">Pusat kegiatan ubudiyah dan berbagai acara pesantren, mampu menampung sekitar 300 orang.</p>
                    </div>
                    <div class="reveal delay-200 flex flex-col items-center group cursor-default">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-brand-200 dark:group-hover:bg-brand-900/60 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Bimbingan<br />Konseling</h3>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 max-w-xs leading-relaxed">Satgas BK memberikan solusi psikologis dan tempat curhat yang nyaman bagi santri.</p>
                    </div>
                    <div class="reveal delay-300 flex flex-col items-center group cursor-default sm:col-span-2 md:col-span-1">
                        <div class="w-12 h-12 rounded-2xl bg-brand-100 dark:bg-brand-900/40 text-brand-600 dark:text-brand-400 flex items-center justify-center mb-5 group-hover:scale-110 group-hover:bg-brand-200 dark:group-hover:bg-brand-900/60 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Pengembangan<br />Minat & Bakat</h3>
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 max-w-xs leading-relaxed">Program seperti Tata Boga, Club Cinta Shalawat, dan komunitas menulis Café Latte 52.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: News & Blog                           -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="berita">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal flex flex-col sm:flex-row items-start sm:items-end justify-between mb-10 md:mb-12 gap-4">
                    <div>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Berita & Artikel</h2>
                        <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Informasi terkini dan tulisan seputar Annuqayah Latee</p>
                    </div>
                    <a href="<?php echo e(route('blogs.index')); ?>" class="inline-flex items-center gap-2 text-xs md:text-sm font-bold text-brand-600 dark:text-brand-400 hover:text-brand-700 dark:hover:text-brand-300 transition-colors group">
                        <span>Lihat Semua</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                    <article class="reveal delay-100 bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                        <div class="relative h-56 md:h-60 overflow-hidden">
                            <img alt="Kegiatan Pesantren" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=800&auto=format&fit=crop" />
                            <div class="absolute top-4 left-4 bg-white/90 dark:bg-rose-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-rose-700 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700">BERITA</div>
                        </div>
                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <span class="text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-2">12 Oktober 2024</span>
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2">Peringatan Haul Masyayikh ke-XX Berlangsung Khidmat</h3>
                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-4 line-clamp-3">Ribuan santri dan alumni memadati area pesantren untuk mengikuti rangkaian acara haul yang dipenuhi dengan pembacaan manaqib dan tausiyah...</p>
                            <a href="<?php echo e(route('blogs.show')); ?>" class="mt-auto inline-flex items-center gap-1 text-[11px] md:text-xs font-bold text-slate-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Baca Selengkapnya <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                        </div>
                    </article>
                    <article class="reveal delay-200 bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                        <div class="relative h-56 md:h-60 overflow-hidden">
                            <img alt="Prestasi Santri" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop" />
                            <div class="absolute top-4 left-4 bg-white/90 dark:bg-rose-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-rose-700 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700">BERITA</div>
                        </div>
                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <span class="text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-2">10 Oktober 2024</span>
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2">Santri Latee Raih Juara 1 Lomba Pidato Bahasa Arab Tingkat Provinsi</h3>
                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-4 line-clamp-3">Prestasi membanggakan kembali ditorehkan oleh santri Pondok Pesantren Annuqayah Latee dalam ajang kompetisi bahasa tingkat Jawa Timur...</p>
                            <a href="<?php echo e(route('blogs.show')); ?>" class="mt-auto inline-flex items-center gap-1 text-[11px] md:text-xs font-bold text-slate-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Baca Selengkapnya <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                        </div>
                    </article>
                    <article class="reveal delay-300 bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">
                        <div class="relative h-56 md:h-60 overflow-hidden">
                            <img alt="Artikel Edukasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=800&auto=format&fit=crop" />
                            <div class="absolute top-4 left-4 bg-white/90 dark:bg-brand-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-brand-700 dark:text-brand-200 shadow-sm border border-brand-100 dark:border-brand-700">BLOG</div>
                        </div>
                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <span class="text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-2">05 Oktober 2024</span>
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2">Menumbuhkan Jiwa Kepemimpinan Santri Melalui LDK</h3>
                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-4 line-clamp-3">Latihan Dasar Kepemimpinan (LDK) menjadi wadah bagi santri untuk mengasah kemampuan manajerial, public speaking, dan kerja sama tim...</p>
                            <a href="<?php echo e(route('blogs.show')); ?>" class="mt-auto inline-flex items-center gap-1 text-[11px] md:text-xs font-bold text-slate-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Baca Selengkapnya <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: Testimonials                          -->
        <!-- ============================================ -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal text-center mb-12 md:mb-16">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Serambi Pengasuh</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 items-stretch">

                    <div class="reveal-left delay-100 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex gap-1 text-brand-600 dark:text-brand-400 mb-4 text-xl">“</div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed italic">"Semuanya kembali kepada akhlak. Baik agama maupun ilmu dan lainnya kembali kepada akhlak. Ilmu tanpa akhlak tidak ada gunanya."</p>
                        </div>
                        <div class="flex items-center gap-3 pt-5 md:pt-6 mt-5 md:mt-6 border-t border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center font-bold text-slate-500 dark:text-slate-300">A</div>
                            <div>
                                <h4 class="text-xs md:text-sm font-bold text-slate-900 dark:text-white">KH. Ahmad Basyir AS</h4>
                                <p class="text-[10px] md:text-[11px] text-slate-500 dark:text-slate-400 font-medium">Pengasuh</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal-zoom delay-200 bg-white dark:bg-slate-900 border-2 border-brand-500 dark:border-brand-400 rounded-3xl p-6 md:p-8 flex flex-col justify-between shadow-lg relative md:transform md:-translate-y-2 hover:shadow-brand-500/20 dark:hover:shadow-brand-400/10 transition-shadow duration-300">
                        <div>
                            <div class="flex gap-1 text-brand-600 dark:text-brand-400 mb-4 text-xl">“</div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed italic">"Menuntut ilmu agama adalah sesuatu yang harus dilakukan setiap muslim laki-laki atau perempuan, dan ia juga merupakan keyakinan yang harus ada dalam pemikiran kehidupan."</p>
                        </div>
                        <div class="flex items-center gap-3 pt-5 md:pt-6 mt-5 md:mt-6 border-t border-brand-200 dark:border-brand-800 bg-brand-600 dark:bg-brand-700 -mx-6 md:-mx-8 -mb-6 md:-mb-8 p-5 md:p-6 rounded-b-[22px] text-white">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center font-bold text-white">B</div>
                            <div>
                                <h4 class="text-xs md:text-sm font-bold text-white">KH. A. Basith AS</h4>
                                <p class="text-[10px] md:text-[11px] text-brand-100 font-medium">Pengasuh Latee I Putri</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal-right delay-300 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div>
                            <div class="flex gap-1 text-brand-600 dark:text-brand-400 mb-4 text-xl">“</div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed italic">"Dengan selalu ingat Allah, maka apapun hasilnya kita tetap tegar. Kalau kita berhasil kita tidak lupa daratan, kalau kita gagal kita tidak putus asa."</p>
                        </div>
                        <div class="flex items-center gap-3 pt-5 md:pt-6 mt-5 md:mt-6 border-t border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center font-bold text-slate-500 dark:text-slate-300">A</div>
                            <div>
                                <h4 class="text-xs md:text-sm font-bold text-slate-900 dark:text-white">KH. Abd. A'la</h4>
                                <p class="text-[10px] md:text-[11px] text-slate-500 dark:text-slate-400 font-medium">Pengasuh Latee Putra</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- BEGIN: CTA Badge Bar                         -->
        <!-- ============================================ -->
        <section class="py-10 md:py-12 bg-white dark:bg-slate-900 border-t border-slate-200/80 dark:border-slate-800 transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8 bg-slate-50 dark:bg-slate-800/50 p-6 md:p-8 rounded-3xl border border-slate-200 dark:border-slate-700 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden shrink-0 border-2 border-white dark:border-slate-700 shadow-md">
                            <img alt="Ikon" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=200&auto=format&fit=crop" />
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl lg:text-2xl font-black text-slate-900 dark:text-white">Bergabunglah<br />Bersama Kami!</h3>
                        </div>
                    </div>
                    <div class="relative w-16 h-16 md:w-20 md:h-20 shrink-0 flex items-center justify-center group cursor-pointer">
                        <svg class="w-16 h-16 md:w-20 md:h-20 animate-[spin_10s_linear_infinite] text-slate-800 dark:text-slate-200" viewBox="0 0 100 100">
                            <path d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none" id="circlePath"></path>
                            <text font-size="10" font-weight="700" letter-spacing="2"><textPath class="fill-slate-900 dark:fill-slate-100 uppercase" href="#circlePath">Daftar • Daftar •</textPath></text>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-slate-900 dark:text-slate-100 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 max-w-sm">
                        <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed text-center md:text-left">Informasi lebih lanjut mengenai pendaftaran dapat menghubungi kantor pesantren.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- BEGIN: MainFooter -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>


    <!-- Script Reveal -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        entry.target.classList.remove('is-hidden-up');
                    } else if (entry.boundingClientRect.top > 0) {
                        entry.target.classList.remove('is-visible');
                        entry.target.classList.add('is-hidden-up');
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom').forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>
<?php /**PATH D:\PUJASERA\latee-app\resources\views/welcome.blade.php ENDPATH**/ ?>