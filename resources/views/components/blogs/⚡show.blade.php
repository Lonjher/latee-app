<?php

use Livewire\Component;
use App\Models\Post;

new class extends Component {
    public Post $post;
    public string $name = '';
    public string $email = '';
    public string $comment = '';
    public bool $commented = false;

    public function mount(string $slug): void
    {
        $this->post = Post::query()
            ->with([
                'author',
                'category',
                'comments' => fn ($q) => $q->approved()->roots()->pinnedFirst()->latest()->limit(20),
                'comments.replies.user',
                'comments.user',
            ])
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();

        $this->post->increment('views_count');
    }

    public function submitComment(): void
    {
        $this->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'comment' => 'required|string|min:3|max:2000',
        ]);

        $this->post->comments()->create([
            'name'        => trim($this->name),
            'email'       => strtolower(trim($this->email)),
            'body'        => trim($this->comment),
            'ip_address'  => request()->ip(),
            'user_agent'  => request()->userAgent(),
            'is_approved' => true,
        ]);

        $this->post->increment('comments_count');
        $this->reset('name', 'email', 'comment');
        $this->commented = true;

        $this->post->load([
            'comments' => fn ($q) => $q->approved()->roots()->pinnedFirst()->latest()->limit(20),
            'comments.replies.user',
            'comments.user',
        ]);
    }

    public function toggleLike(): void
    {
        $user = auth()->user();
        if (! $user) {
            $this->redirect(route('login'));
            return;
        }

        $existing = $this->post->likes()->where('user_id', $user->id)->first();

        if ($existing) {
            $existing->delete();
            $this->post->decrement('likes_count');
        } else {
            $this->post->likes()->create(['user_id' => $user->id]);
            $this->post->increment('likes_count');
        }

        $this->post->refresh();
    }

    public function isLiked(): bool
    {
        return $this->post->isLikedBy(auth()->user());
    }

    public function with()
    {
        $related = Post::query()
            ->with('category')
            ->published()
            ->where('id', '!=', $this->post->id)
            ->when($this->post->category_id, fn ($q) => $q->where('category_id', $this->post->category_id))
            ->latest('published_at')
            ->limit(3)
            ->get();

        return ['relatedPosts' => $related];
    }
};
?>

@php
    $primaryType  = $this->post->category?->type ?? 'article';
    $colorTheme   = $primaryType === 'news' ? 'rose' : 'brand';
    $badgeText    = $primaryType === 'news' ? 'Berita Terkini' : 'Artikel Pilihan';
    $authorName   = $this->post->author?->full_name ?? 'Redaksi';
    $readMinutes  = max(1, (int) ceil(str_word_count(strip_tags($this->post->content ?? '')) / 200));
    $publishedAt  = $this->post->published_at?->translatedFormat('d F Y') ?? $this->post->created_at?->translatedFormat('d F Y');
    $commentCount = $this->post->comments->count();
    $liked        = $this->isLiked();
@endphp

