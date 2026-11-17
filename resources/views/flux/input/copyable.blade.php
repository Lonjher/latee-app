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
    x-data="fluxInputCopyable"
    x-on:click="copy()"
    x-bind:data-copyable-copied="copied"
    aria-label="{{ __('Copy to clipboard') }}"
>
    <flux:icon.clipboard-document-check :variant="$iconVariant" class="{{ $iconSize }} hidden [[data-copyable-copied]>&]:block" />
    <flux:icon.clipboard-document :variant="$iconVariant" class="{{ $iconSize }} block [[data-copyable-copied]>&]:hidden" />
</flux:button>
