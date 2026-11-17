<footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 pt-16 pb-3 transition-colors duration-300" id="contact">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal grid grid-cols-1 md:grid-cols-6 lg:grid-cols-6 gap-10 pb-8 border-b border-slate-100 dark:border-slate-800">

            {{-- Brand & Alamat --}}
            <div class="md:col-span-3 space-y-4">
                <div class="flex items-center gap-2 group">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center overflow-hidden text-white text-base font-bold shadow-md shadow-slate-900/10 dark:shadow-brand-500/20 group-hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-full h-full object-cover rounded-full">
                    </div>
                    <span class="font-black tracking-wider text-lg md:text-xl text-slate-900 dark:text-white transition-colors duration-300">ANNUQAYAH LATEE</span>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400 max-w-xs leading-relaxed transition-colors duration-300">
                    Jln. Makam Pahlawan Kompleks Pondok Pesantren Annuqayah Guluk-Guluk Sumenep Jawa Timur Pos: 69463
                </p>
                <p class="text-xs text-slate-500 dark:text-slate-400 transition-colors duration-300">
                    Email: <a href="mailto:pesantren@annuqayahlatee.net" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">pesantren@annuqayahlatee.net</a>
                </p>
                <div class="flex items-center gap-3 pt-2 text-slate-600 dark:text-slate-300">
                    <a aria-label="Facebook" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-brand-600 dark:hover:bg-brand-500 hover:text-white transition-all duration-300 hover:-translate-y-0.5" href="#">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.592 9 4.825V8z"></path></svg>
                    </a>
                    <a aria-label="Instagram" class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-brand-600 dark:hover:bg-brand-500 hover:text-white transition-all duration-300 hover:-translate-y-0.5" href="#">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                    </a>
                </div>
            </div>

            {{-- Menu Links --}}
            <div class="md:col-span-3 grid grid-cols-2 sm:grid-cols-3 gap-8 md:gap-10">

                {{-- Tautan --}}
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4 transition-colors duration-300">Tautan</h4>
                    <ul class="space-y-2.5 text-xs text-slate-500 dark:text-slate-400 font-medium">
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('profile') }}">Profil</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('blogs.index') }}">Berita & Artikel</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>

                {{-- Kompleks --}}
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4 transition-colors duration-300">Kompleks</h4>
                    <ul class="space-y-2.5 text-xs text-slate-500 dark:text-slate-400 font-medium">
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('latee.programs.pendidikan') }}">Latee Putra</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('lateei.programs.pendidikan') }}">Latee I Putri</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="{{ route('lateeii.programs.pendidikan') }}">Latee II Putri</a></li>
                    </ul>
                </div>

                {{-- Lainnya --}}
                <div class="col-span-2 sm:col-span-1">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4 transition-colors duration-300">Lainnya</h4>
                    <ul class="space-y-2.5 text-xs text-slate-500 dark:text-slate-400 font-medium">
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="#">Galeri</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="#">FAQ</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="#">Kebijakan Privasi</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors" href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="pt-6 pb-3 text-center text-[11px] text-slate-400 dark:text-slate-500 transition-colors duration-300">
            © {{ date('Y') }} Pondok Pesantren Annuqayah Latee. All Rights Reserved.
        </div>
    </div>
</footer>
