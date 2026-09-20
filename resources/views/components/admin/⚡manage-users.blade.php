<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public string $search = '';

    public string $roleFilter = '';

    public string $statusFilter = '';

    public string $name = '';

    public string $email = '';

    public string $role = 'Member';

    public string $status = 'Aktif';

    public ?int $editing = null;

    public bool $showForm = false;

    public string $notice = '';

    public function mount(): void
    {
        if (! session()->has('demo.users')) {
            $names = ['Aditya Pratama', 'Nadia Putri', 'Rizky Ramadhan', 'Sarah Wijaya', 'Bima Saputra', 'Clara Dewi', 'Dimas Santoso', 'Alya Maharani', 'Farhan Akbar', 'Intan Permata', 'Kevin Setiawan', 'Maya Lestari'];
            session()->put('demo.users', collect($names)->map(fn ($name, $i) => [
                'id' => $i + 1, 'name' => $name,
                'email' => strtolower(str_replace(' ', '.', $name)).'@example.com',
                'role' => ['Admin', 'Editor', 'Member'][$i % 3],
                'status' => $i % 5 === 4 ? 'Nonaktif' : 'Aktif',
                'joined' => sprintf('%02d Sep 2026', $i + 1),
            ])->all());
        }
    }

    #[Computed]
    public function users(): LengthAwarePaginator
    {
        $users = collect(session('demo.users', []))->filter(fn ($user) => (blank($this->search) || str_contains(strtolower($user['name'].' '.$user['email']), strtolower(trim($this->search))))
            && ($this->roleFilter === '' || $user['role'] === $this->roleFilter)
            && ($this->statusFilter === '' || $user['status'] === $this->statusFilter)
        )->values();

        return new LengthAwarePaginator($users->forPage($this->getPage(), 6), $users->count(), 6, $this->getPage());
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

    public function create(): void
    {
        $this->reset('name', 'email', 'role', 'status', 'editing');
        $this->resetValidation();
        $this->showForm = true;
    }

    public function edit(int $id): void
    {
        $user = collect(session('demo.users', []))->firstWhere('id', $id);
        abort_unless($user, 404);
        $this->resetValidation();
        $this->editing = $id;
        foreach (['name', 'email', 'role', 'status'] as $field) {
            $this->{$field} = $user[$field];
        }
        $this->showForm = true;
    }

    public function save(): void
    {
        $this->name = trim($this->name);
        $this->email = strtolower(trim($this->email));
        $data = $this->validate([
            'name' => 'required|string|max:80', 'email' => 'required|email|max:150',
            'role' => 'required|in:Admin,Editor,Member', 'status' => 'required|in:Aktif,Nonaktif',
        ]);
        $users = collect(session('demo.users', []));
        if ($users->contains(fn ($user) => strtolower($user['email']) === $this->email && $user['id'] !== $this->editing)) {
            $this->addError('email', 'Email ini sudah digunakan.');

            return;
        }
        if ($this->editing !== null) {
            abort_unless($users->contains('id', $this->editing), 404);
            $users = $users->map(fn ($user) => $user['id'] === $this->editing ? array_merge($user, $data) : $user);
        } else {
            $users->prepend(array_merge($data, ['id' => ($users->max('id') ?? 0) + 1, 'joined' => now()->format('d M Y')]));
        }
        session()->put('demo.users', $users->values()->all());
        $this->notice = $this->editing ? 'Perubahan pengguna berhasil disimpan.' : 'Pengguna baru berhasil ditambahkan.';
        $this->showForm = false;
        $this->clearFilters();
    }

    public function delete(int $id): void
    {
        session()->put('demo.users', collect(session('demo.users', []))->reject(fn ($user) => $user['id'] === $id)->values()->all());
        $this->notice = 'Pengguna berhasil dihapus.';
        $this->resetPage();
    }
};
?>

