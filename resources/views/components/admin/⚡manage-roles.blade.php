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

<div class="space-y-4 w-full">
    <div class="glass-card relative overflow-hidden rounded-2xl p-4 sm:p-5">
        <x-page-header title="Kelola Peran & Izin" leading="Atur peran, hak akses, dan permission pengguna sistem Annuqayah Latee" />
    </div>

    <div class="space-y-4">

        @if (session('success'))
            <div class="bg-emerald-500/10 border-emerald-500/20 text-emerald-700 dark:text-emerald-300 flex items-center gap-2.5 rounded-xl border px-3.5 py-2.5 text-xs backdrop-blur-md">
                <svg class="size-4 shrink-0 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="flex items-center gap-2.5 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2.5 text-xs text-red-700 dark:text-red-300 backdrop-blur-md">
                <svg class="size-4 shrink-0 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <span class="font-semibold">{{ session('error') }}</span>
            </div>
        @endif

        {{-- Stats Overview Cards --}}
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Total Role</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $this->stats['roles'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Permission</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-emerald-600 dark:text-emerald-400">{{ $this->stats['permissions'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Role Aktif</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-blue-600 dark:text-blue-400">{{ $this->stats['roles_with_users'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">User Ber-role</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-amber-600 dark:text-amber-400">{{ $this->stats['users_covered'] }}</div>
            </div>
        </div>

        {{-- Filter Bar --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4">
            <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center">
                <div class="flex w-full gap-2 sm:w-[45%]">
                    <flux:input
                        size="xs"
                        icon:leading="magnifying-glass"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Cari role..."
                        class="flex-1"
                    />
                    @if ($search)
                        <button wire:click="clearFilters" title="Reset"
                            class="grid size-9 shrink-0 place-items-center rounded-xl border border-slate-200/80 bg-white/80 text-slate-500 transition hover:bg-white hover:text-emerald-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-400 dark:hover:bg-white/10 dark:hover:text-emerald-400 cursor-pointer shadow-xs">
                            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>
                <div class="flex w-full items-center justify-end gap-2 sm:w-[30%] sm:ms-auto">
                    <flux:button size="xs" variant="primary" x-data x-on:click="$dispatch('add-role-modal')" class="w-full">
                        + Tambah Role
                    </flux:button>
                </div>
            </div>
        </div>

        {{-- Table Card --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4 overflow-hidden">
            <div class="flex items-center justify-between border-b border-slate-200/70 dark:border-white/10 pb-2.5 mb-2.5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    {{ $roles->total() }} role ditemukan
                </span>
                <div wire:loading class="text-emerald-600 dark:text-emerald-400 flex items-center gap-1 text-[11px] font-semibold">
                    <svg class="size-3 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z" />
                    </svg>
                    Memuat…
                </div>
            </div>

            <div class="overflow-x-auto rounded-xl border border-slate-200/70 dark:border-white/10">
                <table x-data x-on:role-updated.window="$wire.$refresh()" class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-slate-200/80 bg-slate-100/90 dark:border-white/10 dark:bg-white/5 text-[10px] font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                            <th class="w-8 px-3 py-2 text-center">#</th>
                            <th class="px-3 py-2">Nama Role</th>
                            <th class="w-24 px-3 py-2 text-center">User</th>
                            <th class="px-3 py-2">Permission</th>
                            <th class="w-14 px-3 py-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-white/5 text-[11px]">
                        @forelse ($roles as $role)
                            <tr class="group transition-colors hover:bg-emerald-500/5">
                                <td class="px-3 py-2 text-center text-xs text-slate-400 dark:text-slate-500">
                                    {{ $loop->iteration + ($roles->currentPage() - 1) * $roles->perPage() }}
                                </td>

                                <td class="px-3 py-2">
                                    <div class="flex items-center gap-2.5">
                                        <div class="flex size-7 shrink-0 items-center justify-center rounded-full text-[10px] font-extrabold uppercase ring-1 ring-emerald-500/20 {{ $role->role_color }}">
                                            {{ strtoupper(substr($role->name, 0, 2)) }}
                                        </div>
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-bold text-slate-900 dark:text-white">{{ $role->name }}</span>
                                                @if ($role->is_protected)
                                                    <span class="shrink-0 rounded-full bg-rose-500/15 border border-rose-500/20 px-1.5 py-0.2 text-[9px] font-bold uppercase tracking-wider text-rose-600 dark:text-rose-400">Protected</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[10px] text-slate-500 dark:text-slate-400">Guard: {{ $role->guard_name }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-3 py-2 text-center">
                                    @if ($role->users_count > 0)
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/15 border border-emerald-500/20 px-2 py-0.5 text-[10px] font-bold text-emerald-700 dark:text-emerald-300">{{ $role->users_count }}</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-slate-200/60 dark:bg-white/10 px-2 py-0.5 text-[10px] font-bold text-slate-600 dark:text-slate-400 border border-slate-300/40 dark:border-white/10">0</span>
                                    @endif
                                </td>

                                <td class="px-3 py-2">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-1.5">
                                            <span class="text-[10px] font-bold text-emerald-600 dark:text-emerald-400">
                                                {{ $role->permissions_count }} / {{ $totalPermissions }}
                                            </span>
                                            <div class="h-1.5 w-16 overflow-hidden rounded-full bg-slate-200/80 dark:bg-white/10">
                                                <div class="h-full rounded-full bg-emerald-500 transition-all" style="width: {{ $role->perm_pct }}%"></div>
                                            </div>
                                        </div>
                                        @if (count($role->perm_labels) > 0)
                                            <div class="flex flex-wrap gap-1">
                                                @foreach ($role->perm_labels as $label)
                                                    <span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-white/10 border border-slate-200/60 dark:border-white/10 px-1.5 py-0.5 text-[9px] font-medium text-slate-700 dark:text-slate-300">{{ $label }}</span>
                                                @endforeach
                                                @if ($role->perm_more > 0)
                                                    <span class="text-[9px] font-bold text-slate-400 dark:text-slate-400">+{{ $role->perm_more }}</span>
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-[10px] italic text-slate-400 dark:text-slate-400">Tidak ada permission</span>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-3 py-2 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item
                                            icon="pencil-square"
                                            color="emerald"
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
                                <td colspan="5" class="px-3 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-slate-400">
                                        <p class="text-xs font-medium">Tidak ada role ditemukan</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-slate-200/70 dark:border-white/10 px-3 pt-3 mt-2 text-xs">
                {{ $roles->links('pagination::tailwind') }}
            </div>
        </div>

        <livewire:admin.roles.add-role />
        <livewire:admin.roles.edit-role />
    </div>
</div>
