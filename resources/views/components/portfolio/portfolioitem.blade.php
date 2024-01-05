<a href="{{ route('singleportfolio', $portfolio->slug) }}"
    class="group col-span-12 sm:col-span-6 lg:col-span-4 font-bold relative overflow-hidden text-white rounded-sm shadow cursor-pointer mix {{ $portfolio->category->slug }}">
    <!--layer start-->
    <div
        class="w-full h-full absolute top-0 left-0 bg-black opacity-50 hidden  group-hover:block transition z-10">
    </div>

    <!--layer end-->
    <img class="w-full max-h-80 object-cover group-hover:scale-110 group-hover:rotate-3 transition duration-500"
        src="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}" alt="">
    <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-10  space-y-2">
        <h1 class="text-2xl">{{ $portfolio->title }}</h1>

        <span class="hover:text-[#FF003A] transition flex items-center space-x-2">
            <span>See All</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </span>
    </div>
</a>
