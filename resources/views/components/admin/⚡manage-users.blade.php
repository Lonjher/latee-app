<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

new #[Title('Manage Users')] class extends Component {
    use WithPagination;

    public string $search = '';
    public string $roleFilter = '';
    public string $statusFilter = '';

    public function mount(): void
    {
        abort_unless(auth()->user()?->hasRole('admin'), 403);
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }
    public function updatedRoleFilter(): void
    {
        $this->resetPage();
    }
    public function updatedStatusFilter(): void
    {
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->reset('search', 'roleFilter', 'statusFilter');
        $this->resetPage();
    }

    public function deleteUser(int $id): void
    {
        if ($id === auth()->id()) {
            session()->flash('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
            return;
        }

        $user = User::findOrFail($id);

        if ($user->hasRole('admin') && User::role('admin')->count() <= 1) {
            session()->flash('error', 'Tidak dapat menghapus admin terakhir.');
            return;
        }

        $user->delete();
        session()->flash('success', 'Pengguna berhasil dihapus.');
        $this->resetPage();
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total' => User::count(),
            'active' => User::where('is_active', true)->count(),
            'admins' => User::role('admin')->count(),
            'inactive' => User::where('is_active', false)->count(),
        ];
    }

    public function with()
    {
        $users = User::query()
            ->with('roles')
            ->when($this->search, function ($q) {
                $term = '%' . trim($this->search) . '%';
                $q->where(fn($q) => $q->where('full_name', 'like', $term)->orWhere('email', 'like', $term));
            })
            ->when($this->roleFilter, fn($q) => $q->role($this->roleFilter))
            ->when($this->statusFilter === 'active', fn($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'inactive', fn($q) => $q->where('is_active', false))
            ->latest('created_at')
            ->paginate(10);

        return [
            'users' => $users,
            'roles' => Role::orderBy('name')->get(),
        ];
    }
};
?>

