<?php # [BlazeFolded]:{flux::icon.chevron-down}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-down.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::icon.chevron-right}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-right.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::menu}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/index.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::dropdown}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/dropdown.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::icon.chevron-down}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-down.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::icon.chevron-right}:{D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-right.blade.php}:{1789478109} ?>
<?php
if (!function_exists('_2bd1dfe61d3c85cfc7ec7fdc2763df9e')):
function _2bd1dfe61d3c85cfc7ec7fdc2763df9e($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'expandable' => false,
    'expanded' => true,
    'heading' => null,
    'icon' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$expandable ??= $attributes['expandable'] ?? $__defaults['expandable']; unset($attributes['expandable']);
$expanded ??= $attributes['expanded'] ?? $__defaults['expanded']; unset($attributes['expanded']);
$heading ??= $attributes['heading'] ?? $__defaults['heading']; unset($attributes['heading']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php if ($expandable && $heading): ?>
    <?php if ($icon): ?>
        <ui-disclosure <?php echo e($attributes->class('group/disclosure in-data-flux-sidebar-collapsed-desktop:hidden')); ?> <?php if($expanded === true): ?> open <?php endif; ?> data-flux-sidebar-group>
            
            <button type="button" class="border-1 border-transparent w-full min-w-0 h-8 in-data-flux-sidebar-on-mobile:h-10 flex items-center group/disclosure-button my-px rounded-full hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors duration-200">
                <div class="px-3">
                    <?php if (is_string($icon) && $icon !== ''): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => 'size-4']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_71ade577ce2296bc0cfcaedfd1f31c34')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'); require $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'; } ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => 'size-4']); ?>
