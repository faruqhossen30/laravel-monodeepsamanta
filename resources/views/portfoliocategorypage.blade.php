@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <x-portfolio.creativework />

    <div class="hidden lg:block sticky lg:top-[94px] top-20 z-30 bg-white space-x-2 py-4">
        @foreach ($categories as $cat)
            <a href="{{ route('portfoliocategorypage', $cat->slug) }}"
                class="mb-2 inline-block font-bold border px-6 py-1 rounded  transition @if ($cat->id == $category->id) bg-black text-white @else bg-white text-gray-500 @endif">{{ $cat->name }}</a>
        @endforeach
    </div>
    <div class="lg:hidden sticky lg:top-[94px] top-[70px] z-30 bg-white space-x-2 py-4">
        <form action="" method="get">
            <select name="category" onchange="this.form.submit()"
                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                @foreach ($categories as $cat)
                    <option value="{{ $cat->slug }}" @if ($cat->id == $category->id) selected @endif>{{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
    <!--Image Gellary Section Start From Here-->
    <div class="overflow-hidden">
        <div class="grid grid-cols-12 gap-3 mixingContainer">
            @foreach ($portfolios as $portfolio)
                <x-portfolio.portfolioitem :portfolio="$portfolio" />
            @endforeach
        </div>
        <!--Image Card Parent End Here-->
    </div>
    <x-section-chat />
    {{-- <x-section-service /> --}}
    <x-section-service islink="true" />
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

        /* for serviceslider */
        #serviceslider .owl-dots {
            display: none;
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cwa_lightbox_bundle_v1.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
    </script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('#serviceslider').owlCarousel({
            items: 2,
            center: true,
            loop: true,
            margin: 10,
        });
    </script>
@endpush
