@blaze(fold: false, unsafe: [
    // flux:with-field props
    'name', 'label', 'badge',
    'description', 'description:trailing',
    'label:badge', 'label:aside', 'label:trailing',
    'error:name', 'error:bag', 'error:message', 'error:icon', 'error:nested', 'error:deep',
])

@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'resize' => 'vertical',
    'invalid' => null,
    'rows' => 4,
    'size' => 'sm',
])

@php
$classes = Flux::classes()
    ->add('block w-full')
    ->add('appearance-none outline-none transition-all')
    ->add('disabled:shadow-none dark:shadow-none')
    // SHADOW: tipis (Tailwind 4 — shadow-xs = 0 1px 2px rgba(0,0,0,.05))
    ->add('shadow-xs')
    // Size (default sm)
    ->add(match ($size) {
        default => 'text-sm px-4 py-2.5 rounded-2xl',
        'xs'    => 'text-xs px-3.5 py-2 rounded-xl',
        'base'  => 'text-base px-4 py-3 rounded-2xl',
    })
    // Resize control
    ->add($resize ? match ($resize) {
        'none'       => 'resize-none',
        'both'       => 'resize',
        'horizontal' => 'resize-x',
        'vertical'   => 'resize-y',
        default      => 'resize-y',
    } : 'resize-none')
    ->add($rows === 'auto' ? 'field-sizing-content' : '')
    // Background — slate → white on hover/focus
    // HOVER: bg ikut "menyala" sedikit ke arah white saat pointer di atasnya
    ->add('bg-slate-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50')
    // Text + placeholder
    ->add('text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500')
    // Border default + HOVER: border memanjat satu level lebih gelap
    ->add('border border-slate-200 dark:border-slate-700')
    ->add('hover:border-slate-300 dark:hover:border-slate-600')
    // Focus state (soft blue glow)
    ->add('focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30')
    // Invalid state (aktif saat atribut data-invalid ada)
    ->add('data-invalid:border-red-400 data-invalid:ring-2 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30')
    ;
@endphp

<flux:with-field :$attributes>
    <textarea
        {{ $attributes->class($classes) }}
        rows="{{ $rows }}"
        @isset ($name) name="{{ $name }}" @endisset
        {{-- Cek $errors di dalam @unblaze: runtime-safe --}}
        @unblaze(scope: ['name' => $name ?? null, 'invalid' => $invalid ?? false])
        <?php if ($scope['invalid'] || ($scope['name'] && $errors->has($scope['name']))): ?>
        aria-invalid="true" data-invalid
        <?php endif; ?>
        @endunblaze
        data-flux-control
        data-flux-textarea
    >{{ $slot }}</textarea>
</flux:with-field>
