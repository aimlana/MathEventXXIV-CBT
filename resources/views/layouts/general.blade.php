<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - Mathematic Event XXIV</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-poppins antialiased">

        <main class="flex items-start justify-start">
            <div class="fixed">
                @yield('sidebar')
            </div>
            <div class="container ms-60">
                <div class="flex flex-col mt-4 mx-8">
                    <div>
                        <img src="{{ asset('images/full-logo-me.png') }}" alt="" class="h-20">
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>

        @livewireScripts
    </body>
</html>
