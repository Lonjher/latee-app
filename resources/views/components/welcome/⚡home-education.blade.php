<?php

use Livewire\Component;

new class extends Component
{
    public function with()
    {
        return [
            'educationUnits' => [
                [
                    'title'    => 'Madrasah Diniyah',
                    'subtitle' => "Tingkat Isti'dadi & Awwaliyah",
                    'badge'    => 'Ula',
                    'image'    => 'https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=800&auto=format&fit=crop',
                ],
                [
                    'title'    => 'Tahfidhul Quran',
                    'subtitle' => 'Program Hafalan Wajib',
                    'badge'    => "Qur'an",
                    'image'    => 'https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=800&auto=format&fit=crop',
                ],
                [
                    'title'    => 'Lembaga Dua Bahasa',
                    'subtitle' => 'Arab & Inggris',
                    'badge'    => 'Bahasa',
                    'image'    => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop',
                ],
            ],
        ];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="pendidikan">
        {{-- Ambient Glow Program Pendidikan: Teal lembut --}}
        <div class="glow-education-teal w-[600px] h-[400px] top-1/2 left-1/4 rounded-full -translate-x-1/2 -translate-y-1/2"></div>

        <div class="relative max-w-7xl mx-auto px-6 z-10">
            <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-10 md:mb-12 gap-4 reveal">
                <div>
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full mb-3 uppercase tracking-wider">Program Pendidikan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Unit Pendidikan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm mt-1">Lembaga pendidikan formal dan diniyah di lingkungan Annuqayah Latee</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                @foreach ($educationUnits ?? [] as $i => $unit)
                    <article class="reveal delay-{{ ($i + 1) * 100 }} glass-card rounded-3xl overflow-hidden p-3.5 group">
                        <div class="relative h-56 md:h-60 rounded-2xl overflow-hidden">
                            <img alt="{{ $unit['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" src="{{ $unit['image'] }}" />
                        </div>
                        <div class="p-4 flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base md:text-lg group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">{{ $unit['title'] }}</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400 flex items-center gap-1 mt-1">{{ $unit['subtitle'] }}</p>
                            </div>
                            <span class="aurora-badge text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full shadow-xs">{{ $unit['badge'] }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</div>
