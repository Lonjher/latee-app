<?php # [BlazeFolded]:{flux::modal.close}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/close.blade.php}:{1794877752} ?>
<?php
if (!function_exists('_b442c4db0bb57644da5eb4b10d1142f7')):
function _b442c4db0bb57644da5eb4b10d1142f7($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'title' => null,
    'description' => null,
    'icon' => null,
    'closable' => true,
];
$title ??= $attributes['title'] ?? $__defaults['title']; unset($attributes['title']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$closable ??= $attributes['closable'] ?? $__defaults['closable']; unset($attributes['closable']);
unset($__defaults);
?>

<header <?php echo e($attributes->class('
    relative flex flex-shrink-0 items-start justify-between gap-3 overflow-hidden
    border-b border-stone-200/60 p-4 pb-3
    bg-gradient-to-r from-sage-50/80 via-brand-50/60 to-sage-50/80
    bg-[length:200%_200%] animate-gradient-x
    dark:border-stone-800/60
    dark:from-sage-950/40 dark:via-brand-950/30 dark:to-sage-950/40
')); ?>>
    
    <div class="pointer-events-none absolute -right-10 -top-10 size-32 rounded-full bg-sage-200/40 blur-2xl dark:bg-sage-500/10"></div>
    <div class="pointer-events-none absolute -left-10 -bottom-10 size-32 rounded-full bg-brand-200/30 blur-2xl dark:bg-brand-500/10"></div>

    
    <div class="relative flex min-w-0 flex-1 items-start gap-2.5">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($icon): ?>
            <div class="flex size-8 shrink-0 items-center justify-center rounded-xl bg-white/60 text-sage-600 shadow-sm ring-1 ring-white/40 backdrop-blur-sm dark:bg-stone-800/50 dark:text-sage-400 dark:ring-stone-700/40">
                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['name' => $icon, 'class' => 'size-4']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_9c82873bb1211d0da5f3edb32b2d0b37')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'); require $__blaze->compiledPath.'/9c82873bb1211d0da5f3edb32b2d0b37.php'; } ?>
<?php $__blaze->pushData(['name' => $icon,'class' => 'size-4']); ?>
<?php _9c82873bb1211d0da5f3edb32b2d0b37($__blaze, ['name' => $icon,'class' => 'size-4'], [], ['name'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <div class="min-w-0 flex-1">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($title): ?>
                <h3 class="text-sm font-semibold text-stone-800 dark:text-stone-100">
                    <?php echo e($title); ?>

                </h3>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($description): ?>
                <p class="mt-0.5 text-[11px] leading-normal text-stone-600/80 dark:text-stone-400/90">
                    <?php echo e($description); ?>

                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! $slot->isEmpty()): ?>
                <div class="mt-1"><?php echo e($slot); ?></div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($closable): ?>
        <?php ob_start(); ?><ui-close data-flux-modal-close >
    <?php ob_start(); ?>
            <button type="button" title="Tutup"
                class="relative shrink-0 cursor-pointer rounded-full p-1 text-stone-500/80 transition hover:bg-white/70 hover:text-stone-800 dark:text-stone-400/80 dark:hover:bg-stone-800/60 dark:hover:text-stone-100">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        <?php echo trim(ob_get_clean()); ?>

</ui-close>
<?php echo ltrim(ob_get_clean()); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</header>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/header.blade.php ENDPATH**/ ?>