<?php # [BlazeFolded]:{flux::icon.folder}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/folder.blade.php}:{1789478109} ?>
<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select.option}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/option/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select.group}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/group/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::select}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/select/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
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
?>

<div class="flex flex-col h-full lg:flex-1 lg:min-h-0">

    <div class="rounded-xl shrink-0 border-b border-stone-200 bg-white/80 px-4 py-3 backdrop-blur-sm dark:border-stone-800 dark:bg-stone-900/80">
        <?php if (isset($component)) { $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Edit Post','leading' => 'Perbarui konten dan pengaturan publikasi']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Edit Post','leading' => 'Perbarui konten dan pengaturan publikasi']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             <?php $__env->slot('actions', null, []); ?> 
                <a href="<?php echo e(route('admin.manage-posts')); ?>" wire:navigate
                    class="inline-flex cursor-pointer items-center gap-1.5 rounded-full border border-stone-200 bg-white px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-300 dark:hover:bg-stone-700">
                    <svg class="size-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Kembali
                </a>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $attributes = $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $component = $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('error')): ?>
        <div class="shrink-0 border-b border-red-200 bg-red-50 px-4 py-2 text-xs text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300">
            <div class="flex items-center gap-2.5">
                <svg class="size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
                <?php echo e(session('error')); ?>

            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <form wire:submit.prevent="save"
        class="grid flex-1 min-h-0 grid-cols-1 lg:grid-cols-[7fr_3fr] lg:grid-rows-1">

        
        <div class="lg:overflow-y-auto lg:overscroll-contain pr-4 py-4 lg:border-e border-stone-200 dark:border-stone-800">
            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-stone-500 dark:text-stone-400">
                    Konten
                </label>

                <?php if (isset($component)) { $__componentOriginal503e2856a23353287b6c9965f6324f84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal503e2856a23353287b6c9965f6324f84 = $attributes; } ?>
