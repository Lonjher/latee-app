<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\Setting;

new #[Title('Pengaturan Aplikasi')] class extends Component {
    use WithPagination;

    public bool $registrationOpen = false;
    public string $search = '';

    // Modal state untuk tambah/edit custom setting
    public bool $showModal = false;
    public ?int $editingId = null;
    public string $settingName = '';
    public string $settingValue = '';

    public function mount(): void
    {
        abort_unless(auth()->user()?->hasRole('admin') || auth()->user()?->can('setting.manage'), 403);
        $this->loadRegistrationSetting();
    }

    public function loadRegistrationSetting(): void
    {
        $this->registrationOpen = Setting::isTrue('registration_open', false);
    }

    public function toggleRegistration(): void
    {
        $this->registrationOpen = ! $this->registrationOpen;
        $this->saveRegistrationSetting();
    }

    public function updatedRegistrationOpen(): void
    {
        $this->saveRegistrationSetting();
    }

    protected function saveRegistrationSetting(): void
    {
        $val = $this->registrationOpen ? '1' : '0';
        Setting::set('registration_open', $val);

        $statusText = $this->registrationOpen ? 'DIBUKA (value = 1)' : 'DITUTUP (value = 0)';
        session()->flash('success', "Pengaturan \"registration_open\" berhasil diperbarui menjadi: {$statusText}.");
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->reset('search');
        $this->resetPage();
    }

    public function openAddModal(): void
    {
        $this->reset(['editingId', 'settingName', 'settingValue']);
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $setting = Setting::findOrFail($id);
        $this->editingId = $setting->id;
        $this->settingName = $setting->name;
        $this->settingValue = (string) $setting->value;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->reset(['editingId', 'settingName', 'settingValue']);
    }

    public function saveSetting(): void
    {
        $this->validate([
            'settingName'  => 'required|string|max:190|regex:/^[a-zA-Z0-9_\-]+$/',
            'settingValue' => 'nullable|string',
        ], [
            'settingName.required' => 'Nama setting wajib diisi.',
            'settingName.regex'    => 'Nama setting hanya boleh berisi huruf, angka, garis bawah (_), dan minus (-).',
        ]);

        $name = strtolower(trim($this->settingName));

        if (! $this->editingId) {
            if (Setting::where('name', $name)->exists()) {
                $this->addError('settingName', "Setting dengan nama \"{$name}\" sudah ada.");
                return;
            }
            Setting::create([
                'name'  => $name,
                'value' => $this->settingValue,
            ]);
            session()->flash('success', "Setting \"{$name}\" berhasil ditambahkan.");
        } else {
            $setting = Setting::findOrFail($this->editingId);
            if (Setting::where('name', $name)->where('id', '!=', $this->editingId)->exists()) {
                $this->addError('settingName', "Setting dengan nama \"{$name}\" sudah digunakan.");
                return;
            }
            $setting->update([
                'name'  => $name,
                'value' => $this->settingValue,
            ]);
            session()->flash('success', "Setting \"{$name}\" berhasil diperbarui.");
        }

        if ($name === 'registration_open') {
            $this->loadRegistrationSetting();
        }

        $this->closeModal();
    }

    public function toggleSettingValue(int $id): void
    {
        $setting = Setting::findOrFail($id);
        $currentVal = (string) $setting->value;

        // Toggle jika bernilai boolean-like
        if (in_array(strtolower($currentVal), ['1', 'true', 'on', 'yes'], true)) {
            $newVal = '0';
        } else {
            $newVal = '1';
        }

        $setting->update(['value' => $newVal]);

        if ($setting->name === 'registration_open') {
            $this->loadRegistrationSetting();
        }

        session()->flash('success', "Nilai setting \"{$setting->name}\" berhasil diubah menjadi {$newVal}.");
    }

    public function deleteSetting(int $id): void
    {
        $setting = Setting::findOrFail($id);
        $name = $setting->name;
        $setting->delete();

        if ($name === 'registration_open') {
            $this->loadRegistrationSetting();
        }

        session()->flash('success', "Setting \"{$name}\" berhasil dihapus.");
        $this->resetPage();
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total_settings' => Setting::count(),
            'is_registration_open' => Setting::isTrue('registration_open', false),
            'last_updated' => Setting::latest('updated_at')->first()?->updated_at?->diffForHumans() ?? 'Belum ada data',
        ];
    }

    public function with()
    {
        $settings = Setting::query()
            ->when($this->search, function ($q) {
                $term = '%' . trim($this->search) . '%';
                $q->where('name', 'like', $term)->orWhere('value', 'like', $term);
            })
            ->orderByRaw("CASE WHEN name = 'registration_open' THEN 0 ELSE 1 END, name ASC")
            ->paginate(10);

        return [
            'settings' => $settings,
        ];
    }
};
?>

