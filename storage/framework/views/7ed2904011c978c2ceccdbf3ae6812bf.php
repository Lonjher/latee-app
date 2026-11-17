<?php # [BlazeFolded]:{flux::sidebar.collapse}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/collapse.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::sidebar.header}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/header.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::sidebar.nav}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/nav.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::spacer}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::sidebar}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::sidebar.toggle}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/toggle.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::spacer}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/spacer.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::heading}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::text}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/text.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.radio.group}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/radio/group.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.separator}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/separator.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.item}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/item.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.radio.group}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/radio/group.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.separator}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/separator.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu.item}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/item.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/index.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::dropdown}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/dropdown.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::header}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/header.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::toast}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/toast/index.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::toast.group}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/toast/group.blade.php}:{1789478109} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">

<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>

<body
    class="min-h-screen text-slate-700 dark:text-slate-200 font-sans antialiased selection:bg-brand-600 selection:text-white dark:selection:bg-brand-400 dark:selection:text-slate-950 transition-colors duration-300">

    
    <div class="fixed inset-0 z-0 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" aria-hidden="true"></div>
    <div class="pointer-events-none fixed inset-0 z-0 bg-texture-grid opacity-40 dark:opacity-20" aria-hidden="true"></div>

    
    <div class="relative z-10 flex min-h-screen">

        
        
        
        <?php ob_start(); ?><ui-sidebar
    class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-50 p-3 data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2 data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize max-h-dvh overflow-y-auto overscroll-contain border-e border-slate-200 bg-white/95 backdrop-blur-sm dark:border-slate-800 dark:bg-slate-900/95 transition-[width] duration-300 ease-in-out"
     collapsible="true"          sticky     x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <?php ob_start(); ?>
            <?php ob_start(); ?><div class="flex items-center justify-between gap-2 min-h-10" data-flux-sidebar-header>
    <?php ob_start(); ?>
                <a href="<?php echo e(route('dashboard')); ?>" wire:navigate class="flex items-center gap-3 min-w-0">
                    <div
                        class="w-9 h-9 shrink-0 rounded-full bg-white shadow-md shadow-slate-900/10 flex items-center justify-center overflow-hidden ring-1 ring-slate-200 dark:bg-slate-800 dark:shadow-brand-500/20 dark:ring-slate-700 transition-all duration-300">
                        <img src="<?php echo e(asset('images/logo.webp')); ?>" alt="Logo Annuqayah Latee"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="text-sm font-bold text-slate-900 dark:text-white truncate">Annuqayah Latee</span>
                        <span class="text-[9px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-400 truncate">
                            Sistem Informasi
                        </span>
                    </div>
                </a>
                
                <?php ob_start(); ?><ui-sidebar-toggle class="w-10 h-8 shrink-0 flex items-center justify-center in-data-flux-sidebar-collapsed-desktop:opacity-0 in-data-flux-sidebar-collapsed-desktop:absolute in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:opacity-100" data-flux-sidebar-collapse>
    <ui-tooltip position="right center"  data-flux-tooltip >
        <button type="button" class="size-10 relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none text-sm rounded-full inline-flex bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white in-data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:in-data-flux-sidebar-collapsed-desktop:cursor-w-resize [&amp;[collapsible=&quot;mobile&quot;]]:in-data-flux-sidebar-on-desktop:hidden rtl:rotate-180">
            <svg class="text-slate-500 dark:text-slate-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 3.75V16.25M3.4375 16.25H16.5625C17.08 16.25 17.5 15.83 17.5 15.3125V4.6875C17.5 4.17 17.08 3.75 16.5625 3.75H3.4375C2.92 3.75 2.5 4.17 2.5 4.6875V15.3125C2.5 15.83 2.92 16.25 3.4375 16.25Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>

                    <div popover="manual" class="relative py-2 px-2.5 rounded-md text-xs text-white font-medium bg-zinc-800 dark:bg-zinc-700 dark:border dark:border-white/10 p-0 overflow-visible" data-flux-tooltip-content>
    Toggle sidebar

    </div>
            </ui-tooltip>
</ui-sidebar-toggle>
<?php echo ltrim(ob_get_clean()); ?>
            <?php echo trim(ob_get_clean()); ?>

