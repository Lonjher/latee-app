@blaze(fold: true, unsafe: ['icon:trailing', 'icon:variant'])

@php $iconTrailing ??= $attributes->pluck('icon:trailing'); @endphp
@php $iconVariant ??= $attributes->pluck('icon:variant'); @endphp

@props([
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'expandable' => false,
    'expanded' => true,
    'heading' => null,
    'icon' => null,
])

<?php if ($expandable && $heading): ?>
    <?php if ($icon): ?>
        <ui-disclosure {{ $attributes->class('group/disclosure in-data-flux-sidebar-collapsed-desktop:hidden') }} @if ($expanded === true) open @endif data-flux-sidebar-group>
            {{-- ✅ rounded-full --}}
            <button type="button" class="border-1 border-transparent w-full min-w-0 h-8 in-data-flux-sidebar-on-mobile:h-10 flex items-center group/disclosure-button my-px rounded-full hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors duration-200">
                <div class="px-3">
                    <?php if (is_string($icon) && $icon !== ''): ?>
                        <flux:icon :icon="$icon" :variant="$iconVariant" class="size-4" />
                    <?php else: ?>
                        {{ $icon }}
                    <?php endif; ?>
                </div>

                <span class="flex-1 text-left rtl:text-right text-sm font-medium truncate">{{ $heading }}</span>

                <div class="ps-3 pe-2.5">
                    <flux:icon.chevron-down class="size-3! hidden group-data-open/disclosure-button:block" />
                    <flux:icon.chevron-right class="size-3! block group-data-open/disclosure-button:hidden rtl:rotate-180" />
                </div>
            </button>

            <div class="relative min-w-0 hidden data-open:block ps-7" @if ($expanded === true) data-open @endif>
                <div class="absolute inset-y-[3px] w-px bg-slate-200 dark:bg-slate-700 start-0 ms-5"></div>

                <div class="flex flex-col">
                    {{ $slot }}
                </div>
            </div>
        </ui-disclosure>

        <flux:dropdown hover class="in-data-flux-sidebar-on-mobile:hidden not-in-data-flux-sidebar-collapsed-desktop:hidden" position="right" align="start" data-flux-sidebar-group-dropdown>
            <button type="button" class="border-1 border-transparent w-full px-3 in-data-flux-menu:px-2 h-8 flex gap-3 items-center group/disclosure-button my-px rounded-full in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-menu:w-10 in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-menu:justify-center hover:bg-slate-100 dark:hover:bg-slate-800/60 in-data-flux-menu:hover:bg-slate-50 dark:in-data-flux-menu:hover:bg-slate-700 text-slate-500 in-data-flux-menu:text-slate-800 hover:text-slate-900 dark:text-slate-400 in-data-flux-menu:dark:text-white dark:hover:text-white">
                <?php if ($icon): ?>
                    <div class="relative">
                        <?php if (is_string($icon) && $icon !== ''): ?>
                            <flux:icon :icon="$icon" :variant="$iconVariant" class="in-data-flux-menu:text-slate-400 in-data-flux-menu:dark:text-slate-500 in-data-flux-menu:[[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current size-4" />
                        <?php else: ?>
                            {{ $icon }}
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <span class="hidden in-data-flux-menu:block flex-1 text-start text-sm font-medium leading-none text-slate-800 dark:text-white">{{ $heading }}</span>

                <div class="hidden in-data-flux-menu:block">
                    <flux:icon.chevron-right :variant="$iconVariant" class="ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current rtl:hidden" />
                    <flux:icon.chevron-left :variant="$iconVariant" class="ms-auto size-4 text-slate-400 [[data-flux-sidebar-group-dropdown]>button:hover_&]:text-current hidden rtl:inline" />
                </div>
            </button>

            <flux:menu>
                <flux:menu.group :$heading>
                    {{ $slot }}
                </flux:menu.group>
            </flux:menu>
        </flux:dropdown>
    <?php else: ?>
        <ui-disclosure {{ $attributes->class('group/disclosure in-data-flux-sidebar-collapsed-desktop:hidden') }} @if ($expanded === true) open @endif data-flux-sidebar-group>
            <button type="button" class="border-1 border-transparent w-full min-w-0 h-8 in-data-flux-sidebar-on-mobile:h-10 flex items-center group/disclosure-button my-px rounded-full hover:bg-slate-100 dark:hover:bg-slate-800/60 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-colors duration-200">
                <div class="ps-3.5 pe-3.5">
                    <flux:icon.chevron-down class="size-3! hidden group-data-open/disclosure-button:block" />
                    <flux:icon.chevron-right class="size-3! block group-data-open/disclosure-button:hidden rtl:rotate-180" />
                </div>

                <span class="text-sm font-medium truncate">{{ $heading }}</span>
            </button>

            <div class="relative min-w-0 hidden data-open:block ps-7" @if ($expanded === true) data-open @endif>
                <div class="absolute inset-y-[3px] w-px bg-slate-200 dark:bg-slate-700 start-0 ms-5"></div>

                <div class="flex flex-col">
                    {{ $slot }}
                </div>
            </div>
        </ui-disclosure>
    <?php endif; ?>

<?php elseif ($heading): ?>
    <div {{ $attributes->class('flex flex-col in-data-flux-sidebar-collapsed-desktop:hidden') }} data-flux-sidebar-group>
        <div class="px-3 py-2 text-[11px] uppercase tracking-wider text-slate-500 dark:text-slate-500 font-semibold leading-none truncate">{{ $heading }}</div>

        <div class="flex flex-col min-w-0">
            {{ $slot }}
        </div>
    </div>
<?php else: ?>
    <div {{ $attributes->class('flex flex-col in-data-flux-sidebar-collapsed-desktop:hidden') }} data-flux-sidebar-group>
        {{ $slot }}
    </div>
<?php endif; ?>
