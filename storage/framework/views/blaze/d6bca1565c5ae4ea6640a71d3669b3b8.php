<?php
if (!function_exists('__d6bca1565c5ae4ea6640a71d3669b3b8')):
function __d6bca1565c5ae4ea6640a71d3669b3b8($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__livewire = $__env->shared('__livewire');
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
    'dismissible' => null,
    'escapable' => null,
    'position' => null,
    'closable' => null,
    'trigger' => null,
    'variant' => null,
    'scroll' => null,
    'flyout' => null,
    'name' => null,
    'size' => 'xl',
];
$dismissible ??= $attributes['dismissible'] ?? $__defaults['dismissible']; unset($attributes['dismissible']);
$escapable ??= $attributes['escapable'] ?? $__defaults['escapable']; unset($attributes['escapable']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$closable ??= $attributes['closable'] ?? $__defaults['closable']; unset($attributes['closable']);
$trigger ??= $attributes['trigger'] ?? $__defaults['trigger']; unset($attributes['trigger']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$scroll ??= $attributes['scroll'] ?? $__defaults['scroll']; unset($attributes['scroll']);
$flyout ??= $attributes['flyout'] ?? $__defaults['flyout']; unset($attributes['flyout']);
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$__livewire = $__env->shared('__livewire');

if ($variant === 'flyout') {
    $flyout = true;
    $variant = null;
}

$closable ??= $variant === 'bare' ? false : true;
$overflow = $scroll === 'body' && ! $flyout;

$sizeClass = match ($size) {
    'sm'   => '[:where(&)]:max-w-sm',
    'md'   => '[:where(&)]:max-w-md',
    'lg'   => '[:where(&)]:max-w-lg',
    'xl'   => '[:where(&)]:max-w-xl',
    '2xl'  => '[:where(&)]:max-w-2xl',
    '3xl'  => '[:where(&)]:max-w-3xl',
    '4xl'  => '[:where(&)]:max-w-4xl',
    '5xl'  => '[:where(&)]:max-w-5xl',
    'full' => '[:where(&)]:max-w-[calc(100vw-1.5rem)]',
    default => '[:where(&)]:max-w-xl',
};

/**
 * Base card styling — dipakai di default & overflow variant.
 * shadow-none! = paksa override Flux CSS / UA stylesheet.
 */
$cardStyles = 'bg-white dark:bg-stone-900 '
    . 'shadow-none! '
    . 'rounded-3xl overflow-hidden';

if ($flyout) {
    $classes = Flux::classes()
        ->add(match ($variant) {
            default => match($position) {
                'bottom' => 'fixed m-0 p-5 sm:p-6 w-full overflow-y-auto mt-auto [--flux-flyout-translate:translateY(50px)] border-t',
                'left'   => 'fixed m-0 p-5 sm:p-6 max-h-dvh min-h-dvh md:[:where(&)]:min-w-[25rem] overflow-y-auto mr-auto [--flux-flyout-translate:translateX(-50px)] border-e rtl:mr-0 rtl:ml-auto rtl:[--flux-flyout-translate:translateX(50px)]',
                default  => 'fixed m-0 p-5 sm:p-6 max-h-dvh min-h-dvh md:[:where(&)]:min-w-[25rem] overflow-y-auto ml-auto [--flux-flyout-translate:translateX(50px)] border-s rtl:ml-0 rtl:mr-auto rtl:[--flux-flyout-translate:translateX(-50px)]',
            },
            'floating' => match($position) {
                'bottom' => 'fixed m-2 p-5 sm:p-6 w-[calc(100%-1rem)] overflow-y-auto mt-auto [--flux-flyout-translate:translateY(50px)]',
                'left'   => 'fixed m-2 p-5 sm:p-6 max-h-[calc(100dvh-1rem)] min-h-[calc(100dvh-1rem)] md:[:where(&)]:min-w-[25rem] overflow-y-auto mr-auto [--flux-flyout-translate:translateX(-50px)] rtl:mr-0 rtl:ml-auto rtl:[--flux-flyout-translate:translateX(50px)]',
                default  => 'fixed m-2 p-5 sm:p-6 max-h-[calc(100dvh-1rem)] min-h-[calc(100dvh-1rem)] md:[:where(&)]:min-w-[25rem] overflow-y-auto ml-auto [--flux-flyout-translate:translateX(50px)] rtl:ml-0 rtl:mr-auto rtl:[--flux-flyout-translate:translateX(-50px)]',
            },
            'bare' => '',
        })
        ->add(match ($variant) {
            default    => 'bg-white dark:bg-stone-900 border-transparent dark:border-stone-800',
            'floating' => "{$cardStyles}",
            'bare'     => 'bg-transparent',
        });
} elseif ($overflow) {
    $classes = Flux::classes();

    $contentClasses = Flux::classes()
        ->add('relative')
        ->add(match ($variant) {
            default => "p-5 sm:p-6 {$sizeClass} min-w-xs",
            'bare' => '',
        })
        ->add(match ($variant) {
            default => $cardStyles,
            'bare' => 'bg-transparent',
        });
} else {
    $classes = Flux::classes()
        ->add(match ($variant) {
            default => "p-5 sm:p-6 {$sizeClass} min-w-xs",
            'bare' => '',
        })
        ->add(match ($variant) {
            default => $cardStyles,
            'bare' => 'bg-transparent',
        });
}

if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);
    $wireModel->directive .= '.self';
    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}

