<?php
if (!function_exists('_afd405c0cb409688ebeab2431b98966c')):
function _afd405c0cb409688ebeab2431b98966c($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$__defaults = [
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('_40a07610d385bb7f8f4343b7e7af88b3')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'); require $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'; } ?>
<?php if (isset($__slots40a07610d385bb7f8f4343b7e7af88b3)) { $__slotsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__slots40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php if (isset($__attrs40a07610d385bb7f8f4343b7e7af88b3)) { $__attrsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__attrs40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php $__attrs40a07610d385bb7f8f4343b7e7af88b3 = ['kbd' => $kbd]; ?>
<?php $__slots40a07610d385bb7f8f4343b7e7af88b3 = []; ?>
<?php $__blaze->pushData($__attrs40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots40a07610d385bb7f8f4343b7e7af88b3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php _40a07610d385bb7f8f4343b7e7af88b3($__blaze, $__attrs40a07610d385bb7f8f4343b7e7af88b3, $__slots40a07610d385bb7f8f4343b7e7af88b3, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__slots40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__slotsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php if (! empty($__attrsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__attrs40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__attrsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php if (!function_exists('_40a07610d385bb7f8f4343b7e7af88b3')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'); require $__blaze->compiledPath.'/40a07610d385bb7f8f4343b7e7af88b3.php'; } ?>
<?php if (isset($__slots40a07610d385bb7f8f4343b7e7af88b3)) { $__slotsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__slots40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php if (isset($__attrs40a07610d385bb7f8f4343b7e7af88b3)) { $__attrsStack40a07610d385bb7f8f4343b7e7af88b3[] = $__attrs40a07610d385bb7f8f4343b7e7af88b3; } ?>
<?php $__attrs40a07610d385bb7f8f4343b7e7af88b3 = ['kbd' => $kbd]; ?>
<?php $__slots40a07610d385bb7f8f4343b7e7af88b3 = []; ?>
<?php $__blaze->pushData($__attrs40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots40a07610d385bb7f8f4343b7e7af88b3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots40a07610d385bb7f8f4343b7e7af88b3); ?>
<?php _40a07610d385bb7f8f4343b7e7af88b3($__blaze, $__attrs40a07610d385bb7f8f4343b7e7af88b3, $__slots40a07610d385bb7f8f4343b7e7af88b3, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__slots40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__slotsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php if (! empty($__attrsStack40a07610d385bb7f8f4343b7e7af88b3)) { $__attrs40a07610d385bb7f8f4343b7e7af88b3 = array_pop($__attrsStack40a07610d385bb7f8f4343b7e7af88b3); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php ENDPATH**/ ?>