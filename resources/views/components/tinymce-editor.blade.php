@props([
    'model' => 'form.content',
    'value' => '',
    'height' => 480,
    'placeholder' => 'Tulis konten di sini...',
])

<div wire:ignore x-data="{
    init() {
        const tryInit = () => {
            if (typeof tinymce === 'undefined') {
                setTimeout(tryInit, 100);
                return;
            }
            tinymce.init({
                target: this.$refs.textarea,
                height: {{ (int) $height }},
                menubar: false,
                branding: false,
                promotion: false,
                plugins: 'lists link image table code fullscreen wordcount autoresize',
                toolbar: 'undo redo | blocks | bold italic underline strikethrough | bullist numlist | link image table | alignleft aligncenter alignright | code fullscreen',
                placeholder: @js($placeholder),
                content_style: 'body { font-family: "DM Sans", ui-sans-serif, system-ui, sans-serif; font-size: 14px; line-height: 1.6; }',
                setup: (editor) => {
                    editor.on('init', () => editor.setContent(@js($value ?? '')));
                    const sync = () => $wire.set('{{ $model }}', editor.getContent());
                    editor.on('change input undo redo blur', sync);
                }
            });
        };
        tryInit();
    }
}" x-init="init()" class="relative">
    <textarea x-ref="textarea" class="w-full"></textarea>
</div>

@once
    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    @endpush
@endonce
