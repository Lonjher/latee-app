<?php
if (!function_exists('_569f0ba2af1e8b26110d2d94c968e08a')):
function _569f0ba2af1e8b26110d2d94c968e08a($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>

<?php
$__defaults = [
    'iconVariant' => 'micro',
    'iconTrailing' => null,
    'initials' => null,
    'chevron' => true,
    'circle' => null,
    'avatar' => null,
    'name' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$initials ??= $attributes['initials'] ?? $__defaults['initials']; unset($attributes['initials']);
$chevron ??= $attributes['chevron'] ?? $__defaults['chevron']; unset($attributes['chevron']);
$circle ??= $attributes['circle'] ?? $__defaults['circle']; unset($attributes['circle']);
$avatar ??= $attributes['avatar'] ?? $__defaults['avatar']; unset($attributes['avatar']);
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
unset($__defaults);
?>

<?php
$iconTrailing = $iconTrailing ?? ($chevron ? 'chevron-down' : null);

// When using the outline icon variant, we need to size it down to match the default icon sizes...
$iconClasses = Flux::classes('text-zinc-400 dark:text-white/80 group-hover:text-zinc-800 dark:group-hover:text-white')
    ->add($iconVariant === 'outline' ? 'size-4' : '');

$classes = Flux::classes()
    ->add('group flex items-center')
    ->add('rounded-lg has-data-[circle=true]:rounded-full')
    ->add('[ui-dropdown>&]:w-full') // Without this, the "name" won't get truncated in a sidebar dropdown...
    ->add('p-1 hover:bg-zinc-800/5 dark:hover:bg-white/15')
    ;
?>

<button type="button" <?php echo e($attributes->class($classes)); ?> data-flux-profile>
    <div class="shrink-0">
        <?php if ($avatar instanceof \Illuminate\View\ComponentSlot): ?>
            <?php echo e($avatar); ?>

        <?php else: ?>
            <?php $avatarAttributes = Flux::attributesAfter('avatar:', $attributes, ['src' => $avatar, 'size' => 'sm', 'circle' => $circle, 'name' => $name, 'initials' => $initials]); ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::avatar", ['attributes' => $avatarAttributes]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_49488b1e24dc95528b2d52bb63b33b92')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/avatar/index.blade.php', $__blaze->compiledPath.'/49488b1e24dc95528b2d52bb63b33b92.php'); require $__blaze->compiledPath.'/49488b1e24dc95528b2d52bb63b33b92.php'; } ?>
<?php $__blaze->pushData(['attributes' => $avatarAttributes]); ?>
<?php _49488b1e24dc95528b2d52bb63b33b92($__blaze, ['attributes' => $avatarAttributes], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php endif; ?>
    </div>

    <?php if ($name): ?>
        <span class="mx-2 text-sm text-zinc-500 dark:text-white/80 group-hover:text-zinc-800 dark:group-hover:text-white font-medium truncate">
            <?php echo e($name); ?>

        </span>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <div class="shrink-0 ms-auto size-8 flex justify-center items-center">
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        </div>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>
</button>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/profile.blade.php ENDPATH**/ ?>