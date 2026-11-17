<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Post;

new #[Title('Berita & Artikel')] #[Layout('layouts.guest')] class extends Component {
    use WithPagination;

    public string $search = '';

    public string $type = '';

    public string $sort = 'latest';

    public function updatedSearch(): void { $this->resetPage(); }
    public function updatedSort(): void   { $this->resetPage(); }

    public function setType(string $type): void
    {
        $this->type = $type;
        $this->resetPage();
    }

    public function resetFilters(): void
    {
        $this->reset('search', 'type', 'sort');
        $this->resetPage();
    }

    public function with()
    {
        $posts = Post::query()
            ->with(['author', 'category'])
            ->published()
            ->when($this->search, function ($q) {
                $term = '%' . trim($this->search) . '%';
                $q->where(fn ($q) => $q
                    ->where('title', 'like', $term)
                    ->orWhere('excerpt', 'like', $term)
                );
            })
            ->when($this->type, fn ($q) => $q->ofType($this->type))
            ->when($this->sort === 'oldest',  fn ($q) => $q->orderBy('published_at', 'asc'))
            ->when($this->sort === 'popular', fn ($q) => $q->orderBy('views_count', 'desc'))
            ->when($this->sort === 'latest',  fn ($q) => $q->orderBy('published_at', 'desc'))
            ->paginate(9);

        return ['posts' => $posts];
    }
};
?>


