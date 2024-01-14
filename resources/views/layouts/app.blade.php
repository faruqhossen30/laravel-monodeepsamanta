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
    <link type="text/css" rel="stylesheet" href="{{asset('css/lightgallery-bundle.css')}}" />
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('style')
    <style>
        * {
            font-family: "Roboto Flex", Sans-serif
        }
    </style>
</head>

<body class="bg-white">
    @include('layouts.header')
    <div class="max-w-[1260px] mx-auto md:p-0 mt-12">
        @yield('content')
    </div>
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{asset('js/lightgallery.umd.js')}}"></script>
    @stack('script')
    {{-- <script src="//code.tidio.co/ef702oknsoksvys0gdqiewpvf0pz9olw.js" async></script> --}}
    {{-- <script type="text/javascript">
            $(window).scroll(function(){
                $(".mynavbar").toggleClass('pt-4 shadow-md',$(this).scrollTop()>50);
            })
        </script> --}}
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>

        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $(".mynavbar").addClass("shadow-md");
                } else {
                    $(".mynavbar").removeClass("shadow-md");
                } //if-else
            }); //win func.
        }); //ready func.
    </script>
</body>

</html>
