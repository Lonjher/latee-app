<?php

use Livewire\Component;
use App\Models\Santri;
use App\Models\Complex;
use App\Models\Room;

new class extends Component
{
    
    public function with()
    {
        $complexesDb = Complex::with(['priest', 'rooms'])
            ->withCount(['santris as active_santris_count' => fn($q) => $q->where('status', Santri::STATUS_ACTIVE)])
            ->active()
            ->get();

        $putraComplex  = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'putra'));
        $putri1Complex = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'latee i') && !str_contains(strtolower($c->complex_name), 'latee ii'));
        $putri2Complex = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'latee ii'));

        $putraPengasuh  = $putraComplex?->priest?->full_name ?? "KH. Abd. A'la";
        $putri1Pengasuh = $putri1Complex?->priest?->full_name ?? 'KH. A. Basith AS';
        $putri2Pengasuh = $putri2Complex?->priest?->full_name ?? 'Nyai Umamah Makkiyah';

        $totalSantri   = Santri::active()->count();
        $totalKompleks = Complex::active()->count();
        $totalKamar    = Room::available()->count();
        $displaySantriCount = $totalSantri > 0 ? number_format($totalSantri, 0, ',', '.') : '1.251';
        return [
            'badge'      => 'TENTANG KAMI',
            'lead'       => 'Pondok Pesantren Annuqayah Latee merupakan bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur. Saat ini terbagi menjadi ' . ($totalKompleks > 0 ? $totalKompleks : 'tiga') . ' kompleks; Latee Putra, Latee I (Putri), dan Latee II (Putri).',
            'putra_desc' => "Kompleks Latee Putra saat ini dihuni oleh {$displaySantriCount} santri dari berbagai daerah, menggunakan sistem kepengasuhan kolektif yang dipimpin oleh {$putraPengasuh}.",
            'putri_desc' => "Latee I Putri diasuh oleh {$putri1Pengasuh}, dibantu oleh putra-putri dan menantu beliau; Latee II Putri diasuh oleh {$putri2Pengasuh}.",
            'metrics'    => [
                ['value' => $displaySantriCount . ($totalSantri > 0 ? '' : '+'), 'label' => 'Santri Aktif'],
                ['value' => (string) ($totalKompleks > 0 ? $totalKompleks : 3), 'label' => 'Kompleks'],
                ['value' => '1923', 'label' => 'Tahun Berdiri'],
            ],
        ];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="about">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 items-start mb-12 md:mb-16">
                    <div class="reveal lg:col-span-3">
                        <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">{{ $badge ?? ($about['badge'] ?? 'TENTANG KAMI') }}</span>
                    </div>
                    <div class="reveal delay-100 lg:col-span-9 space-y-5 md:space-y-6">
                        <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-white leading-snug">
                            {{ $lead ?? '' }}
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 text-[11px] md:text-xs text-slate-600 dark:text-slate-400 leading-relaxed border-t border-slate-200/60 dark:border-white/10 pt-6">
                            <div class="border-l-2 border-emerald-500 dark:border-emerald-400 pl-4 hover:border-emerald-600 dark:hover:border-emerald-300 transition-colors">
                                {{ $putra_desc ?? '' }}
                            </div>
                            <div class="border-l-2 border-emerald-500 dark:border-emerald-400 pl-4 hover:border-emerald-600 dark:hover:border-emerald-300 transition-colors">
                                {{ $putri_desc ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-8">
                    @foreach ($metrics ?? [] as $i => $metric)
                        <div class="reveal delay-{{ ($i + 1) * 100 }} glass-card rounded-3xl p-6 md:p-10 text-center flex flex-col items-center justify-center hover:-translate-y-2 transition-all duration-300">
                            <span class="aurora-gradient-text text-4xl md:text-5xl lg:text-6xl font-black tracking-tight">{{ $metric['value'] }}</span>
                            <span class="text-xs md:text-sm font-bold text-slate-800 dark:text-slate-200 mt-2">{{ $metric['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
</div>