<div>
    {{-- ═════════ HERO ═════════ --}}
    <section class="relative w-full py-8 sm:py-12 md:py-20 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="relative w-full max-w-[1400px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">
            <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/20 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-brand-200/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
            </div>
            <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-12 md:py-16 text-center">
                <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                    <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-100 dark:border-brand-700">Warta Annuqayah Latee</span>
                </div>
                <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                    Berita & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Artikel</span>
                </h1>
                <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">
                    Informasi terkini seputar kegiatan pesantren, prestasi santri, serta tulisan reflektif dan edukatif dari para kontributor.
                </p>
            </div>
        </div>
    </section>

    {{-- ═════════ FILTER & SEARCH ═════════ --}}
    <section class="sticky top-16 z-40 bg-white/90 dark:bg-slate-900/90 backdrop-blur-lg border-b border-slate-200 dark:border-slate-800 py-4 shadow-sm transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-3 md:gap-4">

                {{-- Search --}}
                <div class="relative w-full md:w-1/3">
                    <flux:input
                        type="search"
                        wire:model.live.debounce.300ms="search"
                        placeholder="Cari berita atau artikel..."
                        icon:leading="magnifying-glass"
                    />
                </div>

                {{-- Type Pills --}}
                <div class="flex items-center bg-slate-100 dark:bg-slate-800 p-1 rounded-full w-full md:w-auto overflow-x-auto">
                    <button type="button" wire:click="setType('')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 {{ $type === '' ? 'bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' }}">
                        Semua
                    </button>
                    <button type="button" wire:click="setType('news')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 flex items-center gap-1.5 {{ $type === 'news' ? 'bg-rose-500 dark:bg-rose-600 text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-rose-600 dark:hover:text-rose-400' }}">
                        <span class="w-1.5 h-1.5 rounded-full bg-current"></span> Berita
                    </button>
                    <button type="button" wire:click="setType('artikel')"
                        class="px-3 sm:px-4 py-2 rounded-full text-[11px] sm:text-xs font-bold whitespace-nowrap transition-all duration-300 flex items-center gap-1.5 {{ $type === 'article' ? 'bg-brand-600 dark:bg-brand-500 text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-brand-600 dark:hover:text-brand-400' }}">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                    </button>
                </div>

                {{-- Sort --}}
                <div class="w-full md:w-auto">
                    <flux:select wire:model.live="sort">
                        <flux:select.option value="latest">Terbaru</flux:select.option>
                        <flux:select.option value="oldest">Terlama</flux:select.option>
                        <flux:select.option value="popular">Terpopuler</flux:select.option>
                    </flux:select>
                </div>
            </div>
        </div>
    </section>

    {{-- ═════════ BLOG GRID ═════════ --}}
    <section class="py-12 md:py-16 bg-slate-50 dark:bg-slate-950 min-h-screen transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 md:px-6">

            <div wire:loading.flex wire:target="search,type,sort,setType" class="justify-center py-8">
                <div class="inline-flex items-center gap-2 rounded-full bg-white dark:bg-slate-900 px-4 py-2 shadow-md text-xs font-medium text-slate-600 dark:text-slate-300">
                    <svg class="size-4 animate-spin text-brand-600 dark:text-brand-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    Memuat...
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @forelse($posts as $post)
                    @php
                        $primaryType = $post->category?->type ?? 'article';
                        $image = $post->featured_image
                            ? (str_starts_with($post->featured_image, 'http') ? $post->featured_image : \Illuminate\Support\Facades\Storage::url($post->featured_image))
                            : 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop';
                        $dateLabel = $post->published_at?->translatedFormat('d F Y') ?? $post->created_at?->translatedFormat('d F Y');
                        $authorName = $post->author?->full_name ?? 'Redaksi';
                    @endphp

                    <article wire:key="post-{{ $post->id }}" class="reveal group bg-white dark:bg-slate-900 rounded-3xl overflow-hidden border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col relative">
                        {{-- Image --}}
                        <div class="relative h-52 sm:h-56 overflow-hidden">
                            <img src="{{ $image }}" alt="{{ $post->title }}"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105 dark:brightness-90"
                                loading="lazy">

                            {{-- Type Badge --}}
                            <div class="absolute top-4 left-4">
                                @if($primaryType === 'news')
                                    <span class="inline-flex items-center gap-1.5 bg-white/95 dark:bg-rose-900/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-rose-600 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700 uppercase tracking-wider">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span> Berita
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 bg-white/95 dark:bg-brand-900/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[10px] font-bold text-brand-600 dark:text-brand-200 shadow-sm border border-brand-100 dark:border-brand-700 uppercase tracking-wider">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Artikel
                                    </span>
                                @endif
                            </div>

                            {{-- Category --}}
                            @if($post->category)
                                <div class="absolute bottom-4 right-4">
                                    <span class="bg-slate-900/85 dark:bg-slate-950/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-medium text-white shadow-sm">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- Content --}}
                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-3">
                                <span>{{ $dateLabel }}</span>
                                <span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    {{ number_format($post->views_count, 0, ',', '.') }}
                                </span>
                            </div>

                            <h2 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 line-clamp-2 transition-colors {{ $primaryType === 'news' ? 'group-hover:text-rose-600 dark:group-hover:text-rose-400' : 'group-hover:text-brand-600 dark:group-hover:text-brand-400' }}">
                                {{ $post->title }}
                            </h2>

                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-5 line-clamp-3">
                                {{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 140) }}
                            </p>

                            <div class="mt-auto flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                                <span class="text-[11px] font-semibold text-slate-600 dark:text-slate-400 flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    {{ $authorName }}
                                </span>
                                <a href="{{ route('blogs.show', $post->slug) }}" wire:navigate
                                    class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-900 dark:text-white transition-colors group/btn {{ $primaryType === 'news' ? 'hover:text-rose-600 dark:hover:text-rose-400' : 'hover:text-brand-600 dark:hover:text-brand-400' }}">
                                    Baca
                                    <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-16 md:py-20 bg-white dark:bg-slate-900 rounded-3xl border border-slate-100 dark:border-slate-800">
                        <svg class="w-16 h-16 text-slate-300 dark:text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white">Tidak ada hasil ditemukan</h3>
                        <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 mt-1">Coba ubah kata kunci atau filter pencarian Anda.</p>
                        <button type="button" wire:click="resetFilters"
                            class="inline-block mt-4 text-xs md:text-sm font-semibold text-brand-600 dark:text-brand-400 hover:underline">
                            Reset Filter
                        </button>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if($posts->hasPages())
                <div class="mt-10 md:mt-12 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </section>
</div>

