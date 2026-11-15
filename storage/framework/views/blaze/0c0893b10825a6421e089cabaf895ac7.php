<?php
if (!function_exists('__0c0893b10825a6421e089cabaf895ac7')):
function __0c0893b10825a6421e089cabaf895ac7($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
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

<?php
$__defaults = [
    'iconTrailing' => null,
    'variant' => 'outline',
    'iconVariant' => null,
    'iconLeading' => null,
    'type' => 'button',
    'loading' => null,
    'align' => 'center',
    'size' => 'base',
    'square' => null,
    'color' => null,
    'inset' => null,
    'icon' => null,
    'kbd' => null,
];
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconLeading ??= $attributes['icon-leading'] ?? $attributes['iconLeading'] ?? $__defaults['iconLeading']; unset($attributes['iconLeading'], $attributes['icon-leading']);
$type ??= $attributes['type'] ?? $__defaults['type']; unset($attributes['type']);
$loading ??= $attributes['loading'] ?? $__defaults['loading']; unset($attributes['loading']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
$square ??= $attributes['square'] ?? $__defaults['square']; unset($attributes['square']);
$color ??= $attributes['color'] ?? $__defaults['color']; unset($attributes['color']);
$inset ??= $attributes['inset'] ?? $__defaults['inset']; unset($attributes['inset']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
unset($__defaults);
?>

<?php
$iconLeading = $icon ??= $iconLeading;

$square ??= $slot->isEmpty() && ! ($iconLeading && $iconTrailing);

$iconVariant ??= ($size === 'xs')
    ? ($square ? 'micro' : 'micro')
    : ($square ? 'mini' : 'micro');

$iconTrailingVariant ??= $attributes->pluck('icon-trailing:variant', $iconVariant);

$iconClasses = Flux::classes()
    ->add($iconVariant === 'outline' ? ($square && $size !== 'xs' ? 'size-5' : 'size-4') : '')
    ->add($attributes->pluck('icon:class'))
    ;

$iconTrailingClasses = Flux::classes()
    ->add($iconTrailingVariant === 'outline' ? ($square && $size !== 'xs' ? 'size-5' : 'size-4') : '')
    ->add($attributes->pluck('icon-trailing:class'))
    ;

$isTypeSubmitAndNotDisabledOnRender = $type === 'submit' && ! $attributes->has('disabled');
$isJsMethod = str_starts_with($attributes->whereStartsWith('wire:click')->first() ?? '', '$js.');
$loading ??= $loading ?? ($isTypeSubmitAndNotDisabledOnRender || $attributes->whereStartsWith('wire:click')->isNotEmpty() && ! $isJsMethod);

if ($loading && $type !== 'submit' && ! $isJsMethod) {
    $attributes = $attributes->merge(['wire:loading.attr' => 'data-flux-loading']);
    if (! $attributes->has('wire:target') && $target = $attributes->whereStartsWith('wire:click')->first()) {
        $attributes = $attributes->merge(['wire:target' => $target], escape: false);
    }
}

$isColored = $color
    && in_array($variant, ['filled', 'outline', 'ghost', 'subtle'], true)
    && ! in_array($color, ['slate', 'gray', 'zinc', 'neutral', 'stone', 'mauve', 'olive', 'mist', 'taupe'], true);

$classes = Flux::classes()
    ->add('hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap')
    ->add('transition-all duration-300')
    // Focus ring aksesibel untuk kedua mode
    ->add('focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900')
    ->add('disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none')
    ->add(match ($align) {
        'start' => 'justify-start',
        'center' => 'justify-center',
        'end' => 'justify-end',
    })
    ->add(match ($size) {
        // ✅ BASE — diperkecil dari h-10 → h-9 (w-10 → w-9)
        'base' => 'h-9 text-sm rounded-full gap-2' . ' ' . (
            $square ? 'w-9'
            : ($iconLeading && $iconLeading !== '' ? 'ps-5' : 'ps-6') . ' ' . ($iconTrailing && $iconTrailing !== '' ? 'pe-5' : 'pe-6')
        ),
        'sm' => 'h-9 text-sm rounded-full gap-2' . ' ' . (
            $square ? 'w-9'
            : ($iconLeading && $iconLeading !== '' ? 'ps-4' : 'ps-5') . ' ' . ($iconTrailing && $iconTrailing !== '' ? 'pe-4' : 'pe-5')
        ),
        'xs' => 'h-8 text-xs rounded-full gap-1.5' . ' ' . (
            $square ? 'w-8'
            : ($iconLeading && $iconLeading !== '' ? 'ps-3' : 'ps-4') . ' ' . ($iconTrailing && $iconTrailing !== '' ? 'pe-3' : 'pe-4')
        ),
        'lg' => 'h-12 text-sm rounded-full gap-2.5' . ' ' . (
            $square ? 'w-12'
            : ($iconLeading && $iconLeading !== '' ? 'ps-6' : 'ps-8') . ' ' . ($iconTrailing && $iconTrailing !== '' ? 'pe-6' : 'pe-8')
        ),
    })
    ->add('inline-flex')
    ->add($inset ? match ($size) {
        // ✅ BASE — inset disesuaikan untuk h-9
        'base' => $square
            ? Flux::applyInset($inset, top: '-mt-1.5', right: '-me-1.5', bottom: '-mb-1.5', left: '-ms-1.5')
            : Flux::applyInset($inset, top: '-mt-1.5', right: ($iconTrailing && $iconTrailing !== '' ? '-me-5' : '-me-6'), bottom: '-mb-1.5', left: ($iconLeading && $iconLeading !== '' ? '-ms-5' : '-ms-6')),
        'sm' => $square
            ? Flux::applyInset($inset, top: '-mt-1.5', right: '-me-1.5', bottom: '-mb-1.5', left: '-ms-1.5')
            : Flux::applyInset($inset, top: '-mt-1.5', right: ($iconTrailing && $iconTrailing !== '' ? '-me-4' : '-me-5'), bottom: '-mb-1.5', left: ($iconLeading && $iconLeading !== '' ? '-ms-4' : '-ms-5')),
        'xs' => $square
            ? Flux::applyInset($inset, top: '-mt-1', right: '-me-1', bottom: '-mb-1', left: '-ms-1')
            : Flux::applyInset($inset, top: '-mt-1', right: ($iconTrailing && $iconTrailing !== '' ? '-me-3' : '-me-4'), bottom: '-mb-1', left: ($iconLeading && $iconLeading !== '' ? '-ms-3' : '-ms-4')),
        'lg' => $square
            ? Flux::applyInset($inset, top: '-mt-3', right: '-me-3', bottom: '-mb-3', left: '-ms-3')
            : Flux::applyInset($inset, top: '-mt-3', right: ($iconTrailing && $iconTrailing !== '' ? '-me-6' : '-me-8'), bottom: '-mb-3', left: ($iconLeading && $iconLeading !== '' ? '-ms-6' : '-ms-8')),
    } : '')
    ->add(match (true) {
        // Colored variants (custom color seperti emerald/rose/etc.)
        $isColored && $variant === 'filled' => 'bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_80%)] hover:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_70%)] dark:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_60%)] dark:hover:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_50%)]',
        $isColored && $variant === 'outline' => 'bg-white hover:bg-[color-mix(in_oklab,_var(--color-button-soft)_6%,_white)] dark:bg-slate-800 dark:hover:bg-[color-mix(in_oklab,_var(--color-accent-content)_10%,_var(--color-slate-800))]',
        $isColored && $variant === 'ghost' => 'bg-transparent hover:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_80%)] active:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_70%)] dark:hover:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_60%)] dark:active:bg-[color-mix(in_oklab,_var(--color-button-soft),_transparent_50%)]',
        $isColored && $variant === 'subtle' => 'bg-transparent hover:bg-(--color-button-tint) dark:hover:bg-[color-mix(in_oklab,_var(--color-button-deep),_transparent_28%)]',
        default => match ($variant) {
            'primary' => 'bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)]',
            'filled' => 'bg-slate-100 hover:bg-slate-200 dark:bg-white/10 dark:hover:bg-white/20',
            'outline' => 'bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 dark:bg-slate-800 dark:border-slate-700 dark:hover:bg-slate-700 dark:hover:border-slate-600',
            'danger' => 'bg-rose-600 hover:bg-rose-700 shadow-lg shadow-rose-500/25 dark:bg-rose-500 dark:hover:bg-rose-400 dark:shadow-rose-400/20',
            'ghost' => 'bg-transparent hover:bg-slate-100 dark:hover:bg-white/10',
            'subtle' => 'bg-transparent hover:bg-slate-50 dark:hover:bg-white/5',
        },
    })
    ->add(match (true) {
        $isColored && $variant === 'filled' => 'text-(--color-button-strong) dark:text-(--color-button-soft-foreground)',
        $isColored && $variant === 'outline' => 'text-(--color-button-strong) dark:text-(--color-accent-content)',
        $isColored && $variant === 'ghost' => 'text-(--color-button-strong) dark:text-(--color-button-muted)',
        $isColored && $variant === 'subtle' => 'text-[color-mix(in_oklab,_var(--color-accent-content),_var(--color-zinc-500)_46%)] hover:text-(--color-button-strong) dark:text-[color-mix(in_oklab,_var(--color-button-muted),_var(--color-zinc-400)_48%)] dark:hover:text-(--color-button-muted)',
        default => match ($variant) {
            'primary' => 'text-[var(--color-accent-foreground)]',
            'filled' => 'text-slate-900 dark:text-white',
            'outline' => 'text-slate-800 dark:text-white',
            'danger' => 'text-white',
            'ghost' => 'text-slate-700 dark:text-white',
            'subtle' => 'text-slate-500 hover:text-slate-800 dark:text-slate-400 dark:hover:text-white',
        },
    })
    ->add(match (true) {
        $isColored && $variant === 'outline' => 'border border-[color-mix(in_oklab,_var(--color-button-border)_18%,_var(--color-zinc-200))] hover:border-[color-mix(in_oklab,_var(--color-button-border)_28%,_var(--color-zinc-200))] dark:border-[color-mix(in_oklab,_var(--color-accent-content)_22%,_var(--color-slate-700))] dark:hover:border-[color-mix(in_oklab,_var(--color-accent-content)_32%,_var(--color-slate-700))]',
        default => match ($variant) {
            'primary' => '',
            'filled' => '[[data-flux-button-group]_&]:border-e [[data-flux-button-group]_&]:border-slate-200/80 dark:[[data-flux-button-group]_&]:border-slate-900/50',
            'outline' => '',
            'danger' => '[[data-flux-button-group]_&]:border-e [[data-flux-button-group]_&]:border-rose-700 dark:[[data-flux-button-group]_&]:border-rose-900/25',
            'ghost' => '',
            'subtle' => '',
        },
    })
    ->add(match ($variant) {
        'primary' => '',
        'danger' => '',
        'outline' => 'shadow-xs',
        default => '',
    })
    ->add(match ($variant) {
        'ghost' => '',
        'subtle' => '',
        'outline' => '[[data-flux-button-group]_&]:border-s-0 [:is([data-flux-button-group]>&:first-child,_[data-flux-button-group]_:first-child>&)]:border-s-[1px]',
        'filled' => '[[data-flux-button-group]_&]:border-e [:is([data-flux-button-group]>&:last-child,_[data-flux-button-group]_:last-child>&)]:border-e-0 [[data-flux-button-group]_&]:border-slate-200/80 dark:[[data-flux-button-group]_&]:border-slate-900/50',
        'danger' => '[[data-flux-button-group]_&]:border-e [:is([data-flux-button-group]>&:last-child,_[data-flux-button-group]_:last-child>&)]:border-e-0 [[data-flux-button-group]_&]:border-rose-700 dark:[[data-flux-button-group]_&]:border-rose-900/25',
        'primary' => '[[data-flux-button-group]_&]:border-e-0 [:is([data-flux-button-group]>&:last-child,_[data-flux-button-group]_:last-child>&)]:border-e-[1px] dark:[:is([data-flux-button-group]>&:last-child,_[data-flux-button-group]_:last-child>&)]:border-e-0 [:is([data-flux-button-group]>&:not(:first-child),_[data-flux-button-group]_:not(:first-child)>&)]:border-s-[1px]! [:is([data-flux-button-group]>&:not(:first-child),_[data-flux-button-group]_:not(:first-child)>&)]:border-s-white/20',
        default => '',
    })
    ->add($loading ? [
        '*:transition-opacity',
        $type === 'submit' ? '[&[disabled]>:not([data-flux-loading-indicator])]:opacity-0' : '[&[data-loading]>:not([data-flux-loading-indicator])]:opacity-0 [&[data-flux-loading]>:not([data-flux-loading-indicator])]:opacity-0',
        $type === 'submit' ? '[&[disabled]>[data-flux-loading-indicator]]:opacity-100' : '[&[data-loading]>[data-flux-loading-indicator]]:opacity-100 [&[data-flux-loading]>[data-flux-loading-indicator]]:opacity-100',
        $type === 'submit' ? '[&[disabled]]:pointer-events-none' : 'data-loading:pointer-events-none data-flux-loading:pointer-events-none',
    ] : [])
    ->add(($variant === 'primary' || $isColored) ? match ($color) {
        'slate' => '[--color-accent:var(--color-slate-800)] [--color-accent-content:var(--color-slate-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-slate-100)] dark:[--color-accent-content:var(--color-slate-100)] dark:[--color-accent-foreground:var(--color-slate-900)]',
        'gray' => '[--color-accent:var(--color-gray-800)] [--color-accent-content:var(--color-gray-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-gray-100)] dark:[--color-accent-content:var(--color-gray-100)] dark:[--color-accent-foreground:var(--color-gray-900)]',
        'zinc' => '[--color-accent:var(--color-zinc-800)] [--color-accent-content:var(--color-zinc-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-zinc-100)] dark:[--color-accent-content:var(--color-zinc-100)] dark:[--color-accent-foreground:var(--color-zinc-900)]',
        'neutral' => '[--color-accent:var(--color-neutral-800)] [--color-accent-content:var(--color-neutral-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-neutral-100)] dark:[--color-accent-content:var(--color-neutral-100)] dark:[--color-accent-foreground:var(--color-neutral-900)]',
        'stone' => '[--color-accent:var(--color-stone-800)] [--color-accent-content:var(--color-stone-800)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-stone-100)] dark:[--color-accent-content:var(--color-stone-100)] dark:[--color-accent-foreground:var(--color-stone-900)]',
        'brand' => '[--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'red' => '[--color-accent:var(--color-red-500)] [--color-accent-content:var(--color-red-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-red-500)] dark:[--color-accent-content:var(--color-red-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'rose' => '[--color-accent:var(--color-rose-500)] [--color-accent-content:var(--color-rose-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-rose-500)] dark:[--color-accent-content:var(--color-rose-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'emerald' => '[--color-accent:var(--color-emerald-600)] [--color-accent-content:var(--color-emerald-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-emerald-600)] dark:[--color-accent-content:var(--color-emerald-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'teal' => '[--color-accent:var(--color-teal-600)] [--color-accent-content:var(--color-teal-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-teal-600)] dark:[--color-accent-content:var(--color-teal-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'sky' => '[--color-accent:var(--color-sky-600)] [--color-accent-content:var(--color-sky-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-sky-600)] dark:[--color-accent-content:var(--color-sky-400)] dark:[--color-accent-foreground:var(--color-white)]',
        'blue' => '[--color-accent:var(--color-blue-500)] [--color-accent-content:var(--color-blue-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-blue-500)] dark:[--color-accent-content:var(--color-blue-400)] dark:[--color-accent-foreground:var(--color-white)]',
        default => $variant === 'primary'
            ? '[--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]'
            : '',
    } : '')
    ->add($isColored ? match ($color) {
        'brand' => '[--color-button-tint:var(--color-brand-50)] [--color-button-soft-foreground:var(--color-brand-200)] [--color-button-muted:var(--color-brand-300)] [--color-button-soft:var(--color-brand-400)] [--color-button-border:var(--color-brand-500)] [--color-button-strong:var(--color-brand-700)] [--color-button-deep:var(--color-brand-900)]',
        'red' => '[--color-button-tint:var(--color-red-50)] [--color-button-soft-foreground:var(--color-red-200)] [--color-button-muted:var(--color-red-300)] [--color-button-soft:var(--color-red-400)] [--color-button-border:var(--color-red-500)] [--color-button-strong:var(--color-red-700)] [--color-button-deep:var(--color-red-950)]',
        'rose' => '[--color-button-tint:var(--color-rose-50)] [--color-button-soft-foreground:var(--color-rose-200)] [--color-button-muted:var(--color-rose-300)] [--color-button-soft:var(--color-rose-400)] [--color-button-border:var(--color-rose-500)] [--color-button-strong:var(--color-rose-700)] [--color-button-deep:var(--color-rose-950)]',
        'emerald' => '[--color-button-tint:var(--color-emerald-50)] [--color-button-soft-foreground:var(--color-emerald-200)] [--color-button-muted:var(--color-emerald-300)] [--color-button-soft:var(--color-emerald-400)] [--color-button-border:var(--color-emerald-500)] [--color-button-strong:var(--color-emerald-700)] [--color-button-deep:var(--color-emerald-950)]',
        'teal' => '[--color-button-tint:var(--color-teal-50)] [--color-button-soft-foreground:var(--color-teal-200)] [--color-button-muted:var(--color-teal-300)] [--color-button-soft:var(--color-teal-400)] [--color-button-border:var(--color-teal-500)] [--color-button-strong:var(--color-teal-700)] [--color-button-deep:var(--color-teal-950)]',
        'sky' => '[--color-button-tint:var(--color-sky-50)] [--color-button-soft-foreground:var(--color-sky-200)] [--color-button-muted:var(--color-sky-300)] [--color-button-soft:var(--color-sky-400)] [--color-button-border:var(--color-sky-500)] [--color-button-strong:var(--color-sky-700)] [--color-button-deep:var(--color-sky-950)]',
        'blue' => '[--color-button-tint:var(--color-blue-50)] [--color-button-soft-foreground:var(--color-blue-200)] [--color-button-muted:var(--color-blue-300)] [--color-button-soft:var(--color-blue-400)] [--color-button-border:var(--color-blue-500)] [--color-button-strong:var(--color-blue-700)] [--color-button-deep:var(--color-blue-950)]',
        default => '',
    } : '')
    ;

$attributes = $attributes->merge([
    'data-flux-group-target' => ! in_array($variant, ['subtle', 'ghost']),
]);
?>

<?php if (!function_exists('__e6efe042c7531bb37e082e7b611b4c3e')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php', $__blaze->compiledPath.'/e6efe042c7531bb37e082e7b611b4c3e.php'); require $__blaze->compiledPath.'/e6efe042c7531bb37e082e7b611b4c3e.php'; } ?>
<?php if (isset($__slotse6efe042c7531bb37e082e7b611b4c3e)) { $__slotsStacke6efe042c7531bb37e082e7b611b4c3e[] = $__slotse6efe042c7531bb37e082e7b611b4c3e; } ?>
<?php if (isset($__attrse6efe042c7531bb37e082e7b611b4c3e)) { $__attrsStacke6efe042c7531bb37e082e7b611b4c3e[] = $__attrse6efe042c7531bb37e082e7b611b4c3e; } ?>
<?php $__attrse6efe042c7531bb37e082e7b611b4c3e = ['attributes' => $attributes]; ?>
<?php $__slotse6efe042c7531bb37e082e7b611b4c3e = []; ?>
<?php $__blaze->pushData($__attrse6efe042c7531bb37e082e7b611b4c3e); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('__e3b01b020fecb3d559cf79c73aa6dbd1')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link-pure.blade.php', $__blaze->compiledPath.'/e3b01b020fecb3d559cf79c73aa6dbd1.php'); require $__blaze->compiledPath.'/e3b01b020fecb3d559cf79c73aa6dbd1.php'; } ?>
<?php if (isset($__slotse3b01b020fecb3d559cf79c73aa6dbd1)) { $__slotsStacke3b01b020fecb3d559cf79c73aa6dbd1[] = $__slotse3b01b020fecb3d559cf79c73aa6dbd1; } ?>
<?php if (isset($__attrse3b01b020fecb3d559cf79c73aa6dbd1)) { $__attrsStacke3b01b020fecb3d559cf79c73aa6dbd1[] = $__attrse3b01b020fecb3d559cf79c73aa6dbd1; } ?>
<?php $__attrse3b01b020fecb3d559cf79c73aa6dbd1 = ['type' => $type,'attributes' => $attributes->class($classes),'dataFluxButton' => true]; ?>
<?php $__slotse3b01b020fecb3d559cf79c73aa6dbd1 = []; ?>
<?php $__blaze->pushData($__attrse3b01b020fecb3d559cf79c73aa6dbd1); ?>
<?php ob_start(); ?>
        <?php if ($loading): ?>
            <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <?php if (!function_exists('__71ade577ce2296bc0cfcaedfd1f31c34')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'); require $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'; } ?>
<?php $__blaze->pushData(['icon' => 'loading','variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php __71ade577ce2296bc0cfcaedfd1f31c34($__blaze, ['icon' => 'loading','variant' => $iconVariant,'class' => $iconClasses], [], ['variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
            </div>
        <?php endif; ?>

        <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
            <?php if (!function_exists('__71ade577ce2296bc0cfcaedfd1f31c34')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'); require $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php __71ade577ce2296bc0cfcaedfd1f31c34($__blaze, ['icon' => $iconLeading,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php elseif ($iconLeading): ?>
            <?php echo e($iconLeading); ?>

        <?php endif; ?>

        <?php if (($loading || $iconLeading || $iconTrailing) && ! $slot->isEmpty()): ?>
            <span><?php echo e($slot); ?></span>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>

        <?php if ($kbd): ?>
            <div class="text-xs text-slate-400 dark:text-slate-500"><?php echo e($kbd); ?></div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <?php $iconClasses->add($square ? '' : '-ms-1'); ?>
            <?php if (!function_exists('__71ade577ce2296bc0cfcaedfd1f31c34')) { $__blaze->compile('D:\PUJASERA\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'); require $__blaze->compiledPath.'/71ade577ce2296bc0cfcaedfd1f31c34.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconTrailingVariant,'class' => $iconTrailingClasses]); ?>
<?php __71ade577ce2296bc0cfcaedfd1f31c34($__blaze, ['icon' => $iconTrailing,'variant' => $iconTrailingVariant,'class' => $iconTrailingClasses], [], ['icon', 'variant', 'class'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php elseif ($iconTrailing): ?>
            <?php echo e($iconTrailing); ?>

        <?php endif; ?>
    <?php $__slotse3b01b020fecb3d559cf79c73aa6dbd1['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotse3b01b020fecb3d559cf79c73aa6dbd1); ?>
<?php __e3b01b020fecb3d559cf79c73aa6dbd1($__blaze, $__attrse3b01b020fecb3d559cf79c73aa6dbd1, $__slotse3b01b020fecb3d559cf79c73aa6dbd1, ['type', 'attributes', 'dataFluxButton'], ['dataFluxButton' => 'data-flux-button'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke3b01b020fecb3d559cf79c73aa6dbd1)) { $__slotse3b01b020fecb3d559cf79c73aa6dbd1 = array_pop($__slotsStacke3b01b020fecb3d559cf79c73aa6dbd1); } ?>
<?php if (! empty($__attrsStacke3b01b020fecb3d559cf79c73aa6dbd1)) { $__attrse3b01b020fecb3d559cf79c73aa6dbd1 = array_pop($__attrsStacke3b01b020fecb3d559cf79c73aa6dbd1); } ?>
<?php $__blaze->popData(); ?>
<?php $__slotse6efe042c7531bb37e082e7b611b4c3e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotse6efe042c7531bb37e082e7b611b4c3e); ?>
<?php __e6efe042c7531bb37e082e7b611b4c3e($__blaze, $__attrse6efe042c7531bb37e082e7b611b4c3e, $__slotse6efe042c7531bb37e082e7b611b4c3e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke6efe042c7531bb37e082e7b611b4c3e)) { $__slotse6efe042c7531bb37e082e7b611b4c3e = array_pop($__slotsStacke6efe042c7531bb37e082e7b611b4c3e); } ?>
<?php if (! empty($__attrsStacke6efe042c7531bb37e082e7b611b4c3e)) { $__attrse6efe042c7531bb37e082e7b611b4c3e = array_pop($__attrsStacke6efe042c7531bb37e082e7b611b4c3e); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\PUJASERA\latee-app\resources\views/flux/button/index.blade.php ENDPATH**/ ?>