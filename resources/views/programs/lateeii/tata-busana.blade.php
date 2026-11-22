<x-layouts::guest title="Tata Busana Latee II Putri">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center">
            {{-- Ambient Aurora Glow Orbs --}}
            <div class="glow-hero-emerald w-[500px] h-[500px] -top-20 -left-20 rounded-full"></div>
            <div class="glow-hero-sapphire w-[500px] h-[500px] -bottom-20 -right-20 rounded-full"></div>
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center glass-card z-10">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-white/60 via-white/30 to-transparent dark:from-[#050B14]/70 dark:via-[#050B14]/40 dark:to-transparent"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="aurora-badge inline-flex items-center gap-2 px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase backdrop-blur-md">Tata Busana — Latee II Putri</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        PABI &<br />
                        <span class="aurora-gradient-text animate-gradient-x text-gradient-animated">Busana Islami</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Departemen Pembinaan Akhlak dan Busana Islami (PABI) membekali santri dengan akhlak dan tata busana yang sesuai syariat.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Hero Tata Busana -->
        <section class="bg-slate-50 dark:bg-slate-950 py-6 md:py-8 transition-colors duration-300">
            <div class="reveal max-w-7xl mx-auto px-6">
                <div class="overflow-hidden rounded-3xl shadow-lg border border-slate-200/80 dark:border-white/10 h-56 sm:h-72 md:h-96 relative group">
                    {{-- Gambar --}}
                    <img src="https://images.unsplash.com/photo-1585036156171-384164a8c675?q=80&w=1200&auto=format&fit=crop"
                        alt="Busana Islami Santri"
                        class="w-full h-full object-cover transition-all duration-700
                                group-hover:scale-105">
                    {{-- Gradient overlay untuk keterbacaan teks --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">PABI mengatur tata busana santri agar sesuai syariat dan karakter pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PABI -->
        <section class="relative py-16 md:py-20 overflow-hidden" id="pabi">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">PABI</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Pembinaan Akhlak & Busana Islami</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="reveal-left glass-card rounded-3xl p-6 md:p-8">
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Departemen PABI hanya ada di Annuqayah Daerah Latee II. Secara umum bertujuan membekali santri mempelajari <strong class="text-slate-900 dark:text-white">Akhlak</strong> dengan menunjukkan bagaimana seharusnya manusia berperilaku terhadap Tuhan, manusia, dan lingkungan.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">PABI berusaha membentuk santri yang berakhlakul karimah, agar ilmu yang diperoleh tidak hanya menjadi wacana. Langkah-langkahnya: membiasakan <strong class="text-slate-900 dark:text-white">mushfahah</strong>, mengucapkan salam, berkata sopan, dan lain sebagainya.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Pengasuh menjadi pendamping utama dalam memberikan pengarahan dan pengajaran terhadap santri.</p>
                    </div>
                    <div class="reveal-right glass-card rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-4">Tata Busana</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Program PABI dalam membatasi dan mengkategorikan pakaian yang boleh dipakai di pesantren sesuai syariat, terutama menutup aurat, dan cocok dengan karakter pesantren.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Karakter pesantren: <strong class="text-slate-900 dark:text-white">sederhana, rapi, tidak glamour, dan tidak berlebihan</strong> namun tetap bersahaja. Termasuk membatasi make up, aksesori berlebihan, atau aksesori yang menyerupai laki-laki.</p>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">Latee II menekankan aspek feminitas yang kental, sederhana, kuat, dan berciri khas pesantren.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Program Tata Busana -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="program">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12 text-center">
                    <span class="aurora-badge inline-block text-[10px] md:text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full">Program</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Ketentuan & Program Tata Busana</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                    @foreach ([
                        ['Membiasakan Busana Islami', 'Sesuai kaidah busana yang dirumuskan pengurus PABI.'],
                        ['Razia Aksesoris & Busana', 'Menyita aksesoris yang tidak layak dan menyalahi ketentuan.'],
                        ['Evaluasi dengan Pengurus PABI Blok', 'Koordinasi rutin untuk memastikan penerapan tata busana.'],
                        ['Banner Busana', 'Membuat banner busana pantas/tidak pantas di lingkungan PPA Latee II bagi santri dan pengunjung.'],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 2) + 1) * 100 }} bg-white dark:bg-slate-900 rounded-3xl p-5 md:p-6 border border-slate-100 dark:border-slate-800 shadow-sm">
                            <h4 class="font-bold text-slate-900 dark:text-white mb-2 text-sm md:text-base">{{ $item[0] }}</h4>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal mt-6 md:mt-8 bg-gradient-to-br from-[#065F46] via-[#047857] to-[#0F172A] border border-emerald-400/30 text-white rounded-3xl p-6 md:p-8 shadow-xl">
                    <h3 class="text-lg md:text-xl font-bold mb-3">Kaidah Busana</h3>
                    <p class="text-xs md:text-sm text-brand-50 leading-relaxed">Seluruh santri wajib memakai kerudung yang menutup aurat bagian atas secara sempurna, batas minimal di bawah bahu, menutupi dada dan bahu.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Berbusana Islami, Berakhlak Mulia</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Bergabunglah dengan Latee II Putri dan biasakan berbusana islami yang baik dan benar.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