<?php _71ade577ce2296bc0cfcaedfd1f31c34($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => 'size-4'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php else: ?>
                        <?php echo e($icon); ?>

                    <?php endif; ?>
                </div>

                <span class="flex-1 text-left rtl:text-right text-sm font-medium truncate"><?php echo e($heading); ?></span>

                <div class="ps-3 pe-2.5">
                    <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-3! hidden group-data-open/disclosure-button:block" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-3! block group-data-open/disclosure-button:hidden rtl:rotate-180" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                </div>
            </button>

            <div class="relative min-w-0 hidden data-open:block ps-7" <?php if($expanded === true): ?> data-open <?php endif; ?>>
                <div class="absolute inset-y-[3px] w-px bg-slate-200 dark:bg-slate-700 start-0 ms-5"></div>

                <div class="flex flex-col">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </ui-disclosure>

        <?php ob_start(); ?><ui-dropdown position="right start" hover="hover" class="in-data-flux-sidebar-on-mobile:hidden not-in-data-flux-sidebar-collapsed-desktop:hidden" data-flux-sidebar-group-dropdown="data-flux-sidebar-group-dropdown" data-flux-dropdown>
    <?php ob_start(); ?>
            <button type="button" class="border-1 border-transparent w-full px-3 in-data-flux-menu:px-2 h-8 flex gap-3 items-center group/disclosure-button my-px rounded-full in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-menu:w-10 in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-menu:justify-center hover:bg-slate-100 dark:hover:bg-slate-800/60 in-data-flux-menu:hover:bg-slate-50 dark:in-data-flux-menu:hover:bg-slate-700 text-slate-500 in-data-flux-menu:text-slate-800 hover:text-slate-900 dark:text-slate-400 in-data-flux-menu:dark:text-white dark:hover:text-white">
                <?php if ($icon): ?>
                    <div class="relative">
                        <?php if (is_string($icon) && $icon !== ''): ?>
                            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => 'in-data-flux-menu:text-slate-400 in-data-flux-menu:dark:text-slate-500 in-data-flux-menu:[[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current size-4']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_71ade577ce2296bc0cfcaedfd1f31c34')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'); require $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'; } ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => 'in-data-flux-menu:text-slate-400 in-data-flux-menu:dark:text-slate-500 in-data-flux-menu:[[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current size-4']); ?>
<?php _71ade577ce2296bc0cfcaedfd1f31c34($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => 'in-data-flux-menu:text-slate-400 in-data-flux-menu:dark:text-slate-500 in-data-flux-menu:[[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current size-4'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                        <?php else: ?>
                            <?php echo e($icon); ?>

                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <span class="hidden in-data-flux-menu:block flex-1 text-start text-sm font-medium leading-none text-slate-800 dark:text-white"><?php echo e($heading); ?></span>

                <div class="hidden in-data-flux-menu:block">
                    <?php if (!function_exists('_2f2ee3d2a921e94b37ccaeaf04ee9395')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-right.blade.php', $__blaze->compiledPath.'/2f2ee3d2a921e94b37ccaeaf04ee9395.php'); require $__blaze->compiledPath.'/2f2ee3d2a921e94b37ccaeaf04ee9395.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current rtl:hidden']); ?>
<?php _2f2ee3d2a921e94b37ccaeaf04ee9395($__blaze, ['variant' => $iconVariant,'class' => 'ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current rtl:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php if (!function_exists('_01c4217e852ef7a13b17507b6a9f795c')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/chevron-left.blade.php', $__blaze->compiledPath.'/01c4217e852ef7a13b17507b6a9f795c.php'); require $__blaze->compiledPath.'/01c4217e852ef7a13b17507b6a9f795c.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current hidden rtl:inline']); ?>
<?php _01c4217e852ef7a13b17507b6a9f795c($__blaze, ['variant' => $iconVariant,'class' => 'ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current hidden rtl:inline'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                </div>
            </button>

            <?php ob_start(); ?><ui-menu
    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-xs border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-hidden"
    popover="manual"
    data-flux-menu
>
    <?php ob_start(); ?>
                <?php if (!function_exists('_28744762f06cc86444b588907823a5d4')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/menu/group.blade.php', $__blaze->compiledPath.'/28744762f06cc86444b588907823a5d4.php'); require $__blaze->compiledPath.'/28744762f06cc86444b588907823a5d4.php'; } ?>
<?php if (isset($__slots28744762f06cc86444b588907823a5d4)) { $__slotsStack28744762f06cc86444b588907823a5d4[] = $__slots28744762f06cc86444b588907823a5d4; } ?>
<?php if (isset($__attrs28744762f06cc86444b588907823a5d4)) { $__attrsStack28744762f06cc86444b588907823a5d4[] = $__attrs28744762f06cc86444b588907823a5d4; } ?>
<?php $__attrs28744762f06cc86444b588907823a5d4 = ['heading' => $heading]; ?>
<?php $__slots28744762f06cc86444b588907823a5d4 = []; ?>
<?php $__blaze->pushData($__attrs28744762f06cc86444b588907823a5d4); ?>
<?php ob_start(); ?>
                    <?php echo e($slot); ?>

                <?php $__slots28744762f06cc86444b588907823a5d4['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots28744762f06cc86444b588907823a5d4); ?>
<?php _28744762f06cc86444b588907823a5d4($__blaze, $__attrs28744762f06cc86444b588907823a5d4, $__slots28744762f06cc86444b588907823a5d4, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack28744762f06cc86444b588907823a5d4)) { $__slots28744762f06cc86444b588907823a5d4 = array_pop($__slotsStack28744762f06cc86444b588907823a5d4); } ?>
<?php if (! empty($__attrsStack28744762f06cc86444b588907823a5d4)) { $__attrs28744762f06cc86444b588907823a5d4 = array_pop($__attrsStack28744762f06cc86444b588907823a5d4); } ?>
<?php $__blaze->popData(); ?>
            <?php echo trim(ob_get_clean()); ?>

</ui-menu>
<?php echo ltrim(ob_get_clean()); ?>
        <?php echo trim(ob_get_clean()); ?>

</ui-dropdown>
<?php echo ltrim(ob_get_clean()); ?>
    <?php else: ?>
        <ui-disclosure <?php echo e($attributes->class('group/disclosure in-data-flux-sidebar-collapsed-desktop:hidden')); ?> <?php if($expanded === true): ?> open <?php endif; ?> data-flux-sidebar-group>
            <button type="button" class="border-1 border-transparent w-full min-w-0 h-8 in-data-flux-sidebar-on-mobile:h-10 flex items-center group/disclosure-button my-px rounded-full hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors duration-200">
                <div class="ps-3.5 pe-3.5">
                    <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-3! hidden group-data-open/disclosure-button:block" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-3! block group-data-open/disclosure-button:hidden rtl:rotate-180" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                </div>

                <span class="text-sm font-medium truncate"><?php echo e($heading); ?></span>
            </button>

            <div class="relative min-w-0 hidden data-open:block ps-7" <?php if($expanded === true): ?> data-open <?php endif; ?>>
                <div class="absolute inset-y-[3px] w-px bg-slate-200 dark:bg-slate-700 start-0 ms-5"></div>

                <div class="flex flex-col">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </ui-disclosure>
    <?php endif; ?>

<?php elseif ($heading): ?>
    <div <?php echo e($attributes->class('flex flex-col in-data-flux-sidebar-collapsed-desktop:hidden')); ?> data-flux-sidebar-group>
        <div class="px-3 py-2 text-[11px] uppercase tracking-wider text-slate-500 dark:text-slate-500 font-semibold leading-none truncate"><?php echo e($heading); ?></div>

        <div class="flex flex-col min-w-0">
            <?php echo e($slot); ?>

        </div>
    </div>
<?php else: ?>
    <div <?php echo e($attributes->class('flex flex-col in-data-flux-sidebar-collapsed-desktop:hidden')); ?> data-flux-sidebar-group>
        <?php echo e($slot); ?>

    </div>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\resources\views/flux/sidebar/group.blade.php ENDPATH**/ ?>