<x-layouts::guest :title="$this->post->title . ' — Annuqayah Latee'">

    @include('partials.header')

    <main>
        {{-- ═════════ HERO ═════════ --}}
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="relative w-full max-w-[1000px] min-h-[250px] md:min-h-[300px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise transition-colors duration-300">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                    <div class="absolute top-0 -left-20 w-[300px] h-[300px] bg-{{ $colorTheme }}-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow"></div>
                    <div class="absolute -bottom-40 right-0 w-[300px] h-[300px] bg-{{ $colorTheme }}-200/40 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-12 py-8 md:py-10 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        @if($primaryType === 'news')
                            <span class="inline-flex items-center gap-2 text-[10px] md:text-xs font-bold tracking-[0.2em] text-rose-700 dark:text-rose-300 uppercase bg-rose-50 dark:bg-rose-900/30 border border-rose-200 dark:border-rose-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm">
                                <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                                {{ $badgeText }}
                            </span>
                        @else
                            <span class="inline-flex items-center gap-2 text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 border border-brand-200 dark:border-brand-800 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                {{ $badgeText }}
                            </span>
                        @endif
                    </div>

                    <h1 class="reveal delay-100 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white leading-[1.15]">
                        {{ $this->post->title }}
                    </h1>

                    <div class="reveal delay-200 flex flex-wrap items-center justify-center gap-3 md:gap-6 text-[11px] md:text-xs text-slate-500 dark:text-slate-400 mt-5 md:mt-6">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-{{ $colorTheme }}-500 dark:text-{{ $colorTheme }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ $publishedAt }}
                        </span>

                        @if($primaryType === 'news')
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Reporter: {{ $authorName }}
                            </span>
                            @if($this->post->category)
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $this->post->category->name }}
                                </span>
                            @endif
                        @else
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ $readMinutes }} Menit Baca
                            </span>
                        @endif

                        <span class="hidden md:block w-px h-4 bg-slate-300 dark:bg-slate-600"></span>

                        <span class="flex items-center gap-1.5 font-medium">
                            <svg class="w-4 h-4 text-{{ $colorTheme }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            {{ number_format($this->post->views_count, 0, ',', '.') }} Dilihat
                        </span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═════════ CONTENT ═════════ --}}
        <section class="pb-16 md:pb-20 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-4 md:px-6">

                @if($this->post->featured_image)
                    <div class="mb-8 md:mb-10 reveal">
                        <img src="{{ str_starts_with($this->post->featured_image, 'http') ? $this->post->featured_image : \Illuminate\Support\Facades\Storage::url($this->post->featured_image) }}"
                            alt="{{ $this->post->title }}"
                            class="w-full aspect-video object-cover rounded-2xl shadow-lg border border-slate-200 dark:border-slate-700">
                    </div>
                @endif

                <div class="reveal prose prose-slate dark:prose-invert max-w-none
                            prose-img:rounded-2xl prose-img:shadow-lg prose-img:border prose-img:border-slate-200 dark:prose-img:border-slate-700 prose-img:w-full prose-img:object-cover prose-img:my-8
                            prose-figcaption:text-center prose-figcaption:text-sm
                            prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-xl prose-blockquote:not-italic">
                    @if($this->post->excerpt)
                        <p class="lead text-base md:text-lg">{{ $this->post->excerpt }}</p>
                    @endif

                    @if($this->post->content)
                        {!! $this->post->content !!}
                    @else
                        <p class="text-slate-500 italic">Konten artikel belum tersedia.</p>
                    @endif
                </div>

                @if($primaryType === 'article' && $this->post->author)
                    <div class="mt-10 md:mt-12 bg-slate-50 dark:bg-slate-800/40 border border-slate-200 dark:border-slate-800 rounded-3xl p-5 md:p-8 flex flex-col md:flex-row items-center md:items-start gap-5 md:gap-6 reveal transition-colors duration-300">
                        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-brand-100 dark:bg-brand-900/60 text-brand-700 dark:text-brand-300 flex items-center justify-center font-bold text-2xl shrink-0 shadow-md">
                            {{ $this->post->author->initials() }}
                        </div>
                        <div class="text-center md:text-left">
                            <h4 class="text-base md:text-lg font-bold text-slate-900 dark:text-white">{{ $this->post->author->full_name }}</h4>
                            <p class="text-xs text-brand-600 dark:text-brand-400 font-semibold mb-2">Kontributor Annuqayah Latee</p>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                {{ $this->post->author->bio ?: 'Santri aktif yang memiliki ketertarikan besar pada dunia literasi dan jurnalistik.' }}
                            </p>
                        </div>
                    </div>
                @endif

                <div class="mt-10 md:mt-12 pt-6 md:pt-8 border-t border-slate-200 dark:border-slate-800 reveal">

                    <div class="flex flex-wrap items-center justify-between gap-3 md:gap-4 mb-8 md:mb-10">
                        <div class="flex items-center gap-2 md:gap-3">
                            <button type="button" wire:click="toggleLike"
                                class="group inline-flex items-center gap-2 border px-4 md:px-5 py-2 md:py-2.5 rounded-full font-semibold text-xs md:text-sm transition-all duration-300 hover:-translate-y-0.5 shadow-sm
                                    {{ $primaryType === 'news'
                                        ? 'bg-rose-50 dark:bg-rose-900/30 hover:bg-rose-100 dark:hover:bg-rose-900/50 text-rose-600 dark:text-rose-400 border-rose-200 dark:border-rose-800'
                                        : 'bg-brand-50 dark:bg-brand-900/30 hover:bg-brand-100 dark:hover:bg-brand-900/50 text-brand-600 dark:text-brand-400 border-brand-200 dark:border-brand-800' }}
                                    {{ $liked ? 'ring-2 ring-offset-2 ring-current' : '' }}">
                                <svg class="w-4 h-4 md:w-5 md:h-5 group-hover:scale-110 transition-transform" fill="{{ $liked ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                <span>Suka ({{ number_format($this->post->likes_count, 0, ',', '.') }})</span>
                            </button>

                            <button type="button"
                                x-data
                                x-on:click="navigator.clipboard.writeText(window.location.href); $dispatch('notify', { message: 'Link disalin!' });"
                                class="group inline-flex items-center gap-2 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700 px-4 md:px-5 py-2 md:py-2.5 rounded-full font-semibold text-xs md:text-sm transition-all duration-300 hover:-translate-y-0.5 shadow-sm">
                                <svg class="w-4 h-4 md:w-5 md:h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                                <span>Bagikan</span>
                            </button>
                        </div>
                        <span class="text-xs md:text-sm text-slate-500 dark:text-slate-400 font-medium">{{ $commentCount }} Komentar</span>
                    </div>

                    <div class="space-y-4 md:space-y-6 mb-8 md:mb-10">
                        @forelse($this->post->comments as $c)
                            <div wire:key="comment-{{ $c->id }}" class="flex gap-3 md:gap-4">
                                <div class="w-9 h-9 md:w-10 md:h-10 rounded-full flex items-center justify-center font-bold shrink-0 text-sm
                                    {{ $primaryType === 'news' ? 'bg-rose-100 dark:bg-rose-900/50 text-rose-700 dark:text-rose-300' : 'bg-brand-100 dark:bg-brand-900/50 text-brand-700 dark:text-brand-300' }}">
                                    {{ mb_strtoupper(mb_substr($c->display_name, 0, 1)) }}
                                </div>
                                <div class="flex-1 bg-slate-50 dark:bg-slate-800/40 p-3 md:p-4 rounded-2xl rounded-tl-none border border-slate-100 dark:border-slate-800">
                                    <div class="flex items-center justify-between mb-1">
                                        <h4 class="text-xs md:text-sm font-bold text-slate-900 dark:text-white">{{ $c->display_name }}</h4>
                                        <span class="text-[10px] text-slate-400 dark:text-slate-500">{{ $c->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300">{{ $c->body }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-xs text-slate-400 dark:text-slate-500 italic text-center py-4">
                                Belum ada komentar. Jadilah yang pertama!
                            </p>
                        @endforelse
                    </div>

                    <div class="bg-slate-50 dark:bg-slate-800/40 p-5 md:p-8 rounded-3xl border border-slate-100 dark:border-slate-800 transition-colors duration-300">
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-4">Tinggalkan Komentar</h3>

                        @if($commented)
                            <div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-3 py-2 text-xs text-emerald-700 dark:border-emerald-900/50 dark:bg-emerald-950/30 dark:text-emerald-300">
                                Terima kasih! Komentar Anda berhasil dikirim.
                            </div>
                        @endif

                        <form wire:submit.prevent="submitComment" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">Nama Lengkap</label>
                                    <flux:input wire:model="name" type="text" placeholder="Masukkan nama Anda" />
                                    @error('name')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">Alamat Email</label>
                                    <flux:input wire:model="email" type="email" placeholder="Masukkan email Anda" />
                                    @error('email')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1">Komentar</label>
                                <flux:textarea wire:model="comment" placeholder="Tulis komentar Anda..." />
                                @error('comment')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                            </div>
                            <div class="flex justify-end pt-2">
                                <button type="submit" wire:loading.attr="disabled" wire:target="submitComment"
                                    class="inline-flex items-center gap-2 text-white font-semibold px-5 md:px-6 py-2.5 rounded-full transition-all duration-300 hover:-translate-y-0.5 shadow-lg
                                        {{ $primaryType === 'news'
                                            ? 'bg-rose-600 dark:bg-rose-500 hover:bg-rose-700 dark:hover:bg-rose-600 shadow-rose-500/30'
                                            : 'bg-brand-600 dark:bg-brand-500 hover:bg-brand-700 dark:hover:bg-brand-600 shadow-brand-500/30' }}">
                                    <span wire:loading.remove wire:target="submitComment">Kirim Komentar</span>
                                    <span wire:loading wire:target="submitComment">Mengirim...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-10 md:mt-12 text-center reveal">
                    <a href="{{ route('blogs.index') }}" wire:navigate
                        class="inline-flex items-center gap-2 bg-slate-900 dark:bg-slate-700 text-white font-semibold px-5 md:px-6 py-2.5 md:py-3 rounded-full transition-all duration-300 group
                        {{ $primaryType === 'news' ? 'hover:bg-rose-600 dark:hover:bg-rose-600' : 'hover:bg-brand-600 dark:hover:bg-brand-500' }}">
                        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Kembali ke Berita</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
