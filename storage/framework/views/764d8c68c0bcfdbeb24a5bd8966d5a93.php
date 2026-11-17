<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/index.blade.php}:{1794877752} ?>
<?php
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
?>

<div>
    <?php if (isset($component)) { $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Kelola Post','leading' => 'Kelola artikel, berita, dan konten publikasi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kelola Post','leading' => 'Kelola artikel, berita, dan konten publikasi']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $attributes = $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $component = $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>

    <div class="mx-auto mt-2 space-y-2">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
            <div class="bg-sage-50 dark:bg-sage-950 border-sage-200 dark:border-sage-800 text-sage-700 dark:text-sage-300 flex items-center gap-2.5 rounded-xl border px-3 py-2 text-xs">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Total</div>
                <div class="mt-1 text-xl font-bold text-stone-800 dark:text-stone-100"><?php echo e($this->stats['total']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Published</div>
                <div class="mt-1 text-xl font-bold text-green-600 dark:text-green-400"><?php echo e($this->stats['published']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Draft</div>
                <div class="mt-1 text-xl font-bold text-amber-600 dark:text-amber-400"><?php echo e($this->stats['draft']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Bulan Ini</div>
                <div class="mt-1 text-xl font-bold text-sage-600 dark:text-sage-400"><?php echo e($this->stats['this_month']); ?></div>
            </div>
        </div>

        
        <div class="rounded-xl border border-stone-200 bg-white px-3 py-2.5 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <div class="flex w-full gap-2 sm:w-[50%]">
                    <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['size' => 'xs','icon:leading' => 'magnifying-glass','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari judul atau slug...','class' => 'flex-1']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['size' => 'xs','icon:leading' => 'magnifying-glass','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari judul atau slug...','class' => 'flex-1'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search || $statusFilter): ?>
                        <button wire:click="clearFilters" title="Reset"
                            class="grid size-9 shrink-0 place-items-center rounded-lg border border-stone-200 bg-white text-stone-500 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800">
                            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <div class="w-full sm:w-[30%]">
                    <?php ob_start(); ?><?php $__blaze->pushData(['wire:model.live' => 'statusFilter', 'size' => 'xs']); $__env->pushConsumableComponentData(['wire:model.live' => 'statusFilter', 'size' => 'xs']); ?><div class="relative w-full">
    <select
        class="appearance-none [:where(&amp;)]:w-full ps-4 pe-11 block outline-none transition-all cursor-pointer h-8 py-1.5 text-xs rounded-full bg-slate-50 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50 text-slate-900 dark:text-white disabled:text-slate-400 dark:disabled:text-slate-500 has-[option.placeholder:checked]:text-slate-400 dark:has-[option.placeholder:checked]:text-slate-500 dark:[&amp;_option]:bg-slate-800 dark:[&amp;_option]:text-white disabled:shadow-none dark:shadow-none border border-slate-200 dark:border-slate-700 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30" wire:model.live="statusFilter"
                 name="statusFilter"                 data-flux-control
        data-flux-select-native
        data-flux-group-target
    >
        
        <?php ob_start(); ?>
                        <?php ob_start(); ?><option
    
     value=""      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = ''; ?>wire:key="" ><?php ob_start(); ?>Semua Status<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><option
    
     value="published"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'published'; ?>wire:key="published" ><?php ob_start(); ?>Published<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><option
    
     value="draft"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'draft'; ?>wire:key="draft" ><?php ob_start(); ?>Draft<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><option
    
     value="featured"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'featured'; ?>wire:key="featured" ><?php ob_start(); ?>Featured<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                    <?php echo trim(ob_get_clean()); ?>

    </select>
</div>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
                </div>

                <a href="<?php echo e(route('admin.posts.create')); ?>" wire:navigate
                    class="inline-flex cursor-pointer items-center gap-1.5 rounded-full bg-sage-600 px-3.5 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-sage-700 dark:bg-sage-500 dark:hover:bg-sage-600">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Post
                </a>
            </div>
        </div>

        
        <div class="overflow-hidden rounded-xl border border-stone-200 bg-white px-3 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex items-center justify-between border-b border-stone-100 py-2 dark:border-stone-800">
                <span class="text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    <?php echo e($posts->total()); ?> post ditemukan
                </span>
                <div wire:loading class="text-sage-600 dark:text-sage-400 flex items-center gap-1 text-[11px]">
                    <svg class="size-3 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z" />
                    </svg>
                    Memuat…
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border bg-white shadow-sm dark:border-stone-800 dark:bg-stone-900">
                <table x-data class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-stone-200 bg-stone-50 text-[11px] font-semibold uppercase tracking-wider text-stone-500 dark:border-stone-800 dark:bg-stone-800/50 dark:text-stone-400">
                            <th class="w-8 px-2.5 py-1.5 text-center">#</th>
                            <th class="px-2.5 py-1.5">Post</th>
                            <th class="w-32 px-2.5 py-1.5">Kategori</th>
                            <th class="w-28 px-2.5 py-1.5">Author</th>
                            <th class="w-24 px-2.5 py-1.5 text-center">Status</th>
                            <th class="w-28 px-2.5 py-1.5">Tanggal</th>
                            <th class="w-14 px-2.5 py-1.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 dark:divide-stone-800/60">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $imgUrl = $post->featured_image
                                    ? (Str::startsWith($post->featured_image, 'http') ? $post->featured_image : Storage::url($post->featured_image))
                                    : null;
                            ?>
                            <tr class="transition-colors hover:bg-stone-50 dark:hover:bg-stone-800/30">
                                <td class="px-2.5 py-1.5 text-center text-xs text-stone-400 dark:text-stone-600">
                                    <?php echo e($loop->iteration + ($posts->currentPage() - 1) * $posts->perPage()); ?>

                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex items-center gap-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($imgUrl): ?>
                                            <img src="<?php echo e($imgUrl); ?>" alt="<?php echo e($post->title); ?>"
                                                class="size-10 shrink-0 rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                                        <?php else: ?>
                                            <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-stone-100 text-stone-400 dark:bg-stone-800 dark:text-stone-500">
                                                <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M2.25 6.75h.008v.008H2.25V6.75Z" />
                                                </svg>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-medium text-stone-800 dark:text-stone-200"><?php echo e($post->title); ?></span>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->is_featured): ?>
                                                    <span class="shrink-0 rounded-full bg-amber-50 px-1.5 py-0.5 text-[9px] font-bold uppercase tracking-wider text-amber-600 dark:bg-amber-950/40 dark:text-amber-400">Featured</span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                            <div class="truncate text-[10px] text-stone-500 dark:text-stone-500">/<?php echo e($post->slug); ?></div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->category): ?>
                                        <span class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[10px] font-medium text-stone-700 dark:bg-stone-800 dark:text-stone-300">
                                            <?php echo e($post->category->name); ?>

                                        </span>
                                    <?php else: ?>
                                        <span class="text-[10px] italic text-stone-400 dark:text-stone-500">—</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="truncate text-xs text-stone-700 dark:text-stone-300">
                                        <?php echo e($post->author?->full_name ?? '—'); ?>

                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5 text-center">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->is_published): ?>
                                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-semibold text-green-700 dark:bg-green-950/40 dark:text-green-400">Published</span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-amber-50 px-2 py-0.5 text-[10px] font-semibold text-amber-700 dark:bg-amber-950/40 dark:text-amber-400">Draft</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-2.5 py-1.5 text-[11px] text-stone-500 dark:text-stone-400">
                                    <?php echo e($post->published_at?->format('d M Y') ?? $post->created_at?->format('d M Y') ?? '—'); ?>

                                </td>

                                <td class="px-2.5 py-1.5 text-right">
                                    <?php if (isset($component)) { $__componentOriginal42e2b418137f6d63f42cabcb2c53a7b0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42e2b418137f6d63f42cabcb2c53a7b0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                        <?php if (isset($component)) { $__componentOriginale37e9f3dc0a4e905b899e873726c6f12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'pencil-square','color' => 'sage','xOn:click' => 'window.location.href = \''.e(route('admin.posts.edit', $post)).'\'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil-square','color' => 'sage','x-on:click' => 'window.location.href = \''.e(route('admin.posts.edit', $post)).'\'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                            Edit
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $attributes = $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $component = $__componentOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginale37e9f3dc0a4e905b899e873726c6f12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => ''.e($post->is_published ? 'eye-slash' : 'eye').'','color' => ''.e($post->is_published ? 'amber' : 'emerald').'','wire:click' => 'togglePublish('.e($post->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ''.e($post->is_published ? 'eye-slash' : 'eye').'','color' => ''.e($post->is_published ? 'amber' : 'emerald').'','wire:click' => 'togglePublish('.e($post->id).')']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                            <?php echo e($post->is_published ? 'Unpublish' : 'Publish'); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $attributes = $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $component = $__componentOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginale37e9f3dc0a4e905b899e873726c6f12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'star','color' => ''.e($post->is_featured ? 'amber' : 'default').'','wire:click' => 'toggleFeatured('.e($post->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'star','color' => ''.e($post->is_featured ? 'amber' : 'default').'','wire:click' => 'toggleFeatured('.e($post->id).')']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                            <?php echo e($post->is_featured ? 'Unfeature' : 'Feature'); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $attributes = $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $component = $__componentOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal9f59fca5dddd9dee16e04c2cebb2302d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f59fca5dddd9dee16e04c2cebb2302d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.separator','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f59fca5dddd9dee16e04c2cebb2302d)): ?>
<?php $attributes = $__attributesOriginal9f59fca5dddd9dee16e04c2cebb2302d; ?>
<?php unset($__attributesOriginal9f59fca5dddd9dee16e04c2cebb2302d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f59fca5dddd9dee16e04c2cebb2302d)): ?>
<?php $component = $__componentOriginal9f59fca5dddd9dee16e04c2cebb2302d; ?>
<?php unset($__componentOriginal9f59fca5dddd9dee16e04c2cebb2302d); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginale37e9f3dc0a4e905b899e873726c6f12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'trash','color' => 'red','wire:confirm' => 'Hapus post '.e($post->title).'?','wire:click' => 'deletePost('.e($post->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','color' => 'red','wire:confirm' => 'Hapus post '.e($post->title).'?','wire:click' => 'deletePost('.e($post->id).')']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                            Hapus
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $attributes = $__attributesOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__attributesOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12)): ?>
<?php $component = $__componentOriginale37e9f3dc0a4e905b899e873726c6f12; ?>
<?php unset($__componentOriginale37e9f3dc0a4e905b899e873726c6f12); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42e2b418137f6d63f42cabcb2c53a7b0)): ?>
<?php $attributes = $__attributesOriginal42e2b418137f6d63f42cabcb2c53a7b0; ?>
<?php unset($__attributesOriginal42e2b418137f6d63f42cabcb2c53a7b0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42e2b418137f6d63f42cabcb2c53a7b0)): ?>
<?php $component = $__componentOriginal42e2b418137f6d63f42cabcb2c53a7b0; ?>
<?php unset($__componentOriginal42e2b418137f6d63f42cabcb2c53a7b0); ?>
<?php endif; ?>
                                </td>
                            </tr>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <tr>
                                <td colspan="7" class="px-2.5 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-stone-400">
                                        <p class="text-xs font-medium">Belum ada post</p>
                                        <a href="<?php echo e(route('admin.posts.create')); ?>" wire:navigate
                                            class="mt-2 text-[11px] font-medium text-sage-600 hover:text-sage-700 dark:text-sage-400">
                                            Buat post pertama →
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="border-t border-stone-100 px-3 py-2.5 text-xs dark:border-stone-800">
                <?php echo e($posts->links('pagination::tailwind')); ?>

            </div>
        </div>
    </div>
</div><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\storage\framework\views/livewire/views/ba7c1eed.blade.php ENDPATH**/ ?>