@blaze(fold: true, safe: ['name'])

@props([
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
])

@php
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
 */
$cardStyles = 'bg-white/95 dark:bg-[#070D18]/95 '
    . 'border border-slate-200/90 dark:border-white/10 '
    . 'text-slate-900 dark:text-white '
    . 'shadow-2xl backdrop-blur-2xl '
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
            default    => 'bg-white/95 dark:bg-[#070D18]/95 border-slate-200/90 dark:border-white/10 text-slate-900 dark:text-white backdrop-blur-2xl',
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
@endphp

<ui-modal {{ $attributes }} data-flux-modal>
    <?php if ($trigger): ?>
        {{ $trigger }}
    <?php endif; ?>

    <dialog
        wire:ignore.self
        {{ $dialogAttributes->class($classes) }}
        <?php if ($name): ?> data-modal="{{ $name }}" <?php endif; ?>
        <?php if ($flyout): ?> data-flux-flyout <?php endif; ?>
        <?php if ($overflow): ?> data-flux-modal-overflow <?php endif; ?>
        @unblaze(scope: ['name' => $name])
        x-data="fluxModal(@js($scope['name']), @js(isset($__livewire) ? $__livewire->getId() : null))"
        @endunblaze
        x-on:modal-show.document="handleShow($event)"
        x-on:modal-close.document="handleClose($event)"
    >
        <?php if ($overflow): ?>
            <div class="flex min-h-full items-center justify-center p-3 sm:p-4">
                <div {{ $contentAttributes->class($contentClasses) }} data-flux-modal-content>
                    {{ $slot }}

                    <?php if ($closable): ?>
                        <div class="absolute top-0 end-0 z-10 mt-3 me-3">
                            <flux:modal.close>
                                <flux:button variant="ghost" icon="x-mark" size="sm" aria-label="{{ __('Close modal') }}"
                                    class="rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!" />
                            </flux:modal.close>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            {{ $slot }}

            <?php if ($closable): ?>
                <div class="absolute top-0 end-0 z-10 mt-3 me-3">
                    <flux:modal.close>
                        <flux:button variant="ghost" icon="x-mark" size="sm" aria-label="{{ __('Close modal') }}"
                            class="rounded-full! bg-white/60! backdrop-blur-sm! ring-1! ring-black/5! text-stone-500! hover:bg-white/90! hover:text-stone-800! dark:bg-stone-800/60! dark:ring-stone-700/50! dark:text-stone-400! dark:hover:bg-stone-800/90! dark:hover:text-white!" />
                    </flux:modal.close>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </dialog>
</ui-modal>