<div class="space-y-4 w-full">

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- PAGE HEADER                                         --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <div class="glass-card relative overflow-hidden rounded-2xl p-4 sm:p-5">
        <x-page-header
            title="Pengaturan Aplikasi"
            leading="Kelola konfigurasi sistem global, parameter aplikasi, dan status operasional Annuqayah Latee" />
    </div>

    {{-- Flash Notifications --}}
    @if (session('success'))
        <div class="bg-emerald-500/10 border-emerald-500/20 text-emerald-700 dark:text-emerald-300 flex items-center justify-between gap-2.5 rounded-xl border px-4 py-3 text-xs backdrop-blur-md">
            <div class="flex items-center gap-2.5">
                <svg class="size-4 shrink-0 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="flex items-center gap-2.5 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-xs text-red-700 dark:text-red-300 backdrop-blur-md">
            <svg class="size-4 shrink-0 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>
            <span class="font-semibold">{{ session('error') }}</span>
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- STATS CARDS                                         --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
        {{-- Stat 1: Status PSB --}}
        <div class="glass-card rounded-2xl p-4 sm:p-5 flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status PSB</span>
                <div class="flex items-center gap-2 pt-0.5">
                    @if($this->stats['is_registration_open'])
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-base sm:text-lg font-extrabold text-emerald-600 dark:text-emerald-400">Pendaftaran Dibuka</span>
                    @else
                        <span class="h-2.5 w-2.5 rounded-full bg-slate-400 dark:bg-slate-600"></span>
                        <span class="text-base sm:text-lg font-extrabold text-slate-600 dark:text-slate-400">Pendaftaran Ditutup</span>
                    @endif
                </div>
            </div>
            <div class="w-11 h-11 rounded-xl flex items-center justify-center {{ $this->stats['is_registration_open'] ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20' : 'bg-slate-500/10 text-slate-500 border border-slate-500/20' }}">
                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            </div>
        </div>

        {{-- Stat 2: Total Pengaturan --}}
        <div class="glass-card rounded-2xl p-4 sm:p-5 flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Parameter</span>
                <div class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white">
                    {{ $this->stats['total_settings'] }}
                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">item</span>
                </div>
            </div>
            <div class="w-11 h-11 rounded-xl bg-teal-500/10 text-teal-600 dark:text-teal-400 border border-teal-500/20 flex items-center justify-center">
                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </div>
        </div>

        {{-- Stat 3: Pembaruan Terakhir --}}
        <div class="glass-card rounded-2xl p-4 sm:p-5 flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[11px] font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Terakhir Diperbarui</span>
                <div class="text-sm sm:text-base font-bold text-slate-900 dark:text-white">
                    {{ $this->stats['last_updated'] }}
                </div>
            </div>
            <div class="w-11 h-11 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/20 flex items-center justify-center">
                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- UTAMA: SWITCH REGISTRATION OPEN                     --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <div class="glass-card rounded-2xl p-5 sm:p-6 border border-emerald-500/20 dark:border-emerald-400/20 shadow-md">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-5">
            <div class="space-y-1.5 max-w-2xl">
                <div class="inline-flex items-center gap-2 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider {{ $registrationOpen ? 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30' : 'bg-slate-500/15 text-slate-600 dark:text-slate-400 border border-slate-500/30' }}">
                    <span class="size-1.5 rounded-full {{ $registrationOpen ? 'bg-emerald-500 animate-pulse' : 'bg-slate-400' }}"></span>
                    Fitur Inti: Penerimaan Santri Baru (PSB)
                </div>
                <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 dark:text-white">
                    Registration Open
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                    Kontrol status pendaftaran santri baru secara instan. Mengubah sakelar ini akan memperbarui record <code class="px-1.5 py-0.5 rounded-md bg-slate-200/70 dark:bg-slate-800 text-emerald-600 dark:text-emerald-400 font-mono text-xs">registration_open</code> pada tabel <code class="px-1.5 py-0.5 rounded-md bg-slate-200/70 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono text-xs">settings</code> menjadi <strong class="text-slate-900 dark:text-white">1</strong> (Aktif) atau <strong class="text-slate-900 dark:text-white">0</strong> (Nonaktif).
                </p>
            </div>

            {{-- Switch Container --}}
            <div class="flex items-center gap-4 shrink-0 bg-slate-100/60 dark:bg-white/5 p-3 sm:p-4 rounded-2xl border border-slate-200/60 dark:border-white/10">
                <div class="text-right">
                    <span class="block text-xs font-bold text-slate-900 dark:text-white">
                        {{ $registrationOpen ? 'Pendaftaran Dibuka' : 'Pendaftaran Ditutup' }}
                    </span>
                    <span class="block text-[11px] font-mono text-slate-500 dark:text-slate-400">
                        value: <strong class="{{ $registrationOpen ? 'text-emerald-600 dark:text-emerald-400' : 'text-slate-500' }}">{{ $registrationOpen ? '1 (true)' : '0 (false)' }}</strong>
                    </span>
                </div>

                {{-- Interactive Switch Button --}}
                <button
                    type="button"
                    wire:click="toggleRegistration"
                    role="switch"
                    aria-checked="{{ $registrationOpen ? 'true' : 'false' }}"
                    class="relative inline-flex h-8 w-14 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-300 ease-in-out focus:outline-hidden focus:ring-2 focus:ring-emerald-500/50 shadow-inner {{ $registrationOpen ? 'bg-emerald-500' : 'bg-slate-300 dark:bg-slate-700' }}">
                    <span class="sr-only">Toggle Registration Open</span>
                    <span
                        aria-hidden="true"
                        class="pointer-events-none inline-block size-7 transform rounded-full bg-white shadow-md ring-0 transition-transform duration-300 ease-in-out flex items-center justify-center {{ $registrationOpen ? 'translate-x-6' : 'translate-x-0' }}">
                        @if($registrationOpen)
                            <svg class="size-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                            </svg>
                        @else
                            <svg class="size-3.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        @endif
                    </span>
                </button>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- TABEL RECORD DATABASE: SETTINGS                     --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <div class="glass-card rounded-2xl p-4 sm:p-5 space-y-4">
        {{-- Header & Action Bar --}}
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div>
                <h4 class="text-base font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                    <svg class="size-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    Tabel Pengaturan (Table: <code class="font-mono text-emerald-600 dark:text-emerald-400">settings</code>)
                </h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">
                    Data key-value parameter sistem yang tersimpan pada tabel database.
                </p>
            </div>

            <div class="flex items-center gap-2">
                {{-- Search Box --}}
                <div class="relative w-full sm:w-64">
                    <input
                        type="text"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Cari nama atau nilai setting..."
                        class="w-full pl-9 pr-3 py-1.5 text-xs rounded-xl border border-slate-200/80 dark:border-white/10 bg-white/70 dark:bg-white/5 text-slate-800 dark:text-slate-200 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 transition-all">
                    <svg class="size-4 absolute left-3 top-2 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    @if($search)
                        <button type="button" wire:click="clearFilters" class="absolute right-2.5 top-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                            <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                        </button>
                    @endif
                </div>

                {{-- Tombol Tambah Setting --}}
                <button
                    type="button"
                    wire:click="openAddModal"
                    class="btn-primary-aurora shrink-0 px-3 py-1.5 text-xs font-bold rounded-xl gap-1.5 cursor-pointer">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>Tambah Setting</span>
                </button>
            </div>
        </div>

        {{-- Table Content --}}
        <div class="overflow-x-auto rounded-xl border border-slate-200/60 dark:border-white/10">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-100/70 dark:bg-white/5 border-b border-slate-200/60 dark:border-white/10 text-slate-600 dark:text-slate-300 font-bold uppercase tracking-wider text-[10px]">
                    <tr>
                        <th class="py-3 px-4">Nama Setting (Name)</th>
                        <th class="py-3 px-4">Nilai Setting (Value)</th>
                        <th class="py-3 px-4">Terakhir Diperbarui</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200/60 dark:divide-white/5 text-slate-700 dark:text-slate-300">
                    @forelse ($settings as $item)
                        @php
                            $isReg = $item->name === 'registration_open';
                            $isBoolLike = in_array(strtolower((string)$item->value), ['0', '1', 'true', 'false', 'on', 'off'], true);
                            $isTruthy = in_array(strtolower((string)$item->value), ['1', 'true', 'on', 'yes'], true);
                        @endphp
                        <tr class="hover:bg-slate-50/70 dark:hover:bg-white/5 transition-colors {{ $isReg ? 'bg-emerald-50/30 dark:bg-emerald-950/20' : '' }}">
                            {{-- Name column --}}
                            <td class="py-3 px-4 font-mono font-bold text-slate-900 dark:text-white">
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-0.5 rounded-md bg-slate-200/70 dark:bg-white/10 text-emerald-700 dark:text-emerald-300 border border-slate-300/40 dark:border-white/10">
                                        {{ $item->name }}
                                    </span>
                                    @if ($isReg)
                                        <span class="text-[9px] px-1.5 py-0.2 rounded-full bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 font-bold uppercase tracking-normal">
                                            Sistem
                                        </span>
                                    @endif
                                </div>
                            </td>

                            {{-- Value column --}}
                            <td class="py-3 px-4">
                                @if ($isBoolLike)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-bold {{ $isTruthy ? 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30' : 'bg-slate-200/80 dark:bg-white/10 text-slate-600 dark:text-slate-400 border border-slate-300/60 dark:border-white/10' }}">
                                        <span class="size-1.5 rounded-full {{ $isTruthy ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                        {{ $item->value }} ({{ $isTruthy ? 'Aktif' : 'Nonaktif' }})
                                    </span>
                                @else
                                    <span class="font-mono text-slate-800 dark:text-slate-200 max-w-xs truncate block" title="{{ $item->value }}">
                                        {{ filled($item->value) ? $item->value : '—' }}
                                    </span>
                                @endif
                            </td>

                            {{-- Updated At --}}
                            <td class="py-3 px-4 text-slate-500 dark:text-slate-400 text-[11px]">
                                {{ $item->updated_at ? $item->updated_at->translatedFormat('d M Y, H:i') : '—' }}
                            </td>

                            {{-- Actions --}}
                            <td class="py-3 px-4 text-right">
                                <div class="inline-flex items-center gap-1.5 justify-end">
                                    {{-- Quick toggle value jika boolean-like --}}
                                    @if ($isBoolLike)
                                        <button
                                            type="button"
                                            wire:click="toggleSettingValue({{ $item->id }})"
                                            title="Ubah nilai (toggle)"
                                            class="p-1.5 rounded-lg border border-slate-200/60 dark:border-white/10 hover:bg-slate-100 dark:hover:bg-white/10 text-slate-600 dark:text-slate-300 transition-colors cursor-pointer">
                                            <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                        </button>
                                    @endif

                                    {{-- Edit Button --}}
                                    <button
                                        type="button"
                                        wire:click="openEditModal({{ $item->id }})"
                                        title="Edit Setting"
                                        class="p-1.5 rounded-lg border border-slate-200/60 dark:border-white/10 hover:bg-slate-100 dark:hover:bg-white/10 text-slate-600 dark:text-slate-300 transition-colors cursor-pointer">
                                        <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </button>

                                    {{-- Delete Button (kecuali system setting registration_open tidak boleh dihapus sembarangan) --}}
                                    @if (! $isReg)
                                        <button
                                            type="button"
                                            wire:click="deleteSetting({{ $item->id }})"
                                            wire:confirm="Yakin ingin menghapus setting '{{ $item->name }}'?"
                                            title="Hapus Setting"
                                            class="p-1.5 rounded-lg border border-red-500/20 text-red-600 dark:text-red-400 hover:bg-red-500/10 transition-colors cursor-pointer">
                                            <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-8 text-center text-slate-500 dark:text-slate-400">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <svg class="size-8 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                    <span class="text-xs font-semibold">Belum ada setting yang cocok dengan pencarian Anda.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if ($settings->hasPages())
            <div class="pt-2">
                {{ $settings->links() }}
            </div>
        @endif
    </div>

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- MODAL TAMBAH / EDIT SETTING                         --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 dark:bg-black/80 backdrop-blur-xs">
            <div
                class="w-full max-w-md rounded-2xl glass-card p-5 sm:p-6 space-y-4 shadow-2xl border border-slate-200/80 dark:border-white/15 bg-white/95 dark:bg-[#080E1A]/95"
                @click.outside="$wire.closeModal()">

                <div class="flex items-center justify-between pb-3 border-b border-slate-200/60 dark:border-white/10">
                    <h3 class="text-base font-extrabold text-slate-900 dark:text-white">
                        {{ $editingId ? 'Edit Parameter Setting' : 'Tambah Parameter Setting Baru' }}
                    </h3>
                    <button type="button" wire:click="closeModal" class="p-1 rounded-lg text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                        <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>

                <form wire:submit.prevent="saveSetting" class="space-y-4">
                    {{-- Setting Name --}}
                    <div>
                        <label for="settingName" class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-1">
                            Nama Setting (Key / Name) <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="settingName"
                            wire:model="settingName"
                            placeholder="contoh: registration_open, academic_year"
                            class="w-full px-3 py-2 text-xs rounded-xl border border-slate-200/80 dark:border-white/10 bg-white/80 dark:bg-white/5 text-slate-800 dark:text-slate-200 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 font-mono">
                        <p class="text-[10px] text-slate-500 dark:text-slate-400 mt-1">Gunakan huruf kecil, angka, atau garis bawah (_).</p>
                        @error('settingName')
                            <span class="text-[11px] text-red-500 font-semibold mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Setting Value --}}
                    <div>
                        <label for="settingValue" class="block text-xs font-bold text-slate-700 dark:text-slate-300 mb-1">
                            Nilai Setting (Value)
                        </label>
                        <textarea
                            id="settingValue"
                            wire:model="settingValue"
                            rows="3"
                            placeholder="Nilai setting, contoh: 1, 0, atau teks konfigurasi..."
                            class="w-full px-3 py-2 text-xs rounded-xl border border-slate-200/80 dark:border-white/10 bg-white/80 dark:bg-white/5 text-slate-800 dark:text-slate-200 placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-500 font-mono"></textarea>
                        @error('settingValue')
                            <span class="text-[11px] text-red-500 font-semibold mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Action buttons --}}
                    <div class="flex items-center justify-end gap-2 pt-3 border-t border-slate-200/60 dark:border-white/10">
                        <button
                            type="button"
                            wire:click="closeModal"
                            class="px-4 py-2 text-xs font-semibold rounded-xl border border-slate-200/80 dark:border-white/10 hover:bg-slate-100 dark:hover:bg-white/10 text-slate-700 dark:text-slate-300 transition-colors">
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="btn-primary-aurora px-5 py-2 text-xs font-bold rounded-xl cursor-pointer">
                            <span>{{ $editingId ? 'Simpan Perubahan' : 'Buat Setting' }}</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
