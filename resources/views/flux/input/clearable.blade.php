@blaze(fold: true, memo: true)

@props([
    'iconVariant' => 'mini',
    'size' => null,
])

@php
$iconSize = match ($size) {
    'xs' => 'size-3!',
    'sm' => 'size-3.5!',
    default => 'size-4!',
};

$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1 [[data-flux-input]:has(input:placeholder-shown)_&]:hidden [[data-flux-input]:has(input[disabled])_&]:hidden',
    'square' => true,
    'size' => null,
]);
@endphp

<flux:button
    :$attributes
    :size="$size === 'sm' || $size === 'xs' ? 'xs' : 'sm'"
    x-data="fluxInputClearable"
    x-on:click="clear()"
    tabindex="-1"
    aria-label="{{ __('Clear input') }}"
    data-flux-clear-button
>
    <flux:icon.x-mark :variant="$iconVariant" class="{{ $iconSize }}" />
</flux:button>
