@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div class="p-4 lg:p-0 md:flex justify-between mt-16 space-x-10">
        <!--FEATURED WORK section start from here-->
        <div class="md:w-7/12 space-y-4">
            <p class="text-primary font-black text-[14px] leading-[14px] tracking-widest">FEATURED WORK</p>
            <h2 class="text-2xl font-bold pt-4 pb-2">Creativity by Monodeep Samanta</h2>
            <p class="text-lg">Explore a Gallery of Creativity by Monodeep Samanta: Unveil a collection of exquisite UI/UX
                design Portfolios. Immerse in a journey of innovation, aesthetics, and User-centric excellence. Discover the
                power of design That inspires, engages, and transforms digital experiences. People love my designs because
                they are easy to use with satisfying layouts. Let’s make your website amazing. Contact me today, and have a
                flying start!</p>


                <a href="{{ route('servicepage') }}" class="text-primary font-bold hover:text-black transition flex items-center space-x-2">See All
                    <span>Service</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
        </div>
        <!--FEATURED WORK section End from here-->
        <div class="group w-full md:w-5/12 relative h-full overflow-hidden  cursor-pointer rounded-md mx-auto">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-black opacity-50 hidden  group-hover:block transition z-10">
            </div>
            <!--layer end-->
            <img class="group-hover:scale-110 transition duration-300 w-full h-auto"
                src="img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp" alt="">
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                <div class="bg-[#FF003A] rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="space-x-2 py-4">
        <button data-filter="*" class="galarybtn">All Capabilities</button>
        @foreach ($categories as $category)
            <button data-filter=".{{ $category->slug }}" class="galarybtn">{{ $category->name }}</button>
        @endforeach
        {{-- <button data-filter=".dashboard" class="galarybtn">Dashboard</button>
        <button data-filter=".landing" class="galarybtn">Landing Page</button>
        <button data-filter=".website" class="galarybtn">Website</button> --}}
    </div>
    <!--Image Gellary Section Start From Here-->
    <div class="overflow-hidden">
        <div class="grid grid-cols-12 gap-5 mixingContainer">
            <!--Image Card Parent Start Here-->
            @foreach ($portfolios as $portfolio)
                @php
                    $arr = [];
                    foreach ($portfolio->categories as $category) {
                        $arr[] = $category->slug;
                    }
                    $classname = implode(' ', $arr);
                    // echo $classname;
                @endphp
                <!--Image Card Start-->
                <div
                    class="col-span-4 font-bold relative overflow-hidden text-white rounded-md shadow cursor-pointer mix group {{ $classname }}">
                    <!--layer start-->
                    <div
                        class="w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-20">
                    </div>
                    <!--layer end-->
                    <img class="w-full max-h-80 object-cover group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                        src="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}" alt="">
                    <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-10 ">
                        <a href="{{ route('singleportfolio', $portfolio->slug) }}">
                            <h1 class="text-2xl">{{ $portfolio->title }}</h1>
                        </a>
                        <a href="{{ route('singleportfolio', $portfolio->slug) }}"
                            class="flex space-x-2 hover:text-primary transition ">
                            <span>See All</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>

                        </a>
                    </div>
                </div>
                <!--Image Card end-->
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
