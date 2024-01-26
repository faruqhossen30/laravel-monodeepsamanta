@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <x-portfolio.creativework />

    <div class="sticky lg:top-[94px] top-20 z-30 bg-white space-x-2 py-4">
        @foreach ($categories as $cat)
            <a href="{{route('portfoliocategorypage', $cat->slug)}}"
                class="mb-2 inline-block font-bold border px-6 py-1 rounded  transition @if($cat->id == $category->id) bg-black text-white @else bg-white text-gray-500 @endif">{{ $cat->name }}</a>
        @endforeach
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
    <x-section-service />
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
    </script>
@endpush
