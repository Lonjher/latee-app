@props([
    'groups',
    'wireModel' => 'form.permissions',
    'selected' => [],
])

@php
    $totalCount = $groups->sum(fn ($g) => $g['permissions']->count());
@endphp

@if ($groups->isEmpty())
    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 px-4 py-8 text-center dark:border-white/10 dark:bg-white/5">
        <svg class="mx-auto size-8 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <p class="mt-2 text-xs font-semibold text-slate-700 dark:text-slate-300">Belum ada permission terdaftar</p>
        <p class="mt-0.5 text-[11px] text-slate-500 dark:text-slate-400">Tambahkan permission via seeder terlebih dahulu.</p>
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
        <div class="flex items-center justify-between gap-2 rounded-xl border border-slate-200/80 bg-slate-50/80 px-3.5 py-2 dark:border-white/10 dark:bg-white/5 backdrop-blur-sm">
            <div class="text-[11px] font-medium text-slate-600 dark:text-slate-400">
                <span class="text-sm font-bold text-emerald-600 dark:text-emerald-400" x-text="count">{{ count($selected) }}</span>
                <span class="text-slate-500 dark:text-slate-400"> / {{ $totalCount }} permission</span>
            </div>
            <button
                type="button"
                x-on:click="toggleAll()"
                class="cursor-pointer rounded-full border border-slate-200/80 bg-white/80 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-slate-700 transition hover:bg-white dark:border-white/15 dark:bg-white/10 dark:text-slate-200 dark:hover:bg-white/20"
            >
                Toggle Semua
            </button>
        </div>

        <div class="max-h-80 space-y-2 overflow-y-auto pe-1">
            @foreach ($groups as $group)
                <div class="overflow-hidden rounded-xl border border-slate-200/80 bg-white/90 dark:border-white/10 dark:bg-[#0B1329]/90 backdrop-blur-sm">
                    <div class="flex items-center justify-between border-b border-slate-200/60 bg-slate-100/70 px-3 py-1.5 dark:border-white/10 dark:bg-white/5">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                            {{ Str::headline($group['name']) }}
                        </span>
                        <button
                            type="button"
                            x-on:click="toggleGroup('[data-group={{ $group['name'] }}]')"
                            class="cursor-pointer rounded text-[10px] font-semibold text-emerald-600 transition hover:text-emerald-700 dark:text-emerald-400 dark:hover:text-emerald-300"
                        >
                            Toggle
                        </button>
                    </div>
                    <div data-group="{{ $group['name'] }}" class="grid grid-cols-2 gap-1 p-2">
                        @foreach ($group['permissions'] as $perm)
                            <label class="flex cursor-pointer items-center gap-1.5 rounded-lg px-2 py-1 text-[11px] text-slate-700 transition hover:bg-emerald-500/5 dark:text-slate-300 dark:hover:bg-white/5">
                                <input
                                    type="checkbox"
                                    wire:model="{{ $wireModel }}"
                                    value="{{ $perm->name }}"
                                    class="size-3.5 cursor-pointer rounded border-slate-300 text-emerald-600 focus:ring-2 focus:ring-emerald-500/50 dark:border-white/20 dark:bg-white/10"
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
