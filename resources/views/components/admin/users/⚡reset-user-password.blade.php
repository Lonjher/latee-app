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
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-3 text-xs sm:p-4 backdrop-blur-md" x-cloak
        @click.self="show = false">

        <div class="flex max-h-[90vh] w-full max-w-md flex-col overflow-hidden rounded-2xl bg-white/95 dark:bg-[#070D18]/95 backdrop-blur-2xl border border-slate-200/90 dark:border-white/10 shadow-2xl"
            @click.stop>

            <form wire:submit.prevent="resetPassword" class="flex min-h-0 flex-1 flex-col">

                <div class="flex-shrink-0 space-y-1.5 p-4 pb-3 border-b border-slate-200/80 dark:border-white/10 bg-gradient-to-r from-emerald-500/10 via-teal-500/5 to-transparent dark:from-emerald-500/15 dark:via-teal-500/10 dark:to-transparent">
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">{{ __('Reset Password') }}</h3>
                    <p class="text-[11px] leading-normal text-slate-500 dark:text-slate-400">{{ __('Buat password baru untuk pengguna ini.') }}</p>
                </div>

                <div class="min-h-0 flex-1 overflow-y-auto p-4">
                    <div x-show="errorMessage" x-cloak
                        class="mb-3 rounded-xl border border-red-500/20 bg-red-500/10 px-3 py-2 text-[11px] text-red-700 dark:text-red-300"
                        x-text="errorMessage"></div>

                    <div class="space-y-3">
                        <div>
                            <label class="mb-1 block text-[11px] font-semibold text-slate-700 dark:text-slate-300">{{ __('Password Baru') }}</label>
                            <input wire:model="password" type="password" required
                                class="w-full rounded-xl border border-slate-200/80 bg-slate-50/80 px-3 py-2 text-xs text-slate-900 placeholder:text-slate-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-slate-500 transition-all" />
                            @error('password')<p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="mb-1 block text-[11px] font-semibold text-slate-700 dark:text-slate-300">{{ __('Konfirmasi Password') }}</label>
                            <input wire:model="password_confirmation" type="password" required
                                class="w-full rounded-xl border border-slate-200/80 bg-slate-50/80 px-3 py-2 text-xs text-slate-900 placeholder:text-slate-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 dark:border-white/10 dark:bg-white/5 dark:text-white dark:placeholder:text-slate-500 transition-all" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-shrink-0 justify-end gap-2 border-t border-slate-200/80 bg-slate-50/80 p-4 pt-3 dark:border-white/10 dark:bg-[#070D18]/80 backdrop-blur-md">
                    <button type="button" @click="show = false"
                        class="cursor-pointer rounded-xl border border-slate-200/80 px-3.5 py-1.5 text-xs font-semibold text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:text-slate-300 dark:hover:bg-white/10 transition">
                        {{ __('Batal') }}
                    </button>
                    <button type="submit" wire:loading.attr="disabled" wire:target="resetPassword"
                        class="cursor-pointer rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-1.5 text-xs font-bold shadow-md shadow-emerald-900/20 dark:bg-emerald-500 dark:hover:bg-emerald-400 transition disabled:cursor-not-allowed disabled:opacity-60">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
