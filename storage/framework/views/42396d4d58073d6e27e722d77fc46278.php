<?php
if (!function_exists('_42396d4d58073d6e27e722d77fc46278')):
function _42396d4d58073d6e27e722d77fc46278($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'resize' => 'vertical',
    'invalid' => null,
    'rows' => 4,
    'size' => 'sm',
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$resize ??= $attributes['resize'] ?? $__defaults['resize']; unset($attributes['resize']);
$invalid ??= $attributes['invalid'] ?? $__defaults['invalid']; unset($attributes['invalid']);
$rows ??= $attributes['rows'] ?? $__defaults['rows']; unset($attributes['rows']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$classes = Flux::classes()
    ->add('block w-full')
    ->add('appearance-none outline-none transition-all')
    ->add('disabled:shadow-none dark:shadow-none')
    // SHADOW: tipis (Tailwind 4 — shadow-xs = 0 1px 2px rgba(0,0,0,.05))
    ->add('shadow-xs')
    // Size (default sm)
    ->add(match ($size) {
        default => 'text-sm px-4 py-2.5 rounded-2xl',
        'xs'    => 'text-xs px-3.5 py-2 rounded-xl',
        'base'  => 'text-base px-4 py-3 rounded-2xl',
    })
    // Resize control
    ->add($resize ? match ($resize) {
        'none'       => 'resize-none',
        'both'       => 'resize',
        'horizontal' => 'resize-x',
        'vertical'   => 'resize-y',
        default      => 'resize-y',
    } : 'resize-none')
    ->add($rows === 'auto' ? 'field-sizing-content' : '')
    // Background — slate → white on hover/focus
    // HOVER: bg ikut "menyala" sedikit ke arah white saat pointer di atasnya
    ->add('bg-slate-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50')
    // Text + placeholder
    ->add('text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500')
    // Border default + HOVER: border memanjat satu level lebih gelap
    ->add('border border-slate-200 dark:border-slate-700')
    ->add('hover:border-slate-300 dark:hover:border-slate-600')
    // Focus state (soft blue glow)
    ->add('focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30')
    // Invalid state (aktif saat atribut data-invalid ada)
    ->add('data-invalid:border-red-400 data-invalid:ring-2 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30')
    ;
?>

<?php if (!function_exists('_789850a8d50c113d03d6bda04a524911')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'); require $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'; } ?>
<?php if (isset($__slots789850a8d50c113d03d6bda04a524911)) { $__slotsStack789850a8d50c113d03d6bda04a524911[] = $__slots789850a8d50c113d03d6bda04a524911; } ?>
<?php if (isset($__attrs789850a8d50c113d03d6bda04a524911)) { $__attrsStack789850a8d50c113d03d6bda04a524911[] = $__attrs789850a8d50c113d03d6bda04a524911; } ?>
<?php $__attrs789850a8d50c113d03d6bda04a524911 = ['attributes' => $attributes]; ?>
<?php $__slots789850a8d50c113d03d6bda04a524911 = []; ?>
<?php $__blaze->pushData($__attrs789850a8d50c113d03d6bda04a524911); ?>
<?php ob_start(); ?>
    <textarea
        <?php echo e($attributes->class($classes)); ?>

        rows="<?php echo e($rows); ?>"
        <?php if(isset($name)): ?> name="<?php echo e($name); ?>" <?php endif; ?>
        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['name' => $name ?? null, 'invalid' => $invalid ?? false]); ?>
        <?php if ($scope['invalid'] || ($scope['name'] && $errors->has($scope['name']))): ?>
        aria-invalid="true" data-invalid
        <?php endif; ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>
        data-flux-control
        data-flux-textarea
    ><?php echo e($slot); ?></textarea>
<?php $__slots789850a8d50c113d03d6bda04a524911['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots789850a8d50c113d03d6bda04a524911); ?>
<?php _789850a8d50c113d03d6bda04a524911($__blaze, $__attrs789850a8d50c113d03d6bda04a524911, $__slots789850a8d50c113d03d6bda04a524911, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack789850a8d50c113d03d6bda04a524911)) { $__slots789850a8d50c113d03d6bda04a524911 = array_pop($__slotsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php if (! empty($__attrsStack789850a8d50c113d03d6bda04a524911)) { $__attrs789850a8d50c113d03d6bda04a524911 = array_pop($__attrsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/textarea.blade.php ENDPATH**/ ?>