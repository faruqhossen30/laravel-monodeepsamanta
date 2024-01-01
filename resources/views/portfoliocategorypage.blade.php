@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <x-portfolio.creativework />

    <div class="space-x-2 py-4 ">
        <button data-filter="*"
            class="font-bold border px-6 py-1 rounded bg-black text-white  transition">{{ $category->name }}</button>
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
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
    </script>
@endpush
