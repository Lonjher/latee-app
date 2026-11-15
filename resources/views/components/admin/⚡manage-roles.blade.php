<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;

new #[Title('Manage Roles')] class extends Component {
    use WithPagination;

    public string $search = '';

    public function mount(): void
    {
        abort_unless(auth()->user()?->hasRole('admin'), 403);
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

    public function deleteRole(int $id): void
    {
        $role = Role::withCount('users')->findOrFail($id);

        if ($role->name === 'admin') {
            session()->flash('error', 'Role "admin" tidak dapat dihapus.');
            return;
        }

        if ($role->users_count > 0) {
            session()->flash('error', "Role \"{$role->name}\" masih memiliki {$role->users_count} user. Pindahkan user terlebih dahulu.");
            return;
        }

        $role->delete();
        session()->flash('success', "Role \"{$role->name}\" berhasil dihapus.");
        $this->resetPage();
    }

    public function duplicateRole(int $id): void
    {
        $role = Role::with('permissions')->findOrFail($id);

        $baseName = $role->name . '_copy';
        $newName = $baseName;
        $i = 2;
        while (Role::where('name', $newName)->exists()) {
            $newName = $baseName . '_' . $i++;
        }

        $newRole = Role::create(['name' => $newName, 'guard_name' => 'web']);
        $newRole->syncPermissions($role->permissions->pluck('name')->all());

        session()->flash('success', "Role berhasil diduplikasi sebagai \"{$newName}\".");
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'roles' => Role::count(),
            'permissions' => Permission::count(),
            'roles_with_users' => Role::has('users')->count(),
            'users_covered' => User::whereHas('roles')->count(),
        ];
    }

    public function with()
    {
        $totalPerms = Permission::count();

        $roles = Role::query()
            ->with('permissions')
            ->withCount(['users', 'permissions'])
            ->when($this->search, fn ($q) => $q->where('name', 'like', '%' . trim($this->search) . '%'))
            ->orderByRaw("CASE WHEN name = 'admin' THEN 0 ELSE 1 END, name ASC")
            ->paginate(10);

        // Enrich setiap role dengan properti siap-pakai untuk blade
        $roles->getCollection()->transform(function (Role $role) use ($totalPerms) {
            $role->is_protected = $role->name === 'admin';
            $role->perm_preview = $role->permissions->take(3)->pluck('name')->all();
            $role->perm_more = max(0, $role->permissions_count - 3);
            $role->perm_pct = $totalPerms > 0
                ? round(($role->permissions_count / $totalPerms) * 100)
                : 0;
            $role->role_color = match ($role->name) {
                'admin' => 'bg-sage-100 text-sage-700 dark:bg-sage-900/60 dark:text-sage-300',
                'editor' => 'bg-emerald-100 text-emerald-700 dark:bg-emerald-900/60 dark:text-emerald-300',
                'user' => 'bg-stone-100 text-stone-600 dark:bg-stone-800 dark:text-stone-300',
                default => 'bg-violet-100 text-violet-700 dark:bg-violet-900/60 dark:text-violet-300',
            };
            $role->perm_labels = collect($role->perm_preview)->map(fn ($p) => Str::headline($p))->all();
            return $role;
        });

        return [
            'roles' => $roles,
            'totalPermissions' => $totalPerms,
        ];
    }
};
?>

