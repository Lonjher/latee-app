<?php
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
?>

<section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="berita">
    <div class="max-w-7xl mx-auto px-6">

        
        <div class="reveal flex flex-col sm:flex-row items-start sm:items-end justify-between mb-10 md:mb-12 gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">
                    Berita & Artikel
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">
                    Informasi terkini dan tulisan seputar Annuqayah Latee
                </p>
            </div>
            <a href="<?php echo e(route('blogs.index')); ?>" wire:navigate
                class="inline-flex items-center gap-2 text-xs md:text-sm font-bold text-brand-600 dark:text-brand-400 hover:text-brand-700 dark:hover:text-brand-300 transition-colors group">
                <span>Lihat Semua</span>
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
                </svg>
            </a>
        </div>

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->isEmpty()): ?>
            <div class="text-center py-16 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700">
                <svg class="w-16 h-16 text-slate-300 dark:text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white">Belum ada artikel</h3>
                <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 mt-1">Nantikan tulisan menarik dari kami.</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php
                        $primaryType = $post->category?->type ?? 'article';
                        $isNews = $primaryType === 'news';
                        $image = $post->featured_image
                            ? (str_starts_with($post->featured_image, 'http')
                                ? $post->featured_image
                                : Storage::url($post->featured_image))
                            : null;
                        $dateLabel = $post->published_at?->translatedFormat('d F Y')
                            ?? $post->created_at?->translatedFormat('d F Y');
                        $excerpt = $post->excerpt
                            ?: \Illuminate\Support\Str::limit(strip_tags($post->content ?? ''), 140);
                        $delayClass = 'delay-' . (($loop->index + 1) * 100);
                    ?>

                    <article <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'latest-post-'.e($post->id).''; ?>wire:key="latest-post-<?php echo e($post->id); ?>"
                        class="reveal <?php echo e($delayClass); ?> bg-white dark:bg-slate-800 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">

                        
                        <div class="relative h-56 md:h-60 overflow-hidden">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($image): ?>
                                <img alt="<?php echo e($post->title); ?>" loading="lazy"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 dark:brightness-90"
                                    src="<?php echo e($image); ?>" />
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br <?php echo e($isNews ? 'from-rose-50 to-rose-100 dark:from-rose-950/40 dark:to-rose-900/30' : 'from-brand-50 to-brand-100 dark:from-brand-950/40 dark:to-brand-900/30'); ?>">
                                    <svg class="w-16 h-16 <?php echo e($isNews ? 'text-rose-300 dark:text-rose-700' : 'text-brand-300 dark:text-brand-700'); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            
                            <div class="absolute top-4 left-4">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isNews): ?>
                                    <div class="inline-flex items-center gap-1.5 bg-white/90 dark:bg-rose-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-rose-700 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700 uppercase tracking-wider">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                        Berita
                                    </div>
                                <?php else: ?>
                                    <div class="inline-flex items-center gap-1.5 bg-white/90 dark:bg-brand-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-brand-700 dark:text-brand-200 shadow-sm border border-brand-100 dark:border-brand-700 uppercase tracking-wider">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                        Blog
                                    </div>
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
                            <span class="text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-2">
                                <?php echo e($dateLabel); ?>

                            </span>

                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors line-clamp-2">
                                <?php echo e($post->title); ?>

                            </h3>

                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-4 line-clamp-3">
                                <?php echo e($excerpt); ?>

                            </p>

                            <a href="<?php echo e(route('blogs.show', $post->slug)); ?>" wire:navigate
                                class="mt-auto inline-flex items-center gap-1 text-[11px] md:text-xs font-bold text-slate-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                                Baca Selengkapnya
                                <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\storage\framework\views/livewire/views/b3437885.blade.php ENDPATH**/ ?>