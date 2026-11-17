<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo app('flux')->fluxAppearance(); ?>

    </head>
    <body class="bg-slate-50 text-slate-700 antialiased selection:bg-emerald-500 selection:text-white font-sans overflow-x-hidden bg-texture-grid">

        <?php echo e($slot); ?>


        <!-- SCRIPT UNTUK SCROLL ANIMATION (IN & OUT) -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.15
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            entry.target.classList.remove('is-hidden-up');
                        } else {
                            if (entry.boundingClientRect.top > 0) {
                                entry.target.classList.remove('is-visible');
                                entry.target.classList.add('is-hidden-up');
                            }
                        }
                    });
                }, observerOptions);

                const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');
                revealElements.forEach((el) => observer.observe(el));
            });
        </script>

        <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

    </body>
</html>
<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/layouts/guest.blade.php ENDPATH**/ ?>