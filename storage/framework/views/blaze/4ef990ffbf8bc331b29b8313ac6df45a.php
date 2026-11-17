<?php
if (!function_exists('__4ef990ffbf8bc331b29b8313ac6df45a')):
function __4ef990ffbf8bc331b29b8313ac6df45a($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'collapsible' => null,
    'stashable' => null, // @deprecated
    'sticky' => null,
];
$collapsible ??= $attributes['collapsible'] ?? $__defaults['collapsible']; unset($attributes['collapsible']);
$stashable ??= $attributes['stashable'] ?? $__defaults['stashable']; unset($attributes['stashable']);
$sticky ??= $attributes['sticky'] ?? $__defaults['sticky']; unset($attributes['sticky']);
unset($__defaults);
?>

<?php
$collapsibleOnMobile = $stashable || $collapsible === 'mobile' || $collapsible === true;

if ($stashable && $collapsible === null) {
    $collapsible = 'mobile';
}

$classes = Flux::classes('[grid-area:sidebar]')
    // ✅ Lebar: w-64 (256px) → w-56 (224px), padding dirapatkan
    ->add('z-1 flex flex-col gap-4 [:where(&)]:w-50 p-3')
    ->add('data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2')
    ->add('data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize');

if ($sticky) {
    $attributes = $attributes->merge([
        'class' => 'max-h-dvh overflow-y-auto overscroll-contain',
    ]);
}

if ($collapsibleOnMobile) {
    $attributes = $attributes->merge([
        'x-init' => '$el.classList.add(\'transition-transform\')',
    ])->class([
        'max-lg:data-flux-sidebar-cloak:hidden',
        'data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:-translate-x-full data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:rtl:translate-x-full',
        'z-20! data-flux-sidebar-on-mobile:start-0! data-flux-sidebar-on-mobile:fixed! data-flux-sidebar-on-mobile:top-0! data-flux-sidebar-on-mobile:min-h-dvh! data-flux-sidebar-on-mobile:max-h-dvh!'
    ]);
}
?>

<?php if ($collapsibleOnMobile): ?>
    <?php if (!function_exists('__95e5812e643c52c07ed6af58aedfa45c')) { $__blaze->compile('D:\PUJASERA\latee-app\resources\views/flux/sidebar/backdrop.blade.php', $__blaze->compiledPath.'/95e5812e643c52c07ed6af58aedfa45c.php'); require $__blaze->compiledPath.'/95e5812e643c52c07ed6af58aedfa45c.php'; } ?>
<?php $__blaze->pushData([]); ?>
<?php __95e5812e643c52c07ed6af58aedfa45c($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php endif; ?>

<ui-sidebar
    <?php echo e($attributes->class($classes)); ?>

    <?php if($collapsible): ?> collapsible="<?php echo e($collapsible === 'mobile' ? 'mobile' : 'true'); ?>" <?php endif; ?>
    <?php if($stashable): ?> stashable <?php endif; ?>
    <?php if($sticky): ?> sticky <?php endif; ?>
    x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <?php echo e($slot); ?>

</ui-sidebar>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\resources\views/flux/sidebar/index.blade.php ENDPATH**/ ?>