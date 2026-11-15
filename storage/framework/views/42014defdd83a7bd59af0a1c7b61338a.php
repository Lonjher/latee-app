<?php
    $wireModel = $attributes->whereStartsWith('wire:model');
    $errorBag = $errors ?? null;
    $fieldError = $error ?? ($name && $errorBag ? $errorBag->first($name) : null);
    $assetPath = trim(config('rich-text-editor.assets.path', 'vendor/rich-text-editor'), '/');
    $script = config('rich-text-editor.code_view.enhanced', true)
        ? 'rich-text-editor-with-code.js'
        : 'rich-text-editor.js';
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('rich-text-editor.assets.auto', true)): ?>
    <?php if (! $__env->hasRenderedOnce('3d6dcc55-b3ef-4754-8473-a5d382ec1353')): $__env->markAsRenderedOnce('3d6dcc55-b3ef-4754-8473-a5d382ec1353'); ?>
        <?php
            $versionedAsset = static function (string $file) use ($assetPath, $assetSourcePath): string {
                $published = public_path($assetPath.'/'.$file);
                $source = $assetSourcePath.'/'.$file;
                $assetFile = is_file($published) ? $published : $source;
                $fingerprint = dechex(filemtime($assetFile)).dechex(filesize($assetFile));

                return asset($assetPath.'/'.$file).'?v='.$fingerprint;
            };
        ?>
        <link rel="stylesheet" href="<?php echo e($versionedAsset('rich-text-editor.css')); ?>" data-rte-styles>
        <script defer src="<?php echo e($versionedAsset($script)); ?>" data-rte-script></script>
    <?php endif; ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<div
    id="<?php echo e($editorId); ?>"
    class="rich-text-editor<?php echo e($fieldError ? ' rich-text-editor--invalid' : ''); ?>"
    data-rich-text-editor
    <?php if($wireModel->isNotEmpty()): ?> data-rte-livewire <?php endif; ?>
    data-rte-options='<?php echo json_encode($editorOptions, 15, 512) ?>'
    x-data="richTextEditor"
    <?php echo e($attributes->except(['id', 'class'])->whereDoesntStartWith('wire:model')); ?>

>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($label): ?>
        <label class="rte-label" for="<?php echo e($editorId); ?>-input"><?php echo e($label); ?></label>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <textarea
        id="<?php echo e($editorId); ?>-input"
        class="rte-native-input"
        data-rte-input
        <?php if($name): ?> name="<?php echo e($name); ?>" <?php endif; ?>
        <?php if($required): ?> required <?php endif; ?>
        <?php if($disabled): ?> disabled <?php endif; ?>
        <?php echo e($wireModel); ?>

    ><?php echo e($value); ?></textarea>

    <div data-rte-mount wire:ignore></div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($fieldError): ?>
        <p class="rte-field-error" data-rte-field-error><?php echo e($fieldError); ?></p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH D:\PUJASERA\latee-app\vendor\arm092\laravel-rich-text-editor\src/../resources/views/components/editor.blade.php ENDPATH**/ ?>