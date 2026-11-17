<?php
if (!function_exists('__9d05be6c3401ef6039760358c68d2c0d')):
function __9d05be6c3401ef6039760358c68d2c0d($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$errors = $__blaze->errors;
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
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'placeholder' => null,
    'invalid' => null,
    'size' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$placeholder ??= $attributes['placeholder'] ?? $__defaults['placeholder']; unset($attributes['placeholder']);
$invalid ??= $attributes['invalid'] ?? $__defaults['invalid']; unset($attributes['invalid']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$invalid ??= ($name && $errors->has($name));

$classes = Flux::classes()
    ->add('appearance-none') // Strip native arrow — kita pakai chevron custom
    ->add('[:where(&)]:w-full ps-4 pe-11 block')
    ->add('outline-none transition-all cursor-pointer')
    // Pill-shaped, ukuran disesuaikan
    ->add(match ($size) {
        default => 'h-9 py-2 text-sm rounded-full',
        'md'    => 'h-11 py-2.5 text-sm rounded-full',
        'xs'    => 'h-8 py-1.5 text-xs rounded-full',
    })
    // Background — subtle slate, white saat focus
    ->add('bg-slate-50 dark:bg-slate-800')
    ->add('focus:bg-white dark:focus:bg-slate-900')
    ->add('disabled:bg-slate-100 dark:disabled:bg-slate-800/50')
    // Text + placeholder
    ->add('text-slate-900 dark:text-white')
    ->add('disabled:text-slate-400 dark:disabled:text-slate-500')
    ->add('has-[option.placeholder:checked]:text-slate-400 dark:has-[option.placeholder:checked]:text-slate-500')
    // Options dark mode (native dropdown)
    ->add('dark:[&_option]:bg-slate-800 dark:[&_option]:text-white')
    // Shadows
    ->add('disabled:shadow-none dark:shadow-none')
    // Border + focus ring (soft glow, konsisten dengan input)
    ->add($invalid
        ? 'border border-red-400 data-invalid:ring-2 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30'
        : 'border border-slate-200 dark:border-slate-700 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30'
    )
    ;
?>

<div class="relative w-full">
    <select
        <?php echo e($attributes->class($classes)); ?>

        <?php if($invalid): ?> aria-invalid="true" data-invalid <?php endif; ?>
        <?php if(isset($name)): ?> name="<?php echo e($name); ?>" <?php endif; ?>
        <?php if(is_numeric($size)): ?> size="<?php echo e($size); ?>" <?php endif; ?>
        data-flux-control
        data-flux-select-native
        data-flux-group-target
    >
        <?php if ($placeholder): ?>
            <option value="" disabled selected class="placeholder"><?php echo e($placeholder); ?></option>
        <?php endif; ?>

        <?php echo e($slot); ?>

    </select>
</div>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/variants/default.blade.php ENDPATH**/ ?>