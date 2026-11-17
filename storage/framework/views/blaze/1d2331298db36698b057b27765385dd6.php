<?php
if (!function_exists('__1d2331298db36698b057b27765385dd6')):
function __1d2331298db36698b057b27765385dd6($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'label',
];
$label ??= $attributes['label']; unset($attributes['label']);
unset($__defaults);
?>

<optgroup <?php echo e($attributes); ?> label="<?php echo e($label); ?>"><?php echo e($slot); ?></optgroup>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\resources\views/flux/select/group/variants/default.blade.php ENDPATH**/ ?>