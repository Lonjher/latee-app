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

<div>
    <x-page-header title="Kelola Pengguna" leading="Kelola Akun & Hak Akses Pengguna" />

    <div class="mx-auto mt-2 space-y-2">

        {{-- FLASH --}}
        @if (session('success'))
            <div
                class="bg-sage-50 dark:bg-sage-950 border-sage-200 dark:border-sage-800 text-sage-700 dark:text-sage-300 flex items-center gap-2.5 rounded-xl border px-3 py-2 text-xs">
                <svg class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div
                class="flex items-center gap-2.5 rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-xs text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300">
                <svg class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                {{ session('error') }}
            </div>
        @endif

        {{-- FILTER BAR --}}
        <div class="rounded-xl border border-stone-200 bg-white px-3 py-2.5 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">

                <div class="flex w-full gap-2 sm:w-[30%]">
                    <flux:input size="xs" icon:leading="magnifying-glass" wire:model.live.debounce.300ms="search"
                        placeholder="Cari nama atau email…" class="flex-1" />

                    @if ($search || $roleFilter || $statusFilter)
                        <button wire:click="clearFilters" title="Reset filter"
                            class="grid size-9 shrink-0 place-items-center rounded-lg border border-stone-200 bg-white text-stone-500 transition hover:bg-stone-50 hover:text-stone-800 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-400 dark:hover:bg-stone-700 dark:hover:text-stone-100">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>

                <div class="grid w-full grid-cols-3 gap-2 sm:ms-auto sm:w-[30%]">
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
                        Tambah
                    </flux:button>
                </div>
            </div>
        </div>

        {{-- TABLE --}}
        <div
            class="overflow-hidden rounded-xl border border-stone-200 bg-white px-3 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex items-center justify-between border-b border-stone-100 py-2 dark:border-stone-800">
                <span class="text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    {{ $users->total() }} {{ __('akun ditemukan') }}
                </span>
                <div wire:loading class="text-sage-600 dark:text-sage-400 flex items-center gap-1 text-[11px]">
                    <svg class="h-3 w-3 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z" />
                    </svg>
                    {{ __('Memuat…') }}
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border bg-white shadow-sm dark:border-stone-800 dark:bg-stone-900">
                <table x-data @user-updated.window="$wire.$refresh()" class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr
                            class="border-b border-stone-200 bg-stone-50 text-[11px] font-semibold uppercase tracking-wider text-stone-500 dark:border-stone-800 dark:bg-stone-800/50 dark:text-stone-400">
                            <th class="w-8 px-2.5 py-1.5 text-center">#</th>
                            <th class="px-2.5 py-1.5">{{ __('Pengguna') }}</th>
                            <th class="px-2.5 py-1.5">{{ __('Peran') }}</th>
                            <th class="w-20 px-2.5 py-1.5 text-center">{{ __('Status') }}</th>
                            <th class="px-2.5 py-1.5">{{ __('Bergabung') }}</th>
                            <th class="w-14 px-2.5 py-1.5 text-right">{{ __('Aksi') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 dark:divide-stone-800/60">
                        @forelse ($users as $user)
                            @php
                                $primaryRole = $user->roles->first()?->name ?? 'user';
                                $roleClass = match ($primaryRole) {
                                    'admin' => 'bg-sage-50 text-sage-700 dark:bg-sage-950/40 dark:text-sage-400',
                                    'editor'
                                        => 'bg-emerald-50 text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400',
                                    'pengasuh'
                                        => 'bg-violet-50 text-violet-700 dark:bg-violet-950/40 dark:text-violet-400',
                                    default => 'bg-stone-100 text-stone-600 dark:bg-stone-800 dark:text-stone-400',
                                };
                            @endphp

                            <tr class="group transition-colors hover:bg-stone-50 dark:hover:bg-stone-800/30">
                                <td class="px-2.5 py-1.5 text-center text-xs text-stone-400 dark:text-stone-600">
                                    {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex max-w-52 items-center gap-2 sm:max-w-md">
                                        <div
                                            class="bg-sage-100 dark:bg-sage-900/60 text-sage-700 dark:text-sage-400 flex h-7 w-7 shrink-0 items-center justify-center rounded-full text-[11px] font-bold uppercase">
                                            {{ mb_substr($user->full_name, 0, 2) }}
                                        </div>
                                        <div class="truncate">
                                            <div class="flex items-center gap-1.5">
                                                <span
                                                    class="truncate text-xs font-medium text-stone-800 dark:text-stone-200">
                                                    {{ $user->full_name }}
                                                </span>
                                                @if ($user->id === auth()->id())
                                                    <span
                                                        class="shrink-0 rounded-full bg-stone-100 px-1.5 py-0.5 text-[10px] font-semibold text-stone-500 dark:bg-stone-800 dark:text-stone-400">Anda</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[11px] text-stone-500 dark:text-stone-400">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <span
                                        class="inline-flex items-center rounded-full px-2 py-0.5 text-[11px] font-semibold {{ $roleClass }}">
                                        {{ ucfirst($primaryRole) }}
                                    </span>
                                </td>

                                <td class="px-2.5 py-1.5 text-center">
                                    @if ($user->is_active)
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-[11px] font-semibold text-green-700 dark:bg-green-950/40 dark:text-green-400">{{ __('Active') }}</span>
                                    @else
                                        <span
                                            class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[11px] font-semibold text-stone-600 dark:bg-stone-800 dark:text-stone-400">{{ __('Inactive') }}</span>
                                    @endif
                                </td>

                                <td class="px-2.5 py-1.5 text-[11px] text-stone-500 dark:text-stone-400">
                                    {{ $user->created_at?->format('d M Y') ?? '—' }}
                                </td>

                                <td class="px-2.5 py-1.5 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item icon="pencil-square" color="sage"
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
                                <td colspan="6" class="px-2.5 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-stone-400">
                                        <p class="text-xs font-medium">{{ __('Tidak ada pengguna ditemukan') }}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-stone-100 px-3 py-2.5 text-xs dark:border-stone-800">
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
