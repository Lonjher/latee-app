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
            class="relative flex max-h-[90vh] w-full flex-col overflow-hidden rounded-3xl bg-white/95 dark:bg-[#070D18]/95 backdrop-blur-2xl border border-slate-200/90 dark:border-white/10 shadow-2xl"
        >
            <div
                wire:loading
                wire:target="editRole"
                class="absolute inset-0 z-50 flex items-center justify-center rounded-3xl bg-white/75 backdrop-blur-sm dark:bg-[#070D18]/80"
            >
                <div class="flex items-center gap-2 rounded-xl border border-slate-200 bg-white/90 px-3.5 py-2 shadow-sm dark:border-white/10 dark:bg-[#0B1329]">
                    <svg class="size-4 animate-spin text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V12H4z"></path>
                    </svg>
                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-200">{{ __('Memuat data...') }}</span>
                </div>
            </div>

            <flux:modal.header
                icon="pencil-square"
                title="{{ __('Edit Role') }}"
                description="{{ __('Perbarui nama role dan permission yang dapat diakses.') }}"
            />

            <flux:modal.body>
                <div x-show="errorMessage" x-cloak x-text="errorMessage"
                    class="mb-3 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2 text-[11px] text-red-700 dark:text-red-300"></div>

                <div class="space-y-3">
                    @if ($form->role?->name === 'admin')
                        <div class="flex items-start gap-2 rounded-xl border border-amber-500/25 bg-amber-500/10 px-3.5 py-2 text-[11px] text-amber-800 dark:text-amber-300">
                            <svg class="mt-0.5 size-3.5 shrink-0 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
