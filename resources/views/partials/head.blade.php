<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title . ' - ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

<link rel="icon" href="{{ asset('images/pesantren/logo.png') }}" type="image/png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400..700&family=Manrope:wght@400..800&display=swap"
    rel="stylesheet">
@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
