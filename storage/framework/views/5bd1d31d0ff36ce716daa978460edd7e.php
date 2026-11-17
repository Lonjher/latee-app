<?php # [BlazeFolded]:{flux::modal.body}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/body.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::modal.close}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/close.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::button}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/button/index.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::modal.footer}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/footer.blade.php}:{1794877752} ?>
<?php # [BlazeFolded]:{flux::modal}:{E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/index.blade.php}:{1794877752} ?>
<?php
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\RoleForm;
use App\Support\PermissionGrouper;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
?>

<div
    x-data="{
        errorMessage: '',
        init() {
            window.addEventListener('edit-role-modal', (e) => {
                this.errorMessage = '';
                $wire.editRole(e.detail.roleId);
                $dispatch('modal-show', { name: 'edit-role' });
            });
            window.addEventListener('update-error', (e) => {
                this.errorMessage = e.detail.message;
            });
            window.addEventListener('role-updated', () => {
                $dispatch('modal-close', { name: 'edit-role' });
            });
        }
    }"
>
    <?php ob_start(); ?><ui-modal  data-flux-modal>
    
    <dialog
        wire:ignore.self
        class="bg-transparent m-auto w-full max-w-2xl p-3 sm:p-4"
         data-modal="edit-role"                         <?php if (isset($scope)) $__scope = $scope; ?><?php $scope = array (
  'name' => 'edit-role',
); ?>
        x-data="fluxModal(<?php echo \Illuminate\Support\Js::from($scope['name'])->toHtml() ?>, <?php echo \Illuminate\Support\Js::from(isset($__livewire) ? $__livewire->getId() : null)->toHtml() ?>)"
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>
        x-on:modal-show.document="handleShow($event)"
        x-on:modal-close.document="handleClose($event)"
    >
                    <?php ob_start(); ?>
        <form
            wire:submit.prevent="updateRole"
            class="relative flex max-h-[90vh] w-full flex-col overflow-hidden rounded-3xl bg-white shadow-none! dark:bg-stone-900"
        >
            <div
                wire:loading
                wire:target="editRole"
                class="absolute inset-0 z-50 flex items-center justify-center rounded-3xl bg-white/70 backdrop-blur-sm dark:bg-stone-900/70"
            >
                <div class="flex items-center gap-2 rounded-lg border border-stone-200 bg-white px-3 py-2 shadow-sm dark:border-stone-700 dark:bg-stone-800">
                    <svg class="size-4 animate-spin text-sage-600 dark:text-sage-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    <span class="text-xs font-medium text-stone-600 dark:text-stone-300"><?php echo e(__('Memuat data...')); ?></span>
                </div>
            </div>

            <?php if (!function_exists('_b442c4db0bb57644da5eb4b10d1142f7')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/modal/header.blade.php', $__blaze->compiledPath.'/b442c4db0bb57644da5eb4b10d1142f7.php'); require $__blaze->compiledPath.'/b442c4db0bb57644da5eb4b10d1142f7.php'; } ?>
<?php $__blaze->pushData(['icon' => 'pencil-square','title' => e(__('Edit Role')),'description' => e(__('Perbarui nama role dan permission yang dapat diakses.'))]); ?>
<?php _b442c4db0bb57644da5eb4b10d1142f7($__blaze, ['icon' => 'pencil-square','title' => e(__('Edit Role')),'description' => e(__('Perbarui nama role dan permission yang dapat diakses.'))], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

            <?php ob_start(); ?><div class="min-h-0 flex-1 overflow-y-auto px-4 py-3">
    <?php ob_start(); ?>
                <div x-show="errorMessage" x-cloak x-text="errorMessage"
                    class="mb-3 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-[11px] text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300"></div>

                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($form->role?->name === 'admin'): ?>
                        <div class="flex items-start gap-2 rounded-lg border border-amber-200 bg-amber-50 px-3 py-2 text-[11px] text-amber-800 dark:border-amber-900/50 dark:bg-amber-950/30 dark:text-amber-300">
                            <svg class="mt-0.5 size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                            <span>Nama role <strong>admin</strong> tidak dapat diubah. Berhati-hatilah saat mengurangi permission — dapat menyebabkan admin terkunci.</span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if (!function_exists('_dad8686a1527b7115571afd0feff4fe5')) { $__blaze->compile('E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/flux/input/index.blade.php', $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'); require $__blaze->compiledPath.'/dad8686a1527b7115571afd0feff4fe5.php'; } ?>
<?php $__blaze->pushData(['wire:model' => 'form.name','icon:leading' => 'identification','label' => e(__('Nama Role')),'required' => true,'maxlength' => '255','disabled' => $form->role?->name === 'admin','description' => 'Akan dinormalisasi menjadi snake_case.']); ?>
<?php _dad8686a1527b7115571afd0feff4fe5($__blaze, ['wire:model' => 'form.name','icon:leading' => 'identification','label' => e(__('Nama Role')),'required' => true,'maxlength' => '255','disabled' => $form->role?->name === 'admin','description' => 'Akan dinormalisasi menjadi snake_case.'], [], ['required', 'disabled'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">
                            <?php echo e(__('Permission')); ?>

                        </label>
                        <?php if (isset($component)) { $__componentOriginalfc5c56251f5a4310023e1dcaff7b4228 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc5c56251f5a4310023e1dcaff7b4228 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.permission-matrix','data' => ['groups' => $this->permissionGroups,'wireModel' => 'form.permissions','selected' => $form->permissions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('permission-matrix'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['groups' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->permissionGroups),'wireModel' => 'form.permissions','selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->permissions)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc5c56251f5a4310023e1dcaff7b4228)): ?>
<?php $attributes = $__attributesOriginalfc5c56251f5a4310023e1dcaff7b4228; ?>
<?php unset($__attributesOriginalfc5c56251f5a4310023e1dcaff7b4228); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc5c56251f5a4310023e1dcaff7b4228)): ?>
<?php $component = $__componentOriginalfc5c56251f5a4310023e1dcaff7b4228; ?>
<?php unset($__componentOriginalfc5c56251f5a4310023e1dcaff7b4228); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['form.permissions.*'];
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
            <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>

            <?php ob_start(); ?><div class="flex flex-shrink-0 items-center justify-end gap-1.5 border-t border-stone-100 bg-white p-4 pt-3 dark:border-stone-800 dark:bg-stone-900">
    <?php ob_start(); ?>
                <?php ob_start(); ?><ui-close data-flux-modal-close >
    <?php ob_start(); ?>
                    <?php ob_start(); ?><button type="button" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 ps-5 pe-5 inline-flex  bg-transparent hover:bg-slate-100 dark:hover:bg-white/10 text-slate-700 dark:text-white" data-flux-button="data-flux-button">
        <?php ob_start(); ?><?php echo e(__('Batal')); ?><?php echo trim(ob_get_clean()); ?>

    </button>
