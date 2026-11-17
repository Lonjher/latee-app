@blaze(fold: true, unsafe: ['icon:variant', 'icon:trailing'])

@php $iconVariant ??= $attributes->pluck('icon:variant'); @endphp
@php $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp

@props([
    'iconVariant' => 'micro',
    'iconTrailing' => null,
    'initials' => null,
    'chevron' => true,
    'circle' => null,
    'avatar' => null,
    'name' => null,
])

@php
$iconTrailing = $iconTrailing ?? ($chevron ? 'chevron-down' : null);

$iconClasses = Flux::classes('text-slate-400 dark:text-slate-500 group-hover:text-slate-700 dark:group-hover:text-white')
    ->add($iconVariant === 'outline' ? 'size-4' : '');

$classes = Flux::classes()
    ->add('group flex items-center')
    ->add('rounded-full has-data-[circle=true]:rounded-full')
    ->add('rounded-lg has-data-[circle=true]:rounded-full')
    ->add('[ui-dropdown>&]:w-full')
    ->add('p-1 hover:bg-slate-100 dark:hover:bg-slate-800/60')
    ;
@endphp

<button type="button" {{ $attributes->class($classes) }} data-flux-sidebar-profile>
    <div class="shrink-0">
        <?php if ($avatar instanceof \Illuminate\View\ComponentSlot): ?>
            {{ $avatar }}
        <?php else: ?>
            <?php $avatarAttributes = Flux::attributesAfter('avatar:', $attributes, ['src' => $avatar, 'size' => 'sm', 'circle' => $circle, 'name' => $name, 'initials' => $initials]); ?>
            <flux:avatar :attributes="$avatarAttributes" />
        <?php endif; ?>
    </div>

    <?php if ($name): ?>
        <span class="in-data-flux-sidebar-collapsed-desktop:hidden mx-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white font-medium truncate">
            {{ $name }}
        </span>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <div class="in-data-flux-sidebar-collapsed-desktop:hidden shrink-0 ms-auto size-8 flex justify-center items-center">
            <flux:icon :icon="$iconTrailing" :variant="$iconVariant" :class="$iconClasses" />
        </div>
    <?php elseif ($iconTrailing): ?>
        {{ $iconTrailing }}
    <?php endif; ?>
</button>
