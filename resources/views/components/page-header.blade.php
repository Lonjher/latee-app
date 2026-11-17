@props([
    'title'   => '',
    'leading' => null,
    'back'    => null,
])

<div {{ $attributes->merge(['class' => 'flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between']) }}>
    <div class="flex min-w-0 items-start gap-3">

        {{-- Tombol kembali (opsional) --}}
        @if ($back)
            <a href="{{ $back }}"
                class="mt-0.5 shrink-0 rounded-full border border-stone-200 bg-white p-2 text-stone-500 transition-colors hover:bg-stone-50 hover:text-stone-800 dark:border-stone-700 dark:bg-stone-900 dark:text-stone-400 dark:hover:bg-stone-800 dark:hover:text-stone-100"
                title="Kembali">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
        @endif

        <div class="min-w-0">
            {{-- Judul: minimal 18px, responsif naik ke 20px --}}
            <h1 class="text-lg font-bold tracking-tight text-stone-800 dark:text-stone-100 sm:text-xl">
                {{ $title }}
            </h1>

            {{-- Leading: 14px (text-sm) --}}
            @if ($leading)
                <p class="mt-1 text-sm leading-relaxed text-stone-500 dark:text-stone-400">
                    {{ $leading }}
                </p>
            @endif

            {{-- Slot tambahan (badge, breadcrumb, dsb) — minimal 14px --}}
            @if (! $slot->isEmpty())
                <div class="mt-1.5 text-sm text-stone-500 dark:text-stone-400">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </div>

    {{-- Slot aksi kanan (opsional) --}}
    @if (isset($actions))
        <div class="flex shrink-0 items-center gap-2 text-sm">
            {{ $actions }}
        </div>
    @endif
</div>
