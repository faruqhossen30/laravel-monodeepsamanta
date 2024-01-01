<!--Image Card Start-->
<a href="{{route('singleportfolio', $portfolio->slug)}}"
    class="col-span-4 font-bold relative overflow-hidden text-white rounded-sm shadow cursor-pointer mix group {{$portfolio->category->slug}}">
    <!--layer start-->
    <div
        class="w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-20">
    </div>

    <!--layer end-->
    <img class="w-full max-h-80 object-cover group-hover:scale-110 group-hover:rotate-3 transition duration-500"
        src="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}" alt="">
    <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-10  space-y-2">
            <h1 class="text-2xl">{{ $portfolio->title }}</h1>

        <span
            class="flex space-x-2 hover:text-primary transition ">
            <span>See more</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>

        </span>
    </div>
</a>
<!--Image Card end-->
