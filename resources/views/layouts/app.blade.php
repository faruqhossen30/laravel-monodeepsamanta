<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard & UX/UI Designer | @yield('title', '')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery-bundle.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('MonodeepSamanta.png') }}">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('style')
    <style>
        * {
            font-family: "Roboto Flex", Sans-serif
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background-color: #FF003A;
        }

        #portfolioSlider .owl-dots {
            display: none;
        }

        /* for serviceslider */
        #serviceslider .owl-dots {
            display: none;
        }

        /* for serviceslider */
        #blogslider .owl-dots {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
</head>

<body class="bg-white">
    @include('layouts.header')
    <div class="max-w-[1260px] mx-auto md:p-0 mt-2 lg:mt-10 px-4 lg:px-0">
        @yield('content')
    </div>
    @yield('blog')
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/lightgallery.umd.js') }}"></script>
    @stack('script')
    @stack('script2')
    <script src="//code.tidio.co/ef702oknsoksvys0gdqiewpvf0pz9olw.js" async></script>
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
    <script>
        (function() {
            function onTidioChatApiReady() {
                window.tidioChatApi.hide();
            }

            if (window.tidioChatApi) {
                window.tidioChatApi.on("ready", onTidioChatApiReady);
            }

            document.querySelector(".chat-button").addEventListener("click", function() {
                window.tidioChatApi.show();
                window.tidioChatApi.open();
            });
        })();
    </script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('#portfolioSlider').owlCarousel({
            items: 2,
            center: true,
            loop: true,
            margin: 10,
        });
        $('#serviceslider').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,
        });
        $('#blogslider').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,

        });
        $('#categorySlider').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,
            dots:false,
            autoWidth:true
        });
        $('.owl-carousel').owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            margin: 10,
            dots: true
        });
    </script>

</body>

</html>