<?php echo ltrim(ob_get_clean()); ?>
                <?php echo trim(ob_get_clean()); ?>

</ui-close>
<?php echo ltrim(ob_get_clean()); ?>
                <?php ob_start(); ?><button type="submit" class="hover:-translate-y-0.5 cursor-pointer relative items-center font-semibold justify-center whitespace-nowrap transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-500 focus-visible:ring-offset-white dark:focus-visible:ring-brand-400 dark:focus-visible:ring-offset-slate-900 disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-9 text-sm rounded-full gap-2 ps-5 pe-5 inline-flex  bg-[var(--color-accent)] hover:bg-[color-mix(in_oklab,var(--color-accent),transparent_10%)] shadow-lg shadow-[color-mix(in_oklab,var(--color-accent),transparent_75%)] text-[var(--color-accent-foreground)]   [[data-flux-button-group]_&amp;]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-[1px] dark:[:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-[1px]! [:is([data-flux-button-group]&gt;&amp;:not(:first-child),_[data-flux-button-group]_:not(:first-child)&gt;&amp;)]:border-s-white/20 *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none [--color-accent:var(--color-brand-600)] [--color-accent-content:var(--color-brand-600)] [--color-accent-foreground:var(--color-white)] dark:[--color-accent:var(--color-brand-500)] dark:[--color-accent-content:var(--color-brand-400)] dark:[--color-accent-foreground:var(--color-white)]" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" wire:loading.attr="disabled" wire:target="updateRole">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
        
                    <span><?php ob_start(); ?>
                    <?php echo e(__('Perbarui Data')); ?>

                <?php echo trim(ob_get_clean()); ?></span>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
            <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
        </form>
    <?php echo trim(ob_get_clean()); ?>


                        </dialog>
</ui-modal>
<?php echo ltrim(ob_get_clean()); ?>
</div><?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\storage\framework\views/livewire/views/7bc94874.blade.php ENDPATH**/ ?>