<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post = null;

    public string $title = '';
    public string $slug = '';
    public string $excerpt = '';
    public string $content = '';             // ← RESTORE
    public ?int $category_id = null;
    public bool $is_published = false;
    public bool $is_featured = false;
    public ?string $published_at = null;

    public $featured_image = null;
    public ?string $existing_featured_image = null;

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable', 'string', 'max:255',
                Rule::unique('posts', 'slug')->ignore($this->post?->id),
            ],
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string|min:10',           // ← RESTORE
            'category_id' => 'nullable|exists:categories,id',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
            'published_at' => 'nullable|date',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }

    public function setPost(Post $post): void
    {
        $this->post = $post;
        $this->title = $post->title ?? '';
        $this->slug = $post->slug ?? '';
        $this->excerpt = $post->excerpt ?? '';
        $this->content = is_string($post->content) ? $post->content : '';   // ← RESTORE
        $this->category_id = $post->category_id;
        $this->is_published = (bool) $post->is_published;
        $this->is_featured = (bool) $post->is_featured;
        $this->published_at = $post->published_at?->format('Y-m-d\TH:i');
        $this->existing_featured_image = $post->featured_image;
        $this->featured_image = null;
        $this->resetValidation();
    }

    public function create(): Post
    {
        $this->normalize();
        $this->validate();

        $data = $this->prepare();
        $data['user_id'] = auth()->id();
        // Hapus: $data['content'] = [];

        return Post::create($data);
    }

    public function update(): Post
    {
        $this->normalize();
        $this->validate();

        $this->post->update($this->prepare());

        return $this->post->refresh();
    }

    private function normalize(): void
    {
        $this->title = trim($this->title);
        $this->slug = Str::slug($this->slug ?: $this->title);

        if (! $this->is_published) {
            $this->published_at = null;
        } elseif (empty($this->published_at)) {
            $this->published_at = now()->format('Y-m-d\TH:i');
        }
    }

    private function prepare(): array
    {
        $data = [
            'title'        => $this->title,
            'slug'         => $this->slug,
            'excerpt'      => $this->excerpt ?: null,
            'content'      => $this->content,           // ← RESTORE
            'category_id'  => $this->category_id ?: null,
            'is_published' => $this->is_published,
            'is_featured'  => $this->is_featured,
            'published_at' => $this->published_at ?: null,
        ];

        if ($this->featured_image) {
            if ($this->post?->featured_image && ! Str::startsWith($this->post->featured_image, 'http')) {
                Storage::disk('public')->delete($this->post->featured_image);
            }
            $data['featured_image'] = $this->featured_image->store('posts', 'public');
        }

        return $data;
    }
}
