@blaze(fold: true)

@props([
    'title' => null,
    'description' => null,
    'icon' => null,
    'closable' => true,
])

<header {{ $attributes->class('
    relative flex flex-shrink-0 items-start justify-between gap-3 overflow-hidden
    border-b border-stone-200/60 p-4 pb-3
    bg-gradient-to-r from-sage-50/80 via-brand-50/60 to-sage-50/80
    bg-[length:200%_200%] animate-gradient-x
    dark:border-stone-800/60
    dark:from-sage-950/40 dark:via-brand-950/30 dark:to-sage-950/40
') }}>
    {{-- Glow halus di sudut kanan atas --}}
    <div class="pointer-events-none absolute -right-10 -top-10 size-32 rounded-full bg-sage-200/40 blur-2xl dark:bg-sage-500/10"></div>
    <div class="pointer-events-none absolute -left-10 -bottom-10 size-32 rounded-full bg-brand-200/30 blur-2xl dark:bg-brand-500/10"></div>

    {{-- Content --}}
    <div class="relative flex min-w-0 flex-1 items-start gap-2.5">
        @if ($icon)
            <div class="flex size-8 shrink-0 items-center justify-center rounded-xl bg-white/60 text-sage-600 shadow-sm ring-1 ring-white/40 backdrop-blur-sm dark:bg-stone-800/50 dark:text-sage-400 dark:ring-stone-700/40">
                <flux:icon :name="$icon" class="size-4" />
            </div>
        @endif

        <div class="min-w-0 flex-1">
            @if ($title)
                <h3 class="text-sm font-semibold text-stone-800 dark:text-stone-100">
                    {{ $title }}
                </h3>
            @endif

            @if ($description)
                <p class="mt-0.5 text-[11px] leading-normal text-stone-600/80 dark:text-stone-400/90">
                    {{ $description }}
                </p>
            @endif

            @if (! $slot->isEmpty())
                <div class="mt-1">{{ $slot }}</div>
            @endif
        </div>
    </div>

    @if ($closable)
        <flux:modal.close>
            <button type="button" title="Tutup"
                class="relative shrink-0 cursor-pointer rounded-full p-1 text-stone-500/80 transition hover:bg-white/70 hover:text-stone-800 dark:text-stone-400/80 dark:hover:bg-stone-800/60 dark:hover:text-stone-100">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </flux:modal.close>
    @endif
</header>
