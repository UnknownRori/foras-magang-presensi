<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/foras.webp') }}" type="image/x-icon">
    <title>Sistem Presensi Foras</title>
    @vite('resources/css/app.css')
</head>

<body class="h-[94vh]">

    <body>
        {{ $slot }}
    </body>
</body>

</html>
