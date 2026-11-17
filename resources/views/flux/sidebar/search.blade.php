@blaze(fold: true, unsafe: ['tooltip:position', 'tooltip:kbd', 'tooltip'])

@php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); @endphp
@php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); @endphp
@php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); @endphp

@props([
    'tooltipPosition' => 'right',
    'placeholder' => __('Search...'),
    'tooltipKbd' => null,
    'tooltip' => null,
    'kbd' => null,
])

@php
$tooltip = $tooltip ?? $placeholder;
$tooltipKbd ??= $kbd;

$tooltipClasses = Flux::classes()
    ->add('w-full')
    ->add('in-data-flux-sidebar-header:in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:hidden')
    ;

$classes = Flux::classes()
    ->add('h-10 py-2 px-3 w-full rounded-full disabled:shadow-none dark:shadow-none appearance-none text-base sm:text-sm leading-[1.375rem] bg-slate-100 dark:bg-slate-800/60 dark:disabled:bg-slate-800/40 text-slate-700 placeholder-slate-500 disabled:placeholder-slate-400 dark:text-slate-200 dark:placeholder-slate-400 dark:disabled:placeholder-slate-500 border border-slate-200 dark:border-slate-700 relative flex items-center gap-3 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors')
    ->add('in-data-flux-sidebar-on-mobile:h-10 in-data-flux-sidebar-collapsed-desktop:px-3')
    ->add('in-data-flux-sidebar-header:in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:hidden')
    ;
@endphp

<flux:tooltip :position="$tooltipPosition" :class="$tooltipClasses">
    <button
        {{ $attributes->class($classes) }}
        type="button"
        data-flux-sidebar-search
    >
        <div class="flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 start-0">
            <flux:icon class="size-4" icon="magnifying-glass" variant="outline" />
        </div>

        <div class="in-data-flux-sidebar-collapsed-desktop:hidden block self-center text-start flex-1 font-medium text-slate-500 dark:text-slate-400">
            {{ $placeholder }}
        </div>

        <?php if ($kbd): ?>
            <div class="in-data-flux-sidebar-collapsed-desktop:hidden absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 pe-4 end-0">
                {{ $kbd }}
            </div>
        <?php endif; ?>
    </button>

    <flux:tooltip.content :kbd="$tooltipKbd" class="not-in-data-flux-sidebar-collapsed-desktop:hidden cursor-default">
        {{ $tooltip }}
    </flux:tooltip.content>
</flux:tooltip>
