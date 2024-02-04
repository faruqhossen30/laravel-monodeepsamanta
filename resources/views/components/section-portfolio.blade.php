@php
    use App\Models\Category;
    $categories = Category::get();
@endphp
<div class="flex justify-between items-center">
    <div class="flex items-center space-x-2 py-2 pb-4">
        <x-icon.thumbnail />

        <h3 class="text-lg lg:text-[26px] font-bold">Check Out My Portfolio</h3>
    </div>
    @isset($islink)
        <a href="{{ route('portfoliopage') }}" class="text-primary font-bold flex items-center space-x-2 pb-4">
            <span class="text-[15px] leading-[15px]">See All Portfolios</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    @endisset
</div>


<div class="hidden md:grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-4 gap-2">
    @foreach ($categories as $category)
        <!--Image Card Start-->
        <a href="{{ route('portfoliocategorypage', $category->slug) }}"
            class="group font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
            <!--layer start-->
            <div
                class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10">
            </div>
            <!--layer end-->
            <img class="max-h-96 w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500  object-top"
                src="{{ asset('uploads/category/' . $category->thumbnail) }}" alt="">
            <div
                class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20 space-y-2">
                <h1 class="text-2xl">{{ $category->name }}</h1>
                <span class="hover:text-[#FF003A] transition flex items-center space-x-2">
                    <span>See All</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </span>
            </div>
        </a>
        <!--Image Card end-->
    @endforeach
</div>


{{-- Slider statrt --}}


<div class="block md:hidden">
    <div id="slider2" class="owl-carousel owl-theme grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach ($categories as $category)
            <!--Image Card Start-->
            <a href="{{ route('portfoliocategorypage', $category->slug) }}"
                class="item group font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
                <!--layer start-->
                <div
                    class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10">
                </div>
                <!--layer end-->
                <img class="max-h-96 w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500  object-top"
                    src="{{ asset('uploads/category/' . $category->thumbnail) }}" alt="">
                <div
                    class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20 space-y-2">
                    <h1 class="text-2xl">{{ $category->name }}</h1>
                    <span class="hover:text-[#FF003A] transition flex items-center space-x-2">
                        <span>See All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                </div>
            </a>
            <!--Image Card end-->
        @endforeach


    </div>
</div>
