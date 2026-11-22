<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        @livewireStyles
    </head>
    <body class="bg-aurora-page text-slate-800 dark:text-slate-200 antialiased selection:bg-emerald-500 selection:text-white font-sans overflow-x-hidden relative min-h-screen">

        {{-- Atmospheric Islamic Aurora Glow Layer (Seamless Background Canvas that moves naturally with document) --}}
        <div class="absolute inset-x-0 top-0 h-full overflow-hidden pointer-events-none z-0">
            <div class="glow-hero-emerald w-[750px] h-[750px] -top-32 -left-32 rounded-full opacity-60"></div>
            <div class="glow-hero-sapphire w-[650px] h-[650px] top-32 -right-28 rounded-full opacity-45"></div>
            <div class="glow-education-teal w-[750px] h-[550px] top-[1200px] -left-20 rounded-full opacity-40"></div>
            <div class="glow-contact-gold w-[600px] h-[600px] top-[2200px] -right-20 rounded-full opacity-35"></div>
            <div class="glow-contact-emerald w-[650px] h-[650px] top-[3200px] -left-20 rounded-full opacity-35"></div>
        </div>

        <div class="relative z-10 flex flex-col min-h-screen">
            {{ $slot }}
        </div>

        <!-- SCRIPT UNTUK SCROLL ANIMATION (REACTIVE & WIRE:NAVIGATE COMPATIBLE) -->
        <script>
            (function() {
                let observer = null;

                function getElements() {
                    return document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');
                }

                function revealElement(el) {
                    el.classList.add('is-visible');
                    el.classList.remove('is-hidden-up');
                    if (observer) {
                        try {
                            observer.unobserve(el);
                        } catch (e) {}
                    }
                }

                function initScrollReveal() {
                    const elements = getElements();
                    if (!elements.length) return;

                    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

                    // 1. Tampilkan langsung elemen yang sudah berada di dalam atau dekat viewport
                    elements.forEach(el => {
                        const rect = el.getBoundingClientRect();
                        if (rect.top <= windowHeight * 1.05 && rect.bottom >= -50) {
                            revealElement(el);
                        }
                    });

                    // 2. Setup IntersectionObserver untuk elemen di bawah layar
                    if (!('IntersectionObserver' in window)) {
                        elements.forEach(revealElement);
                        return;
                    }

                    if (observer) {
                        observer.disconnect();
                    }

                    observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                revealElement(entry.target);
                            }
                        });
                    }, {
                        root: null,
                        rootMargin: '0px 0px 80px 0px',
                        threshold: 0.02
                    });

                    elements.forEach(el => {
                        if (!el.classList.contains('is-visible')) {
                            observer.observe(el);
                        }
                    });

                    // 3. Fallback pengaman: setelah 400ms cek kembali elemen yang masuk viewport setelah load gambar/font
                    setTimeout(() => {
                        const currentHeight = window.innerHeight || document.documentElement.clientHeight;
                        getElements().forEach(el => {
                            if (!el.classList.contains('is-visible')) {
                                const rect = el.getBoundingClientRect();
                                if (rect.top <= currentHeight * 1.05 && rect.bottom >= -50) {
                                    revealElement(el);
                                }
                            }
                        });
                    }, 400);
                }

                // Initial page load
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', initScrollReveal);
                } else {
                    initScrollReveal();
                }

                // Window load & pageshow (browser back/forward cache)
                window.addEventListener('load', initScrollReveal);
                window.addEventListener('pageshow', initScrollReveal);

                // Livewire 3/4 SPA navigation & morphing lifecycle
                document.addEventListener('livewire:navigated', () => {
                    requestAnimationFrame(initScrollReveal);
                });

                document.addEventListener('livewire:initialized', () => {
                    initScrollReveal();
                    if (window.Livewire && window.Livewire.hook) {
                        window.Livewire.hook('morph.updated', () => {
                            requestAnimationFrame(initScrollReveal);
                        });
                        window.Livewire.hook('commit', () => {
                            requestAnimationFrame(initScrollReveal);
                        });
                    }
                });
            })();
        </script>

        @livewireScripts
        @fluxScripts
    </body>
</html>
