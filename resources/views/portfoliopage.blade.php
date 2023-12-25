@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div class="p-4 lg:p-0 md:flex justify-between mt-16 space-x-10">
        <!--FEATURED WORK section start from here-->
        <div class="md:w-7/12 space-y-4">
            <p class="text-primary font-extrabold text-[14px] leading-[14px]">FEATURED WORK</p>
            <h2 class="text-2xl font-bold">Creativity by Monodeep Samanta</h2>
            <p class="text-lg">Explore a Gallery of Creativity by Monodeep Samanta: Unveil a collection of exquisite UI/UX
                design Portfolios. Immerse in a journey of innovation, aesthetics, and User-centric excellence. Discover the
                power of design That inspires, engages, and transforms digital experiences. People love my designs because
                they are easy to use with satisfying layouts. Let’s make your website amazing. Contact me today, and have a
                flying start!</p>

            <p><a href="#" class="text-primary font-bold hover:text-black transition">See All Service <i
                        class="fa-solid fa-arrow-right"></i></a></p>
        </div>
        <!--FEATURED WORK section End from here-->
        <div class="group w-full md:w-5/12 relative h-full overflow-hidden  cursor-pointer rounded-md mx-auto">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-black opacity-50 hidden  group-hover:block transition z-10">
            </div>
            <!--layer end-->
            <img class="group-hover:scale-110 transition duration-300 w-full h-auto"
                src="img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp" alt="">
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20"><i
                    class="bg-red-500 rounded-full p-4 text-white fas fa-eye"></i></div>
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
                    $classname = implode(" ", $arr);
                    // echo $classname;
                @endphp
                <!--Image Card Start-->
                <div
                    class="col-span-4 font-bold relative overflow-hidden text-white rounded-md shadow cursor-pointer mix group {{$classname}}">
                    <!--layer start-->
                    <div
                        class="w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-20">
                    </div>
                    <!--layer end-->
                    <img class="w-full max-h-80 object-cover group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                        src="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}" alt="">
                    <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-10 ">
                        <a href="{{route('singleportfolio', $portfolio->slug)}}">
                            <h1 class="text-2xl">{{ $portfolio->title }}</h1>
                        </a>
                        <a href="{{route('singleportfolio', $portfolio->slug)}}" class="flex space-x-2 hover:text-primary transition ">
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