<?php $component = Arm092\RichTextEditor\View\Components\RichTextEditor::resolve(['label' => '','value' => old('form.content', $form->content)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('rich-text-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Arm092\RichTextEditor\View\Components\RichTextEditor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'form.content']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal503e2856a23353287b6c9965f6324f84)): ?>
<?php $attributes = $__attributesOriginal503e2856a23353287b6c9965f6324f84; ?>
<?php unset($__attributesOriginal503e2856a23353287b6c9965f6324f84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal503e2856a23353287b6c9965f6324f84)): ?>
<?php $component = $__componentOriginal503e2856a23353287b6c9965f6324f84; ?>
<?php unset($__componentOriginal503e2856a23353287b6c9965f6324f84); ?>
<?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['form.content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-[10px] text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>

        
        <div class="lg:overflow-y-auto lg:overscroll-contain px-4 py-4 space-y-3 bg-white/40 dark:bg-stone-900/40">

            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <div class="space-y-3">
                    <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'form.title','size' => 'xs','icon:leading' => 'document-text','label' => 'Judul','required' => true,'maxlength' => '255']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['wire:model' => 'form.title','size' => 'xs','icon:leading' => 'document-text','label' => 'Judul','required' => true,'maxlength' => '255'], [], ['required'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'form.slug','size' => 'xs','icon:leading' => 'link','label' => 'Slug (URL)','maxlength' => '255','description' => 'Kosongkan untuk generate otomatis.']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['wire:model' => 'form.slug','size' => 'xs','icon:leading' => 'link','label' => 'Slug (URL)','maxlength' => '255','description' => 'Kosongkan untuk generate otomatis.'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                </div>
            </div>

            
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
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($form->is_published): ?>
                        <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'form.published_at','size' => 'xs','type' => 'datetime-local','icon:leading' => 'calendar','label' => 'Tanggal Publish','description' => 'Kosongkan untuk pakai waktu sekarang.']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['wire:model' => 'form.published_at','size' => 'xs','type' => 'datetime-local','icon:leading' => 'calendar','label' => 'Tanggal Publish','description' => 'Kosongkan untuk pakai waktu sekarang.'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            
            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">Kategori</label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-3 text-slate-400 dark:text-slate-500">
                        <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-3.5" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                    </div>
                    <?php ob_start(); ?><?php $__blaze->pushData(['wire:model' => 'form.category_id', 'size' => 'xs', 'class' => 'ps-9!']); $__env->pushConsumableComponentData(['wire:model' => 'form.category_id', 'size' => 'xs', 'class' => 'ps-9!']); ?><div class="relative w-full">
    <select
        class="appearance-none [:where(&amp;)]:w-full ps-4 pe-11 block outline-none transition-all cursor-pointer h-8 py-1.5 text-xs rounded-full bg-slate-50 dark:bg-slate-800 focus:bg-white dark:focus:bg-slate-900 disabled:bg-slate-100 dark:disabled:bg-slate-800/50 text-slate-900 dark:text-white disabled:text-slate-400 dark:disabled:text-slate-500 has-[option.placeholder:checked]:text-slate-400 dark:has-[option.placeholder:checked]:text-slate-500 dark:[&amp;_option]:bg-slate-800 dark:[&amp;_option]:text-white disabled:shadow-none dark:shadow-none border border-slate-200 dark:border-slate-700 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-2 focus:ring-blue-300/40 dark:focus:ring-blue-400/30 ps-9!" wire:model="form.category_id"
                 name="form.category_id"                 data-flux-control
        data-flux-select-native
        data-flux-group-target
    >
        
        <?php ob_start(); ?>
                        <?php ob_start(); ?><option
    
     value=""      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = ''; ?>wire:key="" ><?php ob_start(); ?>— Tanpa Kategori —<?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $this->categoriesByType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $cats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php ob_start(); ?><?php $__blaze->pushData(['label' => e(ucfirst($type))]); $__env->pushConsumableComponentData(['label' => e(ucfirst($type))]); ?><optgroup  label="<?php echo e(ucfirst($type)); ?>"><?php ob_start(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                    <?php ob_start(); ?><option
    
     value="<?php echo e($cat->id); ?>"      <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = ''.e($cat->id).''; ?>wire:key="<?php echo e($cat->id); ?>" ><?php ob_start(); ?><?php echo e($cat->name); ?><?php echo trim(ob_get_clean()); ?></option><?php echo ltrim(ob_get_clean()); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <?php echo trim(ob_get_clean()); ?></optgroup>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <?php echo trim(ob_get_clean()); ?>

    </select>
</div>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['form.category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-[10px] text-red-500"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <h3 class="mb-3 text-xs font-semibold uppercase tracking-wider text-stone-500 dark:text-stone-400">Featured Image</h3>
                <div class="space-y-2">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($form->featured_image): ?>
                        <img src="<?php echo e($form->featured_image->temporaryUrl()); ?>" alt="Preview"
                            class="aspect-video w-full rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                    <?php elseif($this->existingImageUrl): ?>
                        <img src="<?php echo e($this->existingImageUrl); ?>" alt="Current image"
                            class="aspect-video w-full rounded-lg border border-stone-200 object-cover dark:border-stone-700" />
                    <?php else: ?>
                        <div class="flex aspect-video w-full items-center justify-center rounded-lg border-2 border-dashed border-stone-300 bg-stone-50 dark:border-stone-700 dark:bg-stone-800/30">
                            <span class="text-[10px] text-stone-400 dark:text-stone-500">Belum ada gambar</span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <input type="file" wire:model="form.featured_image" accept="image/*"
                        class="w-full cursor-pointer rounded-lg border border-stone-200 bg-stone-50 text-[11px] text-stone-600 file:mr-2 file:cursor-pointer file:rounded-l-md file:border-0 file:bg-stone-100 file:px-3 file:py-1.5 file:text-[11px] file:font-medium file:text-stone-700 hover:file:bg-stone-200 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-400 dark:file:bg-stone-700 dark:file:text-stone-300" />
                    <div wire:loading wire:target="form.featured_image" class="text-[10px] text-sage-600 dark:text-sage-400">Mengupload...</div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['form.featured_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-[10px] text-red-500"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            
            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">Ringkasan (Excerpt)</label>
                <?php if (!function_exists('_42396d4d58073d6e27e722d77fc46278')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/textarea.blade.php', $__blaze->compiledPath.'/42396d4d58073d6e27e722d77fc46278.php'); require $__blaze->compiledPath.'/42396d4d58073d6e27e722d77fc46278.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'form.excerpt','rows' => '3','placeholder' => 'Ringkasan singkat...','maxlength' => '500']); ?>
<?php _42396d4d58073d6e27e722d77fc46278($__blaze, ['wire:model' => 'form.excerpt','rows' => '3','placeholder' => 'Ringkasan singkat...','maxlength' => '500'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['form.excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="mt-1 text-[10px] text-red-500"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="rounded-xl border border-stone-200 bg-white p-4 dark:border-stone-800 dark:bg-stone-900">
                <div class="flex flex-col gap-2">
                    <?php ob_start(); ?><button type="submit" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 ps-6 pe-6 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20 *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none [--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" wire:loading.attr="disabled" wire:target="save">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
        
                    <span><?php ob_start(); ?>
                        <span wire:loading.remove wire:target="save">Simpan Perubahan</span>
                        <span wire:loading wire:target="save">Menyimpan...</span>
                    <?php echo trim(ob_get_clean()); ?></span>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
                    <a href="<?php echo e(route('admin.manage-posts')); ?>" wire:navigate
                        class="cursor-pointer rounded-full border border-stone-200 px-3.5 py-2 text-center text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:text-stone-400 dark:hover:bg-stone-800">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </form>
</div><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\storage\framework\views/livewire/views/7a643c02.blade.php ENDPATH**/ ?>