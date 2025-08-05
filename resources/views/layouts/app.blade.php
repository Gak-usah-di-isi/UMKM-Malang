<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo_1.svg') }}">
    <style>
        :root {
            --font-outfit: "Outfit", sans-serif;
        }

        .sidebar-collapsed {
            transform: translateX(-100%);
        }

        .sidebar-expanded {
            transform: translateX(0);
        }

        @media (min-width: 1024px) {
            .sidebar-collapsed {
                transform: translateX(0);
                width: 90px !important;
            }

            .sidebar-expanded {
                width: 290px !important;
            }
        }

        .rotate-180 {
            transform: rotate(180deg);
        }

        .menu-item-active {
            background: linear-gradient(135deg, #667eea 0%);
            color: white;
        }

        .menu-item-active svg {
            color: white;
        }

        .menu-hover:hover {
            background: #f3f4f6;
            transform: translateX(4px);
            transition: all 0.3s ease;
        }

        .menu-hover:hover svg {
            color: #667eea;
        }

        .menu-hover:hover .menu-label {
            color: #667eea;
        }

        @media (max-width: 1023px) {
            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }
        }
    </style>
    @include('layouts.partials.link')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50" style="font-family: var(--font-outfit)">
    <div id="sidebar-overlay" class="sidebar-overlay hidden lg:hidden"></div>

    <div class="flex h-screen overflow-hidden">
        @include('layouts.partials.sidebar')
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto bg-gray-50">
            @include('layouts.partials.header')

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
    @include('layouts.partials.script')
</body>

</html>
