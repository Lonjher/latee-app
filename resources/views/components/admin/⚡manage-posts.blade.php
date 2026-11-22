<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

new #[Title('Manage Posts')] class extends Component {
    use WithPagination;

    public string $search = '';
    public string $statusFilter = '';

    public function mount(): void
    {
        abort_unless(auth()->user()?->can('post.view'), 403);
    }

    public function updatedSearch(): void { $this->resetPage(); }
    public function updatedStatusFilter(): void { $this->resetPage(); }

    public function clearFilters(): void
    {
        $this->reset('search', 'statusFilter');
        $this->resetPage();
    }

    public function deletePost(int $id): void
    {
        abort_unless(auth()->user()?->can('post.delete'), 403);
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post->delete();
        session()->flash('success', "Post \"{$title}\" berhasil dihapus.");
        $this->resetPage();
    }

    public function togglePublish(int $id): void
    {
        abort_unless(auth()->user()?->can('post.publish'), 403);
        $post = Post::findOrFail($id);

        if ($post->is_published) {
            $post->update(['is_published' => false, 'published_at' => null]);
            session()->flash('success', "Post \"{$post->title}\" dikembalikan ke draft.");
        } else {
            $post->update(['is_published' => true, 'published_at' => now()]);
            session()->flash('success', "Post \"{$post->title}\" dipublish.");
        }
    }

    public function toggleFeatured(int $id): void
    {
        abort_unless(auth()->user()?->can('post.update'), 403);
        $post = Post::findOrFail($id);
        $post->update(['is_featured' => ! $post->is_featured]);
        session()->flash('success', $post->is_featured
            ? "Post \"{$post->title}\" dijadikan featured."
            : "Post \"{$post->title}\" dihapus dari featured.");
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total' => Post::count(),
            'published' => Post::where('is_published', true)->count(),
            'draft' => Post::where('is_published', false)->count(),
            'this_month' => Post::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count(),
        ];
    }

    public function with()
    {
        $posts = Post::query()
            ->with(['author', 'category'])
            ->when($this->search, function ($q) {
                $term = '%' . trim($this->search) . '%';
                $q->where(fn ($q) => $q->where('title', 'like', $term)->orWhere('slug', 'like', $term));
            })
            ->when($this->statusFilter === 'published', fn ($q) => $q->where('is_published', true))
            ->when($this->statusFilter === 'draft', fn ($q) => $q->where('is_published', false))
            ->when($this->statusFilter === 'featured', fn ($q) => $q->where('is_featured', true))
            ->latest('created_at')
            ->paginate(10);

        return ['posts' => $posts];
    }
};
?>

