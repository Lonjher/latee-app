<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\RoleForm;
use App\Support\PermissionGrouper;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

new class extends Component {
    public RoleForm $form;

    public function editRole($roleId)
    {
        $role = Role::with('permissions')->findOrFail($roleId);
        $this->form->setRole($role);
    }

    public function updateRole()
    {
        try {
            $role = $this->form->update();
            session()->flash('success', "Role \"{$role->name}\" berhasil diperbarui.");
            $this->dispatch('role-updated', message: "Role \"{$role->name}\" berhasil diperbarui.");
        } catch (ValidationException $e) {
            $this->dispatch('update-error', message: 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    #[Computed]
    public function permissionGroups()
    {
        return PermissionGrouper::get();
    }
};
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
    <flux:modal name="edit-role" variant="bare" :closable="false" class="m-auto w-full max-w-2xl p-3 sm:p-4">
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
                    <span class="text-xs font-medium text-stone-600 dark:text-stone-300">{{ __('Memuat data...') }}</span>
                </div>
            </div>

            <flux:modal.header
                icon="pencil-square"
                title="{{ __('Edit Role') }}"
                description="{{ __('Perbarui nama role dan permission yang dapat diakses.') }}"
            />

            <flux:modal.body>
                <div x-show="errorMessage" x-cloak x-text="errorMessage"
                    class="mb-3 rounded-lg border border-red-200 bg-red-50 px-3 py-2 text-[11px] text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300"></div>

                <div class="space-y-3">
                    @if ($form->role?->name === 'admin')
                        <div class="flex items-start gap-2 rounded-lg border border-amber-200 bg-amber-50 px-3 py-2 text-[11px] text-amber-800 dark:border-amber-900/50 dark:bg-amber-950/30 dark:text-amber-300">
                            <svg class="mt-0.5 size-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                            <span>Nama role <strong>admin</strong> tidak dapat diubah. Berhati-hatilah saat mengurangi permission — dapat menyebabkan admin terkunci.</span>
                        </div>
                    @endif

                    <flux:input
                        wire:model="form.name"
                        icon:leading="identification"
                        label="{{ __('Nama Role') }}"
                        required
                        maxlength="255"
                        :disabled="$form->role?->name === 'admin'"
                        description="Akan dinormalisasi menjadi snake_case."
                    />

                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">
                            {{ __('Permission') }}
                        </label>
                        <x-permission-matrix
                            :groups="$this->permissionGroups"
                            wireModel="form.permissions"
                            :selected="$form->permissions"
                        />
                        @error('form.permissions.*')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </flux:modal.body>

            <flux:modal.footer>
                <flux:modal.close>
                    <flux:button type="button" variant="ghost" size="sm">{{ __('Batal') }}</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary" size="sm" wire:loading.attr="disabled" wire:target="updateRole">
                    {{ __('Perbarui Data') }}
                </flux:button>
            </flux:modal.footer>
        </form>
    </flux:modal>
</div>
