<?php

use Livewire\Component;
use App\Models\Complex;
use App\Models\Quote;

new class extends Component
{
    public function with()
    {
        $complexesDb = Complex::with(['priest'])->active()->get();
        $putraComplex  = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'putra'));
        $putri1Complex = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'latee i') && !str_contains(strtolower($c->complex_name), 'latee ii'));
        $putri2Complex = $complexesDb->first(fn($c) => str_contains(strtolower($c->complex_name), 'latee ii'));

        $putraPengasuh  = $putraComplex?->priest?->full_name ?? "KH. Abd. A'la";
        $putri1Pengasuh = $putri1Complex?->priest?->full_name ?? 'KH. A. Basith AS';
        $putri2Pengasuh = $putri2Complex?->priest?->full_name ?? 'Nyai Umamah Makkiyah';

        $quotesDb = Quote::published()->latest()->take(3)->get();
        $serambiPengasuh = $quotesDb->map(function ($q, $idx) {
            $initial = !empty($q->author) ? strtoupper(substr(trim($q->author), 0, 1)) : 'M';
            return [
                'quote'          => $q->content,
                'author'         => $q->author ?? 'Masyayikh Annuqayah Latee',
                'role'           => $q->source ?? 'Pengasuh',
                'initial'        => $initial,
                'is_highlighted' => $idx === 1,
            ];
        })->toArray();

        if (empty($serambiPengasuh)) {
            $serambiPengasuh = [
                [
                    'quote'          => 'Pendidikan pesantren tidak semata transfer ilmu, tetapi penanaman adab dan kesalehan perilaku dalam kehidupan sehari-hari.',
                    'author'         => $putraPengasuh,
                    'role'           => 'Pengasuh Latee Putra',
                    'initial'        => 'A',
                    'is_highlighted' => false,
                ],
                [
                    'quote'          => 'Al-Qur\'an dan akhlakul karimah adalah pondasi utama pembentukan karakter santriwati di era modern.',
                    'author'         => $putri1Pengasuh,
                    'role'           => 'Pengasuh Latee I Putri',
                    'initial'        => 'B',
                    'is_highlighted' => true,
                ],
                [
                    'quote'          => 'Kesederhanaan, kemandirian, dan keikhlasan adalah panca jiwa yang harus senantiasa terpatri di sanubari santri.',
                    'author'         => $putri2Pengasuh,
                    'role'           => 'Pengasuh Latee II Putri',
                    'initial'        => 'U',
                    'is_highlighted' => false,
                ],
            ];
        }

        return [
            'serambiPengasuh' => $serambiPengasuh,
        ];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="nasihat">
        <div class="max-w-7xl mx-auto px-6">
            <div class="reveal text-center mb-12 md:mb-16">
                <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full mb-3 uppercase tracking-wider">Nasihat</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Serambi Pengasuh</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 items-stretch">
                @foreach ($serambiPengasuh ?? [] as $i => $quote)
                    @if ($quote['is_highlighted'] ?? false)
                        <div class="reveal-zoom delay-{{ ($i + 1) * 100 }} glass-card border-2 border-emerald-500/40 dark:border-emerald-400/40 rounded-3xl p-6 md:p-8 flex flex-col justify-between shadow-xl relative md:transform md:-translate-y-2">
                            <div>
                                <div class="flex gap-1 text-emerald-600 dark:text-emerald-400 mb-4 text-2xl font-serif">“</div>
                                <p class="text-xs md:text-sm text-calligraphy leading-relaxed italic font-medium">"{{ $quote['quote'] }}"</p>
                            </div>
                            <div class="flex items-center gap-3 pt-5 md:pt-6 mt-5 md:mt-6 border-t border-emerald-500/20 bg-gradient-to-r from-emerald-600 to-teal-700 -mx-6 md:-mx-8 -mb-6 md:-mb-8 p-5 md:p-6 rounded-b-[22px] text-white">
                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center font-bold text-white">{{ $quote['initial'] ?? 'B' }}</div>
                                <div>
                                    <h4 class="text-xs md:text-sm font-bold text-white">{{ $quote['author'] }}</h4>
                                    <p class="text-[10px] md:text-[11px] text-emerald-100 font-medium">{{ $quote['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="{{ $i === 0 ? 'reveal-left' : 'reveal-right' }} delay-{{ ($i + 1) * 100 }} glass-card rounded-3xl p-6 md:p-8 flex flex-col justify-between group">
                            <div>
                                <div class="flex gap-1 text-emerald-600 dark:text-emerald-400 mb-4 text-2xl font-serif">“</div>
                                <p class="text-xs md:text-sm text-calligraphy leading-relaxed italic font-medium">"{{ $quote['quote'] }}"</p>
                            </div>
                            <div class="flex items-center gap-3 pt-5 md:pt-6 mt-5 md:mt-6 border-t border-slate-200/60 dark:border-white/10">
                                <div class="w-10 h-10 rounded-full bg-slate-200/80 dark:bg-white/10 flex items-center justify-center font-bold text-slate-700 dark:text-slate-300">{{ $quote['initial'] ?? 'A' }}</div>
                                <div>
                                    <h4 class="text-xs md:text-sm font-bold text-slate-900 dark:text-white">{{ $quote['author'] }}</h4>
                                    <p class="text-[10px] md:text-[11px] text-slate-500 dark:text-slate-400 font-medium">{{ $quote['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</div>
