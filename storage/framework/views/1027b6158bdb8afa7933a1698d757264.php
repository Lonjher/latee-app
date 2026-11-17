<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'modal_name' => '',
    'action_hapus' => '',
    'title' => '',
    'description' => '',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'modal_name' => '',
    'action_hapus' => '',
    'title' => '',
    'description' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div x-data="{
    show: false,
    id: null,
    init() {
        window.addEventListener('<?php echo e($modal_name); ?>', (e) => {
            this.id = e.detail.id;
            this.show = true;
        });
    },
    hapus() {
        $wire.<?php echo e($action_hapus); ?>(this.id)
            .then(() => { this.show = false; });
    }
}" x-show="show" x-transition.opacity
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 backdrop-blur-sm dark:bg-black/60"
    x-cloak>
    <div class="w-full max-w-xs rounded-xl border border-stone-200 bg-white p-5 shadow-2xl dark:border-stone-800 dark:bg-stone-900"
        @click.outside="show = false">
        <div class="flex items-start gap-3">
            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-red-50 dark:bg-red-950">
                <svg class="h-4 w-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="mb-0.5 text-sm font-semibold text-stone-800 dark:text-stone-100"><?php echo e($title); ?>

                </h3>
                <p class="text-xs text-stone-500 dark:text-stone-400"><?php echo e($description); ?></p>
            </div>
        </div>
        <div class="mt-5 flex gap-2">
            <button @click="show = false"
                class="flex-1 cursor-pointer rounded-lg border border-stone-200 px-3 py-2 text-xs font-medium text-stone-700 transition-colors hover:bg-stone-50 dark:border-stone-700 dark:text-stone-300 dark:hover:bg-stone-800">
                Batal
            </button>
            <button @click="hapus()"
                class="flex-1 cursor-pointer rounded-lg bg-red-500 px-3 py-2 text-xs font-semibold text-white transition-colors hover:bg-red-600">
                <span wire:loading.remove wire:target="<?php echo e($action_hapus); ?>">
                    Ya, Hapus
                </span>
                <span wire:loading wire:target="<?php echo e($action_hapus); ?>">
                    Loading...
                </span>
            </button>
        </div>
    </div>
</div>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/components/modal-hapus.blade.php ENDPATH**/ ?>