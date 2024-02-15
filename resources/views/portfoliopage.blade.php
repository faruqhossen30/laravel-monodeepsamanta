@extends('layouts.app')
@section('title', 'Portfolio Page')
@section('content')


    {{-- <a class="cwa-lightbox-image" href="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}" >
    <img src="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}" alt="" loading="lazy"/>
</a> --}}

    <x-portfolio.creativework />

    <div class="hidden lg:block mr-4 space-y-2 py-4 sticky top-16 lg:top-20 z-30 bg-white w-full">
        <button data-filter="*" class="galarybtn gallarybutton bg-black text-white ">All Capabilities</button>
        @foreach ($categories as $category)
            <button data-filter=".{{ $category->slug }}"
                class="galarybtn gallarybutton text-gray-500">{{ $category->name }}</button>
        @endforeach
    </div>
    <div class="block lg:hidden  sticky top-16 lg:top-20 z-30">
        <div id="categorySlider"
            class="owl-carousel owl-theme mr-4 space-y-2 py-4 bg-white w-full">
            <button data-filter="*" class="galarybtn bg-black text-white ">All Capabilities</button>
            @foreach ($categories as $category)
                <button data-filter=".{{ $category->slug }}"
                    class="galarybtn text-gray-500">{{ $category->name }}</button>
            @endforeach
        </div>
    </div>

    <!--Image Gellary Section Start From Here-->
    <div class="overflow-hidden">
        <div class="grid grid-cols-12 gap-3 mixingContainer">
            <!--Image Card Parent Start Here-->

            @foreach ($portfolios as $key => $portfolio)
                <x-portfolio.portfolioitem :portfolio="$portfolio" />
            @endforeach

        </div>
        <!--Image Card Parent End Here-->
    </div>
    <x-section-chat />
    <x-section-service />
    <div class="pb-[20px]"></div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <style>
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
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cwa_lightbox_bundle_v1.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
        $(document).ready(function() {

            $('#portfolioSlider').owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
        $('#categorySlider').owlCarousel({
            loop: false,
            autoWidth: true,
            dots: false,
            margin: 10,
        });
        $('#serviceslider').owlCarousel({
            items: 2,
            center:2,
            loop: true,
            margin: 10,
        });
        $('#blogslider').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,

        });
        $('.owl-carousel').owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            margin: 10,
            dots: true
        });

            let gallarybutton = $('.gallarybutton');
            $(document).on('click', '.gallarybutton', function() {
                console.log($(this));
                $(this).siblings().removeClass('bg-black text-white');
                $(this).addClass('bg-black text-white')
            })


        });
    </script>


@endpush
