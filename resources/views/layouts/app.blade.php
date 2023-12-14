<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Welcome')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('style')
        <style>
            *{
                font-family: "Roboto Flex", Sans-serif
            }
        </style>
    </head>
    <body class="bg-white">
        @include('layouts.header')
        <div class="max-w-7xl mx-auto">
            @yield('content')
        </div>
        @include('layouts.footer')
        <!-- Scripts -->
        @stack('script')
        <script src="//code.tidio.co/ef702oknsoksvys0gdqiewpvf0pz9olw.js" async></script>
    </body>
</html>
