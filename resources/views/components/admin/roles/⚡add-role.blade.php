<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\RoleForm;
use App\Support\PermissionGrouper;
use Illuminate\Validation\ValidationException;

new class extends Component {
    public RoleForm $form;

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->resetValidation();
    }

    public function createRole()
    {
        try {
            $role = $this->form->create();
            session()->flash('success', "Role \"{$role->name}\" berhasil ditambahkan.");
            $this->dispatch('role-added', message: "Role \"{$role->name}\" berhasil ditambahkan.");
            $this->form->reset();
        } catch (ValidationException $e) {
            $this->dispatch('role-error', message: 'Terjadi kesalahan: ' . $e->getMessage());
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
            window.addEventListener('add-role-modal', () => {
                this.errorMessage = '';
                $wire.resetForm();
                $dispatch('modal-show', { name: 'add-role' });
            });
            window.addEventListener('role-error', (e) => {
                this.errorMessage = e.detail.message;
            });
            window.addEventListener('role-added', () => {
                $dispatch('modal-close', { name: 'add-role' });
            });
        }
    }"
>
    <flux:modal name="add-role" variant="bare" :closable="false" class="m-auto w-full max-w-2xl p-3 sm:p-4">
        <form
            wire:submit.prevent="createRole"
            class="relative flex max-h-[90vh] w-full flex-col overflow-hidden rounded-3xl bg-white/95 dark:bg-[#070D18]/95 backdrop-blur-2xl border border-slate-200/90 dark:border-white/10 shadow-2xl"
        >
            <flux:modal.header
                icon="plus"
                title="{{ __('Tambah Role Baru') }}"
                description="{{ __('Buat role dan tentukan permission yang dapat diakses.') }}"
            />

            <flux:modal.body>
                <div x-show="errorMessage" x-cloak x-text="errorMessage"
                    class="mb-3 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2 text-[11px] text-red-700 dark:text-red-300"></div>

                <div class="space-y-3">
                    <flux:input
                        wire:model="form.name"
                        icon:leading="identification"
                        label="{{ __('Nama Role') }}"
                        placeholder="Contoh: editor, pengasuh, staff"
                        required
                        maxlength="255"
                        description="Akan dinormalisasi menjadi snake_case (mis. 'Super Admin' → 'super_admin')."
                    />

                    <div>
                        <label class="mb-1.5 block text-xs font-semibold text-slate-700 dark:text-slate-300">
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
                <flux:button type="submit" variant="primary" size="sm" wire:loading.attr="disabled" wire:target="createRole">
                    {{ __('Simpan') }}
                </flux:button>
            </flux:modal.footer>
        </form>
    </flux:modal>
</div>
