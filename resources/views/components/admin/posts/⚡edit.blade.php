<?php

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;
use App\Livewire\Forms\PostForm;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

new #[Title('Edit Post')] class extends Component {
    use WithFileUploads;

    public PostForm $form;

    public function mount(Post $post): void
    {
        abort_unless(auth()->user()?->can('post.update'), 403);
        $this->form->setPost($post);
    }

    public function save()
    {
        try {
            $post = $this->form->update();
            session()->flash('success', "Post \"{$post->title}\" berhasil diperbarui.");
            return $this->redirect(route('admin.manage-posts'), navigate: true);
        } catch (ValidationException $e) {
            session()->flash('error', 'Periksa kembali form.');
            throw $e;
        }
    }

    #[Computed]
    public function categoriesByType()
    {
        return Category::ordered()->get()->groupBy('type');
    }

    #[Computed]
    public function existingImageUrl()
    {
        $path = $this->form->existing_featured_image;
        if (! $path) return null;
        return Str::startsWith($path, 'http') ? $path : Storage::url($path);
    }
};
?>

<div class="flex flex-col h-full lg:flex-1 lg:min-h-0 space-y-4">

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- HEADER STRIP --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <div class="glass-card rounded-2xl shrink-0 px-4 py-3.5">
        <x-page-header title="Edit Post" leading="Perbarui konten dan pengaturan publikasi warta santri">
            <x-slot:actions>
                <a href="{{ route('admin.manage-posts') }}" wire:navigate
                    class="hover:-translate-y-0.5 inline-flex cursor-pointer items-center gap-1.5 rounded-xl border border-slate-200/80 bg-white/80 dark:border-white/10 dark:bg-white/10 px-3.5 py-1.5 text-xs font-semibold text-slate-700 dark:text-slate-200 transition hover:bg-slate-100 dark:hover:bg-white/15 hover:text-emerald-600 dark:hover:text-emerald-400 backdrop-blur-md shadow-xs">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Kembali
                </a>
            </x-slot:actions>
        </x-page-header>
    </div>

    {{-- Error banner --}}
    @if (session('error'))
        <div class="shrink-0 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2.5 text-xs text-red-700 dark:text-red-300 backdrop-blur-md">
            <div class="flex items-center gap-2.5">
                <svg class="size-3.5 shrink-0 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <span class="font-semibold">{{ session('error') }}</span>
            </div>
        </div>
    @endif

    {{-- ═══════════════════════════════════════════════════ --}}
    {{-- SPLIT: Konten (70%) + Metadata (30%) --}}
    {{-- ═══════════════════════════════════════════════════ --}}
    <form wire:submit.prevent="save"
        class="grid flex-1 min-h-0 grid-cols-1 lg:grid-cols-[7fr_3fr] gap-4">

        {{-- LEFT 70%: Konten Editor --}}
        <div class="space-y-4">
            <div class="glass-card rounded-2xl p-4 sm:p-5 flex flex-col min-h-[500px]">
                <div class="flex items-center justify-between mb-3 border-b border-slate-200/70 dark:border-white/10 pb-2.5">
                    <label class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-2">
                        <svg class="size-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Konten Post
                    </label>
                    <span class="text-[11px] text-slate-500 dark:text-slate-400 font-medium">Editor Artikel & Warta</span>
                </div>

                <div class="rte-fill flex-1 min-h-0 text-slate-900 dark:text-slate-100">
                    <x-rich-text-editor
                        wire:model="form.content"
                        label=""
                        :value="old('form.content', $form->content)"
                    />
                </div>

                @error('form.content')
                    <p class="shrink-0 mt-2 text-xs font-semibold text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- RIGHT 30%: Metadata --}}
        <div class="space-y-3.5">

            <div class="glass-card rounded-2xl p-4 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                    <svg class="size-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Judul & Tautan
                </h3>
                <div class="space-y-3">
                    <flux:input wire:model="form.title" size="xs" icon:leading="document-text"
                        label="Judul" required maxlength="255" />
                    <flux:input wire:model="form.slug" size="xs" icon:leading="link"
                        label="Slug (URL)" maxlength="255" description="Kosongkan untuk generate otomatis." />
                </div>
            </div>

            {{-- Publikasi --}}
            <div class="glass-card rounded-2xl p-4 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                    <svg class="size-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Status Publikasi
                </h3>
                <div class="space-y-2.5">
                    <label class="flex cursor-pointer items-center justify-between gap-2 rounded-xl border border-slate-200/80 bg-slate-50/80 px-3.5 py-2.5 dark:border-white/10 dark:bg-white/5 transition hover:bg-slate-100/70 dark:hover:bg-white/10">
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-slate-800 dark:text-slate-200">Published</span>
                            <span class="text-[10px] text-slate-500 dark:text-slate-400">Tampilkan di halaman publik</span>
                        </div>
                        <input type="checkbox" wire:model.live="form.is_published" class="peer sr-only" />
                        <div class="relative h-5 w-9 shrink-0 rounded-full bg-slate-300 dark:bg-white/20 transition-colors peer-checked:bg-emerald-600 dark:peer-checked:bg-emerald-500">
                            <div class="absolute start-0.5 top-0.5 size-4 rounded-full bg-white shadow-md transition-transform peer-checked:translate-x-4"></div>
                        </div>
                    </label>
                    <label class="flex cursor-pointer items-center justify-between gap-2 rounded-xl border border-slate-200/80 bg-slate-50/80 px-3.5 py-2.5 dark:border-white/10 dark:bg-white/5 transition hover:bg-slate-100/70 dark:hover:bg-white/10">
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-slate-800 dark:text-slate-200">Featured</span>
                            <span class="text-[10px] text-slate-500 dark:text-slate-400">Tampilkan sebagai headline</span>
                        </div>
                        <input type="checkbox" wire:model="form.is_featured" class="peer sr-only" />
                        <div class="relative h-5 w-9 shrink-0 rounded-full bg-slate-300 dark:bg-white/20 transition-colors peer-checked:bg-amber-500">
                            <div class="absolute start-0.5 top-0.5 size-4 rounded-full bg-white shadow-md transition-transform peer-checked:translate-x-4"></div>
                        </div>
                    </label>
                    @if ($form->is_published)
                        <flux:input wire:model="form.published_at" size="xs" type="datetime-local"
                            icon:leading="calendar" label="Tanggal Publish" description="Kosongkan untuk pakai waktu sekarang." />
                    @endif
                </div>
            </div>

            {{-- Kategori --}}
            <div class="glass-card rounded-2xl p-4 space-y-2">
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                    <svg class="size-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    Kategori
                </label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-3 text-slate-400 dark:text-slate-500">
                        <flux:icon.folder class="size-3.5" />
                    </div>
                    <flux:select wire:model="form.category_id" size="xs" class="ps-9!">
                        <flux:select.option value="">— Tanpa Kategori —</flux:select.option>
                        @foreach ($this->categoriesByType as $type => $cats)
                            <flux:select.group label="{{ ucfirst($type) }}">
                                @foreach ($cats as $cat)
                                    <flux:select.option value="{{ $cat->id }}">{{ $cat->name }}</flux:select.option>
                                @endforeach
                            </flux:select.group>
                        @endforeach
                    </flux:select>
                </div>
                @error('form.category_id')<p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>@enderror
            </div>

            {{-- Featured Image --}}
            <div class="glass-card rounded-2xl p-4 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                    <svg class="size-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Gambar Utama (Featured Image)
                </h3>
                <div class="space-y-2.5">
                    @if ($form->featured_image)
                        <div class="relative overflow-hidden rounded-xl border border-slate-200/80 dark:border-white/10 shadow-xs">
                            <img src="{{ $form->featured_image->temporaryUrl() }}" alt="Preview"
                                class="aspect-video w-full object-cover" />
                        </div>
                    @elseif ($this->existingImageUrl)
                        <div class="relative overflow-hidden rounded-xl border border-slate-200/80 dark:border-white/10 shadow-xs">
                            <img src="{{ $this->existingImageUrl }}" alt="Current image"
                                class="aspect-video w-full object-cover" />
                        </div>
                    @else
                        <div class="flex aspect-video w-full items-center justify-center rounded-xl border-2 border-dashed border-slate-200 dark:border-white/10 bg-slate-50/60 dark:bg-white/5">
                            <div class="flex flex-col items-center gap-1 text-slate-400 dark:text-slate-500">
                                <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909M2.25 6.75h.008v.008H2.25V6.75Z" />
                                </svg>
                                <span class="text-[11px] font-medium">Belum ada gambar</span>
                            </div>
                        </div>
                    @endif
                    <input type="file" wire:model="form.featured_image" accept="image/*"
                        class="w-full cursor-pointer rounded-xl border border-slate-200/80 bg-white/70 px-2 py-1.5 text-xs text-slate-700 file:mr-2.5 file:cursor-pointer file:rounded-lg file:border-0 file:bg-emerald-500/15 file:px-3 file:py-1 file:text-xs file:font-bold file:text-emerald-700 hover:file:bg-emerald-500/25 dark:border-white/10 dark:bg-white/5 dark:text-slate-300 dark:file:bg-emerald-500/20 dark:file:text-emerald-400 dark:hover:file:bg-emerald-500/30 transition-all shadow-xs" />
                    <div wire:loading wire:target="form.featured_image" class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 flex items-center gap-1.5">
                        <svg class="size-3.5 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                        </svg>
                        Mengunggah gambar...
                    </div>
                    @error('form.featured_image')<p class="text-xs text-red-500 font-medium">{{ $message }}</p>@enderror
                    <p class="text-[10px] text-slate-400 dark:text-slate-500">Format: JPG, PNG, WEBP. Maks 2MB.</p>
                </div>
            </div>

            {{-- Excerpt --}}
            <div class="glass-card rounded-2xl p-4 space-y-2">
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                    <svg class="size-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                    </svg>
                    Ringkasan (Excerpt)
                </label>
                <flux:textarea wire:model="form.excerpt" rows="3" placeholder="Ringkasan singkat..." maxlength="500" />
                <p class="text-[10px] text-slate-400 dark:text-slate-500">Opsional. Maksimal 500 karakter.</p>
                @error('form.excerpt')<p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>@enderror
            </div>

            {{-- Actions --}}
            <div class="glass-card rounded-2xl p-4">
                <div class="flex flex-col gap-2.5">
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="save" class="w-full justify-center">
                        <span wire:loading.remove wire:target="save">Simpan Perubahan</span>
                        <span wire:loading wire:target="save">Menyimpan...</span>
                    </flux:button>
                    <a href="{{ route('admin.manage-posts') }}" wire:navigate
                        class="cursor-pointer rounded-xl border border-slate-200/80 bg-white/60 px-3.5 py-2 text-center text-xs font-semibold text-slate-700 transition hover:bg-slate-100 dark:border-white/10 dark:bg-white/5 dark:text-slate-300 dark:hover:bg-white/10">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
