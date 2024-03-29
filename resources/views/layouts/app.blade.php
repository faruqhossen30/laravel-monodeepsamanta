<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', '')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/lightgallery-bundle.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('MonodeepSamanta.png') }}">

    <!-- Styles -->
    @stack('OG')
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="google-site-verification" content="wn1oFpUqzZ6XoS6WgEWRF3U8ZCWRvVXryKbCWix9xD0" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-824VLTPPNZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-824VLTPPNZ');
    </script>
    <!-- clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "l8z5lmk9qs");
    </script>

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

        /* for postSlider */
        #postSlider .owl-dots {
            display: none;
        }

        /* for relatedblog */
        #relatedblog .owl-dots {
            display: none;
        }

        li::marker {
            color: black !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
</head>

<body class="bg-white">
    @include('layouts.header')
    <div class="max-w-[1260px] mx-auto md:p-0 px-4 lg:px-0">
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
    <script src="{{ asset('js/aos.js') }}"></script>
    @stack('scripts')
    <script>
        AOS.init();
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
        const next = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                        </svg>
                        `;
        const prev = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                        `;
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
        $('#postSlider').owlCarousel({
            items: 3,
            loop: true,
            margin: 50,
            nav: true,
            navText: [next, prev],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
            }

        });
        $('#categorySlider').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,
            dots: false,
            autoWidth: true
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
