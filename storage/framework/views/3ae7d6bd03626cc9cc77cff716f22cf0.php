<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => null,
    'color' => 'default',
    'disabled' => false,
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
    'icon' => null,
    'color' => 'default',
    'disabled' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
$colorClasses = match ($color) {
    'sage'    => 'text-sage-600 dark:text-sage-400 hover:bg-sage-50 dark:hover:bg-sage-950/30',
    'amber'   => 'text-amber-600 dark:text-amber-400 hover:bg-amber-50 dark:hover:bg-amber-950/40',
    'red'     => 'text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/40',
    'blue'    => 'text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-950/40',
    'emerald' => 'text-emerald-600 dark:text-emerald-400 hover:bg-emerald-50 dark:hover:bg-emerald-950/40',
    default   => 'text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-800/70',
};

$iconColorClasses = match ($color) {
    'sage'    => 'text-sage-500',
    'amber'   => 'text-amber-500',
    'red'     => 'text-red-400',
    'blue'    => 'text-blue-500',
    'emerald' => 'text-emerald-500',
    default   => 'text-stone-400',
};
?>

<button
    type="button"
    <?php if($disabled): echo 'disabled'; endif; ?>
    <?php echo e($attributes->class([
        'flex w-full cursor-pointer items-center gap-2 rounded-full px-2.5 py-1.5 text-left text-xs font-medium transition-colors',
        $colorClasses,
        'disabled:cursor-not-allowed disabled:opacity-40 disabled:hover:bg-transparent' => $disabled,
    ])); ?>

>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($icon): ?>
        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['name' => $icon, 'class' => 'size-3.5 shrink-0 '.e($iconColorClasses)]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['name' => $icon,'class' => 'size-3.5 shrink-0 '.e($iconColorClasses)]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['name' => $icon,'class' => 'size-3.5 shrink-0 '.e($iconColorClasses)], [], ['name'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php echo e($content ?? $slot); ?>

</button>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/components/action-menu/item.blade.php ENDPATH**/ ?>