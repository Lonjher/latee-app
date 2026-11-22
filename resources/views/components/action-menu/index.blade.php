@props([
    'width' => 'w-auto',
])

<div
    x-data="{
        open: false,
        top: 0,
        toggle() {
            this.open = ! this.open;
            if (! this.open) return;

            requestAnimationFrame(() => {
                const rect = this.$refs.trigger.getBoundingClientRect();
                this.top = rect.bottom + 6;
            });
        }
    }"
    class="inline-flex items-center justify-end"
>
    {{-- Trigger --}}
    <button
        x-ref="trigger"
        @click="toggle()"
        type="button"
        {{ $attributes->class('cursor-pointer rounded-full p-1.5 text-stone-400 transition-colors hover:bg-stone-100 hover:text-stone-700 focus:outline-none dark:hover:bg-stone-800 dark:hover:text-stone-200') }}
        title="Menu Aksi"
    >
        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
        </svg>
    </button>

    {{-- Menu (fixed ke kanan viewport) --}}
    <template x-teleport="body">
        <div
            x-show="open"
            x-transition:enter="transition ease-[cubic-bezier(0.16,1,0.3,1)] duration-300"
            x-transition:enter-start="opacity-0 scale-90 translate-x-6"
            x-transition:enter-end="opacity-100 scale-100 translate-x-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-x-0"
            x-transition:leave-end="opacity-0 scale-90 translate-x-6"
            @click.outside="open = false"
            @keydown.escape.window="open = false"
            :style="`position: fixed; top: ${top}px; right: 0.75rem; z-index: 9999;`"
            class="{{ $width }} origin-top-right overflow-hidden rounded-2xl border border-slate-200/90 bg-white/95 backdrop-blur-xl shadow-2xl dark:border-white/10 dark:bg-[#050B14]/95 dark:shadow-2xl ring-1 ring-black/5 dark:ring-white/5"
            style="display: none;"
        >
            <div class="space-y-1 p-1.5" @click="open = false">
                {{ $slot }}
            </div>
        </div>
    </template>
</div>
