<?php

use Livewire\Component;
use Livewire\Attributes\Title;

new #[Title('Appearance settings')] class extends Component {
    //
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <flux:heading level="2" class="sr-only">{{ __('Appearance settings') }}</flux:heading>

    <x-pages::settings.layout :heading="__('Appearance')" :subheading="__('Pilih preferensi tema tampilan sistem Annuqayah Latee')">
        <div class="space-y-4">
            <flux:radio.group x-data variant="segmented" x-model="$flux.appearance" class="w-full">
                <flux:radio value="light" icon="sun">{{ __('Light Mode') }}</flux:radio>
                <flux:radio value="dark" icon="moon">{{ __('Dark Mode') }}</flux:radio>
                <flux:radio value="system" icon="computer-desktop">{{ __('Sistem') }}</flux:radio>
            </flux:radio.group>

            <div class="rounded-xl border border-white/80 dark:border-white/10 bg-white/70 dark:bg-white/5 p-3.5 backdrop-blur-md text-xs space-y-1">
                <p class="font-bold text-slate-800 dark:text-slate-200">
                    <span x-show="$flux.appearance === 'light'">☀️ Mode Terang (Light Mode) Aktif</span>
                    <span x-show="$flux.appearance === 'dark'">🌙 Mode Gelap (Dark Mode) Aktif</span>
                    <span x-show="$flux.appearance === 'system'">💻 Mengikuti Pengaturan Sistem Operasi</span>
                </p>
                <p class="text-[11px] text-slate-500 dark:text-slate-400">
                    Sistem menggunakan nuansa Islamic Aurora Glow & Frosted Glassmorphism beresolusi tinggi dengan kontras optimal di kedua tema.
                </p>
            </div>
        </div>
    </x-pages::settings.layout>
</section>
