@blaze(fold: true)

@props([])

<div {{ $attributes->class('flex flex-shrink-0 items-center justify-end gap-2 border-t border-slate-200/80 bg-slate-50/80 p-4 pt-3 dark:border-white/10 dark:bg-[#070D18]/80 backdrop-blur-md') }}>
    {{ $slot }}
</div>
