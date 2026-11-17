@props([
    'groups',
    'wireModel' => 'form.permissions',
    'selected' => [],
])

@php
    $totalCount = $groups->sum(fn ($g) => $g['permissions']->count());
@endphp

@if ($groups->isEmpty())
    <div class="rounded-xl border border-dashed border-stone-300 bg-stone-50 px-4 py-8 text-center dark:border-stone-700 dark:bg-stone-800/30">
        <svg class="mx-auto size-8 text-stone-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <p class="mt-2 text-xs font-medium text-stone-600 dark:text-stone-400">Belum ada permission terdaftar</p>
        <p class="mt-0.5 text-[11px] text-stone-500 dark:text-stone-500">Tambahkan permission via seeder terlebih dahulu.</p>
    </div>
@else
    <div
        x-data="{
            count: {{ count($selected) }},
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
                <span class="text-sm font-bold text-sage-600 dark:text-sage-400" x-text="count">{{ count($selected) }}</span>
                <span class="text-stone-400 dark:text-stone-500"> / {{ $totalCount }} permission</span>
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
            @foreach ($groups as $group)
                <div class="overflow-hidden rounded-xl border border-stone-200 bg-white dark:border-stone-700 dark:bg-stone-900">
                    <div class="flex items-center justify-between border-b border-stone-100 bg-stone-50/50 px-3 py-1.5 dark:border-stone-800 dark:bg-stone-800/30">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-stone-500 dark:text-stone-400">
                            {{ Str::headline($group['name']) }}
                        </span>
                        <button
                            type="button"
                            x-on:click="toggleGroup('[data-group={{ $group['name'] }}]')"
                            class="cursor-pointer rounded text-[10px] font-medium text-sage-600 transition hover:text-sage-800 dark:text-sage-400 dark:hover:text-sage-300"
                        >
                            Toggle
                        </button>
                    </div>
                    <div data-group="{{ $group['name'] }}" class="grid grid-cols-2 gap-1 p-2">
                        @foreach ($group['permissions'] as $perm)
                            <label class="flex cursor-pointer items-center gap-1.5 rounded-md px-1.5 py-1 text-[11px] text-stone-700 transition hover:bg-stone-50 dark:text-stone-300 dark:hover:bg-stone-800/50">
                                <input
                                    type="checkbox"
                                    wire:model="{{ $wireModel }}"
                                    value="{{ $perm->name }}"
                                    class="size-3.5 cursor-pointer rounded border-stone-300 text-sage-600 focus:ring-2 focus:ring-sage-500/50 dark:border-stone-600 dark:bg-stone-800 dark:focus:ring-offset-stone-900"
                                />
                                <span class="truncate">{{ Str::headline($perm->name) }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
