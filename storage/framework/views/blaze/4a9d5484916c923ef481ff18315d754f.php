<?php
if (!function_exists('__4a9d5484916c923ef481ff18315d754f')):
function __4a9d5484916c923ef481ff18315d754f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php if (!function_exists('__afd405c0cb409688ebeab2431b98966c')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'); require $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'; } ?>
<?php if (isset($__slotsafd405c0cb409688ebeab2431b98966c)) { $__slotsStackafd405c0cb409688ebeab2431b98966c[] = $__slotsafd405c0cb409688ebeab2431b98966c; } ?>
<?php if (isset($__attrsafd405c0cb409688ebeab2431b98966c)) { $__attrsStackafd405c0cb409688ebeab2431b98966c[] = $__attrsafd405c0cb409688ebeab2431b98966c; } ?>
<?php $__attrsafd405c0cb409688ebeab2431b98966c = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slotsafd405c0cb409688ebeab2431b98966c = []; ?>
<?php $__blaze->pushData($__attrsafd405c0cb409688ebeab2431b98966c); ?>
<?php ob_start(); ?>
        <button type="button" class="<?php echo e($buttonClasses); ?>">
            <svg class="text-slate-500 dark:text-slate-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 3.75V16.25M3.4375 16.25H16.5625C17.08 16.25 17.5 15.83 17.5 15.3125V4.6875C17.5 4.17 17.08 3.75 16.5625 3.75H3.4375C2.92 3.75 2.5 4.17 2.5 4.6875V15.3125C2.5 15.83 2.92 16.25 3.4375 16.25Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    <?php $__slotsafd405c0cb409688ebeab2431b98966c['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsafd405c0cb409688ebeab2431b98966c); ?>
<?php __afd405c0cb409688ebeab2431b98966c($__blaze, $__attrsafd405c0cb409688ebeab2431b98966c, $__slotsafd405c0cb409688ebeab2431b98966c, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackafd405c0cb409688ebeab2431b98966c)) { $__slotsafd405c0cb409688ebeab2431b98966c = array_pop($__slotsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php if (! empty($__attrsStackafd405c0cb409688ebeab2431b98966c)) { $__attrsafd405c0cb409688ebeab2431b98966c = array_pop($__attrsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php $__blaze->popData(); ?>
</ui-sidebar-toggle>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/sidebar/collapse.blade.php ENDPATH**/ ?>