<div class="space-y-4 w-full">
    <div class="glass-card relative overflow-hidden rounded-2xl p-4 sm:p-5">
        <x-page-header title="Kelola Pengguna" leading="Kelola akun pengguna, penugasan peran, dan hak akses sistem Annuqayah Latee" />
    </div>

    <div class="space-y-4">

        {{-- FLASH --}}
        @if (session('success'))
            <div
                class="bg-emerald-500/10 border-emerald-500/20 text-emerald-700 dark:text-emerald-300 flex items-center gap-2.5 rounded-xl border px-3.5 py-2.5 text-xs backdrop-blur-md">
                <svg class="h-4 w-4 shrink-0 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div
                class="flex items-center gap-2.5 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2.5 text-xs text-red-700 dark:text-red-300 backdrop-blur-md">
                <svg class="h-4 w-4 shrink-0 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <span class="font-semibold">{{ session('error') }}</span>
            </div>
        @endif

        {{-- FILTER BAR --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4">
            <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center">

                <div class="flex w-full gap-2 sm:w-[35%]">
                    <flux:input size="xs" icon:leading="magnifying-glass" wire:model.live.debounce.300ms="search"
                        placeholder="Cari nama atau email…" class="flex-1" />

                    @if ($search || $roleFilter || $statusFilter)
                        <button wire:click="clearFilters" title="Reset filter"
                            class="grid size-9 shrink-0 place-items-center rounded-xl border border-slate-200/80 bg-white/80 text-slate-500 transition hover:bg-white hover:text-emerald-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-400 dark:hover:bg-white/10 dark:hover:text-emerald-400 cursor-pointer shadow-xs">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>

                <div class="grid w-full grid-cols-3 gap-2 sm:ms-auto sm:w-[35%]">
                    <flux:select wire:model.live="roleFilter" class="w-full" size="xs">
                        <flux:select.option value="">Semua Peran</flux:select.option>
                        @foreach ($roles as $r)
                            <flux:select.option value="{{ $r->name }}">{{ ucfirst($r->name) }}</flux:select.option>
                        @endforeach
                    </flux:select>

                    <flux:select wire:model.live="statusFilter" class="w-full" size="xs">
                        <flux:select.option value="">Semua Status</flux:select.option>
                        <flux:select.option value="active">Aktif</flux:select.option>
                        <flux:select.option value="inactive">Non Aktif</flux:select.option>
                    </flux:select>

                    <flux:button x-data size="xs" x-on:click="$dispatch('add-user-modal')" variant="primary"
                        class="w-full">
                        + Tambah
                    </flux:button>
                </div>
            </div>
        </div>

        {{-- TABLE CARD --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4 overflow-hidden">
            <div class="flex items-center justify-between border-b border-slate-200/70 dark:border-white/10 pb-2.5 mb-2.5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    {{ $users->total() }} {{ __('akun ditemukan') }}
                </span>
                <div wire:loading class="text-emerald-600 dark:text-emerald-400 flex items-center gap-1 text-[11px] font-semibold">
                    <svg class="h-3 w-3 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z" />
                    </svg>
                    {{ __('Memuat…') }}
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border border-slate-200/70 dark:border-white/10">
                <table x-data @user-updated.window="$wire.$refresh()" class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr
                            class="border-b border-slate-200/80 bg-slate-100/90 dark:border-white/10 dark:bg-white/5 text-[10px] font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                            <th class="w-8 px-3 py-2 text-center">#</th>
                            <th class="px-3 py-2">{{ __('Pengguna') }}</th>
                            <th class="px-3 py-2">{{ __('Peran') }}</th>
                            <th class="w-20 px-3 py-2 text-center">{{ __('Status') }}</th>
                            <th class="px-3 py-2">{{ __('Bergabung') }}</th>
                            <th class="w-14 px-3 py-2 text-right">{{ __('Aksi') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-white/5 text-[11px]">
                        @forelse ($users as $user)
                            @php
                                $primaryRole = $user->roles->first()?->name ?? 'user';
                                $roleClass = match ($primaryRole) {
                                    'admin' => 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-300 border border-emerald-500/25',
                                    'editor' => 'bg-blue-500/15 text-blue-700 dark:text-blue-300 border border-blue-500/25',
                                    'pengasuh' => 'bg-purple-500/15 text-purple-700 dark:text-purple-300 border border-purple-500/25',
                                    default => 'bg-slate-200/60 text-slate-700 dark:bg-white/10 dark:text-slate-300 border border-slate-300/40 dark:border-white/10',
                                };
                            @endphp

                            <tr class="group transition-colors hover:bg-emerald-500/5">
                                <td class="px-3 py-2 text-center text-xs text-slate-400 dark:text-slate-500">
                                    {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}
                                </td>

                                <td class="px-3 py-2">
                                    <div class="flex max-w-52 items-center gap-2.5 sm:max-w-md">
                                        <div
                                            class="bg-emerald-500/15 text-emerald-700 dark:text-emerald-300 ring-1 ring-emerald-500/25 flex h-7 w-7 shrink-0 items-center justify-center rounded-full text-[10px] font-extrabold uppercase">
                                            {{ mb_substr($user->full_name, 0, 2) }}
                                        </div>
                                        <div class="truncate">
                                            <div class="flex items-center gap-1.5">
                                                <span
                                                    class="truncate text-xs font-bold text-slate-900 dark:text-white">
                                                    {{ $user->full_name }}
                                                </span>
                                                @if ($user->id === auth()->id())
                                                    <span
                                                        class="shrink-0 rounded-full bg-emerald-500/15 border border-emerald-500/20 px-1.5 py-0.2 text-[9px] font-bold text-emerald-700 dark:text-emerald-300">Anda</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[10px] text-slate-500 dark:text-slate-400">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-3 py-2">
                                    <span
                                        class="inline-flex items-center rounded-full px-2 py-0.5 text-[10px] font-bold {{ $roleClass }}">
                                        {{ ucfirst($primaryRole) }}
                                    </span>
                                </td>

                                <td class="px-3 py-2 text-center">
                                    @if ($user->is_active)
                                        <span
                                            class="inline-flex items-center rounded-full bg-emerald-500/15 px-2 py-0.5 text-[10px] font-bold text-emerald-700 dark:text-emerald-300 border border-emerald-500/25">{{ __('Active') }}</span>
                                    @else
                                        <span
                                            class="inline-flex items-center rounded-full bg-slate-200/60 px-2 py-0.5 text-[10px] font-bold text-slate-600 dark:bg-white/10 dark:text-slate-400 border border-slate-300/40 dark:border-white/10">{{ __('Inactive') }}</span>
                                    @endif
                                </td>

                                <td class="px-3 py-2 text-[10px] text-slate-500 dark:text-slate-400">
                                    {{ $user->created_at?->format('d M Y') ?? '—' }}
                                </td>

                                <td class="px-3 py-2 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item icon="pencil-square" color="emerald"
                                            x-on:click="$dispatch('edit-user-modal', { userId: {{ $user->id }} })">
                                            Edit
                                        </x-action-menu.item>

                                        <x-action-menu.item icon="key" color="amber"
                                            x-on:click="$dispatch('reset-user-password-modal', { id: {{ $user->id }} })">
                                            Reset Password
                                        </x-action-menu.item>

                                        <x-action-menu.separator />

                                        <x-action-menu.item icon="trash" color="red" :disabled="$user->id === auth()->id()"
                                            x-on:click="$dispatch('open-delete-user', { id: {{ $user->id }} })">
                                            Hapus
                                        </x-action-menu.item>
                                    </x-action-menu>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-3 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-slate-400">
                                        <p class="text-xs font-medium">{{ __('Tidak ada pengguna ditemukan') }}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-slate-200/70 dark:border-white/10 px-3 pt-3 mt-2 text-xs">
                {{ $users->links('pagination::tailwind') }}
            </div>
        </div>

        {{-- CHILD MODAL COMPONENTS --}}
        <livewire:admin.users.add-user />
        <livewire:admin.users.edit-user />
        <livewire:admin.users.reset-user-password />
        <x-modal-hapus modal_name="open-delete-user" action_hapus="deleteUser" title="Hapus Pengguna"
            description="Data pengguna akan dihapus permanen dari sistem." />
    </div>
</div>
