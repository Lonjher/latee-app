<?php
if (!function_exists('__02a0762ba05594fe5c6f2635bc2b0a32')):
function __02a0762ba05594fe5c6f2635bc2b0a32($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php if (!function_exists('__d785d950be41e2dae5bf2cd8f583029a')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/d785d950be41e2dae5bf2cd8f583029a.php'); require $__blaze->compiledPath.'/d785d950be41e2dae5bf2cd8f583029a.php'; } ?>
<?php $__blaze->pushData(['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'xData' => true,'xOn:click' => '$dispatch(\'flux-sidebar-toggle\')','ariaLabel' => e(__('Toggle sidebar')),'dataFluxSidebarToggle' => true]); ?>
<?php __d785d950be41e2dae5bf2cd8f583029a($__blaze, ['attributes' => $attributes->class('shrink-0'),'variant' => 'subtle','square' => true,'xData' => true,'xOn:click' => '$dispatch(\'flux-sidebar-toggle\')','ariaLabel' => e(__('Toggle sidebar')),'dataFluxSidebarToggle' => true], [], ['attributes', 'square', 'xData', 'dataFluxSidebarToggle'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'ariaLabel' => 'aria-label', 'dataFluxSidebarToggle' => 'data-flux-sidebar-toggle'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/toggle.blade.php ENDPATH**/ ?>