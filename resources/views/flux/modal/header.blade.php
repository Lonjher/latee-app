@blaze(fold: true)

@props([
    'title' => null,
    'description' => null,
    'icon' => null,
    'closable' => true,
])

<header {{ $attributes->class('
    relative flex flex-shrink-0 items-start justify-between gap-3 overflow-hidden
    border-b border-slate-200/80 p-4 pb-3.5
    bg-gradient-to-r from-emerald-500/10 via-teal-500/5 to-transparent
    dark:border-white/10
    dark:from-emerald-500/15 dark:via-teal-500/10 dark:to-transparent
') }}>
    {{-- Glow halus di sudut kanan atas --}}
    <div class="pointer-events-none absolute -right-10 -top-10 size-32 rounded-full bg-emerald-500/15 blur-2xl dark:bg-emerald-500/20"></div>
    <div class="pointer-events-none absolute -left-10 -bottom-10 size-32 rounded-full bg-blue-500/10 blur-2xl dark:bg-blue-500/15"></div>

    {{-- Content --}}
    <div class="relative flex min-w-0 flex-1 items-start gap-2.5">
        @if ($icon)
            <div class="flex size-8 shrink-0 items-center justify-center rounded-xl bg-white/80 text-emerald-600 shadow-xs ring-1 ring-emerald-500/20 backdrop-blur-sm dark:bg-white/10 dark:text-emerald-400 dark:ring-white/10">
                <flux:icon :name="$icon" class="size-4" />
            </div>
        @endif

        <div class="min-w-0 flex-1">
            @if ($title)
                <h3 class="text-sm font-bold text-slate-900 dark:text-white">
                    {{ $title }}
                </h3>
            @endif

            @if ($description)
                <p class="mt-0.5 text-[11px] leading-normal text-slate-500 dark:text-slate-400">
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
                class="relative shrink-0 cursor-pointer rounded-full p-1 text-slate-400 transition hover:bg-slate-100 hover:text-slate-700 dark:text-slate-400 dark:hover:bg-white/10 dark:hover:text-white">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </flux:modal.close>
    @endif
</header>
