<?php

use Livewire\Component;

new class extends Component
{
    public function with()
    {
        return [
            'registrationInfo' => [
                'year'     => '1923',
                'badge'    => "Tahun<br />Berdiri",
                'image'    => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop',
                'heading'  => "MULAI<br />PERJALANAN<br />ILMU ANDA",
                'desc_1'   => 'Pendaftaran santri baru dibuka setiap tahun ajaran. Pastikan Anda memenuhi seluruh persyaratan administratif yang telah ditentukan.',
                'desc_2'   => 'Untuk informasi lebih lanjut, silakan hubungi kantor pesantren atau kunjungi langsung kompleks Annuqayah Latee.',
                'cta_text' => 'Daftar Sekarang',
                'cta_url'  => route('pendaftaran'),
            ],
        ];
    }
};
?>

<div>
    <section class="relative py-12 md:py-16 overflow-hidden">
        {{-- Ambient Glow Info PSB / Kontak: Emas hangat & hijau zamrud --}}
        <div class="glow-contact-gold w-[450px] h-[450px] -bottom-20 -left-10 rounded-full opacity-60"></div>
        <div class="glow-contact-emerald w-[450px] h-[450px] top-10 right-10 rounded-full opacity-60"></div>

        <div class="relative max-w-7xl mx-auto px-6 z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-center">
                <div class="reveal-left lg:col-span-5 relative group">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] bg-slate-200 dark:bg-slate-800">
                        <img alt="Suasana Pesantren" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" src="{{ $registrationInfo['image'] ?? 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?q=80&w=800&auto=format&fit=crop' }}" />
                    </div>
                    <div class="absolute -bottom-6 left-4 sm:left-6 glass-card rounded-2xl px-4 sm:px-6 py-3 sm:py-4 flex items-center gap-3 sm:gap-4 hover:-translate-y-1 transition-transform duration-300">
                        <span class="aurora-gradient-text text-xl sm:text-2xl font-black">{{ $registrationInfo['year'] ?? '1923' }}</span>
                        <div class="h-8 w-px bg-slate-300/60 dark:bg-white/15"></div>
                        <span class="text-[10px] sm:text-xs text-slate-600 dark:text-slate-400 font-semibold leading-tight">{!! $registrationInfo['badge'] ?? 'Tahun<br />Berdiri' !!}</span>
                    </div>
                </div>
                <div class="reveal-right delay-100 lg:col-span-7 space-y-5 md:space-y-6 pt-6 lg:pt-0">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-black text-slate-900 dark:text-white leading-[1.05]">{!! $registrationInfo['heading'] ?? 'MULAI<br />PERJALANAN<br />ILMU ANDA' !!}</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4 pt-4 text-[11px] md:text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                            <p>{{ $registrationInfo['desc_1'] ?? '' }}</p>
                            <p>{{ $registrationInfo['desc_2'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a class="btn-primary-aurora w-full py-4 md:py-5 rounded-2xl group shadow-lg text-base sm:text-lg" href="{{ $registrationInfo['cta_url'] ?? '#daftar' }}">
                            <span>{{ $registrationInfo['cta_text'] ?? 'Daftar Sekarang' }}</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