<div class="space-y-4 w-full">
    <div class="glass-card relative overflow-hidden rounded-2xl p-4 sm:p-5">
        <x-page-header title="Kelola Artikel & Berita" leading="Tulis, kelola, dan publikasikan warta kegiatan Pondok Pesantren Annuqayah Latee" />
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

        {{-- Stats Overview Cards --}}
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Total Post</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-slate-900 dark:text-white">{{ $this->stats['total'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Published</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-emerald-600 dark:text-emerald-400">{{ $this->stats['published'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Draft</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-amber-600 dark:text-amber-400">{{ $this->stats['draft'] }}</div>
            </div>
            <div class="glass-card rounded-2xl p-3.5 flex flex-col justify-between">
                <div class="text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Bulan Ini</div>
                <div class="mt-1 text-xl sm:text-2xl font-black text-blue-600 dark:text-blue-400">{{ $this->stats['this_month'] }}</div>
            </div>
        </div>

        {{-- Filter Bar --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4">
            <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center">
                <div class="flex w-full gap-2 sm:w-[50%]">
                    <flux:input
                        size="xs"
                        icon:leading="magnifying-glass"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Cari judul atau slug..."
                        class="flex-1"
                    />
                    @if ($search || $statusFilter)
                        <button wire:click="clearFilters" title="Reset"
                            class="grid size-9 shrink-0 place-items-center rounded-xl border border-slate-200/80 bg-white/80 text-slate-500 transition hover:bg-white hover:text-emerald-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-400 dark:hover:bg-white/10 dark:hover:text-emerald-400 cursor-pointer shadow-xs">
                            <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>

                <div class="w-full sm:w-[30%]">
                    <flux:select wire:model.live="statusFilter" size="xs">
                        <flux:select.option value="">Semua Status</flux:select.option>
                        <flux:select.option value="published">Published</flux:select.option>
                        <flux:select.option value="draft">Draft</flux:select.option>
                        <flux:select.option value="featured">Featured</flux:select.option>
                    </flux:select>
                </div>

                <a href="{{ route('admin.posts.create') }}" wire:navigate
                    class="inline-flex cursor-pointer items-center justify-center gap-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white px-3.5 py-2 text-xs font-bold shadow-sm shadow-emerald-900/10 transition sm:ms-auto">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Post
                </a>
            </div>
        </div>

        {{-- Table Card --}}
        <div class="glass-card rounded-2xl p-3 sm:p-4 overflow-hidden">
            <div class="flex items-center justify-between border-b border-slate-200/70 dark:border-white/10 pb-2.5 mb-2.5">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                    {{ $posts->total() }} post ditemukan
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
                <table x-data class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-slate-200/80 bg-slate-100/90 dark:border-white/10 dark:bg-white/5 text-[10px] font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                            <th class="w-8 px-3 py-2 text-center">#</th>
                            <th class="px-3 py-2">Post</th>
                            <th class="w-32 px-3 py-2">Kategori</th>
                            <th class="w-28 px-3 py-2">Author</th>
                            <th class="w-24 px-3 py-2 text-center">Status</th>
                            <th class="w-28 px-3 py-2">Tanggal</th>
                            <th class="w-14 px-3 py-2 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-white/5 text-[11px]">
                        @forelse ($posts as $post)
                            @php
                                $imgUrl = $post->featured_image
                                    ? (Str::startsWith($post->featured_image, 'http') ? $post->featured_image : Storage::url($post->featured_image))
                                    : null;
                            @endphp
                            <tr class="group transition-colors hover:bg-emerald-500/5">
                                <td class="px-3 py-2 text-center text-xs text-slate-400 dark:text-slate-500">
                                    {{ $loop->iteration + ($posts->currentPage() - 1) * $posts->perPage() }}
                                </td>

                                <td class="px-3 py-2">
                                    <div class="flex items-center gap-2.5">
                                        @if ($imgUrl)
                                            <img src="{{ $imgUrl }}" alt="{{ $post->title }}"
                                                class="size-10 shrink-0 rounded-lg border border-slate-200/80 dark:border-white/10 object-cover" />
                                        @else
                                            <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">
                                                <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M2.25 6.75h.008v.008H2.25V6.75Z" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-bold text-slate-900 dark:text-white">{{ $post->title }}</span>
                                                @if ($post->is_featured)
                                                    <span class="shrink-0 rounded-full bg-amber-500/15 border border-amber-500/20 px-1.5 py-0.2 text-[9px] font-bold uppercase tracking-wider text-amber-700 dark:text-amber-400">Featured</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[10px] text-slate-500 dark:text-slate-400">/{{ $post->slug }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-3 py-2">
                                    @if ($post->category)
                                        <span class="inline-flex items-center rounded-full bg-slate-100 dark:bg-white/10 border border-slate-200/60 dark:border-white/10 px-2 py-0.5 text-[10px] font-medium text-slate-700 dark:text-slate-300">
                                            {{ $post->category->name }}
                                        </span>
                                    @else
                                        <span class="text-[10px] italic text-slate-400 dark:text-slate-500">—</span>
                                    @endif
                                </td>

                                <td class="px-3 py-2">
                                    <div class="truncate text-xs text-slate-700 dark:text-slate-300 font-medium">
                                        {{ $post->author?->full_name ?? '—' }}
                                    </div>
                                </td>

                                <td class="px-3 py-2 text-center">
                                    @if ($post->is_published)
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/15 border border-emerald-500/20 px-2 py-0.5 text-[10px] font-bold text-emerald-700 dark:text-emerald-300">Published</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-amber-500/15 border border-amber-500/20 px-2 py-0.5 text-[10px] font-bold text-amber-700 dark:text-amber-300">Draft</span>
                                    @endif
                                </td>

                                <td class="px-3 py-2 text-[10px] text-slate-500 dark:text-slate-400">
                                    {{ $post->published_at?->format('d M Y') ?? $post->created_at?->format('d M Y') ?? '—' }}
                                </td>

                                <td class="px-3 py-2 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item icon="pencil-square" color="emerald"
                                            x-on:click="window.location.href = '{{ route('admin.posts.edit', $post) }}'">
                                            Edit
                                        </x-action-menu.item>
                                        <x-action-menu.item
                                            icon="{{ $post->is_published ? 'eye-slash' : 'eye' }}"
                                            color="{{ $post->is_published ? 'amber' : 'emerald' }}"
                                            wire:click="togglePublish({{ $post->id }})">
                                            {{ $post->is_published ? 'Unpublish' : 'Publish' }}
                                        </x-action-menu.item>
                                        <x-action-menu.item
                                            icon="star"
                                            color="{{ $post->is_featured ? 'amber' : 'default' }}"
                                            wire:click="toggleFeatured({{ $post->id }})">
                                            {{ $post->is_featured ? 'Unfeature' : 'Feature' }}
                                        </x-action-menu.item>
                                        <x-action-menu.separator />
                                        <x-action-menu.item icon="trash" color="red"
                                            wire:confirm="Hapus post {{ $post->title }}?"
                                            wire:click="deletePost({{ $post->id }})">
                                            Hapus
                                        </x-action-menu.item>
                                    </x-action-menu>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-3 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-slate-400">
                                        <p class="text-xs font-medium">Belum ada post</p>
                                        <a href="{{ route('admin.posts.create') }}" wire:navigate
                                            class="mt-2 text-[11px] font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400">
                                            Buat post pertama →
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-slate-200/70 dark:border-white/10 px-3 pt-3 mt-2 text-xs">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</div>
