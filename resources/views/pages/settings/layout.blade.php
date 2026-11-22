<div class="glass-card relative overflow-hidden rounded-2xl p-5 sm:p-7">
    <div class="flex items-start max-md:flex-col gap-6 md:gap-10">
        <div class="w-full pb-2 md:w-[220px] shrink-0">
            <flux:navlist aria-label="{{ __('Settings') }}" class="space-y-1">
                <flux:navlist.item icon="user" :href="route('profile.edit')" :current="request()->routeIs('profile.edit')" wire:navigate>{{ __('Profile') }}</flux:navlist.item>
                <flux:navlist.item icon="shield-check" :href="route('security.edit')" :current="request()->routeIs('security.edit')" wire:navigate>{{ __('Security') }}</flux:navlist.item>
                <flux:navlist.item icon="paint-brush" :href="route('appearance.edit')" :current="request()->routeIs('appearance.edit')" wire:navigate>{{ __('Appearance') }}</flux:navlist.item>
            </flux:navlist>
        </div>

        <div class="hidden md:block w-px self-stretch bg-slate-200/80 dark:bg-white/10"></div>
        <flux:separator class="md:hidden w-full" />

        <div class="flex-1 self-stretch min-w-0">
            <flux:heading class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">{{ $heading ?? '' }}</flux:heading>
            <flux:subheading class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-0.5">{{ $subheading ?? '' }}</flux:subheading>

            <div class="mt-5 w-full max-w-xl">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
