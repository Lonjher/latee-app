<?php
if (!function_exists('__1ec4a3c1876e577cd081d52c0af58d79')):
function __1ec4a3c1876e577cd081d52c0af58d79($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => __('Toggle sidebar'),
    'inset' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$inset ??= $attributes['inset'] ?? $__defaults['inset']; unset($attributes['inset']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('w-10 h-8 shrink-0 flex items-center justify-center')
    ->add('in-data-flux-sidebar-collapsed-desktop:opacity-0')
    ->add('in-data-flux-sidebar-collapsed-desktop:absolute')
    ->add('in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:opacity-100')
    ->add($inset ? Flux::applyInset($inset, top: '-mt-2.5', right: '-me-2.5', bottom: '-mb-2.5', left: '-ms-2.5') : '')
    ;

$buttonClasses = Flux::classes()
    ->add('size-10 relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none text-sm rounded-full inline-flex bg-transparent hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white')
    ->add('in-data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:in-data-flux-sidebar-collapsed-desktop:cursor-w-resize')
    ->add('[&[collapsible="mobile"]]:in-data-flux-sidebar-on-desktop:hidden')
    ->add('rtl:rotate-180')
    ;
?>

<ui-sidebar-toggle <?php echo e($attributes->class($classes)); ?> data-flux-sidebar-collapse>
    <?php if (!function_exists('__1b2eb841117b8cc5078e151868314f4f')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/1b2eb841117b8cc5078e151868314f4f.php'); require $__blaze->compiledPath.'/1b2eb841117b8cc5078e151868314f4f.php'; } ?>
<?php if (isset($__slots1b2eb841117b8cc5078e151868314f4f)) { $__slotsStack1b2eb841117b8cc5078e151868314f4f[] = $__slots1b2eb841117b8cc5078e151868314f4f; } ?>
<?php if (isset($__attrs1b2eb841117b8cc5078e151868314f4f)) { $__attrsStack1b2eb841117b8cc5078e151868314f4f[] = $__attrs1b2eb841117b8cc5078e151868314f4f; } ?>
<?php $__attrs1b2eb841117b8cc5078e151868314f4f = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots1b2eb841117b8cc5078e151868314f4f = []; ?>
<?php $__blaze->pushData($__attrs1b2eb841117b8cc5078e151868314f4f); ?>
<?php ob_start(); ?>
        <button type="button" class="<?php echo e($buttonClasses); ?>">
            <svg class="text-slate-500 dark:text-slate-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 3.75V16.25M3.4375 16.25H16.5625C17.08 16.25 17.5 15.83 17.5 15.3125V4.6875C17.5 4.17 17.08 3.75 16.5625 3.75H3.4375C2.92 3.75 2.5 4.17 2.5 4.6875V15.3125C2.5 15.83 2.92 16.25 3.4375 16.25Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    <?php $__slots1b2eb841117b8cc5078e151868314f4f['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots1b2eb841117b8cc5078e151868314f4f); ?>
<?php __1b2eb841117b8cc5078e151868314f4f($__blaze, $__attrs1b2eb841117b8cc5078e151868314f4f, $__slots1b2eb841117b8cc5078e151868314f4f, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack1b2eb841117b8cc5078e151868314f4f)) { $__slots1b2eb841117b8cc5078e151868314f4f = array_pop($__slotsStack1b2eb841117b8cc5078e151868314f4f); } ?>
<?php if (! empty($__attrsStack1b2eb841117b8cc5078e151868314f4f)) { $__attrs1b2eb841117b8cc5078e151868314f4f = array_pop($__attrsStack1b2eb841117b8cc5078e151868314f4f); } ?>
<?php $__blaze->popData(); ?>
</ui-sidebar-toggle>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\resources\views/flux/sidebar/collapse.blade.php ENDPATH**/ ?>