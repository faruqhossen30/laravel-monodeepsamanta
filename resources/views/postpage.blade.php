@extends('layouts.app')
@section('title', 'Dashboard & UX/UI Designer | Blogs')
@section('content')



<div class="justify-between lg:p-0 md:flex lg:mt-16 md:space-x-10" id="lightgallery">
    <!--FEATURED WORK section start from here-->
    <div class="space-y-4 md:w-7/12 mb-7 ">
        <h2 class="text-2xl font-bold lg:py-8" data-aos="fade" data-aos-duration="2000">

            <svg class="inline w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path
                    d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
                    fill="#FF003A"></path>
                <path
                    d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
                    fill="#FF003A"></path>
            </svg>
            Design Matters</h2>
        <p class="text-lg" data-aos="fade-right" data-aos-duration="1000">I am sharing practical tips and real-world experiences to help both budding and seasoned designers level up their skills. Dive into the latest trends, discover the best tools, and explore the art of creating user-friendly designs.</p>
        <p class="text-lg" data-aos="fade-right" data-aos-duration="1000">My articles are your go-to source for simplified design wisdom. Let’s grow together in this vibrant  UI/UX design blog community.</p>
    </div>
    <!--FEATURED WORK section End from here-->
    <a href="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}" class="relative w-full h-full mx-auto overflow-hidden rounded-md cursor-pointer cwa-lightbox-image md:w-5/12" data-aos="fade-left" data-aos-duration="1000">

               <img class="w-full h-auto"
                    src="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}"
                     alt="" loading="lazy">
    </a>
</div>



    <div class="flex items-center px-4 py-2 space-x-2 lg:pt-[60px]" data-aos="fade" data-aos-duration="2000">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path
                d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
                fill="#FF003A"></path>
            <path
                d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
                fill="#FF003A"></path>
        </svg>
        <h3 class="text-2xl font-extrabold">Latest article</h3>

    </div>
    <div>
        <div class="grid gap-6 p-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <a href="{{route('singleblog', $post->slug)}}" class="overflow-hidden rounded-lg group dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-aos="fade" data-aos-duration="2000"
                    >
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-lg overflow-hidden">
                        <img class="absolute top-0 object-cover w-full h-full transition-transform duration-500 ease-in-out rounded-lg start-0 group-hover:scale-105"
                            src="{{asset('uploads/post/'.$post->thumbnail)}}"
                            alt="{{$post->title}}">

                    </div>

                    <div class="mt-7">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 group-hover:text-brand">
                            {{$post->title}}
                        </h3>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="pt-5">
            {{$posts->links('pagination::custom')}}
        </div>
    </div>


    <div class="px-4 ">
        <x-section-chat />

    </div>
@endsection
