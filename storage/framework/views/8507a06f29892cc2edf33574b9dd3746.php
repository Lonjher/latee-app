<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
<header
    class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

        
        <a class="flex items-center gap-2.5 text-slate-900 dark:text-white group" href="/">
            <div
                class="w-9 h-9 rounded-full flex items-center justify-center text-white text-base font-bold shadow-md shadow-slate-900/10 dark:shadow-brand-500/20 group-hover:scale-105 transition-transform duration-300">
                <img src="<?php echo e(asset('images/logo.webp')); ?>" alt="Logo" class="w-full h-full object-cover rounded-full">
            </div>
            <span class="font-extrabold tracking-wider text-md">Annuqayah Latee</span>
        </a>

        
        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-slate-600 dark:text-slate-300">

            
            <a class="<?php echo e(request()->is('/') ? 'text-brand-600 dark:text-brand-400' : ''); ?> hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4"
                href="/">
                Beranda
                <span
                    class="absolute bottom-3 left-0 <?php echo e(request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            
            <a class="<?php echo e(request()->is('profile') ? 'text-brand-600 dark:text-brand-400' : ''); ?> hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4"
                href="<?php echo e(route('profile')); ?>">
                Profil
                <span
                    class="absolute bottom-3 left-0 <?php echo e(request()->is('profile') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            
            <a class="<?php echo e(request()->is('pendaftaran') ? 'text-brand-600 dark:text-brand-400' : ''); ?> hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4"
                href="<?php echo e(route('pendaftaran')); ?>">
                Pendaftaran
                <span
                    class="absolute bottom-3 left-0 <?php echo e(request()->is('pendaftaran') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>

            
            <div class="relative group">
                <button
                    class="<?php echo e(request()->is('programs/latee/*') ? 'text-brand-600 dark:text-brand-400' : ''); ?> flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee Putra
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                    <span
                        class="absolute bottom-3 left-0 <?php echo e(request()->is('programs/latee/*') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div
                    class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="<?php echo e(route('latee.programs.pendidikan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Pendidikan</a>
                        <a href="<?php echo e(route('latee.programs.peribadatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peribadatan</a>
                        <a href="<?php echo e(route('latee.programs.peminatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peminatan</a>
                        <a href="<?php echo e(route('latee.programs.publikasi')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Publikasi</a>
                        <a href="<?php echo e(route('latee.programs.kesehatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Kesehatan
                            & Lingkungan</a>
                        <a href="<?php echo e(route('latee.programs.ketertiban')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Ketertiban
                            & Konseling</a>
                        <a href="<?php echo e(route('latee.programs.infrastruktur')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('latee.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Infrastruktur</a>
                        <a href="<?php echo e(route('latee.programs.unit')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 <?php echo e(request()->routeIs('latee.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Unit
                            Usaha</a>
                    </div>
                </div>
            </div>

            
            <div class="relative group">
                <button
                    class="<?php echo e(request()->is('programs/lateei/*') ? 'text-brand-600 dark:text-brand-400' : ''); ?> flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee I Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                    <span
                        class="absolute bottom-3 left-0 <?php echo e(request()->is('programs/lateei/*') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div
                    class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="<?php echo e(route('lateei.programs.pendidikan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Pendidikan</a>
                        <a href="<?php echo e(route('lateei.programs.peribadatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peribadatan</a>
                        <a href="<?php echo e(route('lateei.programs.peminatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peminatan</a>
                        <a href="<?php echo e(route('lateei.programs.publikasi')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Publikasi</a>
                        <a href="<?php echo e(route('lateei.programs.kesehatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Kesehatan
                            & Lingkungan</a>
                        <a href="<?php echo e(route('lateei.programs.ketertiban')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Ketertiban
                            & Konseling</a>
                        <a href="<?php echo e(route('lateei.programs.infrastruktur')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateei.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Infrastruktur</a>
                        <a href="<?php echo e(route('lateei.programs.unit')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 <?php echo e(request()->routeIs('lateei.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Unit
                            Usaha</a>
                    </div>
                </div>
            </div>

            
            <div class="relative group">
                <button
                    class="<?php echo e(request()->is('programs/lateeii/*') ? 'text-brand-600 dark:text-brand-400' : ''); ?> flex items-center gap-1 hover:text-brand-600 dark:hover:text-brand-400 transition-colors py-4">
                    Latee II Putri
                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                    <span
                        class="absolute bottom-3 left-0 <?php echo e(request()->is('programs/lateeii/*') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
                </button>
                <div
                    class="absolute top-full left-0 w-52 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-xl rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50 overflow-hidden">
                    <div class="py-2">
                        <a href="<?php echo e(route('lateeii.programs.pendidikan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.pendidikan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Pendidikan</a>
                        <a href="<?php echo e(route('lateeii.programs.peribadatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.peribadatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peribadatan</a>
                        <a href="<?php echo e(route('lateeii.programs.peminatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.peminatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Peminatan</a>
                        <a href="<?php echo e(route('lateeii.programs.publikasi')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.publikasi') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Publikasi</a>
                        <a href="<?php echo e(route('lateeii.programs.kesehatan')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.kesehatan') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Kesehatan
                            & Lingkungan</a>
                        <a href="<?php echo e(route('lateeii.programs.tata-busana')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.tata-busana') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Tata
                            Busana</a>
                        <a href="<?php echo e(route('lateeii.programs.ketertiban')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.ketertiban') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Ketertiban
                            & Konseling</a>
                        <a href="<?php echo e(route('lateeii.programs.infrastruktur')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors <?php echo e(request()->routeIs('lateeii.programs.infrastruktur') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Infrastruktur</a>
                        <a href="<?php echo e(route('lateeii.programs.unit')); ?>"
                            class="block px-4 py-2.5 text-xs transition-colors border-t border-slate-100 dark:border-slate-800 mt-1 pt-2 <?php echo e(request()->routeIs('lateeii.programs.unit') ? 'bg-brand-50 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 font-semibold' : 'hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-brand-600 dark:hover:text-brand-400'); ?>">Unit
                            Usaha</a>
                    </div>
                </div>
            </div>

            
            <a class="<?php echo e(request()->is('contact') ? 'text-brand-600 dark:text-brand-400' : ''); ?> hover:text-brand-600 dark:hover:text-brand-400 relative group transition-colors flex items-center py-4"
                href="<?php echo e(route('contact')); ?>">
                Kontak
                <span
                    class="absolute bottom-3 left-0 <?php echo e(request()->is('contact') ? 'w-full' : 'w-0 group-hover:w-full'); ?> h-0.5 bg-brand-500 dark:bg-brand-400 transition-all duration-300"></span>
            </a>
        </nav>

        
        <div class="flex items-center gap-3">

            <button
                x-data
                @click="$flux.appearance = $flux.appearance === 'dark' ? 'light' : 'dark'"
                class="cursor-pointer rounded-lg p-2 text-stone-500 transition-colors hover:bg-stone-100 dark:text-stone-400 dark:hover:bg-stone-800"
                :aria-label="$flux.appearance === 'dark' ? 'Light Mode' : 'Dark Mode'"
            >
                
                <svg x-show="$flux.appearance !== 'dark'" x-cloak
                    class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>

                
                <svg x-show="$flux.appearance === 'dark'" x-cloak
                    class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </button>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                
                <?php ob_start(); ?><a href="<?php echo e(route('dashboard')); ?>" data-flux-button="data-flux-button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 ps-6 pe-6 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20  [--color-accent:var(--color-slate-800)] [--color-accent-content:var(--color-slate-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-slate-100)] dark:[--color-accent-content:var(--color-slate-100)] dark:[--color-accent-foreground:var(--color-slate-900)]" data-flux-group-target="data-flux-group-target">
        <?php ob_start(); ?>
                    Dashboard
                <?php echo trim(ob_get_clean()); ?>

    </a>
<?php echo ltrim(ob_get_clean()); ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                
                <?php ob_start(); ?><a href="<?php echo e(route('login')); ?>" data-flux-button="data-flux-button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 ps-6 pe-6 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20  [--color-accent:var(--color-slate-800)] [--color-accent-content:var(--color-slate-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-slate-100)] dark:[--color-accent-content:var(--color-slate-100)] dark:[--color-accent-foreground:var(--color-slate-900)]" data-flux-group-target="data-flux-group-target">
        <?php ob_start(); ?>
                    Login
                <?php echo trim(ob_get_clean()); ?>

    </a>
<?php echo ltrim(ob_get_clean()); ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</header>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/partials/header.blade.php ENDPATH**/ ?>