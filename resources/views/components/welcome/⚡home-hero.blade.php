<?php

use Livewire\Component;

new class extends Component
{
    public function with()
    {
        return [
            'hero' => [
                'badge'           => 'Selamat Datang di Annuqayah Latee',
                'title_prefix'    => 'Membangun',
                'title_main'      => "Generasi Qur'ani",
                'title_highlight' => 'Berakhlak Mulia',
                'description'     => 'Pondok Pesantren Annuqayah Latee merupakan bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur. Didirikan pada tahun 1923 oleh KH. Abdullah Sajjad.',
                'cta_text'        => 'Informasi Pendaftaran',
                'cta_url'         => route('pendaftaran'),
                'image'           => asset('images/boys.png'),
                'fallback_image'  => 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop',
            ],
        ];
    }
};
?>

<div>
    <section class="relative w-full py-6 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
        {{-- Ambient Aurora Glow Orbs --}}
        <div class="glow-hero-emerald w-[500px] h-[500px] -top-24 -left-20 rounded-full"></div>
        <div class="glow-hero-sapphire w-[500px] h-[500px] -top-24 -right-20 rounded-full"></div>
        <div class="glow-contact-gold w-[400px] h-[400px] -bottom-36 left-1/3 rounded-full opacity-60"></div>

        <div class="relative w-full max-w-[1400px] min-h-[480px] sm:min-h-[520px] md:min-h-[600px] lg:min-h-[650px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex flex-col lg:flex-row items-center glass-card z-10">

            <!-- Background Overlay -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 lg:to-transparent"></div>
            </div>

            <!-- Konten Teks -->
            <div class="relative z-30 w-full lg:w-[55%] px-6 sm:px-8 md:px-12 lg:px-16 py-10 sm:py-12 lg:py-16 space-y-4 sm:space-y-5 md:space-y-6 flex flex-col justify-center text-center lg:text-left">

                <div class="reveal inline-flex items-center justify-center lg:justify-start gap-3">
                    <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">
                        {{ $hero['badge'] ?? 'Selamat Datang di Annuqayah Latee' }}
                    </span>
                </div>

                <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] xl:text-[4rem] font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                    {{ $hero['title_prefix'] ?? 'Membangun' }}<br />
                    {{ $hero['title_main'] ?? "Generasi Qur'ani" }}<br />
                    <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">
                        {{ $hero['title_highlight'] ?? 'Berakhlak Mulia' }}
                    </span>
                </h1>

                <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    {{ $hero['description'] ?? 'Pondok Pesantren Annuqayah Latee merupakan bagian integral dari Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur.' }}
                </p>

                <div class="reveal delay-300 flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="{{ $hero['cta_url'] ?? route('pendaftaran') }}" class="btn-primary-aurora px-6 sm:px-8 py-3.5 sm:py-4 text-xs sm:text-sm font-bold tracking-wide gap-2 group">
                        <span>{{ $hero['cta_text'] ?? 'Informasi Pendaftaran' }}</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Objek Gambar — Tampil di semua ukuran -->
            <div class="relative z-20 w-full lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 lg:w-[50%] xl:w-[45%] lg:translate-x-[10%] pointer-events-none reveal-right delay-400 flex justify-center px-6 lg:px-0 pb-8 lg:pb-0">
                <div class="relative w-[85%] sm:w-[70%] max-w-md lg:max-w-none lg:w-full transform lg:scale-100 xl:scale-110 drop-shadow-[0_25px_25px_rgba(0,0,0,0.15)] dark:drop-shadow-[0_25px_25px_rgba(0,0,0,0.5)] flex justify-center animate-float">
                    <img alt="Santri Annuqayah Latee" class="w-full h-auto object-contain lg:mix-blend-multiply dark:lg:mix-blend-screen" src="{{ $hero['image'] ?? asset('images/boys.png') }}" onerror="this.src='{{ $hero['fallback_image'] ?? 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=800&auto=format&fit=crop' }}'" />
                </div>
            </div>
        </div>
    </section>
</div>
