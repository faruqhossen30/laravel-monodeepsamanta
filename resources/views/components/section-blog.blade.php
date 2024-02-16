@php
    use App\Models\Blog;
    $posts = Blog::latest()
        ->take(3)
        ->get();

@endphp

<div class="flex justify-between items-center py-3">
    <div class="flex items-center space-x-2 py-2">
        <x-icon.clients />

        <h3 class="text-lg lg:text-[26px] font-bold">Daily Blogs</h3>
    </div>
    <a href="{{ route('blogpage') }}" class="text-primary font-bold flex items-center space-x-2">
        <span class="text-[15px] leading-[15px]">See All Blogs</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            data-slot="icon" class="w-4 h-4 font-bold">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </a>
</div>
{{-- Blog Slider start --}}
<div class="block md:hidden">
    <div id="blogslider" class="owl-carousel owl-theme grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach ($posts as $post)
            <a class="group rounded-lg overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="{{route('singleblog', $post->slug)}}">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                    <img class="w-full h-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-lg"
                        src="{{ asset('uploads/blog/' . $post->thumbnail) }}" alt="Image Description">
                </div>

                <div class="mt-7">
                    <h3 class="text-md lg:text-2xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ $post->title }}
                    </h3>
                </div>
            </a>
        @endforeach


    </div>
</div>
{{-- Blog Slider end --}}
    <div class="hidden lg:grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <a class="group rounded-lg overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="{{route('singleblog', $post->slug)}}">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                    <img class="w-full h-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-lg"
                        src="{{ asset('uploads/blog/' . $post->thumbnail) }}" alt="Image Description">
                </div>

                <div class="mt-7">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 hover:text-[#FF003A]">
                        {{ $post->title }}
                    </h3>
                </div>
            </a>
        @endforeach
    </div>

<div class="h-8 lg:h-24"></div>
