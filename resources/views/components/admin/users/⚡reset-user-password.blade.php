<?php

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

new class extends Component {
    public $userId;
    public $password = '';
    public $password_confirmation = '';

    public function setUser($userId): void
    {
        $this->userId = $userId;
        $this->reset('password', 'password_confirmation');
        $this->resetValidation();
    }

    public function resetPassword(): void
    {
        $this->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($this->userId);
        $user->update(['password' => Hash::make($this->password)]);

        session()->flash('success', 'Password pengguna berhasil direset.');
        $this->dispatch('password-reset-success', message: 'Password pengguna berhasil direset.');
        $this->reset('password', 'password_confirmation');
    }
};
?>

<div>
    <div x-data="{
        show: false,
        errorMessage: '',
        successMessage: '',
        init() {
            window.addEventListener('reset-user-password-modal', (e) => {
                $wire.setUser(e.detail.id);
                this.errorMessage = '';
                this.successMessage = '';
                this.show = true;
            });
            window.addEventListener('password-reset-success', (e) => {
                this.show = false;
                this.successMessage = e.detail.message;
            });
        }
    }" x-show="show" x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-3 text-xs sm:p-4" x-cloak
        @click.self="show = false">

        <div class="flex max-h-[90vh] w-full max-w-md flex-col overflow-hidden rounded-lg bg-white shadow-xl dark:bg-stone-900"
            @click.stop>

            <form wire:submit.prevent="resetPassword" class="flex min-h-0 flex-1 flex-col">

                <div class="flex-shrink-0 space-y-3 p-4 pb-3">
                    <div>
                        <h3 class="text-sm font-semibold text-stone-800 dark:text-stone-100">{{ __('Reset Password') }}</h3>
                        <p class="mt-0.5 text-[11px] leading-normal text-stone-500 dark:text-stone-400">{{ __('Buat password baru untuk pengguna ini.') }}</p>
                    </div>
                    <div class="border-t border-stone-100 dark:border-stone-800"></div>
                </div>

                <div class="min-h-0 flex-1 overflow-y-auto px-4">
                    <div x-show="errorMessage" x-cloak
                        class="mb-2 rounded-md border border-red-200 bg-red-50 px-2.5 py-1.5 text-[11px] text-red-700 dark:border-red-900/50 dark:bg-red-950/30 dark:text-red-300"
                        x-text="errorMessage"></div>

                    <div class="space-y-2.5 pb-4">
                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Password Baru') }}</label>
                            <input wire:model="password" type="password" required
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                            @error('password')<p class="mt-0.5 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="mb-0.5 block text-[11px] font-medium text-stone-600 dark:text-stone-400">{{ __('Konfirmasi Password') }}</label>
                            <input wire:model="password_confirmation" type="password" required
                                class="w-full rounded-md border border-stone-200 bg-stone-50 px-2.5 py-1.5 text-xs text-stone-800 placeholder:text-stone-400 focus:border-sage-500 focus:outline-none focus:ring-1 focus:ring-sage-500 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-100" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-shrink-0 justify-end gap-1.5 border-t border-stone-100 bg-white p-4 pt-3 dark:border-stone-800 dark:bg-stone-900">
                    <button type="button" @click="show = false"
                        class="cursor-pointer rounded-md border border-stone-200 px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50 dark:border-stone-700 dark:text-stone-400 dark:hover:bg-stone-800">
                        {{ __('Batal') }}
                    </button>
                    <button type="submit" wire:loading.attr="disabled" wire:target="resetPassword"
                        class="bg-sage-600 hover:bg-sage-700 focus:ring-sage-500 dark:bg-sage-500 dark:hover:bg-sage-600 cursor-pointer rounded-md px-3 py-1.5 text-xs font-medium text-white transition focus:outline-none focus:ring-2 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
