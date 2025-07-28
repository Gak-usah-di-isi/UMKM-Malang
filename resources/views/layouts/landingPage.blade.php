<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Kota Malang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    @include('layouts.partials-landingPage.navbar')
    @yield('content')
    @include('layouts.partials-landingPage.footer')
    @include('layouts.partials-landingPage.script')
</body>

</html>
