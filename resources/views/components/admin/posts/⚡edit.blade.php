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

<div>
    <x-page-header title="Edit Post" leading="Perbarui konten dan pengaturan publikasi">
        <x-slot:actions>
            <a href="{{ route('admin.manage-posts') }}" wire:navigate
                class="inline-flex cursor-pointer items-center gap-1.5 rounded-full border border-stone-200 bg-white px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-300 dark:hover:bg-stone-700">
                <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Kembali
            </a>
        </x-slot:actions>
    </x-page-header>

    <form wire:submit.prevent="save" class="mx-auto mt-3 space-y-3">
        @if (session('error'))
            <div class="flex items-center gap-2.5 rounded-xl border border-red-200 bg-red-50 px-3 py-2 text-xs text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
            <div class="space-y-3 lg:col-span-2">
                <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                    <div class="space-y-3">
                        <flux:input wire:model="form.title" size="xs" icon:leading="document-text"
                            label="Judul" required maxlength="255" />
                        <flux:input wire:model="form.slug" size="xs" icon:leading="link"
                            label="Slug (URL)" maxlength="255" />

                        <div>
                            <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">Konten</label>
                            <flux:textarea
                                wire:model="form.content"
                                rows="12"
                                placeholder="Tulis konten post di sini..."
                                class="font-mono text-xs"
                            />
                            @error('form.content')
                                <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                    <h3 class="mb-3 text-xs font-semibold uppercase tracking-wider text-stone-500 dark:text-stone-400">Publikasi</h3>
                    <div class="space-y-3">
                        <label class="flex cursor-pointer items-center justify-between gap-2 rounded-lg border border-stone-200 bg-stone-50 px-3 py-2 dark:border-stone-700 dark:bg-stone-800">
                            <div class="flex flex-col">
                                <span class="text-xs font-medium text-stone-700 dark:text-stone-300">Published</span>
                                <span class="text-[10px] text-stone-400 dark:text-stone-500">Tampilkan di halaman publik</span>
                            </div>
                            <input type="checkbox" wire:model.live="form.is_published" class="peer sr-only" />
                            <div class="relative h-5 w-9 shrink-0 rounded-full bg-stone-300 transition-colors peer-checked:bg-sage-600 dark:bg-stone-600 dark:peer-checked:bg-sage-500">
                                <div class="absolute start-0.5 top-0.5 size-4 rounded-full bg-white shadow transition-transform peer-checked:translate-x-4"></div>
                            </div>
                        </label>

                        <label class="flex cursor-pointer items-center justify-between gap-2 rounded-lg border border-stone-200 bg-stone-50 px-3 py-2 dark:border-stone-700 dark:bg-stone-800">
                            <div class="flex flex-col">
                                <span class="text-xs font-medium text-stone-700 dark:text-stone-300">Featured</span>
                                <span class="text-[10px] text-stone-400 dark:text-stone-500">Tampilkan sebagai headline</span>
                            </div>
                            <input type="checkbox" wire:model="form.is_featured" class="peer sr-only" />
                            <div class="relative h-5 w-9 shrink-0 rounded-full bg-stone-300 transition-colors peer-checked:bg-amber-500 dark:bg-stone-600">
                                <div class="absolute start-0.5 top-0.5 size-4 rounded-full bg-white shadow transition-transform peer-checked:translate-x-4"></div>
                            </div>
                        </label>

                        @if ($form->is_published)
                            <flux:input wire:model="form.published_at" size="xs" type="datetime-local"
                                icon:leading="calendar" label="Tanggal Publish"
                                description="Kosongkan untuk pakai waktu sekarang." />
                        @endif
                    </div>
                </div>

                <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                    <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">Kategori</label>
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
                    @error('form.category_id')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                </div>

                <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                    <h3 class="mb-3 text-xs font-semibold uppercase tracking-wider text-stone-500 dark:text-stone-400">Featured Image</h3>
                    <div class="space-y-2">
                        @if ($form->featured_image)
                            <img src="{{ $form->featured_image->temporaryUrl() }}" alt="Preview"
                                class="aspect-video w-full rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                        @elseif ($this->existingImageUrl)
                            <img src="{{ $this->existingImageUrl }}" alt="Current image"
                                class="aspect-video w-full rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                        @else
                            <div class="flex aspect-video w-full items-center justify-center rounded-lg border-2 border-dashed border-stone-300 bg-stone-50 dark:border-stone-700 dark:bg-stone-800/30">
                                <span class="text-[10px] text-stone-400 dark:text-stone-500">Belum ada gambar</span>
                            </div>
                        @endif
                        <input type="file" wire:model="form.featured_image" accept="image/*"
                            class="w-full cursor-pointer rounded-lg border border-stone-200 bg-stone-50 text-[11px] text-stone-600 file:mr-2 file:cursor-pointer file:rounded-l-md file:border-0 file:bg-stone-100 file:px-3 file:py-1.5 file:text-[11px] file:font-medium file:text-stone-700 hover:file:bg-stone-200 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-400 dark:file:bg-stone-700 dark:file:text-stone-300" />
                        <div wire:loading wire:target="form.featured_image" class="text-[10px] text-sage-600 dark:text-sage-400">Mengupload...</div>
                        @error('form.featured_image')<p class="text-[10px] text-red-500">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                    <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">Ringkasan (Excerpt)</label>
                    <flux:textarea wire:model="form.excerpt" rows="4" placeholder="Ringkasan singkat..." maxlength="500" />
                    @error('form.excerpt')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                </div>

                <div class="flex flex-col gap-2">
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="save">
                        <span wire:loading.remove wire:target="save">Simpan Perubahan</span>
                        <span wire:loading wire:target="save">Menyimpan...</span>
                    </flux:button>
                    <a href="{{ route('admin.manage-posts') }}" wire:navigate
                        class="cursor-pointer rounded-full border border-stone-200 px-3.5 py-2 text-center text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:text-stone-400 dark:hover:bg-stone-800">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
