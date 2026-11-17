<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

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

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php if (!function_exists('_23ecfbae35ec9651951d132b1be11cdc')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/23ecfbae35ec9651951d132b1be11cdc.php'); require $__blaze->compiledPath.'/23ecfbae35ec9651951d132b1be11cdc.php'; } ?>
<?php if (isset($__slots23ecfbae35ec9651951d132b1be11cdc)) { $__slotsStack23ecfbae35ec9651951d132b1be11cdc[] = $__slots23ecfbae35ec9651951d132b1be11cdc; } ?>
<?php if (isset($__attrs23ecfbae35ec9651951d132b1be11cdc)) { $__attrsStack23ecfbae35ec9651951d132b1be11cdc[] = $__attrs23ecfbae35ec9651951d132b1be11cdc; } ?>
<?php $__attrs23ecfbae35ec9651951d132b1be11cdc = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots23ecfbae35ec9651951d132b1be11cdc = []; ?>
<?php $__blaze->pushData($__attrs23ecfbae35ec9651951d132b1be11cdc); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots23ecfbae35ec9651951d132b1be11cdc['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots23ecfbae35ec9651951d132b1be11cdc['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots23ecfbae35ec9651951d132b1be11cdc); ?>
<?php _23ecfbae35ec9651951d132b1be11cdc($__blaze, $__attrs23ecfbae35ec9651951d132b1be11cdc, $__slots23ecfbae35ec9651951d132b1be11cdc, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack23ecfbae35ec9651951d132b1be11cdc)) { $__slots23ecfbae35ec9651951d132b1be11cdc = array_pop($__slotsStack23ecfbae35ec9651951d132b1be11cdc); } ?>
<?php if (! empty($__attrsStack23ecfbae35ec9651951d132b1be11cdc)) { $__attrs23ecfbae35ec9651951d132b1be11cdc = array_pop($__attrsStack23ecfbae35ec9651951d132b1be11cdc); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php if (!function_exists('_850f6386ce6ce99805c7db7cbeb4c1c8')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/850f6386ce6ce99805c7db7cbeb4c1c8.php'); require $__blaze->compiledPath.'/850f6386ce6ce99805c7db7cbeb4c1c8.php'; } ?>
<?php if (isset($__slots850f6386ce6ce99805c7db7cbeb4c1c8)) { $__slotsStack850f6386ce6ce99805c7db7cbeb4c1c8[] = $__slots850f6386ce6ce99805c7db7cbeb4c1c8; } ?>
<?php if (isset($__attrs850f6386ce6ce99805c7db7cbeb4c1c8)) { $__attrsStack850f6386ce6ce99805c7db7cbeb4c1c8[] = $__attrs850f6386ce6ce99805c7db7cbeb4c1c8; } ?>
<?php $__attrs850f6386ce6ce99805c7db7cbeb4c1c8 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots850f6386ce6ce99805c7db7cbeb4c1c8 = []; ?>
<?php $__blaze->pushData($__attrs850f6386ce6ce99805c7db7cbeb4c1c8); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots850f6386ce6ce99805c7db7cbeb4c1c8['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots850f6386ce6ce99805c7db7cbeb4c1c8['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots850f6386ce6ce99805c7db7cbeb4c1c8); ?>
<?php _850f6386ce6ce99805c7db7cbeb4c1c8($__blaze, $__attrs850f6386ce6ce99805c7db7cbeb4c1c8, $__slots850f6386ce6ce99805c7db7cbeb4c1c8, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack850f6386ce6ce99805c7db7cbeb4c1c8)) { $__slots850f6386ce6ce99805c7db7cbeb4c1c8 = array_pop($__slotsStack850f6386ce6ce99805c7db7cbeb4c1c8); } ?>
<?php if (! empty($__attrsStack850f6386ce6ce99805c7db7cbeb4c1c8)) { $__attrs850f6386ce6ce99805c7db7cbeb4c1c8 = array_pop($__attrsStack850f6386ce6ce99805c7db7cbeb4c1c8); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/components/app-logo.blade.php ENDPATH**/ ?>