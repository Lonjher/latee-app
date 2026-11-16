<?php
if (!function_exists('__9431adde924aad56d380a79e01da7b25')):
function __9431adde924aad56d380a79e01da7b25($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php if (!function_exists('__12d3616dadee852f995ddf29238e4f1a')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/12d3616dadee852f995ddf29238e4f1a.php'); require $__blaze->compiledPath.'/12d3616dadee852f995ddf29238e4f1a.php'; } ?>
<?php if (isset($__slots12d3616dadee852f995ddf29238e4f1a)) { $__slotsStack12d3616dadee852f995ddf29238e4f1a[] = $__slots12d3616dadee852f995ddf29238e4f1a; } ?>
<?php if (isset($__attrs12d3616dadee852f995ddf29238e4f1a)) { $__attrsStack12d3616dadee852f995ddf29238e4f1a[] = $__attrs12d3616dadee852f995ddf29238e4f1a; } ?>
<?php $__attrs12d3616dadee852f995ddf29238e4f1a = ['attributes' => $fieldAttributes]; ?>
<?php $__slots12d3616dadee852f995ddf29238e4f1a = []; ?>
<?php $__blaze->pushData($__attrs12d3616dadee852f995ddf29238e4f1a); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('__67c717f7ffae451f4a0ab274aa6e1877')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/67c717f7ffae451f4a0ab274aa6e1877.php'); require $__blaze->compiledPath.'/67c717f7ffae451f4a0ab274aa6e1877.php'; } ?>
<?php if (isset($__slots67c717f7ffae451f4a0ab274aa6e1877)) { $__slotsStack67c717f7ffae451f4a0ab274aa6e1877[] = $__slots67c717f7ffae451f4a0ab274aa6e1877; } ?>
<?php if (isset($__attrs67c717f7ffae451f4a0ab274aa6e1877)) { $__attrsStack67c717f7ffae451f4a0ab274aa6e1877[] = $__attrs67c717f7ffae451f4a0ab274aa6e1877; } ?>
<?php $__attrs67c717f7ffae451f4a0ab274aa6e1877 = ['attributes' => $labelAttributes]; ?>
<?php $__slots67c717f7ffae451f4a0ab274aa6e1877 = []; ?>
<?php $__blaze->pushData($__attrs67c717f7ffae451f4a0ab274aa6e1877); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots67c717f7ffae451f4a0ab274aa6e1877['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots67c717f7ffae451f4a0ab274aa6e1877); ?>
<?php __67c717f7ffae451f4a0ab274aa6e1877($__blaze, $__attrs67c717f7ffae451f4a0ab274aa6e1877, $__slots67c717f7ffae451f4a0ab274aa6e1877, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack67c717f7ffae451f4a0ab274aa6e1877)) { $__slots67c717f7ffae451f4a0ab274aa6e1877 = array_pop($__slotsStack67c717f7ffae451f4a0ab274aa6e1877); } ?>
<?php if (! empty($__attrsStack67c717f7ffae451f4a0ab274aa6e1877)) { $__attrs67c717f7ffae451f4a0ab274aa6e1877 = array_pop($__attrsStack67c717f7ffae451f4a0ab274aa6e1877); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('__8a67767926d0e5867b1c4d20a1fee5fe')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8a67767926d0e5867b1c4d20a1fee5fe.php'); require $__blaze->compiledPath.'/8a67767926d0e5867b1c4d20a1fee5fe.php'; } ?>
<?php if (isset($__slots8a67767926d0e5867b1c4d20a1fee5fe)) { $__slotsStack8a67767926d0e5867b1c4d20a1fee5fe[] = $__slots8a67767926d0e5867b1c4d20a1fee5fe; } ?>
<?php if (isset($__attrs8a67767926d0e5867b1c4d20a1fee5fe)) { $__attrsStack8a67767926d0e5867b1c4d20a1fee5fe[] = $__attrs8a67767926d0e5867b1c4d20a1fee5fe; } ?>
<?php $__attrs8a67767926d0e5867b1c4d20a1fee5fe = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8a67767926d0e5867b1c4d20a1fee5fe = []; ?>
<?php $__blaze->pushData($__attrs8a67767926d0e5867b1c4d20a1fee5fe); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots8a67767926d0e5867b1c4d20a1fee5fe['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots8a67767926d0e5867b1c4d20a1fee5fe); ?>
<?php __8a67767926d0e5867b1c4d20a1fee5fe($__blaze, $__attrs8a67767926d0e5867b1c4d20a1fee5fe, $__slots8a67767926d0e5867b1c4d20a1fee5fe, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8a67767926d0e5867b1c4d20a1fee5fe)) { $__slots8a67767926d0e5867b1c4d20a1fee5fe = array_pop($__slotsStack8a67767926d0e5867b1c4d20a1fee5fe); } ?>
<?php if (! empty($__attrsStack8a67767926d0e5867b1c4d20a1fee5fe)) { $__attrs8a67767926d0e5867b1c4d20a1fee5fe = array_pop($__attrsStack8a67767926d0e5867b1c4d20a1fee5fe); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        [STARTCOMPILEDUNBLAZE:mw72P0WACf]<?php \Livewire\Blaze\Unblaze::storeScope("mw72P0WACf", scope: ['attributes' => $errorAttributes->getAttributes()]) ?><?php \Livewire\Blaze\Unblaze::storeReplacement("mw72P0WACf", "CiAgICAgICAgPGZsdXg6ZXJyb3IgOmF0dHJpYnV0ZXM9Im5ldyBcSWxsdW1pbmF0ZVxWaWV3XENvbXBvbmVudEF0dHJpYnV0ZUJhZygkc2NvcGVbJ2F0dHJpYnV0ZXMnXSkiIC8+CiAgICAgICAg") ?>[ENDCOMPILEDUNBLAZE:mw72P0WACf]

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('__8a67767926d0e5867b1c4d20a1fee5fe')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8a67767926d0e5867b1c4d20a1fee5fe.php'); require $__blaze->compiledPath.'/8a67767926d0e5867b1c4d20a1fee5fe.php'; } ?>
<?php if (isset($__slots8a67767926d0e5867b1c4d20a1fee5fe)) { $__slotsStack8a67767926d0e5867b1c4d20a1fee5fe[] = $__slots8a67767926d0e5867b1c4d20a1fee5fe; } ?>
<?php if (isset($__attrs8a67767926d0e5867b1c4d20a1fee5fe)) { $__attrsStack8a67767926d0e5867b1c4d20a1fee5fe[] = $__attrs8a67767926d0e5867b1c4d20a1fee5fe; } ?>
<?php $__attrs8a67767926d0e5867b1c4d20a1fee5fe = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8a67767926d0e5867b1c4d20a1fee5fe = []; ?>
<?php $__blaze->pushData($__attrs8a67767926d0e5867b1c4d20a1fee5fe); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots8a67767926d0e5867b1c4d20a1fee5fe['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots8a67767926d0e5867b1c4d20a1fee5fe); ?>
<?php __8a67767926d0e5867b1c4d20a1fee5fe($__blaze, $__attrs8a67767926d0e5867b1c4d20a1fee5fe, $__slots8a67767926d0e5867b1c4d20a1fee5fe, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8a67767926d0e5867b1c4d20a1fee5fe)) { $__slots8a67767926d0e5867b1c4d20a1fee5fe = array_pop($__slotsStack8a67767926d0e5867b1c4d20a1fee5fe); } ?>
<?php if (! empty($__attrsStack8a67767926d0e5867b1c4d20a1fee5fe)) { $__attrs8a67767926d0e5867b1c4d20a1fee5fe = array_pop($__attrsStack8a67767926d0e5867b1c4d20a1fee5fe); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots12d3616dadee852f995ddf29238e4f1a['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots12d3616dadee852f995ddf29238e4f1a); ?>
<?php __12d3616dadee852f995ddf29238e4f1a($__blaze, $__attrs12d3616dadee852f995ddf29238e4f1a, $__slots12d3616dadee852f995ddf29238e4f1a, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack12d3616dadee852f995ddf29238e4f1a)) { $__slots12d3616dadee852f995ddf29238e4f1a = array_pop($__slotsStack12d3616dadee852f995ddf29238e4f1a); } ?>
<?php if (! empty($__attrsStack12d3616dadee852f995ddf29238e4f1a)) { $__attrs12d3616dadee852f995ddf29238e4f1a = array_pop($__attrsStack12d3616dadee852f995ddf29238e4f1a); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>