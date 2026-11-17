@props([
    'icon' => null,
    'color' => 'default',
    'disabled' => false,
])

@php
$colorClasses = match ($color) {
    'sage'    => 'text-sage-600 dark:text-sage-400 hover:bg-sage-50 dark:hover:bg-sage-950/30',
    'amber'   => 'text-amber-600 dark:text-amber-400 hover:bg-amber-50 dark:hover:bg-amber-950/40',
    'red'     => 'text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/40',
    'blue'    => 'text-blue-600 dark:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-950/40',
    'emerald' => 'text-emerald-600 dark:text-emerald-400 hover:bg-emerald-50 dark:hover:bg-emerald-950/40',
    default   => 'text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-800/70',
};

$iconColorClasses = match ($color) {
    'sage'    => 'text-sage-500',
    'amber'   => 'text-amber-500',
    'red'     => 'text-red-400',
    'blue'    => 'text-blue-500',
    'emerald' => 'text-emerald-500',
    default   => 'text-stone-400',
};
@endphp

<button
    type="button"
    @disabled($disabled)
    {{ $attributes->class([
        'flex w-full cursor-pointer items-center gap-2 rounded-full px-2.5 py-1.5 text-left text-xs font-medium transition-colors',
        $colorClasses,
        'disabled:cursor-not-allowed disabled:opacity-40 disabled:hover:bg-transparent' => $disabled,
    ]) }}
>
    @if ($icon)
        <flux:icon :name="$icon" class="size-3.5 shrink-0 {{ $iconColorClasses }}" />
    @endif

    {{ $content ?? $slot }}
</button>
