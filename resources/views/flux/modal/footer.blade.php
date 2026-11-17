@blaze(fold: true)

@props([])

<div {{ $attributes->class('flex flex-shrink-0 items-center justify-end gap-1.5 border-t border-stone-100 bg-white p-4 pt-3 dark:border-stone-800 dark:bg-stone-900') }}>
    {{ $slot }}
</div>
