@props([
    'modal_name' => '',
    'action_hapus' => '',
    'title' => '',
    'description' => '',
])
{{-- Modal Hapus --}}
<div x-data="{
    show: false,
    id: null,
    init() {
        window.addEventListener('{{ $modal_name }}', (e) => {
            this.id = e.detail.id;
            this.show = true;
        });
    },
    hapus() {
        $wire.{{ $action_hapus }}(this.id)
            .then(() => { this.show = false; });
    }
}" x-show="show" x-transition.opacity
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4 backdrop-blur-md"
    x-cloak>
    <div class="w-full max-w-xs rounded-2xl border border-slate-200/90 bg-white/95 p-5 shadow-2xl backdrop-blur-2xl dark:border-white/10 dark:bg-[#070D18]/95"
        @click.outside="show = false">
        <div class="flex items-start gap-3">
            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-red-500/15 border border-red-500/20 text-red-500">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="mb-0.5 text-sm font-bold text-slate-900 dark:text-white">{{ $title }}</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400">{{ $description }}</p>
            </div>
        </div>
        <div class="mt-5 flex gap-2">
            <button @click="show = false"
                class="flex-1 cursor-pointer rounded-xl border border-slate-200/80 px-3 py-2 text-xs font-semibold text-slate-700 transition-colors hover:bg-slate-100 dark:border-white/10 dark:text-slate-300 dark:hover:bg-white/10">
                Batal
            </button>
            <button @click="hapus()"
                class="flex-1 cursor-pointer rounded-xl bg-red-600 hover:bg-red-500 px-3 py-2 text-xs font-bold text-white transition-colors shadow-md shadow-red-900/20">
                <span wire:loading.remove wire:target="{{ $action_hapus }}">
                    Ya, Hapus
                </span>
                <span wire:loading wire:target="{{ $action_hapus }}">
                    Loading...
                </span>
            </button>
        </div>
    </div>
</div>
