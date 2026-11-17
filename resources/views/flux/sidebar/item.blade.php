@blaze

@php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); @endphp
@php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); @endphp
@php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); @endphp
@php $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp
@php $iconVariant ??= $attributes->pluck('icon:variant'); @endphp

@props([
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => null,
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
])

@php
$tooltip ??= $slot->isNotEmpty()
    ? trim(html_entity_decode(strip_tags((string) $slot), ENT_QUOTES | ENT_HTML5, 'UTF-8'))
    : null;

$iconClasses = Flux::classes('size-4')
    ->add('in-data-flux-sidebar-group-dropdown:text-slate-400! dark:in-data-flux-sidebar-group-dropdown:text-slate-500!')
    ->add('[[data-flux-sidebar-item]:hover_&]:text-current!')
    ->add('[[data-flux-sidebar-item][data-current]_&]:text-current!')
    ->add('[[data-flux-sidebar-item][data-active]_&]:text-current!');

$classes = Flux::classes()
    // Base
    ->add('h-8 in-data-flux-sidebar-on-mobile:h-10 relative flex items-center gap-3 rounded-full')
    ->add('in-data-flux-sidebar-collapsed-desktop:w-10 in-data-flux-sidebar-collapsed-desktop:justify-center')
    ->add('py-0 text-start w-full px-3 has-data-flux-navlist-badge:not-in-data-flux-sidebar-collapsed-desktop:pe-1.5 my-px')
    ->add('text-slate-600 dark:text-slate-400')
    ->add('transition-[background-color,color,box-shadow,transform] duration-200 ease-out')
    ->add('will-change-transform')
    ->add('active:scale-[0.97]!')

    // 🎯 ACTIVE STATE — pakai ! di SEMUA biar menang cascade
    // Support KEDUA attribute: data-current DAN data-active
    ->add('data-current:bg-brand-600! data-active:bg-brand-600!')
    ->add('dark:data-current:bg-brand-500! dark:data-active:bg-brand-500!')
    ->add('data-current:text-white! data-active:text-white!')
    ->add('data-current:font-semibold! data-active:font-semibold!')
    ->add('data-current:shadow-md! data-active:shadow-md!')
    ->add('data-current:shadow-brand-500/30! data-active:shadow-brand-500/30!')
    ->add('dark:data-current:shadow-brand-400/25! dark:data-active:shadow-brand-400/25!')
    ->add('data-current:scale-[1.01]! data-active:scale-[1.01]!')

    // 🚀 ACTIVE + HOVER
    ->add('hover:data-current:bg-brand-700! hover:data-active:bg-brand-700!')
    ->add('dark:hover:data-current:bg-brand-400! dark:hover:data-active:bg-brand-400!')
    ->add('hover:data-current:shadow-lg! hover:data-active:shadow-lg!')
    ->add('hover:data-current:shadow-brand-500/40! hover:data-active:shadow-brand-500/40!')
    ->add('hover:data-current:scale-[1.02]! hover:data-active:scale-[1.02]!')

    // 💤 INACTIVE + HOVER
    ->add('hover:text-slate-900 dark:hover:text-white')
    ->add('hover:bg-slate-100 dark:hover:bg-slate-800/60')
    ->add('hover:shadow-sm hover:shadow-slate-900/5 dark:hover:shadow-black/20')
    ->add('hover:scale-[1.01]')

    // Border
    ->add('border border-transparent')

    // Group dropdown overrides
    ->add('in-data-flux-sidebar-group-dropdown:w-auto! in-data-flux-sidebar-group-dropdown:px-2!')
    ->add('in-data-flux-sidebar-group-dropdown:focus:outline-hidden!')
    ->add('in-data-flux-sidebar-group-dropdown:text-slate-800! in-data-flux-sidebar-group-dropdown:bg-white! in-data-flux-sidebar-group-dropdown:hover:bg-slate-50!')
    ->add('in-data-flux-sidebar-group-dropdown:data-active:bg-slate-50!')
    ->add('dark:in-data-flux-sidebar-group-dropdown:text-white! dark:in-data-flux-sidebar-group-dropdown:bg-transparent! dark:in-data-flux-sidebar-group-dropdown:hover:bg-slate-700! dark:in-data-flux-sidebar-group-dropdown:data-active:bg-slate-700!')
    ;
@endphp

<flux:tooltip :position="$tooltipPosition" class="block min-w-0">
    <flux:button-or-link :attributes="$attributes->class($classes)" data-flux-sidebar-item>
        <?php if ($icon): ?>
            <div class="relative">
                <?php if (is_string($icon) && $icon !== ''): ?>
                    <flux:icon :$icon :variant="$iconVariant" class="{!! $iconClasses !!}" />
                <?php else: ?>
                    {{ $icon }}
                <?php endif; ?>

                <?php if ($iconDot): ?>
                    <div class="absolute top-[-2px] end-[-2px]">
                        <div class="size-[6px] rounded-full bg-slate-500 dark:bg-slate-400"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($slot->isNotEmpty()): ?>
            <div class="
                in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden
                flex-1 text-sm font-medium truncate [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content>{{ $slot }}</div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <flux:icon :icon="$iconTrailing" :variant="$iconVariant" class="in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!" />
        <?php elseif ($iconTrailing): ?>
            {{ $iconTrailing }}
        <?php endif; ?>

        <?php if (isset($badge) && $badge !== ''): ?>
            <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
            <flux:navlist.badge :attributes="$badgeAttributes" class="in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden">{{ $badge }}</flux:navlist.badge>
        <?php endif; ?>
    </flux:button-or-link>

    <flux:tooltip.content :kbd="$tooltipKbd" class="not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default">
        {{ $tooltip }}
    </flux:tooltip.content>
</flux:tooltip>
