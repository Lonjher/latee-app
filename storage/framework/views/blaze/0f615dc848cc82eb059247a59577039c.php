<?php
if (!function_exists('__0f615dc848cc82eb059247a59577039c')):
function __0f615dc848cc82eb059247a59577039c($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php if (!function_exists('__afd405c0cb409688ebeab2431b98966c')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'); require $__blaze->compiledPath.'/afd405c0cb409688ebeab2431b98966c.php'; } ?>
<?php if (isset($__slotsafd405c0cb409688ebeab2431b98966c)) { $__slotsStackafd405c0cb409688ebeab2431b98966c[] = $__slotsafd405c0cb409688ebeab2431b98966c; } ?>
<?php if (isset($__attrsafd405c0cb409688ebeab2431b98966c)) { $__attrsStackafd405c0cb409688ebeab2431b98966c[] = $__attrsafd405c0cb409688ebeab2431b98966c; } ?>
<?php $__attrsafd405c0cb409688ebeab2431b98966c = ['class' => 'inline-flex','content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slotsafd405c0cb409688ebeab2431b98966c = []; ?>
<?php $__blaze->pushData($__attrsafd405c0cb409688ebeab2431b98966c); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slotsafd405c0cb409688ebeab2431b98966c['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsafd405c0cb409688ebeab2431b98966c); ?>
<?php __afd405c0cb409688ebeab2431b98966c($__blaze, $__attrsafd405c0cb409688ebeab2431b98966c, $__slotsafd405c0cb409688ebeab2431b98966c, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackafd405c0cb409688ebeab2431b98966c)) { $__slotsafd405c0cb409688ebeab2431b98966c = array_pop($__slotsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php if (! empty($__attrsStackafd405c0cb409688ebeab2431b98966c)) { $__attrsafd405c0cb409688ebeab2431b98966c = array_pop($__attrsStackafd405c0cb409688ebeab2431b98966c); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>