<?php
if (!function_exists('_2ee58c407bc48bc2f6708174ed95ff16')):
function _2ee58c407bc48bc2f6708174ed95ff16($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$iconSize = match ($size) {
    'xs' => 'size-3!',
    'sm' => 'size-3.5!',
    default => 'size-4!',
};

$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php if (!function_exists('_d302d6175dd972f8c8accc0bf93e5cd7')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php', $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'); require $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'; } ?>
<?php if (isset($__slotsd302d6175dd972f8c8accc0bf93e5cd7)) { $__slotsStackd302d6175dd972f8c8accc0bf93e5cd7[] = $__slotsd302d6175dd972f8c8accc0bf93e5cd7; } ?>
<?php if (isset($__attrsd302d6175dd972f8c8accc0bf93e5cd7)) { $__attrsStackd302d6175dd972f8c8accc0bf93e5cd7[] = $__attrsd302d6175dd972f8c8accc0bf93e5cd7; } ?>
<?php $__attrsd302d6175dd972f8c8accc0bf93e5cd7 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slotsd302d6175dd972f8c8accc0bf93e5cd7 = []; ?>
<?php $__blaze->pushData($__attrsd302d6175dd972f8c8accc0bf93e5cd7); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_28e8cb3efecb7d0b179f8aff8d82e457')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/28e8cb3efecb7d0b179f8aff8d82e457.php'); require $__blaze->compiledPath.'/28e8cb3efecb7d0b179f8aff8d82e457.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => e($iconSize).' hidden [[data-viewable-open]>&]:block']); ?>
<?php _28e8cb3efecb7d0b179f8aff8d82e457($__blaze, ['variant' => $iconVariant,'class' => e($iconSize).' hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php if (!function_exists('_d32d322e56087c336905af061cd81c7d')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/d32d322e56087c336905af061cd81c7d.php'); require $__blaze->compiledPath.'/d32d322e56087c336905af061cd81c7d.php'; } ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => e($iconSize).' block [[data-viewable-open]>&]:hidden']); ?>
<?php _d32d322e56087c336905af061cd81c7d($__blaze, ['variant' => $iconVariant,'class' => e($iconSize).' block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slotsd302d6175dd972f8c8accc0bf93e5cd7['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsd302d6175dd972f8c8accc0bf93e5cd7); ?>
<?php _d302d6175dd972f8c8accc0bf93e5cd7($__blaze, $__attrsd302d6175dd972f8c8accc0bf93e5cd7, $__slotsd302d6175dd972f8c8accc0bf93e5cd7, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd302d6175dd972f8c8accc0bf93e5cd7)) { $__slotsd302d6175dd972f8c8accc0bf93e5cd7 = array_pop($__slotsStackd302d6175dd972f8c8accc0bf93e5cd7); } ?>
<?php if (! empty($__attrsStackd302d6175dd972f8c8accc0bf93e5cd7)) { $__attrsd302d6175dd972f8c8accc0bf93e5cd7 = array_pop($__attrsStackd302d6175dd972f8c8accc0bf93e5cd7); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/viewable.blade.php ENDPATH**/ ?>