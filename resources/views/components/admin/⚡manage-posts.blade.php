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

<div>
    <x-page-header title="Kelola Post" leading="Kelola artikel, berita, dan konten publikasi"/>

    <div class="mx-auto mt-2 space-y-2">

        @if (session('success'))
            <div class="bg-sage-50 dark:bg-sage-950 border-sage-200 dark:border-sage-800 text-sage-700 dark:text-sage-300 flex items-center gap-2.5 rounded-xl border px-3 py-2 text-xs">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Stats --}}
        <div class="grid grid-cols-2 gap-2.5 sm:grid-cols-4">
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Total</div>
                <div class="mt-1 text-xl font-bold text-stone-800 dark:text-stone-100">{{ $this->stats['total'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Published</div>
                <div class="mt-1 text-xl font-bold text-green-600 dark:text-green-400">{{ $this->stats['published'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Draft</div>
                <div class="mt-1 text-xl font-bold text-amber-600 dark:text-amber-400">{{ $this->stats['draft'] }}</div>
            </div>
            <div class="rounded-xl border border-stone-200 bg-white px-3.5 py-3 dark:border-stone-800 dark:bg-stone-900">
                <div class="text-[10px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">Bulan Ini</div>
                <div class="mt-1 text-xl font-bold text-sage-600 dark:text-sage-400">{{ $this->stats['this_month'] }}</div>
            </div>
        </div>

        {{-- Filter --}}
        <div class="rounded-xl border border-stone-200 bg-white px-3 py-2.5 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
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
                            class="grid size-9 shrink-0 place-items-center rounded-lg border border-stone-200 bg-white text-stone-500 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800">
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
                    class="inline-flex cursor-pointer items-center gap-1.5 rounded-full bg-sage-600 px-3.5 py-2 text-xs font-semibold text-white shadow-sm transition hover:bg-sage-700 dark:bg-sage-500 dark:hover:bg-sage-600">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Post
                </a>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-hidden rounded-xl border border-stone-200 bg-white px-3 dark:border-stone-800 dark:bg-stone-900">
            <div class="flex items-center justify-between border-b border-stone-100 py-2 dark:border-stone-800">
                <span class="text-[11px] font-medium uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    {{ $posts->total() }} post ditemukan
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
                <table x-data class="w-full border-collapse text-left text-xs">
                    <thead>
                        <tr class="border-b border-stone-200 bg-stone-50 text-[11px] font-semibold uppercase tracking-wider text-stone-500 dark:border-stone-800 dark:bg-stone-800/50 dark:text-stone-400">
                            <th class="w-8 px-2.5 py-1.5 text-center">#</th>
                            <th class="px-2.5 py-1.5">Post</th>
                            <th class="w-32 px-2.5 py-1.5">Kategori</th>
                            <th class="w-28 px-2.5 py-1.5">Author</th>
                            <th class="w-24 px-2.5 py-1.5 text-center">Status</th>
                            <th class="w-28 px-2.5 py-1.5">Tanggal</th>
                            <th class="w-14 px-2.5 py-1.5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 dark:divide-stone-800/60">
                        @forelse ($posts as $post)
                            @php
                                $imgUrl = $post->featured_image
                                    ? (Str::startsWith($post->featured_image, 'http') ? $post->featured_image : Storage::url($post->featured_image))
                                    : null;
                            @endphp
                            <tr class="transition-colors hover:bg-stone-50 dark:hover:bg-stone-800/30">
                                <td class="px-2.5 py-1.5 text-center text-xs text-stone-400 dark:text-stone-600">
                                    {{ $loop->iteration + ($posts->currentPage() - 1) * $posts->perPage() }}
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="flex items-center gap-2">
                                        @if ($imgUrl)
                                            <img src="{{ $imgUrl }}" alt="{{ $post->title }}"
                                                class="size-10 shrink-0 rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                                        @else
                                            <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-stone-100 text-stone-400 dark:bg-stone-800 dark:text-stone-500">
                                                <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M2.25 6.75h.008v.008H2.25V6.75Z" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5">
                                                <span class="truncate text-xs font-medium text-stone-800 dark:text-stone-200">{{ $post->title }}</span>
                                                @if ($post->is_featured)
                                                    <span class="shrink-0 rounded-full bg-amber-50 px-1.5 py-0.5 text-[9px] font-bold uppercase tracking-wider text-amber-600 dark:bg-amber-950/40 dark:text-amber-400">Featured</span>
                                                @endif
                                            </div>
                                            <div class="truncate text-[10px] text-stone-500 dark:text-stone-500">/{{ $post->slug }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5">
                                    @if ($post->category)
                                        <span class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[10px] font-medium text-stone-700 dark:bg-stone-800 dark:text-stone-300">
                                            {{ $post->category->name }}
                                        </span>
                                    @else
                                        <span class="text-[10px] italic text-stone-400 dark:text-stone-500">—</span>
                                    @endif
                                </td>

                                <td class="px-2.5 py-1.5">
                                    <div class="truncate text-xs text-stone-700 dark:text-stone-300">
                                        {{ $post->author?->full_name ?? '—' }}
                                    </div>
                                </td>

                                <td class="px-2.5 py-1.5 text-center">
                                    @if ($post->is_published)
                                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-[10px] font-semibold text-green-700 dark:bg-green-950/40 dark:text-green-400">Published</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-amber-50 px-2 py-0.5 text-[10px] font-semibold text-amber-700 dark:bg-amber-950/40 dark:text-amber-400">Draft</span>
                                    @endif
                                </td>

                                <td class="px-2.5 py-1.5 text-[11px] text-stone-500 dark:text-stone-400">
                                    {{ $post->published_at?->format('d M Y') ?? $post->created_at?->format('d M Y') ?? '—' }}
                                </td>

                                <td class="px-2.5 py-1.5 text-right">
                                    <x-action-menu>
                                        <x-action-menu.item icon="pencil-square" color="sage"
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
                                <td colspan="7" class="px-2.5 py-10 text-center">
                                    <div class="flex flex-col items-center gap-1.5 text-stone-400">
                                        <p class="text-xs font-medium">Belum ada post</p>
                                        <a href="{{ route('admin.posts.create') }}" wire:navigate
                                            class="mt-2 text-[11px] font-medium text-sage-600 hover:text-sage-700 dark:text-sage-400">
                                            Buat post pertama →
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="border-t border-stone-100 px-3 py-2.5 text-xs dark:border-stone-800">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</div>
