<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
<?php
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;
?>

<div>
    <?php if (isset($component)) { $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Kelola Peran & Izin','leading' => 'Atur peran dan permission yang dapat diakses']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Kelola Peran & Izin','leading' => 'Atur peran dan permission yang dapat diakses']); ?>
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

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
            <div class="flex items-center gap-2.5 rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-xs text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Total Role</div>
                <div class="mt-1 text-xl font-bold text-stone-800 dark:text-stone-100"><?php echo e($this->stats['roles']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Permission</div>
                <div class="mt-1 text-xl font-bold text-sage-600 dark:text-sage-400"><?php echo e($this->stats['permissions']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Role Aktif</div>
                <div class="mt-1 text-xl font-bold text-green-600 dark:text-green-400"><?php echo e($this->stats['roles_with_users']); ?></div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">User Ber-role</div>
                <div class="mt-1 text-xl font-bold text-amber-600 dark:text-amber-400"><?php echo e($this->stats['users_covered']); ?></div>
            </div>
        </div>

        
        <div class="rounded-xl border border-stone-200 bg-white px-3 py-2.5 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <div class="flex w-full gap-2 sm:w-[40%]">
                    <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['size' => 'xs','icon:leading' => 'magnifying-glass','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari role...','class' => 'flex-1']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['size' => 'xs','icon:leading' => 'magnifying-glass','wire:model.live.debounce.300ms' => 'search','placeholder' => 'Cari role...','class' => 'flex-1'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search): ?>
                        <button wire:click="clearFilters" title="Reset"
                            class="grid size-9 shrink-0 place-items-center rounded-lg border border-stone-200 bg-white text-stone-500 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800">
                            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="flex w-full items-center justify-end gap-2 sm:w-[30%] sm:ms-auto">
                    <?php ob_start(); ?><button type="button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-8 text-xs rounded-full gap-1.5 ps-4 pe-4 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20  [--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]  w-full" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" x-data="" x-on:click="$dispatch('add-role-modal')">
        <?php ob_start(); ?>
                        Tambah Role
                    <?php echo trim(ob_get_clean()); ?>

    </button>
<?php echo ltrim(ob_get_clean()); ?>
                </div>
            </div>
        </div>

        
        <div class="overflow-hidden rounded-xl border border-stone-200 bg-white px-3 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex items-center justify-between border-b border-stone-100 py-2 dark:border-stone-800">
                <span class="text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    <?php echo e($roles->total()); ?> role ditemukan
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
                <table x-data x-on:role-updated.window="$wire.$refresh()" class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-stone-200 bg-stone-50 text-[11px] font-semibold uppercase tracking-wider text-stone-500 dark:border-stone-800 dark:bg-stone-800/50 dark:text-stone-400">
                            <th class="w-8 px-2.5 py-1.5 text-center">#</th>
                            <th class="px-2.5 py-1.5">Nama Role</th>
                            <th class="w-24 px-2.5 py-1.5 text-center">User</th>
                            <th class="px-2.5 py-1.5">Permission</th>
                            <th class="w-14 px-2.5 py-1.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 dark:divide-stone-800/60">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <tr class="transition-colors hover:bg-stone-50 dark:hover:bg-stone-800/30">
                                <td class="px-2.5 py-1.5 text-center text-xs text-stone-400 dark:text-stone-600">
                                    <?php echo e($loop->iteration + ($roles->currentPage() - 1) * $roles->perPage()); ?>

                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex items-center gap-2">
                                        <div class="flex size-7 shrink-0 items-center justify-center rounded-full text-[11px] font-bold uppercase <?php echo e($role->role_color); ?>">
                                            <?php echo e(strtoupper(substr($role->name, 0, 2))); ?>

                                        </div>
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-medium text-stone-800 dark:text-stone-200"><?php echo e($role->name); ?></span>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($role->is_protected): ?>
                                                    <span class="shrink-0 rounded-full bg-red-50 px-1.5 py-0.5 text-[9px] font-bold uppercase tracking-wider text-red-600 dark:bg-red-950/40 dark:text-red-400">Protected</span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                            <div class="truncate text-[10px] text-stone-500 dark:text-stone-500">Guard: <?php echo e($role->guard_name); ?></div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5 text-center">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($role->users_count > 0): ?>
                                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-semibold text-green-700 dark:bg-green-950/40 dark:text-green-400"><?php echo e($role->users_count); ?></span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[10px] font-semibold text-stone-500 dark:bg-stone-800 dark:text-stone-400">0</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-[10px] font-semibold text-sage-600 dark:text-sage-400">
                                                <?php echo e($role->permissions_count); ?> / <?php echo e($totalPermissions); ?>

                                            </span>
                                            <div class="h-1 w-16 overflow-hidden rounded-full bg-stone-200 dark:bg-stone-700">
                                                <div class="h-full rounded-full bg-sage-500 transition-all" style="width: <?php echo e($role->perm_pct); ?>%"></div>
                                            </div>
                                        </div>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($role->perm_labels) > 0): ?>
                                            <div class="flex flex-wrap gap-1">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $role->perm_labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                                    <span class="inline-flex items-center rounded bg-stone-100 px-1.5 py-0.5 text-[9px] text-stone-600 dark:bg-stone-800 dark:text-stone-400"><?php echo e($label); ?></span>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($role->perm_more > 0): ?>
                                                    <span class="text-[9px] text-stone-400 dark:text-stone-500">+<?php echo e($role->perm_more); ?></span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        <?php else: ?>
                                            <span class="text-[10px] italic text-stone-400 dark:text-stone-500">Tidak ada permission</span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'pencil-square','color' => 'sage','xOn:click' => '$dispatch(\'edit-role-modal\', { roleId: '.e($role->id).' })']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'pencil-square','color' => 'sage','x-on:click' => '$dispatch(\'edit-role-modal\', { roleId: '.e($role->id).' })']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'document-duplicate','color' => 'blue','wire:click' => 'duplicateRole('.e($role->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'document-duplicate','color' => 'blue','wire:click' => 'duplicateRole('.e($role->id).')']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                            Duplikasi
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-menu.item','data' => ['icon' => 'trash','color' => 'red','disabled' => $role->is_protected || $role->users_count > 0,'wire:confirm' => 'Hapus role '.e($role->name).' secara permanen?','wire:click' => 'deleteRole('.e($role->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'trash','color' => 'red','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($role->is_protected || $role->users_count > 0),'wire:confirm' => 'Hapus role '.e($role->name).' secara permanen?','wire:click' => 'deleteRole('.e($role->id).')']); ?>
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
                                <td colspan="5" class="px-2.5 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-stone-400">
                                        <p class="text-xs font-medium">Tidak ada role ditemukan</p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="border-t border-stone-100 px-3 py-2.5 text-xs dark:border-stone-800">
                <?php echo e($roles->links('pagination::tailwind')); ?>

            </div>
        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.roles.add-role', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4090099601-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.roles.edit-role', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4090099601-1', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
    </div>
</div><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\storage\framework\views/livewire/views/24cecb3b.blade.php ENDPATH**/ ?>