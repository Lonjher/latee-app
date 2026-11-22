<?php

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

new class extends Component
{
    public int $limit = 3;

    public function with()
    {
        $posts = Post::query()
            ->with(['category', 'author'])
            ->published()
            ->latest('published_at')
            ->limit($this->limit)
            ->get();

        return ['posts' => $posts];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="berita">
        {{-- Ambient Sapphire Glow Orb --}}
        <div class="glow-hero-sapphire w-[550px] h-[550px] top-1/2 -right-24 rounded-full opacity-40"></div>

        <div class="relative max-w-7xl mx-auto px-6 z-10">

            {{-- Header --}}
            <div class="reveal flex flex-col sm:flex-row items-start sm:items-end justify-between mb-10 md:mb-12 gap-4">
                <div>
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full mb-3 uppercase tracking-wider">Kabar Terbaru</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">
                        Berita & Artikel
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">
                        Informasi terkini dan tulisan seputar Annuqayah Latee
                    </p>
                </div>
                <a href="{{ route('blogs.index') }}" wire:navigate
                    class="inline-flex items-center gap-2 text-xs md:text-sm font-bold text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors group">
                    <span>Lihat Semua</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
                    </svg>
                </a>
            </div>

            {{-- Grid --}}
            @if($posts->isEmpty())
                <div class="text-center py-16 glass-card rounded-3xl">
                    <svg class="w-16 h-16 text-slate-300 dark:text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white">Belum ada artikel</h3>
                    <p class="text-xs md:text-sm text-slate-500 dark:text-slate-400 mt-1">Nantikan tulisan menarik dari kami.</p>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                    @foreach($posts as $post)
                        @php
                            $primaryType = $post->category?->type ?? 'article';
                            $isNews = $primaryType === 'news';
                            $image = $post->featured_image
                                ? (str_starts_with($post->featured_image, 'http')
                                    ? $post->featured_image
                                    : Storage::url($post->featured_image))
                                : null;
                            $dateLabel = $post->published_at?->translatedFormat('d F Y')
                                ?? $post->created_at?->translatedFormat('d F Y');
                            $excerpt = $post->excerpt
                                ?: \Illuminate\Support\Str::limit(strip_tags($post->content ?? ''), 140);
                            $delayClass = 'delay-' . (($loop->index + 1) * 100);
                        @endphp

                        <article wire:key="home-post-{{ $post->id }}"
                            class="reveal {{ $delayClass }} glass-card rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col">

                            {{-- Image --}}
                            <div class="relative h-56 md:h-60 overflow-hidden">
                                @if($image)
                                    <img alt="{{ $post->title }}" loading="lazy"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 dark:brightness-90"
                                        src="{{ $image }}" />
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br {{ $isNews ? 'from-rose-50 to-rose-100 dark:from-rose-950/40 dark:to-rose-900/30' : 'from-emerald-50 to-emerald-100 dark:from-emerald-950/40 dark:to-emerald-900/30' }}">
                                        <svg class="w-16 h-16 {{ $isNews ? 'text-rose-300 dark:text-rose-700' : 'text-emerald-300 dark:text-emerald-700' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                @endif

                                {{-- Type badge --}}
                                <div class="absolute top-4 left-4">
                                    @if($isNews)
                                        <div class="inline-flex items-center gap-1.5 bg-white/90 dark:bg-rose-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-rose-700 dark:text-rose-200 shadow-sm border border-rose-100 dark:border-rose-700 uppercase tracking-wider">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                            Berita
                                        </div>
                                    @else
                                        <div class="inline-flex items-center gap-1.5 bg-white/90 dark:bg-emerald-900/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold text-emerald-700 dark:text-emerald-200 shadow-sm border border-emerald-100 dark:border-emerald-700 uppercase tracking-wider">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                            Blog
                                        </div>
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
                                <span class="text-[10px] md:text-[11px] font-semibold text-slate-400 dark:text-slate-500 mb-2">
                                    {{ $dateLabel }}
                                </span>

                                <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-3 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors line-clamp-2">
                                    {{ $post->title }}
                                </h3>

                                <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 leading-relaxed mb-4 line-clamp-3">
                                    {{ $excerpt }}
                                </p>

                                <a href="{{ route('blogs.show', $post->slug) }}" wire:navigate
                                    class="mt-auto inline-flex items-center gap-1 text-[11px] md:text-xs font-bold text-slate-900 dark:text-white hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</div>
