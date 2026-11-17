@blaze(fold: false, unsafe: [
    'icon:trailing', 'icon:leading', 'icon:variant', 'mask:dynamic',
    'name', 'label', 'badge',
    'description', 'description:trailing',
    'label:badge', 'label:aside', 'label:trailing',
    'error:name', 'error:bag', 'error:message', 'error:icon', 'error:nested', 'error:deep',
])

@php $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp
@php $iconLeading ??= $attributes->pluck('icon:leading'); @endphp
@php $iconVariant ??= $attributes->pluck('icon:variant'); @endphp
@php $maskDynamic ??= $attributes->pluck('mask:dynamic'); @endphp

@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'iconVariant' => 'mini',
    'variant' => 'outline',
    'colorTheme' => 'blue',
    'iconTrailing' => null,
    'iconLeading' => null,
    'maskDynamic' => null,
    'expandable' => null,
    'clearable' => null,
    'copyable' => null,
    'viewable' => null,
    'invalid' => null,
    'loading' => null,
    'type' => 'text',
    'mask' => null,
    'size' => null,
    'icon' => null,
    'kbd' => null,
    'as' => null,
])

@php
$inputAttributes = Flux::attributesAfter('input:', $attributes, []);

$wireModel = $attributes->wire('model');
$wireTarget = null;

if ($loading !== false) {
    if ($loading === true) {
        $loading = true;
    } elseif ($wireModel?->directive) {
        $loading = $wireModel->hasModifier('live');
        $wireTarget = $loading ? $wireModel->value() : null;
    } else {
        $wireTarget = $loading;
        $loading = (bool) $loading;
    }
}

$iconLeading ??= $icon;

$hasLeadingIcon = (bool) ($iconLeading);
$countOfTrailingIcons = collect([
    (bool) $iconTrailing,
    (bool) $kbd,
    (bool) $clearable,
    (bool) $copyable,
    (bool) $viewable,
    (bool) $expandable,
])->filter()->count();

// ═══════════════════════════════════════════════════════════════
// ICON SIZE & PADDING — proporsional per input size
// ═══════════════════════════════════════════════════════════════

// Icon leading/trailing: 12 / 16 / 20 px
$iconSizeClasses = match ($size) {
    'xs' => 'size-3!',
    'md' => 'size-5!',
    default => 'size-4!',
};

// Posisi icon dari tepi input
$iconLeadingInset = match ($size) {
    'xs' => 'ps-2.5',
    'md' => 'ps-4',
    default => 'ps-3.5',
};

$trailingInset = match ($size) {
    'xs' => 'pe-2.5',
    'md' => 'pe-4',
    default => 'pe-3.5',
};

// Padding text saat ada leading icon
$iconLeadingTextPadding = match ($size) {
    'xs' => 'ps-7',
    'md' => 'ps-11',
    default => 'ps-9',
};

// Padding kanan per jumlah trailing + ukuran input
$trailingPadding = fn (int $count) => match ($count) {
    0 => match ($size) { 'xs' => 'pe-2.5', 'md' => 'pe-4',   default => 'pe-4' },
    1 => match ($size) { 'xs' => 'pe-7',   'md' => 'pe-11',  default => 'pe-9' },
    2 => match ($size) { 'xs' => 'pe-11',  'md' => 'pe-18',  default => 'pe-14' },
    3 => match ($size) { 'xs' => 'pe-15',  'md' => 'pe-25',  default => 'pe-19' },
    4 => match ($size) { 'xs' => 'pe-19',  'md' => 'pe-32',  default => 'pe-24' },
    5 => match ($size) { 'xs' => 'pe-23',  'md' => 'pe-39',  default => 'pe-29' },
    6 => match ($size) { 'xs' => 'pe-27',  'md' => 'pe-46',  default => 'pe-34' },
    default => 'pe-4',
};

$iconClasses = Flux::classes()
    ->add($iconSizeClasses)
    ->add($attributes->pluck('icon:class'))
    ;

$inputLoadingClasses = Flux::classes()
    ->add($trailingPadding($countOfTrailingIcons + 1))
    ;

$classes = Flux::classes()
    ->add('w-full border block disabled:shadow-none dark:shadow-none')
    ->add('appearance-none')
    ->add('outline-none transition-all')
    ->add('shadow')
    ->add(match ($size) {
        default => 'text-sm rounded-full py-2',
        'md'    => 'text-sm rounded-full py-2.5',
        'xs'    => 'text-xs rounded-full py-1.5',
    })
    ->add(match ($hasLeadingIcon) {
        true  => $iconLeadingTextPadding,
        false => match ($size) { 'xs' => 'ps-3', default => 'ps-4' },
    })
    ->add($trailingPadding($countOfTrailingIcons))
    ->add(match ($variant) {
        'outline' => "bg-white dark:bg-slate-900 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50",
        'filled'  => "bg-slate-100 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900",
    })
    ->add(match ($variant) {
        'outline' => 'text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-slate-500 disabled:text-slate-400 dark:disabled:text-slate-500',
        'filled'  => 'text-slate-900 dark:text-white placeholder:text-slate-500 dark:placeholder:text-slate-400',
    })
    ->add(match ($variant) {
        'outline' => "border-slate-200 dark:border-slate-700 focus:border-{$colorTheme}-500 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
        'filled'  => "border-0 focus:ring-3 focus:ring-{$colorTheme}-200/50 dark:focus:ring-{$colorTheme}-500/20",
    })
    ->add(match ($variant) {
        'outline' => 'data-invalid:border-red-400 dark:data-invalid:border-red-400 data-invalid:ring-3 data-invalid:ring-red-300/40 dark:data-invalid:ring-red-400/30 disabled:data-invalid:border-red-400',
        'filled'  => 'data-invalid:border-red-400'
    })
    ->add($attributes->pluck('class:input'))
    ;
