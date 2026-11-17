<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'groups',
    'wireModel' => 'form.permissions',
    'selected' => [],
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
    'groups',
    'wireModel' => 'form.permissions',
    'selected' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $totalCount = $groups->sum(fn ($g) => $g['permissions']->count());
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($groups->isEmpty()): ?>
    <div class="rounded-xl border border-dashed border-stone-300 bg-stone-50 px-4 py-8 text-center dark:border-stone-700 dark:bg-stone-800/30">
        <svg class="mx-auto size-8 text-stone-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <p class="mt-2 text-xs font-medium text-stone-600 dark:text-stone-400">Belum ada permission terdaftar</p>
        <p class="mt-0.5 text-[11px] text-stone-500 dark:text-stone-500">Tambahkan permission via seeder terlebih dahulu.</p>
    </div>
<?php else: ?>
    <div
        x-data="{
            count: <?php echo e(count($selected)); ?>,
            updateCount() {
                this.count = this.$el.querySelectorAll('input[type=checkbox]:checked').length;
            },
            toggleGroup(selector) {
                const boxes = [...this.$el.querySelectorAll(selector + ' input[type=checkbox]')];
                const check = ! boxes.every(b => b.checked);
                boxes.forEach(b => {
                    b.checked = check;
                    b.dispatchEvent(new Event('change', { bubbles: true }));
                });
                this.updateCount();
            },
            toggleAll() {
                const boxes = [...this.$el.querySelectorAll('input[type=checkbox]')];
                const check = ! boxes.every(b => b.checked);
                boxes.forEach(b => {
                    b.checked = check;
                    b.dispatchEvent(new Event('change', { bubbles: true }));
                });
                this.updateCount();
            }
        }"
        x-on:change="updateCount()"
        class="space-y-2"
    >
        <div class="flex items-center justify-between gap-2 rounded-xl border border-stone-200 bg-stone-50 px-3 py-2 dark:border-stone-700 dark:bg-stone-800/40">
            <div class="text-[11px] font-medium text-stone-600 dark:text-stone-400">
                <span class="text-sm font-bold text-sage-600 dark:text-sage-400" x-text="count"><?php echo e(count($selected)); ?></span>
                <span class="text-stone-400 dark:text-stone-500"> / <?php echo e($totalCount); ?> permission</span>
            </div>
            <button
                type="button"
                x-on:click="toggleAll()"
                class="cursor-pointer rounded-full border border-stone-200 bg-white px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-300 dark:hover:bg-stone-700"
            >
                Toggle Semua
            </button>
        </div>

        <div class="max-h-80 space-y-2 overflow-y-auto pe-1">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="overflow-hidden rounded-xl border border-stone-200 bg-white dark:border-stone-700 dark:bg-stone-900">
                    <div class="flex items-center justify-between border-b border-stone-100 bg-stone-50/50 px-3 py-1.5 dark:border-stone-800 dark:bg-stone-800/30">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-stone-500 dark:text-stone-400">
                            <?php echo e(Str::headline($group['name'])); ?>

                        </span>
                        <button
                            type="button"
                            x-on:click="toggleGroup('[data-group=<?php echo e($group['name']); ?>]')"
                            class="cursor-pointer rounded text-[10px] font-medium text-sage-600 transition hover:text-sage-800 dark:text-sage-400 dark:hover:text-sage-300"
                        >
                            Toggle
                        </button>
                    </div>
                    <div data-group="<?php echo e($group['name']); ?>" class="grid grid-cols-2 gap-1 p-2">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $group['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <label class="flex cursor-pointer items-center gap-1.5 rounded-md px-1.5 py-1 text-[11px] text-stone-700 transition hover:bg-stone-50 dark:text-stone-300 dark:hover:bg-stone-800/50">
                                <input
                                    type="checkbox"
                                    wire:model="<?php echo e($wireModel); ?>"
                                    value="<?php echo e($perm->name); ?>"
                                    class="size-3.5 cursor-pointer rounded border-stone-300 text-sage-600 focus:ring-2 focus:ring-sage-500/50 dark:border-stone-600 dark:bg-stone-800 dark:focus:ring-offset-stone-900"
                                />
                                <span class="truncate"><?php echo e(Str::headline($perm->name)); ?></span>
                            </label>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/components/permission-matrix.blade.php ENDPATH**/ ?>