</div><?php echo ltrim(ob_get_clean()); ?>

            <?php ob_start(); ?><nav class="flex flex-col overflow-visible min-h-auto" data-flux-sidebar-nav>
    <?php ob_start(); ?>
                <?php if (!function_exists('_16c8dad6c68bb4376d79c20f4ef9a110')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'); require $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'; } ?>
<?php if (isset($__slots16c8dad6c68bb4376d79c20f4ef9a110)) { $__slotsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__slots16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php if (isset($__attrs16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__attrs16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = ['heading' => __('Platform'),'class' => 'grid']; ?>
<?php $__slots16c8dad6c68bb4376d79c20f4ef9a110 = []; ?>
<?php $__blaze->pushData($__attrs16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php ob_start(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'home','href' => route('dashboard'),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Dashboard')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                <?php $__slots16c8dad6c68bb4376d79c20f4ef9a110['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php _16c8dad6c68bb4376d79c20f4ef9a110($__blaze, $__attrs16c8dad6c68bb4376d79c20f4ef9a110, $__slots16c8dad6c68bb4376d79c20f4ef9a110, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__slots16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php if (! empty($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php $__blaze->popData(); ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('role', 'admin')): ?>
                    <?php if (!function_exists('_16c8dad6c68bb4376d79c20f4ef9a110')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'); require $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'; } ?>
<?php if (isset($__slots16c8dad6c68bb4376d79c20f4ef9a110)) { $__slotsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__slots16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php if (isset($__attrs16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__attrs16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = ['heading' => __('Administrasi'),'class' => 'grid mt-6']; ?>
<?php $__slots16c8dad6c68bb4376d79c20f4ef9a110 = []; ?>
<?php $__blaze->pushData($__attrs16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php ob_start(); ?>
                        <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'key','href' => e(route('admin.manage-roles')),'current' => request()->is('admin/manage-roles*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                            <?php echo e(__('Peran')); ?>

                        <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                        <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'users','href' => e(route('admin.manage-users')),'current' => request()->is('admin/manage-users*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                            <?php echo e(__('Pengguna')); ?>

                        <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                        <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'cog-6-tooth','href' => '#','current' => request()->routeIs('settings.*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                            <?php echo e(__('Pengaturan')); ?>

                        <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                    <?php $__slots16c8dad6c68bb4376d79c20f4ef9a110['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php _16c8dad6c68bb4376d79c20f4ef9a110($__blaze, $__attrs16c8dad6c68bb4376d79c20f4ef9a110, $__slots16c8dad6c68bb4376d79c20f4ef9a110, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__slots16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php if (! empty($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php $__blaze->popData(); ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if (!function_exists('_16c8dad6c68bb4376d79c20f4ef9a110')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'); require $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'; } ?>
<?php if (isset($__slots16c8dad6c68bb4376d79c20f4ef9a110)) { $__slotsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__slots16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php if (isset($__attrs16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__attrs16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = ['heading' => __('Konten'),'class' => 'grid mt-6']; ?>
<?php $__slots16c8dad6c68bb4376d79c20f4ef9a110 = []; ?>
<?php $__blaze->pushData($__attrs16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php ob_start(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'document-text','href' => e(route('admin.manage-posts')),'current' => request()->routeIs('admin.posts.*') || request()->routeIs('admin.manage-posts'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Posts')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'chat-bubble-left-right','href' => '#','current' => request()->routeIs('quotes.*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Quotes')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'photo','href' => '#','current' => request()->routeIs('galleries.*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Galeri')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'tag','href' => '#','current' => request()->routeIs('categories.*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Kategori')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                <?php $__slots16c8dad6c68bb4376d79c20f4ef9a110['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php _16c8dad6c68bb4376d79c20f4ef9a110($__blaze, $__attrs16c8dad6c68bb4376d79c20f4ef9a110, $__slots16c8dad6c68bb4376d79c20f4ef9a110, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__slots16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php if (! empty($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php $__blaze->popData(); ?>

                <?php if (!function_exists('_16c8dad6c68bb4376d79c20f4ef9a110')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'); require $__blaze->compiledPath.'/16c8dad6c68bb4376d79c20f4ef9a110.php'; } ?>
<?php if (isset($__slots16c8dad6c68bb4376d79c20f4ef9a110)) { $__slotsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__slots16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php if (isset($__attrs16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrsStack16c8dad6c68bb4376d79c20f4ef9a110[] = $__attrs16c8dad6c68bb4376d79c20f4ef9a110; } ?>
<?php $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = ['heading' => __('Interaksi'),'class' => 'grid mt-6']; ?>
<?php $__slots16c8dad6c68bb4376d79c20f4ef9a110 = []; ?>
<?php $__blaze->pushData($__attrs16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php ob_start(); ?>
                    <?php if (!function_exists('_6d058e5948e1bc2583212ed5b2c884b6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'); require $__blaze->compiledPath.'/6d058e5948e1bc2583212ed5b2c884b6.php'; } ?>
<?php if (isset($__slots6d058e5948e1bc2583212ed5b2c884b6)) { $__slotsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__slots6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php if (isset($__attrs6d058e5948e1bc2583212ed5b2c884b6)) { $__attrsStack6d058e5948e1bc2583212ed5b2c884b6[] = $__attrs6d058e5948e1bc2583212ed5b2c884b6; } ?>
<?php $__attrs6d058e5948e1bc2583212ed5b2c884b6 = ['icon' => 'chat-bubble-bottom-center-text','href' => '#','current' => request()->routeIs('comments.*'),'wire:navigate' => true]; ?>
<?php $__slots6d058e5948e1bc2583212ed5b2c884b6 = []; ?>
<?php $__blaze->pushData($__attrs6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Komentar')); ?>

                    <?php $__slots6d058e5948e1bc2583212ed5b2c884b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6d058e5948e1bc2583212ed5b2c884b6); ?>
<?php _6d058e5948e1bc2583212ed5b2c884b6($__blaze, $__attrs6d058e5948e1bc2583212ed5b2c884b6, $__slots6d058e5948e1bc2583212ed5b2c884b6, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__slots6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__slotsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php if (! empty($__attrsStack6d058e5948e1bc2583212ed5b2c884b6)) { $__attrs6d058e5948e1bc2583212ed5b2c884b6 = array_pop($__attrsStack6d058e5948e1bc2583212ed5b2c884b6); } ?>
<?php $__blaze->popData(); ?>
                <?php $__slots16c8dad6c68bb4376d79c20f4ef9a110['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots16c8dad6c68bb4376d79c20f4ef9a110); ?>
<?php _16c8dad6c68bb4376d79c20f4ef9a110($__blaze, $__attrs16c8dad6c68bb4376d79c20f4ef9a110, $__slots16c8dad6c68bb4376d79c20f4ef9a110, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__slots16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__slotsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php if (! empty($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110)) { $__attrs16c8dad6c68bb4376d79c20f4ef9a110 = array_pop($__attrsStack16c8dad6c68bb4376d79c20f4ef9a110); } ?>
<?php $__blaze->popData(); ?>
            <?php echo trim(ob_get_clean()); ?>

</nav>
<?php echo ltrim(ob_get_clean()); ?>

            <?php ob_start(); ?><div class="flex-1" data-flux-spacer></div>
<?php echo ltrim(ob_get_clean()); ?>
        <?php echo trim(ob_get_clean()); ?>

</ui-sidebar>
<?php echo ltrim(ob_get_clean()); ?>

        
        
        
        <div class="flex-1 min-w-0 flex flex-col">

            
            <?php ob_start(); ?><header class="[grid-area:header] z-10 min-h-14 flex items-center px-6 lg:px-8 shrink-0 border-b border-slate-200 bg-white/80 backdrop-blur-md dark:border-slate-800 dark:bg-slate-900/80 transition-colors duration-300" data-flux-header>
            <?php ob_start(); ?>
                <?php ob_start(); ?><button type="button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 w-9 inline-flex -ms-1.5 bg-transparent hover:bg-slate-50 dark:hover:bg-white/5 text-slate-500 hover:text-slate-800 dark:text-slate-400 dark:hover:text-white       shrink-0 lg:hidden" data-flux-button="data-flux-button" x-data="" x-on:click="$dispatch('flux-sidebar-toggle')" aria-label="Toggle sidebar" data-flux-sidebar-toggle="data-flux-sidebar-toggle">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M2 6.75A.75.75 0 0 1 2.75 6h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 6.75Zm0 6.5a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/>
</svg>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
                <h1
                    class="font-display text-lg font-extrabold tracking-tight text-slate-900 dark:text-white truncate transition-colors duration-300 lg:text-xl">
                    <?php echo e($title ?? __('Dashboard')); ?>

                </h1>
                <?php ob_start(); ?><div class="flex-1" data-flux-spacer></div>
<?php echo ltrim(ob_get_clean()); ?>
                <div class="hidden lg:block">
                    <?php if (isset($component)) { $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.desktop-user-menu','data' => ['name' => auth()->user()->full_name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('desktop-user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(auth()->user()->full_name)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $attributes = $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $component = $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
                </div>
                <?php ob_start(); ?><ui-dropdown position="top end" class="lg:hidden" data-flux-dropdown>
    <?php ob_start(); ?>
                    <?php if (!function_exists('_569f0ba2af1e8b26110d2d94c968e08a')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/profile.blade.php', $__blaze->compiledPath.'/569f0ba2af1e8b26110d2d94c968e08a.php'); require $__blaze->compiledPath.'/569f0ba2af1e8b26110d2d94c968e08a.php'; } ?>
<?php $__blaze->pushData(['initials' => auth()->user()->initials(),'iconTrailing' => 'chevron-down']); ?>
<?php _569f0ba2af1e8b26110d2d94c968e08a($__blaze, ['initials' => auth()->user()->initials(),'iconTrailing' => 'chevron-down'], [], ['initials'], ['iconTrailing' => 'icon-trailing'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php ob_start(); ?><ui-menu
    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-xs border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-hidden"
    popover="manual"
    data-flux-menu
>
    <?php ob_start(); ?>
                        <?php ob_start(); ?><ui-menu-radio-group  data-flux-menu-radio-group>
    <?php ob_start(); ?>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::avatar", ['name' => auth()->user()->full_name, 'initials' => auth()->user()->initials()]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_49488b1e24dc95528b2d52bb63b33b92')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/avatar/index.blade.php', $__blaze->compiledPath.'/49488b1e24dc95528b2d52bb63b33b92.php'); require $__blaze->compiledPath.'/49488b1e24dc95528b2d52bb63b33b92.php'; } ?>
<?php $__blaze->pushData(['name' => auth()->user()->full_name,'initials' => auth()->user()->initials()]); ?>
<?php _49488b1e24dc95528b2d52bb63b33b92($__blaze, ['name' => auth()->user()->full_name,'initials' => auth()->user()->initials()], [], ['name', 'initials'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <?php ob_start(); ?><div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-sm [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2 truncate" data-flux-heading><?php ob_start(); ?><?php echo e(auth()->user()->full_name); ?><?php echo trim(ob_get_clean()); ?></div>
<?php echo ltrim(ob_get_clean()); ?>
                                        <?php ob_start(); ?><p class="[:where(&amp;)]:font-normal [:where(&amp;)]:text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 truncate" data-flux-text ><?php ob_start(); ?><?php echo e(auth()->user()->email); ?><?php echo trim(ob_get_clean()); ?></p><?php echo ltrim(ob_get_clean()); ?>
                                    </div>
                                </div>
                            </div>
                        <?php echo trim(ob_get_clean()); ?>

</ui-menu-radio-group>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><div class="-mx-[.3125rem] my-[.3125rem] h-px"  data-flux-menu-separator>
    <div data-orientation="horizontal" role="none" class="border-0 [print-color-adjust:exact] bg-zinc-800/15 dark:bg-white/20 h-px w-full dark:bg-zinc-600!" data-flux-separator></div>
</div>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><ui-menu-radio-group  data-flux-menu-radio-group>
    <?php ob_start(); ?>
                            <?php ob_start(); ?><a href="<?php echo e(route('profile.edit')); ?>" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden select-none rounded-md text-start text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" wire:navigate="">
        <svg class="shrink-0 [:where(&amp;)]:size-5 me-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M13.024 9.25c.47 0 .827-.433.637-.863a4 4 0 0 0-4.094-2.364c-.468.05-.665.576-.43.984l1.08 1.868a.75.75 0 0 0 .649.375h2.158ZM7.84 7.758c-.236-.408-.79-.5-1.068-.12A3.982 3.982 0 0 0 6 10c0 .884.287 1.7.772 2.363.278.38.832.287 1.068-.12l1.078-1.868a.75.75 0 0 0 0-.75L7.839 7.758ZM9.138 12.993c-.235.408-.039.934.43.984a4 4 0 0 0 4.094-2.364c.19-.43-.168-.863-.638-.863h-2.158a.75.75 0 0 0-.65.375l-1.078 1.868Z"/>
  <path fill-rule="evenodd" d="m14.13 4.347.644-1.117a.75.75 0 0 0-1.299-.75l-.644 1.116a6.954 6.954 0 0 0-2.081-.556V1.75a.75.75 0 0 0-1.5 0v1.29a6.954 6.954 0 0 0-2.081.556L6.525 2.48a.75.75 0 1 0-1.3.75l.645 1.117A7.04 7.04 0 0 0 4.347 5.87L3.23 5.225a.75.75 0 1 0-.75 1.3l1.116.644A6.954 6.954 0 0 0 3.04 9.25H1.75a.75.75 0 0 0 0 1.5h1.29c.078.733.27 1.433.556 2.081l-1.116.645a.75.75 0 1 0 .75 1.298l1.117-.644a7.04 7.04 0 0 0 1.523 1.523l-.645 1.117a.75.75 0 1 0 1.3.75l.644-1.116a6.954 6.954 0 0 0 2.081.556v1.29a.75.75 0 0 0 1.5 0v-1.29a6.954 6.954 0 0 0 2.081-.556l.645 1.116a.75.75 0 0 0 1.299-.75l-.645-1.117a7.042 7.042 0 0 0 1.523-1.523l1.117.644a.75.75 0 0 0 .75-1.298l-1.116-.645a6.954 6.954 0 0 0 .556-2.081h1.29a.75.75 0 0 0 0-1.5h-1.29a6.954 6.954 0 0 0-.556-2.081l1.116-.644a.75.75 0 0 0-.75-1.3l-1.117.645a7.04 7.04 0 0 0-1.524-1.523ZM10 4.5a5.475 5.475 0 0 0-2.781.754A5.527 5.527 0 0 0 5.22 7.277 5.475 5.475 0 0 0 4.5 10a5.475 5.475 0 0 0 .752 2.777 5.527 5.527 0 0 0 2.028 2.004c.802.458 1.73.719 2.72.719a5.474 5.474 0 0 0 2.78-.753 5.527 5.527 0 0 0 2.001-2.027c.458-.802.719-1.73.719-2.72a5.475 5.475 0 0 0-.753-2.78 5.528 5.528 0 0 0-2.028-2.002A5.475 5.475 0 0 0 10 4.5Z" clip-rule="evenodd"/>
</svg>

            
    <?php ob_start(); ?>
                                <?php echo e(__('Settings')); ?>

                            <?php echo trim(ob_get_clean()); ?>

    </a>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php echo trim(ob_get_clean()); ?>

</ui-menu-radio-group>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><div class="-mx-[.3125rem] my-[.3125rem] h-px"  data-flux-menu-separator>
    <div data-orientation="horizontal" role="none" class="border-0 [print-color-adjust:exact] bg-zinc-800/15 dark:bg-white/20 h-px w-full dark:bg-zinc-600!" data-flux-separator></div>
</div>
<?php echo ltrim(ob_get_clean()); ?>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                            <?php echo csrf_field(); ?>
                            <?php ob_start(); ?><button type="submit" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden select-none rounded-md text-start text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current w-full cursor-pointer" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" data-test="logout-button">
        <svg class="shrink-0 [:where(&amp;)]:size-5 me-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z" clip-rule="evenodd"/>
</svg>

            
    <?php ob_start(); ?>
                                <?php echo e(__('Log out')); ?>

                            <?php echo trim(ob_get_clean()); ?>

    </button>
<?php echo ltrim(ob_get_clean()); ?>
                        </form>
                    <?php echo trim(ob_get_clean()); ?>

</ui-menu>
<?php echo ltrim(ob_get_clean()); ?>
                <?php echo trim(ob_get_clean()); ?>

</ui-dropdown>
<?php echo ltrim(ob_get_clean()); ?>
            <?php echo trim(ob_get_clean()); ?>

    </header>
<?php echo ltrim(ob_get_clean()); ?>

            
            <main
                class="bg-texture-grid bg-glow-corner flex-1 min-w-0 flex flex-col <?php echo e(request()->routeIs('admin.posts.*') ? 'overflow-hidden' : ''); ?>">
                <?php echo e($slot); ?>

            </main>
        </div>
    </div>

    
    
    
    <script>
        (function () {
            function syncEditorMode() {
                const isEditor = /^\/admin\/posts\/(create|[^\/]+\/edit)\/?$/.test(window.location.pathname);

                // 1. Auto-collapse sidebar saat masuk editor
                const sidebar = document.querySelector('[data-flux-sidebar]');
                if (sidebar && isEditor) {
                    const isCollapsed = sidebar.hasAttribute('data-flux-sidebar-collapsed-desktop');
                    if (!isCollapsed) {
                        window.dispatchEvent(new CustomEvent('flux-sidebar-toggle'));
                    }
                }

                // 2. Toggle overflow-hidden pada main (fallback kalau wire:navigate tidak re-render layout)
                const main = document.querySelector('main');
                if (main) {
                    main.classList.toggle('overflow-hidden', isEditor);
                }
            }

            document.addEventListener('DOMContentLoaded', syncEditorMode);
            document.addEventListener('livewire:navigated', syncEditorMode);
        })();
    </script>

    <?php app("livewire")->forceAssetInjection(); ?><div x-persist="<?php echo e('toast'); ?>">
        <?php ob_start(); ?><ui-toast-group x-data x-on:toast-show.document="$el.showToast($event.detail)" popover="manual" position="bottom end"  wire:ignore>
    <?php ob_start(); ?>
            <?php ob_start(); ?><ui-toast x-data x-on:toast-show.document="! $el.closest('ui-toast-group') && $el.showToast($event.detail)" popover="manual" position="bottom end" wire:ignore>
    <template>
        <div class="group/toast max-w-sm in-[ui-toast-group]:max-w-auto in-[ui-toast-group]:w-xs sm:in-[ui-toast-group]:w-sm" data-variant=""  data-flux-toast-dialog>
            <div class="p-2 flex rounded-xl shadow-lg bg-white border border-zinc-200 border-b-zinc-300/80 dark:bg-zinc-700 dark:border-zinc-600 group-data-invert/toast:bg-zinc-800 group-data-invert/toast:border-zinc-700 dark:group-data-invert/toast:bg-white dark:group-data-invert/toast:border-zinc-200 dark:group-data-invert/toast:border-b-zinc-300/80">
                <div class="flex-1 flex items-start gap-4 has-data-flux-toast-action:gap-2 overflow-hidden">
                    <div class="flex-1 py-1.5 ps-2.5 flex gap-2">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="hidden [[data-flux-toast-dialog][data-variant=success]_&]:block shrink-0 mt-0.5 size-4 text-lime-600 dark:text-lime-400">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm3.844-8.791a.75.75 0 0 0-1.188-.918l-3.7 4.79-1.649-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043l4.25-5.5Z" clip-rule="evenodd" />
                        </svg>

                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="hidden [[data-flux-toast-dialog][data-variant=warning]_&]:block shrink-0 mt-0.5 size-4 text-amber-500 dark:text-amber-400">
                            <path fill-rule="evenodd" d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                        </svg>

                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="hidden [[data-flux-toast-dialog][data-variant=info]_&]:block shrink-0 mt-0.5 size-4 text-cyan-500 dark:text-cyan-400">
                            <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM9 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6.75 8a.75.75 0 0 0 0 1.5h.75v1.75a.75.75 0 0 0 1.5 0v-2.5A.75.75 0 0 0 8.25 8h-1.5Z" clip-rule="evenodd" />
                        </svg>

                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="hidden [[data-flux-toast-dialog][data-variant=danger]_&]:block shrink-0 mt-0.5 size-4 text-rose-500 dark:text-rose-400">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                        </svg>

                        <div>
                            
                            <div class="font-medium text-sm text-zinc-800 dark:text-white group-data-invert/toast:text-white dark:group-data-invert/toast:text-zinc-800 [&:not(:empty)+div]:font-normal [&:not(:empty)+div]:text-zinc-500 [&:not(:empty)+div]:dark:text-zinc-300 group-data-invert/toast:[&:not(:empty)+div]:text-zinc-300 dark:group-data-invert/toast:[&:not(:empty)+div]:text-zinc-500 [&:not(:empty)]:pb-2"><slot name="heading"></slot></div>

                            
                            <div class="font-medium text-sm text-zinc-800 dark:text-white group-data-invert/toast:text-white dark:group-data-invert/toast:text-zinc-800"><slot name="text"></slot></div>

                            
                            <template name="link">
                                <a class="block mt-2 font-medium text-sm text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] underline underline-offset-[6px] hover:decoration-current group-data-invert/toast:text-white group-data-invert/toast:decoration-white/20 dark:group-data-invert/toast:text-zinc-800 dark:group-data-invert/toast:decoration-zinc-800/20"><slot name="text"></slot></a>
                            </template>
                        </div>
                    </div>

                    <div class="flex items-center gap-1">
                        
                        <template name="action">
                            <div class="flex items-center" data-flux-toast-action>
                                <button type="button" data-flux-toast-action-button class="relative inline-flex h-8 items-center justify-center gap-2 whitespace-nowrap rounded-md bg-zinc-800/5 px-3 text-sm font-medium text-zinc-800 hover:bg-zinc-800/10 data-loading:pointer-events-none dark:bg-white/10 dark:text-white dark:hover:bg-white/20 group-data-invert/toast:bg-white/10 group-data-invert/toast:text-white group-data-invert/toast:hover:bg-white/20 dark:group-data-invert/toast:bg-zinc-800/5 dark:group-data-invert/toast:text-zinc-800 dark:group-data-invert/toast:hover:bg-zinc-800/10 [&[data-loading]_[data-flux-toast-action-label]]:opacity-0 [&[data-loading]_[data-flux-loading-indicator]]:opacity-100">
                                    <span class="transition-opacity" data-flux-toast-action-label></span>
                                    <span class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity" data-flux-loading-indicator>
                                        <svg class="size-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 0 1 8-8V0C5.373 0 0 5.373 0 12h4Z"></path>
                                        </svg>
                                    </span>
                                </button>

                                <a data-flux-toast-action-link class="inline-flex h-8 items-center justify-center gap-2 whitespace-nowrap rounded-md bg-zinc-800/5 px-3 text-sm font-medium text-zinc-800 hover:bg-zinc-800/10 dark:bg-white/10 dark:text-white dark:hover:bg-white/20 group-data-invert/toast:bg-white/10 group-data-invert/toast:text-white group-data-invert/toast:hover:bg-white/20 dark:group-data-invert/toast:bg-zinc-800/5 dark:group-data-invert/toast:text-zinc-800 dark:group-data-invert/toast:hover:bg-zinc-800/10">
                                    <span data-flux-toast-action-label></span>
                                </a>
                            </div>
                        </template>

                        
                        <ui-close class="flex items-center">
                            <button type="button" class="inline-flex items-center font-medium justify-center gap-2 truncate disabled:opacity-50 dark:disabled:opacity-75 disabled:cursor-default h-8 text-sm rounded-md w-8 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-400 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white group-data-invert/toast:hover:bg-white/15 group-data-invert/toast:hover:text-white dark:group-data-invert/toast:hover:bg-zinc-800/5 dark:group-data-invert/toast:hover:text-zinc-800" as="button">
                                <div>
                                    <svg class="[:where(&)]:size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
                                    </svg>
                                </div>
                            </button>
                        </ui-close>
                    </div>
                </div>
            </div>
        </div>
    </template>
</ui-toast>
<?php echo ltrim(ob_get_clean()); ?>
        <?php echo trim(ob_get_clean()); ?>

</ui-toast-group>
<?php echo ltrim(ob_get_clean()); ?>
    </div>

    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>

</html>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/layouts/app/sidebar.blade.php ENDPATH**/ ?>