<div class="users-app" x-data="{ menuOpen: false }">
    <aside class="users-sidebar" :class="{ 'is-open': menuOpen }">
        <a href="{{ route('users.index') }}" class="users-brand"><span class="brand-symbol">l<span>•</span></span> latee<span class="brand-dot">.</span></a>
        <div class="workspace"><span class="workspace-icon">L</span><div><strong>Latee workspace</strong><small>Personal workspace</small></div><span class="workspace-chevron">⌄</span></div>
        <p class="nav-caption">WORKSPACE</p>
        <nav aria-label="Navigasi utama"><a href="{{ route('users.index') }}" class="nav-active"><span aria-hidden="true">▦</span> Kelola pengguna <span class="nav-count">{{ count(session('demo.users', [])) }}</span></a></nav>
        <div class="sidebar-note"><span class="note-spark">✦</span><strong>Tim hebat, kerja lebih mudah.</strong><p>Kelola anggota dan peran tim dalam satu tempat.</p><span class="note-label">LET’S GROW TOGETHER ↗</span></div>
        <div class="sidebar-profile"><span class="avatar mint">LW</span><div><strong>Latee Workspace</strong><small>Demo administrator</small></div><span class="online-dot"></span></div>
    </aside>
    <button x-show="menuOpen" x-cloak @click="menuOpen = false" class="sidebar-backdrop" aria-label="Tutup navigasi"></button>
    <div class="users-main">
        <header class="users-topbar"><div class="breadcrumb"><button class="mobile-menu" @click="menuOpen = !menuOpen" aria-label="Buka navigasi" :aria-expanded="menuOpen">☰</button><span>Workspace</span><span>/</span><strong>Kelola pengguna</strong></div><div class="topbar-right"><span class="workspace-status"><i></i> Workspace aktif</span><span class="avatar navy">LW</span></div></header>
        <main class="users-content">
            <div class="page-heading"><div><div class="eyebrow">TEAM MANAGEMENT</div><h1>Kelola pengguna<span>.</span></h1><p>Tempat untuk mengatur orang-orang hebat di balik tim Anda.</p></div><button class="btn btn-primary" wire:click="create"><span aria-hidden="true">＋</span> Tambah pengguna</button></div>
            <div class="demo-banner"><span class="demo-tag">DEMO</span> Jelajahi dengan data contoh. Perubahan disimpan hanya untuk sesi Anda.</div>
            @if ($notice)
                <div class="success-notice" role="status"><span>✓ {{ $notice }}</span><button wire:click="$set('notice', '')" aria-label="Tutup notifikasi">×</button></div>
            @endif
            @php($allUsers = collect(session('demo.users', [])))
            <section class="stats-grid" aria-label="Ringkasan pengguna">
                <article class="stat-card stat-featured"><div class="stat-label">Total pengguna <span class="stat-icon">◈</span></div><div class="stat-value">{{ $allUsers->count() }}<span>pengguna</span></div><p><span class="stat-dot"></span> Semua anggota workspace</p></article>
                <article class="stat-card"><div class="stat-label">Pengguna aktif <span class="stat-icon green">✓</span></div><div class="stat-value">{{ $allUsers->where('status', 'Aktif')->count() }}<span>pengguna</span></div><p><span class="stat-dot"></span> Siap berkolaborasi bersama</p></article>
                <article class="stat-card"><div class="stat-label">Administrator <span class="stat-icon purple">◇</span></div><div class="stat-value">{{ $allUsers->where('role', 'Admin')->count() }}<span>pengguna</span></div><p>Memiliki akses pengelolaan tim</p></article>
                <article class="stat-card"><div class="stat-label">Pengguna nonaktif <span class="stat-icon amber">◷</span></div><div class="stat-value">{{ $allUsers->where('status', 'Nonaktif')->count() }}<span>pengguna</span></div><p>Akses workspace dinonaktifkan</p></article>
            </section>
            <section class="users-panel" aria-labelledby="directory-title">
                <div class="panel-heading"><div><h2 id="directory-title">Daftar pengguna <span>{{ $allUsers->count() }}</span></h2><p>Kelola profil, peran, dan status anggota tim.</p></div><span class="panel-mark" aria-hidden="true">↗</span></div>
                <div class="filter-bar"><label class="search-field"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 4.5 4.5"/></svg><input wire:model.live.debounce.300ms="search" placeholder="Cari nama atau email..." aria-label="Cari nama atau email"></label><div class="filter-selects"><select wire:model.live="roleFilter" aria-label="Filter peran"><option value="">Semua peran</option><option>Admin</option><option>Editor</option><option>Member</option></select><select wire:model.live="statusFilter" aria-label="Filter status"><option value="">Semua status</option><option>Aktif</option><option>Nonaktif</option></select></div></div>
                <div class="table-scroll" wire:loading.class="is-loading" wire:target="search,roleFilter,statusFilter,gotoPage,nextPage,previousPage">
                    <table class="users-table"><thead><tr><th>Nama pengguna</th><th>Peran</th><th>Status</th><th>Bergabung</th><th class="actions-heading">Aksi</th></tr></thead><tbody>
                    @forelse ($this->users as $user)
                        <tr wire:key="user-{{ $user['id'] }}"><td><div class="user-identity"><span class="avatar {{ ['mint', 'lavender', 'peach', 'blue'][$user['id'] % 4] }}">{{ collect(explode(' ', $user['name']))->take(2)->map(fn ($part) => mb_substr($part, 0, 1))->implode('') }}</span><div><strong>{{ $user['name'] }}</strong><small>{{ $user['email'] }}</small></div></div></td><td><span class="role-badge {{ strtolower($user['role']) }}">{{ $user['role'] }}</span></td><td><span class="status-badge {{ $user['status'] === 'Aktif' ? 'active' : 'inactive' }}"><i></i>{{ $user['status'] }}</span></td><td class="joined-date">{{ $user['joined'] }}</td><td><div class="row-actions"><button wire:click="edit({{ $user['id'] }})" aria-label="Edit {{ $user['name'] }}" title="Edit pengguna"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="m15 4 5 5M4 20l5-1L20 8a2 2 0 0 0-5-5L4 14z"/></svg></button><button class="delete-action" wire:click="delete({{ $user['id'] }})" wire:confirm="Hapus pengguna {{ $user['name'] }} dari data contoh?" aria-label="Hapus {{ $user['name'] }}" title="Hapus pengguna"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M3 6h18M9 6V3h6v3M5 6l1 15h12l1-15M10 10v7m4-7v7"/></svg></button></div></td></tr>
                    @empty
                        <tr><td colspan="5"><div class="empty-state"><span>⌕</span><h3>Pengguna tidak ditemukan</h3><p>Coba kata kunci lain atau atur ulang filter Anda.</p><button class="btn btn-secondary" wire:click="clearFilters">Reset filter</button></div></td></tr>
                    @endforelse
                    </tbody></table>
                </div>
                <div class="pagination-bar"><p>Menampilkan <strong>{{ $this->users->firstItem() ?? 0 }}–{{ $this->users->lastItem() ?? 0 }}</strong> dari <strong>{{ $this->users->total() }}</strong> pengguna</p><nav class="pagination-buttons" aria-label="Halaman daftar pengguna"><button wire:click="previousPage" @disabled($this->users->onFirstPage()) aria-label="Halaman sebelumnya">←</button>@for ($page = 1; $page <= $this->users->lastPage(); $page++)<button wire:click="gotoPage({{ $page }})" class="{{ $this->users->currentPage() === $page ? 'current' : '' }}" aria-label="Halaman {{ $page }}" @if($this->users->currentPage() === $page) aria-current="page" @endif>{{ $page }}</button>@endfor<button wire:click="nextPage" @disabled(! $this->users->hasMorePages()) aria-label="Halaman berikutnya">→</button></nav></div>
            </section>
            <footer class="page-footer"><span>© {{ date('Y') }} Latee Workspace</span><span>Built for better teamwork <span class="footer-spark">✦</span></span></footer>
        </main>
    </div>
    <flux:modal wire:model="showForm" class="users-modal md:w-[480px]">
        <form wire:submit="save" class="space-y-5"><div><flux:heading size="lg">{{ $editing ? 'Edit pengguna' : 'Tambah pengguna' }}</flux:heading><flux:text class="mt-2">Lengkapi profil anggota dalam workspace demo.</flux:text></div><flux:input wire:model="name" label="Nama lengkap" placeholder="Contoh: Aditya Pratama" required maxlength="80"/><flux:input wire:model="email" label="Alamat email" type="email" placeholder="nama@example.com" required maxlength="150"/><flux:select wire:model="role" label="Peran"><option>Admin</option><option>Editor</option><option>Member</option></flux:select><flux:select wire:model="status" label="Status"><option>Aktif</option><option>Nonaktif</option></flux:select><div class="modal-actions"><button type="button" class="btn btn-secondary" wire:click="$set('showForm', false)">Batal</button><button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="save"><span wire:loading.remove wire:target="save">Simpan pengguna</span><span wire:loading wire:target="save">Menyimpan...</span></button></div></form>
    </flux:modal>
</div>
