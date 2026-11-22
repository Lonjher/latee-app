<?php

use Livewire\Component;

new class extends Component
{
    public function with()
    {
        return [
            'registrationSteps' => [
                [
                    'step'        => 1,
                    'title'       => "Ambil Formulir<br />Pendaftaran",
                    'is_featured' => false,
                ],
                [
                    'step'        => 2,
                    'title'       => "Lengkapi<br />Berkas Persyaratan",
                    'description' => 'Siapkan dokumen seperti fotokopi KK, akta kelahiran, dan pas foto sesuai ketentuan.',
                    'link_text'   => 'Unduh Panduan',
                    'link_url'    => '#',
                    'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=800&auto=format&fit=crop',
                    'is_featured' => true,
                ],
                [
                    'step'        => 3,
                    'title'       => "Verifikasi &<br />Pembayaran",
                    'is_featured' => false,
                ],
            ],
        ];
    }
};
?>

<div>
    <section class="relative py-16 md:py-20 overflow-hidden" id="daftar">
        <div class="relative max-w-7xl mx-auto px-6 text-center z-10">
            <div class="reveal">
                <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full mb-3 uppercase tracking-wider">Penerimaan Santri</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white">Alur Pendaftaran Santri Baru</h2>
                <p class="text-slate-500 dark:text-slate-400 text-xs sm:text-sm max-w-xl mx-auto mt-2">Prosedur pendaftaran santri baru di masing-masing kompleks, baik putra maupun putri meliputi alur, syarat, keuangan, dan beberapa catatan penting.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16 items-stretch md:items-center">
                @foreach ($registrationSteps ?? [] as $i => $step)
                    @if ($step['is_featured'] ?? false)
                        <div class="reveal-zoom delay-{{ ($i + 1) * 100 }} bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 flex flex-col items-center text-center shadow-2xl relative overflow-hidden hover:scale-[1.02] transition-transform duration-300">
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-400/20 rounded-full blur-2xl"></div>
                            <div class="w-full h-28 md:h-32 rounded-2xl overflow-hidden mb-4 md:mb-6 relative">
                                <img alt="Pendaftaran" class="w-full h-full object-cover" src="{{ $step['image'] ?? '' }}" />
                                <div class="absolute inset-0 bg-slate-950/30"></div>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold mb-3">{!! $step['title'] !!}</h3>
                            <p class="text-emerald-100 text-xs leading-relaxed max-w-xs mb-5 md:mb-6">{{ $step['description'] ?? '' }}</p>
                            <a class="btn-secondary-aurora px-5 py-2.5 text-xs uppercase tracking-wider group" href="{{ $step['link_url'] ?? '#' }}">
                                <span>{{ $step['link_text'] ?? 'Unduh Panduan' }}</span>
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </a>
                        </div>
                    @else
                        <div class="{{ $i === 0 ? 'reveal-left' : 'reveal-right' }} delay-{{ ($i + 1) * 100 }} glass-card rounded-3xl p-6 md:p-8 flex flex-col items-center justify-center min-h-[280px] md:min-h-[360px] text-center group">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 shadow-xs flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                @if ($i === 0)
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                @else
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                @endif
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white">{!! $step['title'] !!}</h3>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</div>
