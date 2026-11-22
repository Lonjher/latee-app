<?php

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\ValidationException;

new class extends Component {
    public UserForm $form;

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->resetValidation();
    }

    public function create()
    {
        try {
            $this->form->create();
            session()->flash('success', 'Pengguna berhasil ditambahkan.');
            $this->dispatch('user-added', message: 'Pengguna berhasil ditambahkan.');
            $this->form->reset();
        } catch (ValidationException $e) {
            $this->dispatch('user-error', message: 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
};
?>

<div
    x-data="{
        errorMessage: '',
        init() {
            window.addEventListener('add-user-modal', () => {
                this.errorMessage = '';
                $wire.resetForm();
                $dispatch('modal-show', { name: 'add-user' });
            });
            window.addEventListener('user-error', (e) => {
                this.errorMessage = e.detail.message;
            });
            window.addEventListener('user-added', () => {
                $dispatch('modal-close', { name: 'add-user' });
            });
        }
    }"
>
    <flux:modal
        name="add-user"
        variant="bare"
        :closable="false"
        class="m-auto w-full max-w-2xl p-3 sm:p-4"
    >
        <form
            wire:submit.prevent="create"
            class="relative flex max-h-[90vh] w-full flex-col overflow-hidden rounded-3xl bg-white/95 dark:bg-[#070D18]/95 backdrop-blur-2xl border border-slate-200/90 dark:border-white/10 shadow-2xl"
        >
            {{-- HEADER --}}
            <flux:modal.header
                icon="user-plus"
                title="{{ __('Tambah Pengguna Baru') }}"
                description="{{ __('Lengkapi data profil pengguna baru.') }}"
            />

            {{-- BODY --}}
            <flux:modal.body>
                {{-- Error banner (dari ValidationException) --}}
                <div
                    x-show="errorMessage"
                    x-cloak
                    x-text="errorMessage"
                    class="mb-3 rounded-xl border border-red-500/20 bg-red-500/10 px-3.5 py-2 text-[11px] text-red-700 dark:text-red-300"
                ></div>

                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    {{-- Nama Lengkap --}}
                    <flux:input size="xs"
                        wire:model="form.full_name"
                        icon:leading="user"
                        label="{{ __('Nama Lengkap') }}"
                        placeholder="Contoh: Aditya Pratama"
                        required
                        maxlength="255"
                    />

                    {{-- Email --}}
                    <flux:input size="xs"
                        wire:model="form.email"
                        icon:leading="envelope"
                        type="email"
                        label="{{ __('Email') }}"
                        placeholder="nama@example.com"
                        required
                        maxlength="255"
                    />

                    {{-- Password --}}
                    <flux:input size="xs"
                        wire:model="form.password"
                        icon:leading="key"
                        type="password"
                        viewable
                        label="{{ __('Password') }}"
                        placeholder="Minimal 8 karakter"
                        required
                    />

                    {{-- Konfirmasi Password --}}
                    <flux:input size="xs"
                        wire:model="form.password_confirmation"
                        icon:leading="lock-closed"
                        type="password"
                        viewable
                        label="{{ __('Konfirmasi Password') }}"
                        placeholder="Ulangi password"
                        required
                    />

                    {{-- Peran --}}
                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-600 dark:text-slate-400">
                            {{ __('Peran') }}
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-4 text-slate-400 dark:text-slate-500">
                                <flux:icon.shield-check class="size-4" />
                            </div>
                            <flux:select wire:model="form.role" class="ps-11!" size="xs">
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
                            <div class="pointer-events-none absolute inset-y-0 start-0 z-10 flex items-center ps-4 text-slate-400 dark:text-slate-500">
                                <flux:icon.check-circle class="size-4" />
                            </div>
                            <flux:select wire:model="form.is_active" class="ps-11!" size="xs">
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
                    <flux:button type="button" variant="ghost">
                        {{ __('Batal') }}
                    </flux:button>
                </flux:modal.close>

                <flux:button
                    type="submit"
                    variant="primary"
                    wire:loading.attr="disabled"
                    wire:target="create"
                >
                    {{ __('Simpan') }}
                </flux:button>
            </flux:modal.footer>
        </form>
    </flux:modal>
</div>
