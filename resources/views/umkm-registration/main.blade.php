<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar UMKM - UMKM Kota Malang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo_1.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    @yield('style')
</head>

<body class="bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 min-h-screen">
    @include('umkm-registration.partials.navbar')
    @yield('content')
    @include('core.partials.footer')
</body>

</html>
