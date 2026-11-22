<?php

use Livewire\Component;
use App\Models\Complex;
use App\Models\Room;

new class extends Component
{
    public function with()
    {
        $totalKompleks = Complex::active()->count();
        $totalKamar    = Room::available()->count();

        return [
            'facilities' => [
                [
                    'title' => 'Asrama & Kamar Santri',
                    'desc'  => "Tersedia {$totalKamar} kamar asrama yang representatif tersebar di " . ($totalKompleks > 0 ? $totalKompleks : 3) . " kompleks asrama.",
                ],
                [
                    'title' => 'Madrasah & Perpustakaan',
                    'desc'  => 'Gedung pembelajaran Madrasah Diniyah dan formal dilengkapi ribuan literatur kitab kuning klasik.',
                ],
                [
                    'title' => 'Unit Usaha & Fasilitas Umum',
                    'desc'  => 'Laboratorium kewirausahaan santri: toserba, percetakan, kantin sehat, dan layanan kesehatan pesantren.',
                ],
            ],
        ];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="fasilitas">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <div class="reveal">
                <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full mb-3 uppercase tracking-wider">Fasilitas</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Fasilitas & Keunggulan</h2>
                <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm max-w-xl mx-auto mt-2">Berbagai sarana dan program untuk mendukung kegiatan belajar santri.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16 text-center">
                @foreach ($facilities ?? [] as $i => $fac)
                    <div class="reveal delay-{{ ($i + 1) * 100 }} glass-card p-6 md:p-8 rounded-3xl flex flex-col items-center group cursor-default {{ $i === 2 ? 'sm:col-span-2 md:col-span-1' : '' }}">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 dark:bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 flex items-center justify-center mb-5 group-hover:scale-110 transition-all duration-300">
                            @if ($i === 0)
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            @elseif ($i === 1)
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            @else
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            @endif
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">{!! $fac['title'] !!}</h3>
                        <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-400 max-w-xs leading-relaxed">{{ $fac['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
