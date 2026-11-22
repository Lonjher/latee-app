<?php

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\ValidationException;

new class extends Component {
    public UserForm $form;

    public function editUser($userId)
    {
        $user = User::with('roles')->findOrFail($userId);
        $this->form->setUser($user);
    }

    public function updateUser()
    {
        if ($this->form->user?->id === auth()->id()) {
            if ($this->form->role !== 'admin') {
                $this->addError('form.role', 'Anda tidak dapat mengubah role Anda sendiri.');
                return;
            }
            if (! $this->form->is_active) {
                $this->addError('form.is_active', 'Anda tidak dapat menonaktifkan akun Anda sendiri.');
                return;
            }
        }

        if (
            $this->form->user?->hasRole('admin')
            && $this->form->role !== 'admin'
            && User::role('admin')->count() <= 1
        ) {
            $this->addError('form.role', 'Tidak dapat mengubah role admin terakhir.');
            return;
        }

        try {
            $this->form->update();
            session()->flash('success', 'Informasi pengguna berhasil diperbarui.');
            $this->dispatch('user-updated', message: 'Informasi pengguna berhasil diperbarui.');
        } catch (ValidationException $e) {
            $this->dispatch('update-error', message: 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
};
?>

<div
    x-data="{
        errorMessage: '',
        init() {
            window.addEventListener('edit-user-modal', (e) => {
                this.errorMessage = '';
                $wire.editUser(e.detail.userId);
                $dispatch('modal-show', { name: 'edit-user' });
            });
            window.addEventListener('update-error', (e) => {
                this.errorMessage = e.detail.message;
            });
            window.addEventListener('user-updated', () => {
                $dispatch('modal-close', { name: 'edit-user' });
            });
        }
    }"
>
    <flux:modal
        name="edit-user"
        variant="bare"
        :closable="false"
        class="m-auto w-full max-w-2xl p-3 sm:p-4"
    >
        <form
            wire:submit.prevent="updateUser"
            class="relative flex max-h-[90vh] w-full flex-col overflow-hidden rounded-3xl bg-white/95 dark:bg-[#070D18]/95 backdrop-blur-2xl border border-slate-200/90 dark:border-white/10 shadow-2xl"
        >
            {{-- OVERLAY: Loading saat fetch data user --}}
            <div
                wire:loading
                wire:target="editUser"
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

            {{-- HEADER --}}
            <flux:modal.header
                icon="pencil-square"
                title="{{ __('Edit Pengguna') }}"
                description="{{ __('Perbarui profil dan hak akses anggota.') }}"
            />

            {{-- BODY --}}
            <flux:modal.body>
                <div
                    x-show="errorMessage"
                    x-cloak
                    x-text="errorMessage"
                    class="mb-3 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2 text-[11px] text-red-700 dark:text-red-300"
                ></div>

                <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                    {{-- Nama Lengkap --}}
                    <flux:input
                        wire:model="form.full_name"
                        size="xs"
                        icon:leading="user"
                        label="{{ __('Nama Lengkap') }}"
                        placeholder="Contoh: Aditya Pratama"
                        required
                        maxlength="255"
                    />

                    {{-- Email --}}
                    <flux:input
                        wire:model="form.email"
                        size="xs"
                        icon:leading="envelope"
                        type="email"
                        label="{{ __('Email') }}"
                        placeholder="nama@example.com"
                        required
                        maxlength="255"
                    />

                    {{-- Password Baru --}}
                    <flux:input
                        wire:model="form.password"
                        size="xs"
                        icon:leading="key"
                        type="password"
                        viewable
                        label="{{ __('Password Baru') }}"
                        placeholder="Kosongkan jika tetap"
                    />

                    {{-- Konfirmasi Password --}}
                    <flux:input
                        wire:model="form.password_confirmation"
                        size="xs"
                        icon:leading="lock-closed"
                        type="password"
                        viewable
                        label="{{ __('Konfirmasi Password') }}"
                        placeholder="Ulangi password baru"
                    />

                    {{-- Peran --}}
                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">
                            {{ __('Peran') }}
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-3 text-slate-400 dark:text-slate-500">
                                <flux:icon.shield-check class="size-3.5" />
                            </div>
                            <flux:select wire:model="form.role" size="xs" class="ps-9!">
                                @foreach (Role::orderBy('name')->get() as $r)
                                    <flux:select.option value="{{ $r->name }}">{{ ucfirst($r->name) }}</flux:select.option>
                                @endforeach
                            </flux:select>
                        </div>
                        @error('form.role')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Status --}}
                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">
                            {{ __('Status') }}
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-3 text-slate-400 dark:text-slate-500">
                                <flux:icon.check-circle class="size-3.5" />
                            </div>
                            <flux:select wire:model="form.is_active" size="xs" class="ps-9!">
                                <flux:select.option value="1">{{ __('Aktif') }}</flux:select.option>
                                <flux:select.option value="0">{{ __('Non Aktif') }}</flux:select.option>
                            </flux:select>
                        </div>
                        @error('form.is_active')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </flux:modal.body>

            {{-- FOOTER --}}
            <flux:modal.footer>
                <flux:modal.close>
                    <flux:button type="button" variant="ghost" size="sm">
                        {{ __('Batal') }}
                    </flux:button>
                </flux:modal.close>

                <flux:button
                    type="submit"
                    variant="primary"
                    size="sm"
                    wire:loading.attr="disabled"
                    wire:target="updateUser"
                >
                    {{ __('Perbarui Data') }}
                </flux:button>
            </flux:modal.footer>
        </form>
    </flux:modal>
</div>
