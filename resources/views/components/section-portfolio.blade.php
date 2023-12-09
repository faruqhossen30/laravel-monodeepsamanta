@php
    use App\Models\Portfolio;
    $portfolios = Portfolio::latest()
        ->take(4)
        ->get();

@endphp
<div class="flex justify-between items-center">
    <div class="flex items-center space-x-2 py-2">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
            fill="none">
            <path
                d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
                fill="#FF003A"></path>
            <path
                d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
                fill="#FF003A"></path>
        </svg>
        <h3 class=" text-2xl font-extrabold">Check Out My Portfolio</h3>
    </div>
    <a href="{{route('portfoliopage')}}" class="text-primary font-bold flex space-x-2">
        <span>See All Portfolios</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>

    </a>
</div>
<div class=" grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-4 gap-5">
    @foreach ($portfolios as $portfolio)
        <!--Image Card Start-->
        <div class="group font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
            <!--layer start-->
            <div
                class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10">
            </div>
            <!--layer end-->
            <img class="max-h-80 group-hover:scale-110 group-hover:rotate-3 transition duration-500  object-cover"
                src="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <a href="{{route('singleportfolio', $portfolio->slug)}}"><h1 class="text-2xl">{{ $portfolio->title }}</h1></a>
                <a href="{{ route('portfoliopage') }}" class="hover:text-red-500 transition ">See All <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
    @endforeach


</div>
