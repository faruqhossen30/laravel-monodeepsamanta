@php
    use App\Models\Review;
    $reviews = Review::where('status', true)->count();
@endphp
<section class="sticky top-0 z-50">
    {{-- <div class="h-4 lg:h-5 hidden lg:block  sticky top-0 z-50 bg-white"></div> --}}
    <header class="px-4 pb-2 lg:pb-0 lg:px-0 z-40 border-b-2 lg:border-none mynavbar transition duration-1000 bg-white">
        <div class="flex items-center max-w-[1260px] mx-auto justify-between bg-white mt-2 z-50">
            <div class="flex items-center space-x-6 py-2 bg-white">
                <a href="{{ route('homepage') }}" class="flex-none text-xl font-semibold dark:text-white">
                    <img src="{{ asset('img/logo.webp') }}" alt="" class="w-12 h-12 lg:w-12 lg:h-12">
                </a>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">

                        <a href="{{ route('homepage') }}">
                            <h2 class="text-2xl lg:text-lg font-bold leading-[18px]">Monodeep Samanta</h2>
                        </a>
                        <div class="hidden md:flex items-center space-x-2">
                            <button type="button"
                                class="py-1 px-2 inline-flex items-center gap-x-1 font-bold rounded-md border border-gray-200 bg-[#222325] text-white disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 9"
                                    fill="none">
                                    <path
                                        d="M9.58366 4.5L8.56699 3.45375L8.70866 2.07L7.20449 1.7625L6.41699 0.5625L5.00033 1.11L3.58366 0.5625L2.79616 1.75875L1.29199 2.0625L1.43366 3.45L0.416992 4.5L1.43366 5.54625L1.29199 6.93375L2.79616 7.24125L3.58366 8.4375L5.00033 7.88625L6.41699 8.43375L7.20449 7.2375L8.70866 6.93L8.56699 5.54625L9.58366 4.5ZM3.90866 6.00375L2.91699 5.10375C2.75449 4.9575 2.75449 4.72125 2.91699 4.575L2.94616 4.54875C3.10866 4.4025 3.37533 4.4025 3.53783 4.54875L4.20866 5.15625L6.35449 3.22125C6.51699 3.075 6.78366 3.075 6.94616 3.22125L6.97532 3.2475C7.13783 3.39375 7.13783 3.63 6.97532 3.77625L4.50866 6.00375C4.33783 6.15 4.07533 6.15 3.90866 6.00375Z"
                                        fill="white"></path>
                                </svg>
                                <span class="text-[12px] leading-[12px] py-[2px]">PRO VERIFIED</span>
                            </button>
                            <div class="flex space-x-2">
                                <a href="">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </a>
                                <a href="">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('reviewpage') }}"
                                    class="text-sm leading-[14px] font-medium text-black">5.0 ({{ $reviews }}
                                    reviews)
                                </a>
                            </div>
                        </div>

                    </div>
                    <h1 class="hidden lg:block text-sm text-black font-medium leading-[24px]">Multi Award Winning United
                        Kingdom Designer </h1>
                </div>
            </div>
            <div class="mt-1">

                @include('inc.topmenuoffcancas')
                <div class="space-x-3 hidden lg:flex">
                    <button type="button"
                        class="chat-button py-2 px-3 inline-flex items-center gap-x-2 text-md font-bold rounded-sm bg-primary text-white hover:bg-black disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                        </svg>
                        Instant Reply
                    </button>
                    <a href="{{ route('aboutpage') }}"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-md font-bold rounded-sm border border-black bg-white hover:bg-black text-black hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        More About Me
                    </a>
                </div>
                <div class="hidden md:flex items-center justify-end space-y-1 space-x-1">
                    <svg class="text-brand w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                    <span class="text-sm py-1">Average response time 1h</span>
                </div>
            </div>
        </div>
    </header>


    {{-- Large screen menu start --}}
    <section class="hidden md:block bg-white border-b z-0">
        <nav class="max-w-[1260px] mx-auto bg-white flex space-x-6 text-gray-400">
            <a href="{{ route('homepage') }}"
                class="@if (request()->routeIs('homepage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap  focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                Home
            </a>

            <a href="{{ route('portfoliopage') }}"
                class="@if (request()->routeIs(['portfoliopage', 'singleportfolio','portfoliocategorypage'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap  focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                Portfolio
            </a>
            <a href="{{ route('aboutpage') }}"
                class="@if (request()->routeIs('aboutpage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                About Me
            </a>
            <a href="{{ route('servicepage') }}"
                class="@if (request()->routeIs(['servicepage', 'singleservice'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                Services
            </a>
            <a href="{{ route('reviewpage') }}"
                class="@if (request()->routeIs('reviewpage')) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                Reviews
            </a>
            <a href="{{ route('blogpage') }}"
                class="@if (request()->routeIs(['blogpage', 'postpage', 'singlepost'])) border-b-2 border-b-[#FF003A] text-brand @endif inline-flex items-center gap-x-2 text-lg leading-[21px] whitespace-nowrap focus:outline-none dark:text-blue-500 dark:focus:text-blue-400 menuhover pb-2">
                Blog
            </a>

        </nav>
    </section>
</section>
{{-- Large screen menu End --}}