@endphp

<?php if ($type === 'file'): ?>
    <flux:with-field :$attributes :$name>
        <flux:input.file :$attributes :$name :$size />
    </flux:with-field>
<?php elseif ($as !== 'button'): ?>
    <flux:with-field :$attributes :$name>
        <div {{ $attributes->only('class')->class('w-full relative block group/input') }} data-flux-input>
            <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
                <div class="pointer-events-none absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 {{ $iconLeadingInset }} start-0 transition-colors group-focus-within:text-{{ $colorTheme }}-500 dark:group-focus-within:text-{{ $colorTheme }}-400">
                    <flux:icon :icon="$iconLeading" :variant="$iconVariant" :class="$iconClasses" />
                </div>
            <?php elseif ($iconLeading): ?>
                <div {{ $iconLeading->attributes->class("absolute top-0 bottom-0 border-s border-transparent flex items-center justify-center text-slate-400 dark:text-slate-500 {$iconLeadingInset} start-0 transition-colors group-focus-within:text-{$colorTheme}-500 dark:group-focus-within:text-{$colorTheme}-400") }}>
                    {{ $iconLeading }}
                </div>
            <?php endif; ?>

            <input
                type="{{ $type }}"
                {{ $attributes->except('class')->class($type === 'file' ? '' : $classes)->merge($inputAttributes->getAttributes()) }}
                <?php if (isset($name)): ?> name="{{ $name }}" <?php endif; ?>
                <?php if ($maskDynamic): ?> x-mask:dynamic="{{ $maskDynamic }}" @elseif ($mask) x-mask="{{ $mask }}" <?php endif; ?>
                <?php if (is_numeric($size)): ?> size="{{ $size }}" <?php endif; ?>
                @unblaze(scope: ['name' => $name ?? null, 'invalid' => $invalid ?? false])
                <?php if ($scope['invalid'] || ($scope['name'] && $errors->has($scope['name']))): ?>
                aria-invalid="true" data-invalid
                <?php endif; ?>
                @endunblaze
                data-flux-control
                data-flux-group-target
                <?php if($loading): ?> wire:loading.class="{{ $inputLoadingClasses }}" <?php endif; ?>
                <?php if($loading && $wireTarget): ?> wire:target="{{ $wireTarget }}" <?php endif; ?>
            >

            <?php if ($loading || $countOfTrailingIcons > 0): ?>
                <div class="absolute top-0 bottom-0 flex items-center gap-x-1.5 {{ $trailingInset }} end-0 text-slate-400 dark:text-slate-500">
                    <?php if ($loading): ?>
                        <flux:icon name="loading" :variant="$iconVariant" :class="$iconClasses" wire:loading :wire:target="$wireTarget" />
                    <?php endif; ?>
                    <?php if ($clearable): ?>
                        <flux:input.clearable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>
                    <?php if ($kbd): ?>
                        <span class="pointer-events-none last:pe-2">{{ $kbd }}</span>
                    <?php endif; ?>
                    <?php if ($expandable): ?>
                        <flux:input.expandable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>
                    <?php if ($copyable): ?>
                        <flux:input.copyable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>
                    <?php if ($viewable): ?>
                        <flux:input.viewable inset="left right" :$size :$iconVariant />
                    <?php endif; ?>
                    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
                        <?php
                            $trailingIconClasses = clone $iconClasses;
                            $trailingIconClasses->add('text-slate-400 dark:text-slate-500 pointer-events-none');
                        ?>
                        <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$trailingIconClasses" />
                    <?php elseif ($iconTrailing): ?>
                        {{ $iconTrailing }}
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </flux:with-field>
<?php else: ?>
    <button {{ $attributes->merge(['type' => 'button'])->class([$classes, 'w-full relative flex']) }}>
        <?php if (is_string($iconLeading) && $iconLeading !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 {{ $iconLeadingInset }} start-0">
                <flux:icon :icon="$iconLeading" :variant="$iconVariant" :class="$iconClasses" />
            </div>
        <?php elseif ($iconLeading): ?>
            <div {{ $iconLeading->attributes->class("absolute top-0 bottom-0 flex items-center justify-center text-slate-400 dark:text-slate-500 {$iconLeadingInset} start-0") }}>
                {{ $iconLeading }}
            </div>
        <?php endif; ?>

        <?php if ($attributes->has('placeholder')): ?>
            <div class="block self-center text-start flex-1 font-medium text-slate-400 dark:text-slate-500">
                {{ $attributes->get('placeholder') }}
            </div>
        <?php else: ?>
            <div class="text-start self-center flex-1 font-medium text-slate-800 dark:text-white">
                {{ $slot }}
            </div>
        <?php endif; ?>

        <?php if ($kbd): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 {{ $trailingInset }} end-0">
                {{ $kbd }}
            </div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 {{ $trailingInset }} end-0">
                <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$iconClasses" />
            </div>
        <?php elseif ($iconTrailing): ?>
            <div {{ $iconTrailing->attributes->class("absolute top-0 bottom-0 flex items-center justify-center text-xs text-slate-400 dark:text-slate-500 {$trailingInset} end-0") }}>
                {{ $iconTrailing }}
            </div>
        <?php endif; ?>
    </button>
<?php endif; ?>
