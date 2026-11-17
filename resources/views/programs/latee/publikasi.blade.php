<x-layouts::guest title="Program Publikasi">

    @include('partials.header')

    <main>
        <!-- Page Hero -->
        <section class="relative w-full py-8 sm:py-10 md:py-16 px-4 md:px-6 overflow-hidden flex justify-center bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="relative w-full max-w-[1400px] min-h-[280px] sm:min-h-[320px] md:min-h-[350px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden flex items-center shadow-2xl bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 bg-texture-noise">
                <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute inset-0 bg-slate-50/50 dark:bg-slate-950/60"></div>
                    <div class="absolute top-0 -left-20 w-[400px] h-[400px] bg-brand-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-brand-500/20"></div>
                    <div class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-teal-300/30 rounded-full mix-blend-multiply dark:mix-blend-screen filter blur-3xl opacity-70 dark:opacity-40 animate-pulse-glow dark:bg-teal-500/15" style="animation-delay: 2s;"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/60 to-transparent dark:from-slate-900/90 dark:via-slate-900/60"></div>
                </div>
                <div class="relative z-30 w-full px-6 sm:px-8 md:px-16 py-10 sm:py-12 text-center">
                    <div class="reveal inline-flex items-center justify-center gap-3 mb-4">
                        <span class="text-[9px] sm:text-[10px] md:text-xs font-bold tracking-[0.2em] text-brand-700 dark:text-brand-300 uppercase bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full shadow-sm border border-brand-200 dark:border-brand-700">Program Publikasi</span>
                    </div>
                    <h1 class="reveal delay-100 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white leading-[1.1]">
                        Menyalakan Literasi<br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-teal-600 dark:from-brand-300 dark:via-brand-400 dark:to-teal-300 animate-gradient-x text-gradient-animated">Melalui Tulisan</span>
                    </h1>
                    <p class="reveal delay-200 text-slate-600 dark:text-slate-400 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed">Berbagai media publikasi dikelola oleh santri untuk mewadahi proses kreatif dalam bidang jurnalistik, kesusastraan, dan kebahasaan.</p>
                </div>
            </div>
        </section>

        <!-- Perpustakaan -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="perpustakaan">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Perpustakaan</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Publikasi Pustakawan</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-2xl">Beberapa media publikasi yang dibawahi oleh pustakawan Pondok Pesantren Annuqayah Latee.</p>
                </div>

                <div class="reveal delay-100 mb-10 md:mb-12 overflow-hidden rounded-3xl shadow-lg border border-slate-100 dark:border-slate-800 h-56 sm:h-72 md:h-96 relative group">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=1200&auto=format&fit=crop" alt="Kegiatan Literasi dan Publikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent flex items-end p-5 md:p-10">
                        <p class="text-white text-xs md:text-base font-semibold max-w-2xl leading-relaxed">Media publikasi santri: dari mading, buletin, hingga majalah berbahasa Arab dan Inggris.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    <!-- Majalah Hijrah -->
                    <div class="reveal delay-100 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Majalah Hijrah</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Awalnya berupa selebaran tulisan bernama "Jejak", berisi karya para pustakawan, kemudian bermetamorfosis menjadi "Majalah Hijrah". Terbit minimal satu kali dalam setahun, dengan objek pasar meliputi Pondok Pesantren Annuqayah secara umum serta pesantren dan lembaga pendidikan se-Kabupaten Sumenep dan Pamekasan.</p>
                        <div class="bg-white dark:bg-slate-900 p-3 md:p-4 rounded-xl border border-slate-200 dark:border-slate-700">
                            <h4 class="text-[11px] md:text-xs font-bold text-slate-800 dark:text-slate-200 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600 dark:text-slate-300">
                                @foreach (['Salam Redaksi', 'Senarai Isi', 'Surat Pembaca', 'Bahasan Utama', 'Wawancara', 'Wacana Q-ta', 'Perspektif', 'Cerpen', 'Catatan', 'Ulasan Cerpen', 'Suara Hati', 'ABA', 'Kolom Alumni', 'Bahtsul Masail', 'Komunitas', 'Biografi', 'My Book', 'Tadabbur', 'Jejak Alumni', 'Kiat-Kiat', 'Album Khusus', 'Pesantren-Q', 'Cas Cis Cus', 'Smile', 'Oretan'] as $r)
                                    <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">{{ $r }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Warta Latee -->
                    <div class="reveal delay-200 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Warta Latee</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Media publikasi yang berfungsi sebagai koran santri Latee. Memuat berita tentang kegiatan-kegiatan dan seputar Pondok Pesantren Annuqayah Latee, terbit setiap pekan sekali.</p>
                        <div class="bg-white dark:bg-slate-900 p-3 md:p-4 rounded-xl border border-slate-200 dark:border-slate-700">
                            <h4 class="text-[11px] md:text-xs font-bold text-slate-800 dark:text-slate-200 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600 dark:text-slate-300">
                                <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">Headline (Berita Utama)</span>
                                <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">Pesantren</span>
                                <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">Sportaiment</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mading Ma'haduna -->
                    <div class="reveal delay-300 bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">Mading Ma'haduna</h3>
                        <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Majalah dinding yang menampilkan tulisan pustakawan Pondok Pesantren Annuqayah Latee.</p>
                        <div class="bg-white dark:bg-slate-900 p-3 md:p-4 rounded-xl border border-slate-200 dark:border-slate-700">
                            <h4 class="text-[11px] md:text-xs font-bold text-slate-800 dark:text-slate-200 mb-2 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600 dark:text-slate-300">
                                @foreach (['Artikel', 'Opini', 'Esai', 'Resensi', 'Puisi'] as $r)
                                    <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">{{ $r }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lumbung -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="lumbung">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-8">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Lumbung</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Kreativitas Sastra Teater SaKSI</h2>
                </div>

                <div class="reveal bg-white dark:bg-slate-900 rounded-3xl p-6 md:p-12 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                        <div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">Media publikasi ini milik Teater SakSi yang mewadahi proses kreatif anggotanya dalam bidang kesusastraan. Lumbung diterbitkan dengan dua bentuk, yaitu <strong class="text-slate-900 dark:text-white">mading</strong> dan <strong class="text-slate-900 dark:text-white">buletin</strong> yang hanya diedarkan untuk kalangan tertentu. Terbit setiap bulan sekali.</p>
                            <div class="bg-brand-600 dark:bg-brand-700 text-white p-4 rounded-xl">
                                <h4 class="text-[11px] md:text-xs font-bold mb-1">Frekuensi Terbit</h4>
                                <p class="text-sm font-bold">Setiap Bulan</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-[11px] md:text-xs font-bold text-slate-800 dark:text-slate-200 mb-3 uppercase tracking-wide">Rubrik</h4>
                            <div class="flex flex-wrap gap-2 text-[10px] md:text-[11px] text-slate-600 dark:text-slate-300">
                                @foreach (['Pintu Redaksi', 'Cerpen', 'Esai', 'Benih', 'Puisi', 'Naskah Drama', 'Lontar (Resensi)', 'Avontur (Catatan Perjalanan)'] as $r)
                                    <span class="bg-slate-50 dark:bg-slate-800 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700">{{ $r }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Media Dalfis -->
        <section class="py-16 md:py-20 bg-white dark:bg-slate-900 transition-colors duration-300" id="dalfis">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">Dalfis</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Berbahasa Arab</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-2xl">Lokal yang mewadahi santri dalam mengembangkan bahasa Arab dan kitabiyah memiliki beberapa media publikasi.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    @foreach ([
                        ['name' => 'Abthal', 'desc' => 'Media informasi berbahasa Arab yang memuat berita-berita kegiatan di Pondok Pesantren Annuqayah Latee. Dikelola oleh pengurus harian Dalfis.', 'rubrik' => ['Berita Utama', 'Taqdim']],
                        ['name' => 'Mimain', 'desc' => "Media berisi tulisan berbahasa Arab karya santri Dalfis, khusus dikelola kelas mutawassith dan mutaqaddim, di bawah bimbingan pengurus Departemen Tarbiyah Dalfis.", 'rubrik' => ['Kalimatul Adad', 'Mimain Yaqul', 'Mimain Yalmah', 'Mimain Yara', "Mimain Yu'abbir", 'Mimain Yutarjim']],
                        ['name' => 'Majalah Mufakkirah', 'desc' => 'Majalah berbahasa Arab yang dikelola oleh Departemen Penerbitan dan Pengembangan Bakat Dalfis. Terbit dua kali dalam setahun.', 'rubrik' => ['Jauharah', 'Nubdzah', 'Khiwar', "A'waj", 'Iqtibas', 'Al-Fiqh Al-Salafi', "Arba'", 'Muallafat', 'Hikayah', 'Zuqaq', "Hal Ta'rif", "Al-Kalimah Al-Mutaqati'ah", "Ayyuhal A'izza'"]],
                        ['name' => 'Ajyal', 'desc' => "Media tulis menulis yang dikelola oleh santri mustawa I'dadi dan Mubtadi', di bawah bimbingan pengurus Departemen Penerbitan dan Pengembangan Bakat.", 'rubrik' => ['Qisshah', 'Muhadatsah', "Syi'ir", 'Fukahah', 'Zawiyah']],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i + 1) * 100) }} bg-slate-50/70 dark:bg-slate-800/40 border border-slate-100 dark:border-slate-800 rounded-3xl p-6 md:p-8 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-3">{{ $item['name'] }}</h3>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">{!! $item['desc'] !!}</p>
                            <div class="bg-white dark:bg-slate-900 p-3 rounded-xl border border-slate-200 dark:border-slate-700">
                                <h4 class="text-[10px] font-bold text-slate-800 dark:text-slate-200 mb-1 uppercase">Rubrik</h4>
                                <div class="flex flex-wrap gap-1.5 text-[10px] text-slate-600 dark:text-slate-300">
                                    @foreach ($item['rubrik'] as $r)
                                        <span class="bg-slate-100 dark:bg-slate-800 px-2 py-1 rounded">{{ $r }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Media EAL -->
        <section class="py-16 md:py-20 bg-slate-50 dark:bg-slate-950 transition-colors duration-300" id="eal">
            <div class="max-w-7xl mx-auto px-6">
                <div class="reveal mb-10 md:mb-12">
                    <span class="text-[10px] md:text-xs font-bold tracking-widest text-brand-700 dark:text-brand-300 uppercase bg-brand-50 dark:bg-brand-900/30 px-4 py-2 rounded-full border border-brand-100 dark:border-brand-800">EAL</span>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mt-4">Media Berbahasa Inggris</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-xs md:text-sm mt-2 max-w-2xl">Lokal yang mewadahi santri belajar bahasa Inggris memiliki beberapa media publikasi.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach ([
                        ['name' => 'Buletin Respect', 'desc' => 'Buletin berbahasa Inggris yang diterbitkan setiap semester oleh kru khusus (tutor dan sebagian member EAL). Berisi tulisan karya member EAL dan santri Annuqayah secara umum.', 'rubrik' => ['Greeting', 'Post Office', 'Comment', 'Main Topic', 'Opinion', 'Review', 'Story', 'About EAL', 'Poem', 'Do You Know?', 'Figure']],
                        ['name' => 'Mading ECS', 'desc' => 'Mading berbahasa Inggris (English Creativity Space) yang dikelola kelas akhir EAL. Berisi tulisan khusus member Translation Class, terbit setiap pekan.', 'rubrik' => ['Greeting', 'Opinion', 'Review', 'Poem', 'Story', 'Figure', 'Essay', 'Joke']],
                        ['name' => 'Mading The Real', 'desc' => 'Mading berbahasa Inggris (The Read Academic Literature) yang dikelola tutor dan member Reading Class. Berisi tulisan khusus member Reading Class, terbit setiap dua pekan.', 'rubrik' => ['Greeting', 'Opinion', 'Review', 'Poem', 'Story', 'Brain Out']],
                        ['name' => 'Mading Soul', 'desc' => 'Mading berbahasa Inggris (Speaking Opus of Literature) yang dikelola tutor dan member Speaking Class. Berisi tulisan khusus member Speaking Class, terbit setiap dua pekan.', 'rubrik' => ['Greeting', 'Opinion', 'Review', 'Poem', 'Story', 'Motivation']],
                        ['name' => 'LHO', 'desc' => 'Salah satu media publikasi EAL yang disebutkan dalam daftar, melengkapi ekosistem literasi berbahasa Inggris di lingkungan pesantren.', 'rubrik' => []],
                    ] as $i => $item)
                        <div class="reveal delay-{{ (($i % 5 + 1) * 100) }} bg-white dark:bg-slate-900 rounded-3xl p-5 md:p-6 shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-lg transition-all duration-300">
                            <h3 class="text-base md:text-lg font-bold text-slate-900 dark:text-white mb-2">{{ $item['name'] }}</h3>
                            <p class="text-[11px] md:text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">{{ $item['desc'] }}</p>
                            @if (!empty($item['rubrik']))
                                <div class="flex flex-wrap gap-1 text-[10px] text-slate-500 dark:text-slate-400">
                                    @foreach ($item['rubrik'] as $r)
                                        <span class="bg-slate-50 dark:bg-slate-800 px-2 py-1 rounded border border-slate-200 dark:border-slate-700">{{ $r }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-12 md:py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Jadilah Bagian dari Tradisi Literasi</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base mb-8 max-w-xl mx-auto">Kembangkan kemampuan menulismu dan berkontribusi dalam media publikasi pesantren.</p>
                <flux:button variant="primary" size="lg" href="{{ route('pendaftaran') }}" icon-trailing="arrow-right">
                    Informasi Pendaftaran
                </flux:button>
            </div>
        </section>
    </main>

    @include('partials.footer')

</x-layouts::guest>
