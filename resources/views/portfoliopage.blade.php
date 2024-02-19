@extends('layouts.app')
@section('title', 'Dashboard & UX/UI Designer | Portfolio')
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
            <button data-filter="*" class="galarybtn mobileGallarybutton bg-black text-white ">All Capabilities</button>
            @foreach ($categories as $category)
                <button data-filter=".{{ $category->slug }}"
                    class="galarybtn mobileGallarybutton text-gray-500">{{ $category->name }}</button>
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
    <x-section-service islink="true" />
    <div class="pb-[20px]"></div>
@endsection

@push('style')

@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cwa_lightbox_bundle_v1.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
        $(document).ready(function() {
            $(document).on('click', '.gallarybutton', function() {
                $(this).siblings().removeClass('bg-black text-white');
                $(this).addClass('bg-black text-white')
            })

            $(document).on('click', '.mobileGallarybutton', function() {
                $('.mobileGallarybutton').removeClass('bg-black text-white');
                $(this).addClass('bg-black text-white')
            })


        });
    </script>


@endpush
