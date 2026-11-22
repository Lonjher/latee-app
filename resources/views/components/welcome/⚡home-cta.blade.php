<?php

use Livewire\Component;

new class extends Component
{
    public function with()
    {
        return [
            'ctaBanner' => [
                'image'       => 'https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=200&auto=format&fit=crop',
                'title'       => 'Bergabunglah<br />Bersama Kami!',
                'description' => 'Informasi lebih lanjut mengenai pendaftaran dapat menghubungi kantor sekretariat atau kunjungi langsung pesantren kami.',
            ],
        ];
    }
};
?>

<div>
    <section class="py-10 md:py-12 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="reveal glass-card p-6 md:p-8 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full overflow-hidden shrink-0 border-2 border-white/60 dark:border-white/15 shadow-md">
                        <img alt="Ikon" class="w-full h-full object-cover" src="{{ $ctaBanner['image'] ?? 'https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=200&auto=format&fit=crop' }}" />
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl lg:text-2xl font-black text-slate-900 dark:text-white leading-snug">{!! $ctaBanner['title'] ?? 'Bergabunglah<br />Bersama Kami!' !!}</h3>
                    </div>
                </div>
                <div class="relative w-16 h-16 md:w-20 md:h-20 shrink-0 flex items-center justify-center group cursor-pointer">
                    <svg class="w-16 h-16 md:w-20 md:h-20 animate-[spin_10s_linear_infinite] text-emerald-600 dark:text-emerald-400" viewBox="0 0 100 100">
                        <path d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="none" id="circlePath"></path>
                        <text font-size="10" font-weight="700" letter-spacing="2"><textPath class="fill-current uppercase" href="#circlePath">Daftar • Daftar •</textPath></text>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-emerald-600 dark:text-emerald-400 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                    </div>
                </div>
                <div class="flex items-center gap-4 max-w-sm">
                    <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-400 leading-relaxed text-center md:text-left">{{ $ctaBanner['description'] ?? 'Informasi lebih lanjut mengenai pendaftaran dapat menghubungi kantor pesantren.' }}</p>
                </div>
            </div>
        </div>
    </section>
</div>
