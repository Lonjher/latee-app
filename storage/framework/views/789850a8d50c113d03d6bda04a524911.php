<?php
if (!function_exists('_789850a8d50c113d03d6bda04a524911')):
function _789850a8d50c113d03d6bda04a524911($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php if (!function_exists('_7f67cd1ff95db85007cc64daf2e49e79')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/7f67cd1ff95db85007cc64daf2e49e79.php'); require $__blaze->compiledPath.'/7f67cd1ff95db85007cc64daf2e49e79.php'; } ?>
<?php if (isset($__slots7f67cd1ff95db85007cc64daf2e49e79)) { $__slotsStack7f67cd1ff95db85007cc64daf2e49e79[] = $__slots7f67cd1ff95db85007cc64daf2e49e79; } ?>
<?php if (isset($__attrs7f67cd1ff95db85007cc64daf2e49e79)) { $__attrsStack7f67cd1ff95db85007cc64daf2e49e79[] = $__attrs7f67cd1ff95db85007cc64daf2e49e79; } ?>
<?php $__attrs7f67cd1ff95db85007cc64daf2e49e79 = ['attributes' => $fieldAttributes]; ?>
<?php $__slots7f67cd1ff95db85007cc64daf2e49e79 = []; ?>
<?php $__blaze->pushData($__attrs7f67cd1ff95db85007cc64daf2e49e79); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('_67d61cfe546f8ce2b8a8b07ed3d71597')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/67d61cfe546f8ce2b8a8b07ed3d71597.php'); require $__blaze->compiledPath.'/67d61cfe546f8ce2b8a8b07ed3d71597.php'; } ?>
<?php if (isset($__slots67d61cfe546f8ce2b8a8b07ed3d71597)) { $__slotsStack67d61cfe546f8ce2b8a8b07ed3d71597[] = $__slots67d61cfe546f8ce2b8a8b07ed3d71597; } ?>
<?php if (isset($__attrs67d61cfe546f8ce2b8a8b07ed3d71597)) { $__attrsStack67d61cfe546f8ce2b8a8b07ed3d71597[] = $__attrs67d61cfe546f8ce2b8a8b07ed3d71597; } ?>
<?php $__attrs67d61cfe546f8ce2b8a8b07ed3d71597 = ['attributes' => $labelAttributes]; ?>
<?php $__slots67d61cfe546f8ce2b8a8b07ed3d71597 = []; ?>
<?php $__blaze->pushData($__attrs67d61cfe546f8ce2b8a8b07ed3d71597); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots67d61cfe546f8ce2b8a8b07ed3d71597['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots67d61cfe546f8ce2b8a8b07ed3d71597); ?>
<?php _67d61cfe546f8ce2b8a8b07ed3d71597($__blaze, $__attrs67d61cfe546f8ce2b8a8b07ed3d71597, $__slots67d61cfe546f8ce2b8a8b07ed3d71597, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack67d61cfe546f8ce2b8a8b07ed3d71597)) { $__slots67d61cfe546f8ce2b8a8b07ed3d71597 = array_pop($__slotsStack67d61cfe546f8ce2b8a8b07ed3d71597); } ?>
<?php if (! empty($__attrsStack67d61cfe546f8ce2b8a8b07ed3d71597)) { $__attrs67d61cfe546f8ce2b8a8b07ed3d71597 = array_pop($__attrsStack67d61cfe546f8ce2b8a8b07ed3d71597); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('_cba533eaf109acbe1e5eb66333dd8173')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/cba533eaf109acbe1e5eb66333dd8173.php'); require $__blaze->compiledPath.'/cba533eaf109acbe1e5eb66333dd8173.php'; } ?>
<?php if (isset($__slotscba533eaf109acbe1e5eb66333dd8173)) { $__slotsStackcba533eaf109acbe1e5eb66333dd8173[] = $__slotscba533eaf109acbe1e5eb66333dd8173; } ?>
<?php if (isset($__attrscba533eaf109acbe1e5eb66333dd8173)) { $__attrsStackcba533eaf109acbe1e5eb66333dd8173[] = $__attrscba533eaf109acbe1e5eb66333dd8173; } ?>
<?php $__attrscba533eaf109acbe1e5eb66333dd8173 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotscba533eaf109acbe1e5eb66333dd8173 = []; ?>
<?php $__blaze->pushData($__attrscba533eaf109acbe1e5eb66333dd8173); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slotscba533eaf109acbe1e5eb66333dd8173['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotscba533eaf109acbe1e5eb66333dd8173); ?>
<?php _cba533eaf109acbe1e5eb66333dd8173($__blaze, $__attrscba533eaf109acbe1e5eb66333dd8173, $__slotscba533eaf109acbe1e5eb66333dd8173, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcba533eaf109acbe1e5eb66333dd8173)) { $__slotscba533eaf109acbe1e5eb66333dd8173 = array_pop($__slotsStackcba533eaf109acbe1e5eb66333dd8173); } ?>
<?php if (! empty($__attrsStackcba533eaf109acbe1e5eb66333dd8173)) { $__attrscba533eaf109acbe1e5eb66333dd8173 = array_pop($__attrsStackcba533eaf109acbe1e5eb66333dd8173); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php if (!function_exists('_bb73e46baf384d43fcfbdb2becc2acab')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/bb73e46baf384d43fcfbdb2becc2acab.php'); require $__blaze->compiledPath.'/bb73e46baf384d43fcfbdb2becc2acab.php'; } ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _bb73e46baf384d43fcfbdb2becc2acab($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('_cba533eaf109acbe1e5eb66333dd8173')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/cba533eaf109acbe1e5eb66333dd8173.php'); require $__blaze->compiledPath.'/cba533eaf109acbe1e5eb66333dd8173.php'; } ?>
<?php if (isset($__slotscba533eaf109acbe1e5eb66333dd8173)) { $__slotsStackcba533eaf109acbe1e5eb66333dd8173[] = $__slotscba533eaf109acbe1e5eb66333dd8173; } ?>
<?php if (isset($__attrscba533eaf109acbe1e5eb66333dd8173)) { $__attrsStackcba533eaf109acbe1e5eb66333dd8173[] = $__attrscba533eaf109acbe1e5eb66333dd8173; } ?>
<?php $__attrscba533eaf109acbe1e5eb66333dd8173 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotscba533eaf109acbe1e5eb66333dd8173 = []; ?>
<?php $__blaze->pushData($__attrscba533eaf109acbe1e5eb66333dd8173); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slotscba533eaf109acbe1e5eb66333dd8173['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotscba533eaf109acbe1e5eb66333dd8173); ?>
<?php _cba533eaf109acbe1e5eb66333dd8173($__blaze, $__attrscba533eaf109acbe1e5eb66333dd8173, $__slotscba533eaf109acbe1e5eb66333dd8173, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcba533eaf109acbe1e5eb66333dd8173)) { $__slotscba533eaf109acbe1e5eb66333dd8173 = array_pop($__slotsStackcba533eaf109acbe1e5eb66333dd8173); } ?>
<?php if (! empty($__attrsStackcba533eaf109acbe1e5eb66333dd8173)) { $__attrscba533eaf109acbe1e5eb66333dd8173 = array_pop($__attrsStackcba533eaf109acbe1e5eb66333dd8173); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots7f67cd1ff95db85007cc64daf2e49e79['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots7f67cd1ff95db85007cc64daf2e49e79); ?>
<?php _7f67cd1ff95db85007cc64daf2e49e79($__blaze, $__attrs7f67cd1ff95db85007cc64daf2e49e79, $__slots7f67cd1ff95db85007cc64daf2e49e79, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack7f67cd1ff95db85007cc64daf2e49e79)) { $__slots7f67cd1ff95db85007cc64daf2e49e79 = array_pop($__slotsStack7f67cd1ff95db85007cc64daf2e49e79); } ?>
<?php if (! empty($__attrsStack7f67cd1ff95db85007cc64daf2e49e79)) { $__attrs7f67cd1ff95db85007cc64daf2e49e79 = array_pop($__attrsStack7f67cd1ff95db85007cc64daf2e49e79); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>