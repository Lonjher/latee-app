@blaze(fold: true)

@props([])

<div {{ $attributes->class('min-h-0 flex-1 overflow-y-auto px-4 py-3') }}>
    {{ $slot }}
</div>
