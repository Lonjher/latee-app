@blaze

@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'placeholder' => null,
    'invalid' => null,
    'size' => null,
])

@php
$invalid ??= ($name && $errors->has($name));

$classes = Flux::classes()
    ->add('appearance-none') // Strip native arrow — kita pakai chevron custom
    ->add('[:where(&)]:w-full ps-4 pe-11 block')
    ->add('outline-none transition-all cursor-pointer')
    // Pill-shaped, ukuran disesuaikan
    ->add(match ($size) {
        default => 'h-9 py-2 text-sm rounded-full',
        'md'    => 'h-11 py-2.5 text-sm rounded-full',
        'xs'    => 'h-8 py-1.5 text-xs rounded-full',
    })
    // Background — subtle slate, white saat focus
    ->add('bg-slate-50 dark:bg-slate-800')
    ->add('focus:bg-white dark:focus:bg-slate-900')
    ->add('disabled:bg-slate-100 dark:disabled:bg-slate-800/50')
    // Text + placeholder
    ->add('text-slate-900 dark:text-white')
    ->add('disabled:text-slate-400 dark:disabled:text-slate-500')
    ->add('has-[option.placeholder:checked]:text-slate-400 dark:has-[option.placeholder:checked]:text-slate-500')
    // Options dark mode (native dropdown)
    ->add('dark:[&_option]:bg-slate-800 dark:[&_option]:text-white')
    // Shadows
    ->add('disabled:shadow-none dark:shadow-none')
    // Border + focus ring (soft glow, konsisten dengan input)
    ->add($invalid
        ? 'border border-red-400 data-invalid:ring-2 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30'
        : 'border border-slate-200 dark:border-slate-700 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30'
    )
    ;
@endphp

<div class="relative w-full">
    <select
        {{ $attributes->class($classes) }}
        @if ($invalid) aria-invalid="true" data-invalid @endif
        @isset ($name) name="{{ $name }}" @endisset
        @if (is_numeric($size)) size="{{ $size }}" @endif
        data-flux-control
        data-flux-select-native
        data-flux-group-target
    >
        <?php if ($placeholder): ?>
            <option value="" disabled selected class="placeholder">{{ $placeholder }}</option>
        <?php endif; ?>

        {{ $slot }}
    </select>
</div>
