<?php

use Livewire\Component;
use App\Models\Complex;

new class extends Component
{
    public function with()
    {
        $complexesDb = Complex::active()->get();

        $routeMap = [
            'Latee Putra'    => route('latee.programs.pendidikan'),
            'Latee I Putri'  => route('lateei.programs.pendidikan'),
            'Latee II Putri' => route('lateeii.programs.pendidikan'),
        ];

        $trustBarComplexes = $complexesDb->map(function ($c) use ($routeMap) {
            return [
                'name' => $c->complex_name,
                'url'  => $routeMap[$c->complex_name] ?? route('latee.programs.pendidikan'),
            ];
        })->toArray();

        if (empty($trustBarComplexes)) {
            $trustBarComplexes = [
                ['name' => 'Latee Putra', 'url' => route('latee.programs.pendidikan')],
                ['name' => 'Latee I Putri', 'url' => route('lateei.programs.pendidikan')],
                ['name' => 'Latee II Putri', 'url' => route('lateeii.programs.pendidikan')],
            ];
        }

        return [
            'trustBar' => [
                'label'     => 'Ikuti',
                'complexes' => $trustBarComplexes,
                'socials'   => [
                    'facebook'  => '#',
                    'instagram' => '#',
                ],
            ],
        ];
    }
};
?>

<div>
    <section class="py-6 md:py-8 reveal transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap items-center justify-between gap-4 md:gap-8 py-4">
                <div class="flex items-center gap-3 md:gap-4 glass-card px-4 py-2 rounded-full">
                    <span class="text-xs font-semibold text-slate-500 dark:text-slate-400">{{ $trustBar['label'] ?? 'Ikuti' }}</span>
                    <div class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                        <a aria-label="Facebook" class="hover:text-emerald-600 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all duration-300" href="{{ $trustBar['socials']['facebook'] ?? '#' }}"><svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.592 0 9 1.592 9 4.825V8z"></path></svg></a>
                        <a aria-label="Instagram" class="hover:text-emerald-600 dark:hover:text-emerald-400 hover:-translate-y-1 transition-all duration-300" href="{{ $trustBar['socials']['instagram'] ?? '#' }}"><svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg></a>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-6 md:gap-14 opacity-75 hover:opacity-100 transition-opacity duration-500 font-semibold text-sm md:text-base tracking-tight text-slate-700 dark:text-slate-300">
                    @foreach ($trustBar['complexes'] ?? [] as $complex)
                        <a href="{{ $complex['url'] ?? '#' }}" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors cursor-pointer">
                            {{ $complex['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
