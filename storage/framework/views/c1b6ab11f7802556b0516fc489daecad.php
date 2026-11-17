<?php # [BlazeFolded]:{flux::select.option}:{D:\PUJASERA\latee-app\resources\views/flux/select/option/index.blade.php}:{1793897459} ?>
<?php # [BlazeFolded]:{flux::select.option}:{D:\PUJASERA\latee-app\resources\views/flux/select/option/index.blade.php}:{1793897459} ?>
<?php # [BlazeFolded]:{flux::select.option}:{D:\PUJASERA\latee-app\resources\views/flux/select/option/index.blade.php}:{1793897459} ?>
<?php # [BlazeFolded]:{flux::select}:{D:\PUJASERA\latee-app\resources\views/flux/select/index.blade.php}:{1793897459} ?>
<?php
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Post;
?>

<div>
    
    <section class="relative w-full py-8 sm:py-12 md:py-20 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="relative w-full max-w-[1400px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">
            <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/20 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-brand-200/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
            </div>
            <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-12 md:py-16 text-center">
                <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                    <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-100 dark:border-brand-700">Warta Annuqayah Latee</span>
                </div>
                <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                    Berita & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Artikel</span>
                </h1>
                <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                    Informasi terkini seputar kegiatan pesantren, prestasi santri, serta tulisan reflektif dan edukatif dari para kontributor.
                </p>
            </div>
        </div>
    </section>

    
    <section class="sticky top-16 z-40 bg-white/90 dark:bg-slate-900/90 backdrop-blur-lg border-b border-slate-200 dark:border-slate-800 py-4 shadow-sm transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-3 md:gap-4">

                
                <div class="relative w-full md:w-1/3">
                    <?php if (!function_exists('_027bed3557fd27688f9f816095c8c603')) { $__blaze->compile('D:\PUJASERA\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/027bed3557fd27688f9f816095c8c603.php'); require $__blaze->compiledPath.'/027bed3557fd27688f9f816095c8c603.php'; } ?>
<?php $__blaze->pushData(['type' => 'search','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari berita atau artikel...','icon:leading' => 'magnifying-glass']); ?>
<?php _027bed3557fd27688f9f816095c8c603($__blaze, ['type' => 'search','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari berita atau artikel...','icon:leading' => 'magnifying-glass'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                </div>

                
                <div class="flex items-center bg-slate-100 dark:bg-slate-800 p-1 rounded-full w-full md:w-auto overflow-x-auto">
                    <button type="button" wire:click="setType('')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 <?php echo e($type === '' ? 'bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'); ?>">
                        Semua
                    </button>
                    <button type="button" wire:click="setType('news')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 flex items-center gap-1.5 <?php echo e($type === 'news' ? 'bg-rose-500 dark:bg-rose-600 text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-rose-600 dark:hover:text-rose-400'); ?>">
                        <span class="w-1.5 h-1.5 rounded-full bg-current"></span> Berita
                    </button>
                    <button type="button" wire:click="setType('artikel')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 flex items-center gap-1.5 <?php echo e($type === 'article' ? 'bg-brand-600 dark:bg-brand-500 text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-brand-600 dark:hover:text-brand-400'); ?>">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                    </button>
                </div>

                
                <div class="w-full md:w-auto">
                    <?php ob_start(); ?><?php $__blaze->pushData(['wire:model.live' => 'sort']); $__env->pushConsumableComponentData(['wire:model.live' => 'sort']); ?><div class="relative w-full">
    <select
        class="appearance-none [:where(&amp;)]:w-full ps-4 pe-11 block outline-none transition-all cursor-pointer h-9 py-2 text-sm rounded-full bg-slate-50 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50 text-slate-900 dark:text-white disabled:text-slate-400 dark:disabled:text-slate-500 has-[option.placeholder:checked]:text-slate-400 dark:has-[option.placeholder:checked]:text-slate-500 dark:[&amp;_option]:bg-slate-800 dark:[&amp;_option]:text-white disabled:shadow-none dark:shadow-none border border-slate-200 dark:border-slate-700 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30" wire:model.live="sort"
                 name="sort"                 data-flux-control
        data-flux-select-native
        data-flux-group-target
    >
        
        <?php ob_start(); ?>
                        <?php ob_start(); ?><option
    
     value="latest"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'latest'; ?>wire:key="latest" ><?php ob_start(); ?>Terbaru<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><option
    
     value="oldest"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'oldest'; ?>wire:key="oldest" ><?php ob_start(); ?>Terlama<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><option
    
     value="popular"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'popular'; ?>wire:key="popular" ><?php ob_start(); ?>Terpopuler<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                    <?php echo trim(ob_get_clean()); ?>

    </select>
</div>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 min-h-screen transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <div wire:loading.flex wire:target="search,type,sort,setType" class="justify-center py-8">
                <div class="inline-flex items-center gap-2 rounded-full bg-white dark:bg-slate-900 px-4 py-2 shadow-md text-xs font-medium text-slate-600 dark:text-slate-300">
                    <svg class="size-4 animate-spin text-brand-600 dark:text-brand-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    Memuat...
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php
                        $primaryType = $post->category?->type ?? 'article';
                        $image = $post->featured_image
                            ? (str_starts_with($post->featured_image, 'http') ? $post->featured_image : \Illuminate\Support\Facades\Storage::url($post->featured_image))
                            : 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop';
                        $dateLabel = $post->published_at?->translatedFormat('d F Y') ?? $post->created_at?->translatedFormat('d F Y');
                        $authorName = $post->author?->full_name ?? 'Redaksi';
                    ?>

                    <article <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'post-'.e($post->id).''; ?>wire:key="post-<?php echo e($post->id); ?>" class="reveal group bg-white dark:bg-slate-900 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative">
                        
                        <div class="relative h-52 sm:h-56 overflow-hidden">
                            <img src="<?php echo e($image); ?>" alt="<?php echo e($post->title); ?>"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105 dark:brightness-90"
                                loading="lazy">

                            
                            <div class="absolute top-4 left-4">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($primaryType === 'news'): ?>
                                    <span class="inline-flex items-center gap-1.5 bg-white/95 dark:bg-rose-900/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-rose-600 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700 uppercase tracking-wider">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span> Berita
                                    </span>
                                <?php else: ?>
                                    <span class="inline-flex items-center gap-1.5 bg-white/95 dark:bg-brand-900/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-brand-600 dark:text-brand-200 shadow-sm border border-brand-100 dark:border-brand-700 uppercase tracking-wider">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->category): ?>
                                <div class="absolute bottom-4 right-4">
                                    <span class="bg-slate-900/85 dark:bg-slate-950/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-medium text-white shadow-sm">
                                        <?php echo e($post->category->name); ?>

                                    </span>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-3">
                                <span><?php echo e($dateLabel); ?></span>
                                <span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    <?php echo e(number_format($post->views_count, 0, ',', '.')); ?>

                                </span>
                            </div>

                            <h2 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 line-clamp-2 transition-colors <?php echo e($primaryType === 'news' ? 'group-hover:text-rose-600 dark:group-hover:text-rose-400' : 'group-hover:text-brand-600 dark:group-hover:text-brand-400'); ?>">
                                <?php echo e($post->title); ?>

                            </h2>

                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-5 line-clamp-3">
                                <?php echo e($post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 140)); ?>

                            </p>

                            <div class="mt-auto flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-600 dark:text-slate-400 flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    <?php echo e($authorName); ?>

                                </span>
                                <a href="<?php echo e(route('blogs.show', $post->slug)); ?>" wire:navigate
                                    class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-900 dark:text-white transition-colors group/btn <?php echo e($primaryType === 'news' ? 'hover:text-rose-600 dark:hover:text-rose-400' : 'hover:text-brand-600 dark:hover:text-brand-400'); ?>">
                                    Baca
                                    <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-16 md:py-20 bg-white dark:bg-slate-900 rounded-3xl border border-slate-100 dark:border-slate-800">
                        <svg class="w-16 h-16 text-slate-300 dark:text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white">Tidak ada hasil ditemukan</h3>
                        <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 mt-1">Coba ubah kata kunci atau filter pencarian Anda.</p>
                        <button type="button" wire:click="resetFilters"
                            class="inline-block mt-4 text-xs md:text-sm font-semibold text-brand-600 dark:text-brand-400 hover:underline">
                            Reset Filter
                        </button>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->hasPages()): ?>
                <div class="mt-10 md:mt-12 flex justify-center">
                    <?php echo e($posts->links()); ?>

                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </section>
</div><?php /**PATH D:\PUJASERA\latee-app\storage\framework\views/livewire/views/e647b97a.blade.php ENDPATH**/ ?>