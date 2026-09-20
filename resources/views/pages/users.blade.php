<?php
use function Laravel\Folio\name;
name('users.index');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola pengguna · Latee</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <livewire:admin.manage-users />
    @fluxScripts
</body>
</html>