<div>
    <x-page-header title="Kelola Peran & Izin" leading="Atur peran dan permission yang dapat diakses" />

    <div class="mx-auto mt-2 space-y-2">

        @if (session('success'))
            <div class="bg-sage-50 dark:bg-sage-950 border-sage-200 dark:border-sage-800 text-sage-700 dark:text-sage-300 flex items-center gap-2.5 rounded-xl border px-3 py-2 text-xs">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="flex items-center gap-2.5 rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-xs text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                {{ session('error') }}
            </div>
        @endif

        {{-- Stats --}}
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Total Role</div>
                <div class="mt-1 text-xl font-bold text-stone-800 dark:text-stone-100">{{ $this->stats['roles'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Permission</div>
                <div class="mt-1 text-xl font-bold text-sage-600 dark:text-sage-400">{{ $this->stats['permissions'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Role Aktif</div>
                <div class="mt-1 text-xl font-bold text-green-600 dark:text-green-400">{{ $this->stats['roles_with_users'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">User Ber-role</div>
                <div class="mt-1 text-xl font-bold text-amber-600 dark:text-amber-400">{{ $this->stats['users_covered'] }}</div>
            </div>
        </div>

        {{-- Filter --}}
        <div class="rounded-xl border border-stone-200 bg-white px-3 py-2.5 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                <div class="flex w-full gap-2 sm:w-[40%]">
                    <flux:input
                        size="xs"
                        icon:leading="magnifying-glass"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Cari role..."
                        class="flex-1"
                    />
                    @if ($search)
                        <button wire:click="clearFilters" title="Reset"
                            class="grid size-9 shrink-0 place-items-center rounded-lg border border-stone-200 bg-white text-stone-500 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800">
                            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>
                <div class="flex w-full items-center justify-end gap-2 sm:w-[30%] sm:ms-auto">
                    <flux:button size="xs" variant="primary" x-data x-on:click="$dispatch('add-role-modal')" class="w-full">
                        Tambah Role
                    </flux:button>
                </div>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-hidden rounded-xl border border-stone-200 bg-white px-3 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex items-center justify-between border-b border-stone-100 py-2 dark:border-stone-800">
                <span class="text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    {{ $roles->total() }} role ditemukan
                </span>
                <div wire:loading class="text-sage-600 dark:text-sage-400 flex items-center gap-1 text-[11px]">
                    <svg class="size-3 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z" />
                    </svg>
                    Memuat…
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border bg-white shadow-sm dark:border-stone-800 dark:bg-stone-900">
                <table x-data x-on:role-updated.window="$wire.$refresh()" class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-stone-200 bg-stone-50 text-[11px] font-semibold uppercase tracking-wider text-stone-500 dark:border-stone-800 dark:bg-stone-800/50 dark:text-stone-400">
                            <th class="w-8 px-2.5 py-1.5 text-center">#</th>
                            <th class="px-2.5 py-1.5">Nama Role</th>
                            <th class="w-24 px-2.5 py-1.5 text-center">User</th>
                            <th class="px-2.5 py-1.5">Permission</th>
                            <th class="w-14 px-2.5 py-1.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 dark:divide-stone-800/60">
                        @forelse ($roles as $role)
                            <tr class="transition-colors hover:bg-stone-50 dark:hover:bg-stone-800/30">
                                <td class="px-2.5 py-1.5 text-center text-xs text-stone-400 dark:text-stone-600">
                                    {{ $loop->iteration + ($roles->currentPage() - 1) * $roles->perPage() }}
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex items-center gap-2">
                                        <div class="flex size-7 shrink-0 items-center justify-center rounded-full text-[11px] font-bold uppercase {{ $role->role_color }}">
                                            {{ strtoupper(substr($role->name, 0, 2)) }}
                                        </div>
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-medium text-stone-800 dark:text-stone-200">{{ $role->name }}</span>
                                                @if ($role->is_protected)
                                                    <span class="shrink-0 rounded-full bg-red-50 px-1.5 py-0.5 text-[9px] font-bold uppercase tracking-wider text-red-600 dark:bg-red-950/40 dark:text-red-400">Protected</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[10px] text-stone-500 dark:text-stone-500">Guard: {{ $role->guard_name }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5 text-center">
                                    @if ($role->users_count > 0)
                                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-semibold text-green-700 dark:bg-green-950/40 dark:text-green-400">{{ $role->users_count }}</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[10px] font-semibold text-stone-500 dark:bg-stone-800 dark:text-stone-400">0</span>
                                    @endif
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-[10px] font-semibold text-sage-600 dark:text-sage-400">
                                                {{ $role->permissions_count }} / {{ $totalPermissions }}
                                            </span>
                                            <div class="h-1 w-16 overflow-hidden rounded-full bg-stone-200 dark:bg-stone-700">
                                                <div class="h-full rounded-full bg-sage-500 transition-all" style="width: {{ $role->perm_pct }}%"></div>
                                            </div>
                                        </div>
                                        @if (count($role->perm_labels) > 0)
                                            <div class="flex flex-wrap gap-1">
                                                @foreach ($role->perm_labels as $label)
                                                    <span class="inline-flex items-center rounded bg-stone-100 px-1.5 py-0.5 text-[9px] text-stone-600 dark:bg-stone-800 dark:text-stone-400">{{ $label }}</span>
                                                @endforeach
                                                @if ($role->perm_more > 0)
                                                    <span class="text-[9px] text-stone-400 dark:text-stone-500">+{{ $role->perm_more }}</span>
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-[10px] italic text-stone-400 dark:text-stone-500">Tidak ada permission</span>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item
                                            icon="pencil-square"
                                            color="sage"
                                            x-on:click="$dispatch('edit-role-modal', { roleId: {{ $role->id }} })"
                                        >
                                            Edit
                                        </x-action-menu.item>
                                        <x-action-menu.item
                                            icon="document-duplicate"
                                            color="blue"
                                            wire:click="duplicateRole({{ $role->id }})"
                                        >
                                            Duplikasi
                                        </x-action-menu.item>
                                        <x-action-menu.separator />
                                        <x-action-menu.item
                                            icon="trash"
                                            color="red"
                                            :disabled="$role->is_protected || $role->users_count > 0"
                                            wire:confirm="Hapus role {{ $role->name }} secara permanen?"
                                            wire:click="deleteRole({{ $role->id }})"
                                        >
                                            Hapus
                                        </x-action-menu.item>
                                    </x-action-menu>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-2.5 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-stone-400">
                                        <p class="text-xs font-medium">Tidak ada role ditemukan</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-stone-100 px-3 py-2.5 text-xs dark:border-stone-800">
                {{ $roles->links('pagination::tailwind') }}
            </div>
        </div>

        <livewire:admin.roles.add-role />
        <livewire:admin.roles.edit-role />
    </div>
</div>