if ($attributes['@close'] ?? null) {
    $attributes['wire:close'] = $attributes['@close'];
    unset($attributes['@close']);
}

if ($attributes['@cancel'] ?? null) {
    $attributes['wire:cancel'] = $attributes['@cancel'];
    unset($attributes['@cancel']);
}

if ($dismissible === false) {
    $attributes = $attributes->merge(['disable-click-outside' => '']);
}

if ($escapable === false) {
    $attributes = $attributes->merge(['disable-escape' => '']);
}

[ $contentAttributes, $attributes ] = Flux::splitAttributes($attributes, ['autofocus', 'class', 'style']);
[ $dialogAttributes, $attributes ] = Flux::splitAttributes($attributes, ['wire:close', 'x-on:close', 'wire:cancel', 'x-on:cancel']);

if (! $overflow) {
    $dialogAttributes = $dialogAttributes->merge($contentAttributes->getAttributes());
}
?>

<ui-modal <?php echo e($attributes); ?> data-flux-modal>
    <?php if ($trigger): ?>
        <?php echo e($trigger); ?>

    <?php endif; ?>

    <dialog
        wire:ignore.self
        <?php echo e($dialogAttributes->class($classes)); ?>

        <?php if ($name): ?> data-modal="<?php echo e($name); ?>" <?php endif; ?>
        <?php if ($flyout): ?> data-flux-flyout <?php endif; ?>
        <?php if ($overflow): ?> data-flux-modal-overflow <?php endif; ?>
        [STARTCOMPILEDUNBLAZE:AtEiklcOsZ]<?php \Livewire\Blaze\Unblaze::storeScope("AtEiklcOsZ", scope: ['name' => $name]) ?><?php \Livewire\Blaze\Unblaze::storeReplacement("AtEiklcOsZ", "CiAgICAgICAgeC1kYXRhPSJmbHV4TW9kYWwoQGpzKCRzY29wZVsnbmFtZSddKSwgQGpzKGlzc2V0KCRfX2xpdmV3aXJlKSA/ICRfX2xpdmV3aXJlLT5nZXRJZCgpIDogbnVsbCkpIgogICAgICAgIA==") ?>[ENDCOMPILEDUNBLAZE:AtEiklcOsZ]
        x-on:modal-show.document="handleShow($event)"
        x-on:modal-close.document="handleClose($event)"
    >
        <?php if ($overflow): ?>
            <div class="flex min-h-full items-center justify-center p-3 sm:p-4">
                <div <?php echo e($contentAttributes->class($contentClasses)); ?> data-flux-modal-content>
                    <?php echo e($slot); ?>


                    <?php if ($closable): ?>
                        <div class="absolute top-0 end-0 z-10 mt-3 me-3">
                            <?php if (!function_exists('__544b9eac45039429e030c2fcc70e4bb9')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/close.blade.php', $__blaze->compiledPath.'/544b9eac45039429e030c2fcc70e4bb9.php'); require $__blaze->compiledPath.'/544b9eac45039429e030c2fcc70e4bb9.php'; } ?>
<?php if (isset($__slots544b9eac45039429e030c2fcc70e4bb9)) { $__slotsStack544b9eac45039429e030c2fcc70e4bb9[] = $__slots544b9eac45039429e030c2fcc70e4bb9; } ?>
<?php if (isset($__attrs544b9eac45039429e030c2fcc70e4bb9)) { $__attrsStack544b9eac45039429e030c2fcc70e4bb9[] = $__attrs544b9eac45039429e030c2fcc70e4bb9; } ?>
<?php $__attrs544b9eac45039429e030c2fcc70e4bb9 = []; ?>
<?php $__slots544b9eac45039429e030c2fcc70e4bb9 = []; ?>
<?php $__blaze->pushData($__attrs544b9eac45039429e030c2fcc70e4bb9); ?>
<?php ob_start(); ?>
                                <?php if (!function_exists('__d302d6175dd972f8c8accc0bf93e5cd7')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php', $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'); require $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'; } ?>
<?php $__blaze->pushData(['variant' => 'ghost','icon' => 'x-mark','size' => 'sm','ariaLabel' => e(__('Close modal')),'class' => 'rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!']); ?>
<?php __d302d6175dd972f8c8accc0bf93e5cd7($__blaze, ['variant' => 'ghost','icon' => 'x-mark','size' => 'sm','ariaLabel' => e(__('Close modal')),'class' => 'rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!'], [], [], ['ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                            <?php $__slots544b9eac45039429e030c2fcc70e4bb9['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots544b9eac45039429e030c2fcc70e4bb9); ?>
<?php __544b9eac45039429e030c2fcc70e4bb9($__blaze, $__attrs544b9eac45039429e030c2fcc70e4bb9, $__slots544b9eac45039429e030c2fcc70e4bb9, [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack544b9eac45039429e030c2fcc70e4bb9)) { $__slots544b9eac45039429e030c2fcc70e4bb9 = array_pop($__slotsStack544b9eac45039429e030c2fcc70e4bb9); } ?>
<?php if (! empty($__attrsStack544b9eac45039429e030c2fcc70e4bb9)) { $__attrs544b9eac45039429e030c2fcc70e4bb9 = array_pop($__attrsStack544b9eac45039429e030c2fcc70e4bb9); } ?>
<?php $__blaze->popData(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <?php echo e($slot); ?>


            <?php if ($closable): ?>
                <div class="absolute top-0 end-0 z-10 mt-3 me-3">
                    <?php if (!function_exists('__544b9eac45039429e030c2fcc70e4bb9')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/close.blade.php', $__blaze->compiledPath.'/544b9eac45039429e030c2fcc70e4bb9.php'); require $__blaze->compiledPath.'/544b9eac45039429e030c2fcc70e4bb9.php'; } ?>
<?php if (isset($__slots544b9eac45039429e030c2fcc70e4bb9)) { $__slotsStack544b9eac45039429e030c2fcc70e4bb9[] = $__slots544b9eac45039429e030c2fcc70e4bb9; } ?>
<?php if (isset($__attrs544b9eac45039429e030c2fcc70e4bb9)) { $__attrsStack544b9eac45039429e030c2fcc70e4bb9[] = $__attrs544b9eac45039429e030c2fcc70e4bb9; } ?>
<?php $__attrs544b9eac45039429e030c2fcc70e4bb9 = []; ?>
<?php $__slots544b9eac45039429e030c2fcc70e4bb9 = []; ?>
<?php $__blaze->pushData($__attrs544b9eac45039429e030c2fcc70e4bb9); ?>
<?php ob_start(); ?>
                        <?php if (!function_exists('__d302d6175dd972f8c8accc0bf93e5cd7')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php', $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'); require $__blaze->compiledPath.'/d302d6175dd972f8c8accc0bf93e5cd7.php'; } ?>
<?php $__blaze->pushData(['variant' => 'ghost','icon' => 'x-mark','size' => 'sm','ariaLabel' => e(__('Close modal')),'class' => 'rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!']); ?>
<?php __d302d6175dd972f8c8accc0bf93e5cd7($__blaze, ['variant' => 'ghost','icon' => 'x-mark','size' => 'sm','ariaLabel' => e(__('Close modal')),'class' => 'rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!'], [], [], ['ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php $__slots544b9eac45039429e030c2fcc70e4bb9['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots544b9eac45039429e030c2fcc70e4bb9); ?>
<?php __544b9eac45039429e030c2fcc70e4bb9($__blaze, $__attrs544b9eac45039429e030c2fcc70e4bb9, $__slots544b9eac45039429e030c2fcc70e4bb9, [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack544b9eac45039429e030c2fcc70e4bb9)) { $__slots544b9eac45039429e030c2fcc70e4bb9 = array_pop($__slotsStack544b9eac45039429e030c2fcc70e4bb9); } ?>
<?php if (! empty($__attrsStack544b9eac45039429e030c2fcc70e4bb9)) { $__attrs544b9eac45039429e030c2fcc70e4bb9 = array_pop($__attrsStack544b9eac45039429e030c2fcc70e4bb9); } ?>
<?php $__blaze->popData(); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </dialog>
</ui-modal>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/index.blade.php ENDPATH**/ ?>