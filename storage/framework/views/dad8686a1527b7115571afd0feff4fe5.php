<?php
if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')):
function _dad8686a1527b7115571afd0feff4fe5($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconLeading ??= $attributes->pluck('icon:leading'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>
<?php $maskDynamic ??= $attributes->pluck('mask:dynamic'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'iconVariant' => 'mini',
    'variant' => 'outline',
    'colorTheme' => 'blue',
    'iconTrailing' => null,
    'iconLeading' => null,
    'maskDynamic' => null,
    'expandable' => null,
    'clearable' => null,
    'copyable' => null,
    'viewable' => null,
    'invalid' => null,
    'loading' => null,
    'type' => 'text',
    'mask' => null,
    'size' => null,
    'icon' => null,
    'kbd' => null,
    'as' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$colorTheme ??= $attributes['color-theme'] ?? $attributes['colorTheme'] ?? $__defaults['colorTheme']; unset($attributes['colorTheme'], $attributes['color-theme']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$iconLeading ??= $attributes['icon-leading'] ?? $attributes['iconLeading'] ?? $__defaults['iconLeading']; unset($attributes['iconLeading'], $attributes['icon-leading']);
$maskDynamic ??= $attributes['mask-dynamic'] ?? $attributes['maskDynamic'] ?? $__defaults['maskDynamic']; unset($attributes['maskDynamic'], $attributes['mask-dynamic']);
$expandable ??= $attributes['expandable'] ?? $__defaults['expandable']; unset($attributes['expandable']);
$clearable ??= $attributes['clearable'] ?? $__defaults['clearable']; unset($attributes['clearable']);
$copyable ??= $attributes['copyable'] ?? $__defaults['copyable']; unset($attributes['copyable']);
$viewable ??= $attributes['viewable'] ?? $__defaults['viewable']; unset($attributes['viewable']);
$invalid ??= $attributes['invalid'] ?? $__defaults['invalid']; unset($attributes['invalid']);
$loading ??= $attributes['loading'] ?? $__defaults['loading']; unset($attributes['loading']);
$type ??= $attributes['type'] ?? $__defaults['type']; unset($attributes['type']);
$mask ??= $attributes['mask'] ?? $__defaults['mask']; unset($attributes['mask']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$as ??= $attributes['as'] ?? $__defaults['as']; unset($attributes['as']);
unset($__defaults);
?>

<?php
$inputAttributes = Flux::attributesAfter('input:', $attributes, []);

$wireModel = $attributes->wire('model');
$wireTarget = null;

if ($loading !== false) {
    if ($loading === true) {
        $loading = true;
    } elseif ($wireModel?->directive) {
        $loading = $wireModel->hasModifier('live');
        $wireTarget = $loading ? $wireModel->value() : null;
    } else {
        $wireTarget = $loading;
        $loading = (bool) $loading;
    }
}

$iconLeading ??= $icon;

$hasLeadingIcon = (bool) ($iconLeading);
$countOfTrailingIcons = collect([
    (bool) $iconTrailing,
    (bool) $kbd,
    (bool) $clearable,
    (bool) $copyable,
    (bool) $viewable,
    (bool) $expandable,
])->filter()->count();

// ═══════════════════════════════════════════════════════════════
// ICON SIZE & PADDING — proporsional per input size
// ═══════════════════════════════════════════════════════════════

// Icon leading/trailing: 12 / 16 / 20 px
$iconSizeClasses = match ($size) {
    'xs' => 'size-3!',
    'md' => 'size-5!',
    default => 'size-4!',
};

// Posisi icon dari tepi input
$iconLeadingInset = match ($size) {
    'xs' => 'ps-2.5',
    'md' => 'ps-4',
    default => 'ps-3.5',
};

$trailingInset = match ($size) {
    'xs' => 'pe-2.5',
    'md' => 'pe-4',
    default => 'pe-3.5',
};

// Padding text saat ada leading icon
$iconLeadingTextPadding = match ($size) {
    'xs' => 'ps-7',
    'md' => 'ps-11',
    default => 'ps-9',
};

// Padding kanan per jumlah trailing + ukuran input
$trailingPadding = fn (int $count) => match ($count) {
    0 => match ($size) { 'xs' => 'pe-2.5', 'md' => 'pe-4',   default => 'pe-4' },
    1 => match ($size) { 'xs' => 'pe-7',   'md' => 'pe-11',  default => 'pe-9' },
    2 => match ($size) { 'xs' => 'pe-11',  'md' => 'pe-18',  default => 'pe-14' },
    3 => match ($size) { 'xs' => 'pe-15',  'md' => 'pe-25',  default => 'pe-19' },
    4 => match ($size) { 'xs' => 'pe-19',  'md' => 'pe-32',  default => 'pe-24' },
    5 => match ($size) { 'xs' => 'pe-23',  'md' => 'pe-39',  default => 'pe-29' },
    6 => match ($size) { 'xs' => 'pe-27',  'md' => 'pe-46',  default => 'pe-34' },
    default => 'pe-4',
};

$iconClasses = Flux::classes()
    ->add($iconSizeClasses)
    ->add($attributes->pluck('icon:class'))
    ;

$inputLoadingClasses = Flux::classes()
    ->add($trailingPadding($countOfTrailingIcons + 1))
    ;

$classes = Flux::classes()
    ->add('w-full border block disabled:shadow-none dark:shadow-none')
    ->add('appearance-none')
    ->add('outline-none transition-all')
    ->add('shadow')
    ->add(match ($size) {
        default => 'text-sm rounded-full py-2',
        'md'    => 'text-sm rounded-full py-2.5',
        'xs'    => 'text-xs rounded-full py-1.5',
    })
    ->add(match ($hasLeadingIcon) {
        true  => $iconLeadingTextPadding,
        false => match ($size) { 'xs' => 'ps-3', default => 'ps-4' },
    })
    ->add($trailingPadding($countOfTrailingIcons))
    ->add(match ($variant) {
        'outline' => "bg-white dark:bg-slate-900 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50",
        'filled'  => "bg-slate-100 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900",
    })
    ->add(match ($variant) {
        'outline' => 'text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500',
        'filled'  => 'text-slate-900 dark:text-white placeholder:text-slate-500 dark:placeholder:text-slate-400',
    })
    ->add(match ($variant) {
        'outline' => "border-slate-200 dark:border-slate-700 focus:border-{$colorTheme}-500 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
        'filled'  => "border-0 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
    })
    ->add(match ($variant) {
        'outline' => 'data-invalid:border-red-400 dark:data-invalid:border-red-400 data-invalid:ring-3 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30 disabled:data-invalid:border-red-400',
        'filled'  => 'data-invalid:border-red-400'
    })
    ->add($attributes->pluck('class:input'))
    ;
?>

<?php if ($type === 'file'): ?>
    <?php if (!function_exists('_789850a8d50c113d03d6bda04a524911')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'); require $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'; } ?>
<?php if (isset($__slots789850a8d50c113d03d6bda04a524911)) { $__slotsStack789850a8d50c113d03d6bda04a524911[] = $__slots789850a8d50c113d03d6bda04a524911; } ?>
<?php if (isset($__attrs789850a8d50c113d03d6bda04a524911)) { $__attrsStack789850a8d50c113d03d6bda04a524911[] = $__attrs789850a8d50c113d03d6bda04a524911; } ?>
<?php $__attrs789850a8d50c113d03d6bda04a524911 = ['attributes' => $attributes,'name' => $name]; ?>
<?php $__slots789850a8d50c113d03d6bda04a524911 = []; ?>
<?php $__blaze->pushData($__attrs789850a8d50c113d03d6bda04a524911); ?>
<?php ob_start(); ?>
        <?php if (!function_exists('_13f2e8766a578edea16288647b73626f')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/file.blade.php', $__blaze->compiledPath.'/13f2e8766a578edea16288647b73626f.php'); require $__blaze->compiledPath.'/13f2e8766a578edea16288647b73626f.php'; } ?>
<?php $__blaze->pushData(['attributes' => $attributes,'name' => $name,'size' => $size]); ?>
<?php _13f2e8766a578edea16288647b73626f($__blaze, ['attributes' => $attributes,'name' => $name,'size' => $size], [], ['attributes', 'name', 'size'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__slots789850a8d50c113d03d6bda04a524911['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots789850a8d50c113d03d6bda04a524911); ?>
<?php _789850a8d50c113d03d6bda04a524911($__blaze, $__attrs789850a8d50c113d03d6bda04a524911, $__slots789850a8d50c113d03d6bda04a524911, ['attributes', 'name'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack789850a8d50c113d03d6bda04a524911)) { $__slots789850a8d50c113d03d6bda04a524911 = array_pop($__slotsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php if (! empty($__attrsStack789850a8d50c113d03d6bda04a524911)) { $__attrs789850a8d50c113d03d6bda04a524911 = array_pop($__attrsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php $__blaze->popData(); ?>
<?php elseif ($as !== 'button'): ?>
    <?php if (!function_exists('_789850a8d50c113d03d6bda04a524911')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'); require $__blaze->compiledPath.'/789850a8d50c113d03d6bda04a524911.php'; } ?>
<?php if (isset($__slots789850a8d50c113d03d6bda04a524911)) { $__slotsStack789850a8d50c113d03d6bda04a524911[] = $__slots789850a8d50c113d03d6bda04a524911; } ?>
<?php if (isset($__attrs789850a8d50c113d03d6bda04a524911)) { $__attrsStack789850a8d50c113d03d6bda04a524911[] = $__attrs789850a8d50c113d03d6bda04a524911; } ?>
<?php $__attrs789850a8d50c113d03d6bda04a524911 = ['attributes' => $attributes,'name' => $name]; ?>
<?php $__slots789850a8d50c113d03d6bda04a524911 = []; ?>
<?php $__blaze->pushData($__attrs789850a8d50c113d03d6bda04a524911); ?>
<?php ob_start(); ?>
        <div <?php echo e($attributes->only('class')->class('w-full relative block group/input')); ?> data-flux-input>
            <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
                <div class="pointer-events-none absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 <?php echo e($iconLeadingInset); ?> start-0 transition-colors group-focus-within:text-<?php echo e($colorTheme); ?>-500 dark:group-focus-within:text-<?php echo e($colorTheme); ?>-400">
                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconLeading, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                </div>
            <?php elseif ($iconLeading): ?>
                <div <?php echo e($iconLeading->attributes->class("absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 {$iconLeadingInset} start-0 transition-colors group-focus-within:text-{$colorTheme}-500 dark:group-focus-within:text-{$colorTheme}-400")); ?>>
                    <?php echo e($iconLeading); ?>

                </div>
            <?php endif; ?>

            <input
                type="<?php echo e($type); ?>"
                <?php echo e($attributes->except('class')->class($type === 'file' ? '' : $classes)->merge($inputAttributes->getAttributes())); ?>

                <?php if (isset($name)): ?> name="<?php echo e($name); ?>" <?php endif; ?>
                <?php if ($maskDynamic): ?> x-mask:dynamic="<?php echo e($maskDynamic); ?>" <?php elseif($mask): ?> x-mask="<?php echo e($mask); ?>" <?php endif; ?>
                <?php if (is_numeric($size)): ?> size="<?php echo e($size); ?>" <?php endif; ?>
                <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['name' => $name ?? null, 'invalid' => $invalid ?? false]); ?>
                <?php if ($scope['invalid'] || ($scope['name'] && $errors->has($scope['name']))): ?>
                aria-invalid="true" data-invalid
                <?php endif; ?>
                <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>
                data-flux-control
                data-flux-group-target
                <?php if($loading): ?> wire:loading.class="<?php echo e($inputLoadingClasses); ?>" <?php endif; ?>
                <?php if($loading && $wireTarget): ?> wire:target="<?php echo e($wireTarget); ?>" <?php endif; ?>
            >

            <?php if ($loading || $countOfTrailingIcons > 0): ?>
                <div class="absolute top-0 bottom-0 flex items-center gap-x-1.5 <?php echo e($trailingInset); ?> end-0 text-slate-400 dark:text-slate-500">
                    <?php if ($loading): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['name' => 'loading', 'variant' => $iconVariant, 'class' => $iconClasses, 'wire:loading' => true, 'wire:target' => $wireTarget]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['name' => 'loading','variant' => $iconVariant,'class' => $iconClasses,'wire:loading' => true,'wire:target' => $wireTarget]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['name' => 'loading','variant' => $iconVariant,'class' => $iconClasses,'wire:loading' => true,'wire:target' => $wireTarget], [], ['variant', 'class', 'wire:loading', 'wire:target'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php endif; ?>
                    <?php if ($clearable): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::input.clearable", ['inset' => 'left right', 'size' => $size, 'iconVariant' => $iconVariant]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9f3f3e706aba30c101473c5e95fb35e6')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/clearable.blade.php', $__blaze->compiledPath.'/9f3f3e706aba30c101473c5e95fb35e6.php'); require $__blaze->compiledPath.'/9f3f3e706aba30c101473c5e95fb35e6.php'; } ?>
<?php $__blaze->pushData(['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant]); ?>
<?php _9f3f3e706aba30c101473c5e95fb35e6($__blaze, ['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant], [], ['size', 'iconVariant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php endif; ?>
                    <?php if ($kbd): ?>
                        <span class="pointer-events-none last:pe-2"><?php echo e($kbd); ?></span>
                    <?php endif; ?>
                    <?php if ($expandable): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::input.expandable", ['inset' => 'left right', 'size' => $size, 'iconVariant' => $iconVariant]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_b1ba936aa3f17b6ff93020dfb9994666')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/expandable.blade.php', $__blaze->compiledPath.'/b1ba936aa3f17b6ff93020dfb9994666.php'); require $__blaze->compiledPath.'/b1ba936aa3f17b6ff93020dfb9994666.php'; } ?>
<?php $__blaze->pushData(['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant]); ?>
<?php _b1ba936aa3f17b6ff93020dfb9994666($__blaze, ['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant], [], ['size', 'iconVariant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php endif; ?>
                    <?php if ($copyable): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::input.copyable", ['inset' => 'left right', 'size' => $size, 'iconVariant' => $iconVariant]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_43d785e5e1d0669b338cbcf0e63f66ef')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/copyable.blade.php', $__blaze->compiledPath.'/43d785e5e1d0669b338cbcf0e63f66ef.php'); require $__blaze->compiledPath.'/43d785e5e1d0669b338cbcf0e63f66ef.php'; } ?>
<?php $__blaze->pushData(['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant]); ?>
<?php _43d785e5e1d0669b338cbcf0e63f66ef($__blaze, ['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant], [], ['size', 'iconVariant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php endif; ?>
                    <?php if ($viewable): ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::input.viewable", ['inset' => 'left right', 'size' => $size, 'iconVariant' => $iconVariant]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_2ee58c407bc48bc2f6708174ed95ff16')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/viewable.blade.php', $__blaze->compiledPath.'/2ee58c407bc48bc2f6708174ed95ff16.php'); require $__blaze->compiledPath.'/2ee58c407bc48bc2f6708174ed95ff16.php'; } ?>
<?php $__blaze->pushData(['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant]); ?>
<?php _2ee58c407bc48bc2f6708174ed95ff16($__blaze, ['inset' => 'left right','size' => $size,'iconVariant' => $iconVariant], [], ['size', 'iconVariant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php endif; ?>
                    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
                        <?php
                            $trailingIconClasses = clone $iconClasses;
                            $trailingIconClasses->add('text-slate-400 dark:text-slate-500 pointer-events-none');
                        ?>
                        <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $trailingIconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                    <?php elseif ($iconTrailing): ?>
                        <?php echo e($iconTrailing); ?>

                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php $__slots789850a8d50c113d03d6bda04a524911['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots789850a8d50c113d03d6bda04a524911); ?>
<?php _789850a8d50c113d03d6bda04a524911($__blaze, $__attrs789850a8d50c113d03d6bda04a524911, $__slots789850a8d50c113d03d6bda04a524911, ['attributes', 'name'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack789850a8d50c113d03d6bda04a524911)) { $__slots789850a8d50c113d03d6bda04a524911 = array_pop($__slotsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php if (! empty($__attrsStack789850a8d50c113d03d6bda04a524911)) { $__attrs789850a8d50c113d03d6bda04a524911 = array_pop($__attrsStack789850a8d50c113d03d6bda04a524911); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <button <?php echo e($attributes->merge(['type' => 'button'])->class([$classes, 'w-full relative flex'])); ?>>
        <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 <?php echo e($iconLeadingInset); ?> start-0">
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconLeading, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            </div>
        <?php elseif ($iconLeading): ?>
            <div <?php echo e($iconLeading->attributes->class("absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 {$iconLeadingInset} start-0")); ?>>
                <?php echo e($iconLeading); ?>

            </div>
        <?php endif; ?>

        <?php if ($attributes->has('placeholder')): ?>
            <div class="block self-center text-start flex-1 font-medium text-slate-400 dark:text-slate-500">
                <?php echo e($attributes->get('placeholder')); ?>

            </div>
        <?php else: ?>
            <div class="text-start self-center flex-1 font-medium text-slate-800 dark:text-white">
                <?php echo e($slot); ?>

            </div>
        <?php endif; ?>

        <?php if ($kbd): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 <?php echo e($trailingInset); ?> end-0">
                <?php echo e($kbd); ?>

            </div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 <?php echo e($trailingInset); ?> end-0">
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            </div>
        <?php elseif ($iconTrailing): ?>
            <div <?php echo e($iconTrailing->attributes->class("absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 {$trailingInset} end-0")); ?>>
                <?php echo e($iconTrailing); ?>

            </div>
        <?php endif; ?>
    </button>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php ENDPATH**/ ?>