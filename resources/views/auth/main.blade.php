<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Kota Malang</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo_1.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @yield('style')
</head>

<body class="bg-gray-50">
    @include('core.partials.navbar')
    @yield('content')
    @include('core.partials.footer')
    @include('core.partials.script')
</body>

</html>
