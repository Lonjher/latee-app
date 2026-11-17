<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    <?php echo e(filled($title ?? null) ? $title . ' - ' . config('app.name', 'Laravel') : config('app.name', 'Laravel')); ?>

</title>

<link rel="icon" href="<?php echo e(asset('images/pesantren/logo.png')); ?>" type="image/png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400..700&family=Manrope:wght@400..800&display=swap"
    rel="stylesheet">
<?php echo app('Illuminate\Foundation\Vite')->fonts(); ?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
<?php echo app('flux')->fluxAppearance(); ?>

<?php /**PATH E:\SoftwareDevelopment\WebsiteBasedApp\latee-app\resources\views/partials/head.blade.php ENDPATH**/ ?>