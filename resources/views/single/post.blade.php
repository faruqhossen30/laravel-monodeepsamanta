@php
    use App\Models\Post\Post;
    $posts = Post::where('status', true)->latest()->take(5)->get();
@endphp
@push('OG')
    @section('OG')
        <!-- Facebook Open Graph -->
        <meta property="og:url" content="{{ route('singleblog', $post->slug) }}" />
        <meta property="og:type" content="Mondeep Samanta" />
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:description" content="{{ $post->project_description }}" />
        <meta property="og:image" content="{{ $post->img_large }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@heshelghor" />
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:description" content="{{ $post->project_description }}" />
        <meta property="og:image" content="{{ asset('uploads/post/' . $post->thumbnail) }}" />
    @endsection
@endpush

@extends('layouts.app')
@section('title', 'Home Page')
@section('blog')

    <div class=" bg-[#CFE2F3] py-10 w-full pb-60">
        <div class="py-10 flex justify-center space-y-3 text-center lg:text-right">
            <div class="py-6 lg:py-0">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singleblog', $post->slug) }}"
                    class="bg-white text-white  font-medium rounded-full text-sm p-4 text-center inline-flex items-center me-2">
                    <img src="{{ asset('img/icon/facebook-app-symbol.png') }}" class="w-4" alt="">
                </a>

                <a href="https://twitter.com/intent/tweet?url={{ route('singleblog', $post->slug) }}"
                    class="bg-white text-white  font-medium rounded-full text-sm p-4 text-center inline-flex items-center me-2">
                    <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                    </svg>
                </a>

                {{-- <button type="button"
                    class="bg-white text-white  font-medium rounded-full text-sm p-4 text-center inline-flex items-center me-2">
                    <svg class="text-black" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </button> --}}

                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('singleblog', $post->slug) }}"
                    class="bg-white text-white  font-medium rounded-full text-sm p-4 text-center inline-flex items-center me-2">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <circle cx="4.983" cy="5.009" r="2.188"></circle>
                        <path
                            d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z">
                        </path>
                    </svg>
                </a>

            </div>
        </div>

        <div class=" mx-auto">
            <h1 class=" font-bold text-3xl lg:text-[40px] leading-[48px] text[#0b0c0d] max-w-4xl mx-auto text-center mb-10">
                {{ $post->title }}</h1>
            <p class="max-w-xl mx-auto text-center leading-7 text-[#0b0c0d]">{{ $post->short_description }}</p>
        </div>
    </div>
    </div>

    <div class=" w-11/12 max-w-5xl mx-auto -mt-44">
        <img class="rounded-md" src="{{ asset('uploads/post/' . $post->thumbnail) }}" alt="">
    </div>

    <div class=" w-11/12 max-w-5xl mx-auto grid grid-cols-12 py-14 px-10 border my-6 rounded-md shadow gap-10 text-sm">
        <div class=" col-span-12 lg:col-span-6">
            <h2 class=" font-semibold mb-5 uppercase">About This Project</h2>
            <p class="font-normal text-[16px] leading-[26px]">{{ $post->project_description }}</p>
        </div>
        <div class=" col-span-12 md:col-span-6 lg:col-span-3">
            <h2 class=" font-semibold mb-5">SERVICES</h2>
            <ul>
                @foreach ($post->categories as $cat)
                    <li><a class="underline" href="#">{{ $cat->name }}</a></li>
                @endforeach
                {{-- <li><a class="underline" href="#">Product design</a></li> --}}
            </ul>
        </div>

        <div class=" col-span-12 md:col-span-6 lg:col-span-3">
            <h2 class=" font-semibold uppercase mb-5">Technologies </h2>
            <ul>
                @foreach ($post->softwares as $soft)
                    <li>{{ $soft->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class=" w-11/12 max-w-3xl mx-auto py-10 prose">
        {!! $post->description !!}
    </div>

    <div class="bg-[#CFE2F3] max-w-[1260px] mx-auto flex flex-col items-center py-10 rounded-lg">
        <svg class="w-20 h-20 text-green-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
            <path
                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
        </svg>
        <div>
            <p class="px-10 text-3xl leading-[42px] font-bold text-center max-w-2xl">
                I'm Monodeep Samanat, an award-winning senior UX/UI designer based in London. Over my 15-year career journey in UX/UI design, I've navigated through various challenges and triumphs. Now, I'm excited to share my insights and experiences through articles. Join me as I delve into the dynamic world of UX/UI design.
            </p>
        </div>
        <div class="flex flex-col items-center py-10 font-bold">
            <img class="w-20 h-20" src="{{ asset('img/pic.png') }}" alt="">
            <span>Monodeep Samanta</span>
            {{-- <span class="font-normal">Director of Monodeep Samanta</span> --}}
        </div>
    </div>


    <div class="max-w-[1260px] mx-auto">
        <div class="text-center py-10">
            <h1 class="font-bold text-3xl">
                Related posts
            </h1>
            <p class="py-4">Check out more blogs and stories.</p>
        </div>
        <div class="py-5"></div>

        <div id="postSlider"
            class="px-4 lg:px-0 owl-carousel owl-theme grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 slider py-20">
            @foreach ($posts as $post)
                <a class="group
            rounded-lg overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="{{ route('singleblog', $post->slug) }}">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                        <img class="w-full h-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-lg"
                            src="{{ asset('uploads/post/' . $post->thumbnail) }}" alt="Image Description">
                    </div>

                    <div class="mt-7">
                        <h3
                            class="text-md lg:text-2xl font-semibold text-gray-800 dark:text-gray-200 group-hover:text-brand">
                            {{ $post->title }}
                        </h3>
                    </div>
                </a>
            @endforeach


        </div>



    </div>


@endsection

@push('style')
    <style>
        #postSlider .owl-nav .owl-prev:hover {
            background-color: transparent !important;
            color: #FF003A !important;
        }

        #postSlider .owl-nav .owl-next:hover {
            background-color: transparent !important;
            color: #FF003A !important;
        }


    </style>
@endpush

@push('style')
    <style type="text/css">
        #postSlider .slider {
            position: relative;
            margin: 0 auto;
        }

        .owl-nav {
            position: absolute;
            top: -5%;
            left: calc(50% - 50px);
            width: 100px;
        }
    </style>
@endpush
