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
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
@endphp

<flux:button
    :$attributes
    :size="$size === 'sm' || $size === 'xs' ? 'xs' : 'sm'"
>
    <flux:icon.chevron-down :variant="$iconVariant" class="{{ $iconSize }}" />
</flux:button>
