@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div class="grid grid-cols-12 gap-10 pt-3">
        <div class="col-span-12 lg:col-span-8">
            <h1 class="text-[26px] leading-[32px] py-1 mb-4 font-bold">{{ $service->title }}</h1>
            @if ($service->sliders->count())
                <div class="owl-carousel owl-theme slider">
                    @foreach ($service->sliders as $key => $slider)
                        <div class="item" data-hash="{{ $key }}">
                            <img src="{{ asset('uploads/service/slider/' . $slider->thumbnail) }}" alt=""">
                        </div>
                    @endforeach

                </div>
                <div class="flex space-x-2 py-2">
                    @foreach ($service->sliders as $key => $slider)
                        <a href="#{{ $key }}" class="" data-slider="{{$key}}">
                            <img src="{{ asset('uploads/service/slider/' . $slider->thumbnail) }}" alt=""
                                class="w-32 custompacity sliderlinkimage{{$key}}">
                        </a>
                    @endforeach
                </div>
            @endif
            <div class="py-8">
                {!! $service->description !!}
            </div>

            <div class="grid grid-cols-2 py-4">
                <div class="col-span-2 lg:col-span-1">
                    <h3 class="py-2 font-bold text-[20px] leading-['26px']">What’s Included</h3>
                    <p>Minimalist, Brandmark, Monogram</p>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <h3 class="py-2 font-bold text-[20px] leading-['26px']">File Format</h3>
                    <p>AI, EPS, JPG, PDF, PNG, PSD, SVG </p>
                </div>
            </div>
            <div class="hidden md:block">
                <h3 class="py-2 font-bold text-[20px] leading-['26px']">What’s Included</h3>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border border-gray-100 overflow-hidden dark:border-gray-700 rounded-2xl">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                                        @if ($service->package)
                                            <tr
                                                class="divide-x divide-gray-100 odd:bg-white  even:bg-gray-50 dark:odd:bg-slate-900 dark:even:bg-slate-800">
                                                <td
                                                    class="px-6 py-6 whitespace-nowrap text-gray-800 dark:text-gray-200 text-start text-[18px] leading-[16px]">
                                                    Services Tiers</td>
                                                <td
                                                    class="px-6 py-6 whitespace-nowrap text-[18px] leading-[16px] text-gray-800 dark:text-gray-200 text-center">
                                                    Starter <p class="py-2">
                                                        ${{ optional($service->package)->starter_price }}</p>
                                                </td>
                                                <td
                                                    class="px-6 py-6 whitespace-nowrap text-[18px] leading-[16px] text-gray-800 dark:text-gray-200 text-center">
                                                    Standard <br>
                                                    <p class="py-2">${{ optional($service->package)->standard_price }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="px-6 py-6 whitespace-nowrap text-[18px] leading-[16px] text-gray-800 dark:text-gray-200 text-center">
                                                    Advanced <br>
                                                    <p class="py-2">${{ optional($service->package)->advance_price }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($service->features as $feature)
                                            <tr
                                                class="divide-x divide-gray-100 odd:bg-white even:bg-gray-50 dark:odd:bg-slate-900 dark:even:bg-slate-800">
                                                <td
                                                    class="px-6 py-5 whitespace-nowrap text-[16px] leading-[19px] text-gray-800 dark:text-gray-200 text-start">
                                                    {{ $feature->feature }}</td>
                                                <td
                                                    class="text-[18px] leading-[16px] px-6 py-5 whitespace-nowrap text-gray-800 dark:text-gray-200 text-center">
                                                    {{ $feature->starter }}</td>
                                                <td
                                                    class="text-[18px] leading-[16px] px-6 py-5 whitespace-nowrap text-gray-800 dark:text-gray-200 text-center">
                                                    {{ $feature->standard }}</td>
                                                <td
                                                    class="text-[18px] leading-[16px] px-6 py-5 whitespace-nowrap  dark:text-gray-200 text-center">
                                                    {{ $feature->advanced }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border my-8 p-2 rounded-2xl lg:flex items-center">
                <div class="grow">
                    <img class="w-80 max-w-lg" src="{{ asset('img/man-working-from-home.webp') }}" alt="">
                </div>
                <div class="grow space-y-5">
                    <h3 class="text-[20px] leading-[26px] font-bold">Customized this project</h3>
                    <p class="text-[18px] leading-[26px]">I offer you my best service in illustration. I take your
                        ideas and bring them to a next level.I will help you to make..</p>
                    <button type="button"
                        class="py-2 px-8 inline-flex items-center gap-x-2 text-md rounded-md font-normal border-black bg-black hover:bg-[#FF003A] text-white hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Send Request
                    </button>
                </div>
            </div>

            <div class="hs-accordion-group">
                @foreach ($service->faqs as $faq)
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading{{ $faq->id }}">
                        <button
                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse{{ $faq->id }}">
                            {{ $faq->question }}
                            <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse{{ $faq->id }}"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading{{ $faq->id }}">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="border my-8 p-10 rounded-2xl ">
                <h3 class="p-4 font-bold text-[26px] leading-['32px']">Frequently Asked Questions </h3>
                <div class="flex space-x-4 py-8">
                    <div class="flex justify-center items-center p-8 bg-lime-600 w-8 h-8 rounded-full">
                        <span class="font-bold text-lg text-white">1</span>
                    </div>
                    <div class="space-y-4">
                        <p>After purchasing the project, send requirements so monodeep can start the project. Delivery time
                            starts when Writi receives requirements from you.</p>
                        <a href="#" class="flex text-sm leading-[18px] text-primary font-bold items-center space-x-2">
                            <span>View Requirements</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex space-x-4 py-8">
                    <div class="flex justify-center items-center p-8 bg-lime-600 w-8 h-8 rounded-full">
                        <span class="font-bold text-lg text-white">2</span>
                    </div>
                    <div class="space-y-4">
                        <p>Writi works on your project following the steps below. Revisions may occur after the delivery
                            date.</p>
                        <div class="border rounded-2xl p-6 m-14">
                            <ul class="space-y-10 py-4 text-sm">
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 h-6 w-6 mt-0.5 text-teal-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-600 dark:text-white">
                                        <p>
                                            Initial Questions <br>
                                            I will ask you few initial questions at the time of starting the project. That
                                            would help me understand the company / product and it is crucial before starting
                                            a design process
                                        </p>
                                    </span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 h-6 w-6 mt-0.5 text-teal-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span class="text-gray-600 dark:text-white">
                                        <p>
                                            Initial Questions <br>
                                            I will ask you few initial questions at the time of starting the project. That
                                            would help me understand the company / product and it is crucial before starting
                                            a design process
                                        </p>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4 py-8">
                    <div class="flex justify-center items-center p-8 bg-lime-600 w-8 h-8 rounded-full">
                        <span class="font-bold text-lg text-white">3</span>
                    </div>
                    <div class="space-y-4">
                        <p>Writi works on your project following the steps below. Revisions may occur after the delivery
                            date.</p>
                        <a href="#"
                            class="flex text-sm leading-[18px] text-primary font-bold items-center space-x-2">
                            <span>What If I'm Not Happy With The Work?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>


                        </a>
                    </div>
                </div>
            </div>
            <x-section-video />
            <section>
                <h1 class="flex items-center text-2xl space-x-2 py-4 my-8 font-bold">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20" fill="none">
                        <path
                            d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
                            fill="#FF003A"></path>
                        <path
                            d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
                            fill="#FF003A"></path>
                    </svg>
                    <span>Reviews</span>
                </h1>
            </section>
            <div class="my-8 p-8 bg-gray-50 space-y-4">
                <h3 class="text-[22px] leading-[32px] font-semibold">Submit a review</h3>
                <div>
                    <label for="name"
                        class="block text-[15px] leading-[25px] font-normal mb-2 dark:text-white">Name*</label>
                    <input type="text" id="name"
                        class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
                <div>
                    <label for="email"
                        class="block text-[15px] leading-[25px] font-normal mb-2 dark:text-white">Email*</label>
                    <input type="text" id="email"
                        class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
                <div>
                    <ul role="list" class="marker:text-blue-600 space-y-2 text-sm text-black dark:text-gray-400">
                        <li class="flex space-x-2">
                            <span class="ext-black text-[16px] leading-[28px] font-bold">Seller communication level</span>
                            <!-- Rating -->
                            <div class="flex flex-row-reverse justify-end items-center">
                                <input id="hs-ratings-readonly-1" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="1">
                                <label for="hs-ratings-readonly-1"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-2" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="2">
                                <label for="hs-ratings-readonly-2"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-3" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="3">
                                <label for="hs-ratings-readonly-3"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-4" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="4">
                                <label for="hs-ratings-readonly-4"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-5" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="5">
                                <label for="hs-ratings-readonly-5"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                            </div>
                            <!-- End Rating -->
                        </li>
                        <li class="flex space-x-2">
                            <span class="ext-black text-[16px] leading-[28px] font-medium">Recommend to a friend</span>
                            <!-- Rating -->
                            <div class="flex flex-row-reverse justify-end items-center">
                                <input id="hs-ratings-readonly-1" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="1">
                                <label for="hs-ratings-readonly-1"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-2" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="2">
                                <label for="hs-ratings-readonly-2"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-3" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="3">
                                <label for="hs-ratings-readonly-3"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-4" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="4">
                                <label for="hs-ratings-readonly-4"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-5" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="5">
                                <label for="hs-ratings-readonly-5"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                            </div>
                            <!-- End Rating -->
                        </li>
                        <li class="flex space-x-2">
                            <span class="ext-black text-[16px] leading-[28px] font-medium">Service as described </span>
                            <!-- Rating -->
                            <div class="flex flex-row-reverse justify-end items-center">
                                <input id="hs-ratings-readonly-1" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="1">
                                <label for="hs-ratings-readonly-1"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-2" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="2">
                                <label for="hs-ratings-readonly-2"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-3" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="3">
                                <label for="hs-ratings-readonly-3"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-4" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="4">
                                <label for="hs-ratings-readonly-4"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                                <input id="hs-ratings-readonly-5" type="radio"
                                    class="peer -ms-5 w-5 h-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                    name="hs-ratings-readonly" value="5">
                                <label for="hs-ratings-readonly-5"
                                    class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-gray-600">
                                    <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </label>
                            </div>
                            <!-- End Rating -->
                        </li>
                    </ul>
                </div>
                <textarea
                    class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                    rows="6" placeholder="Write your review"></textarea>
                <div>
                    <label for="website"
                        class="block text-[15px] leading-[25px] font-normal mb-2 dark:text-white">Website*</label>
                    <input type="text" id="website"
                        class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                </div>
                <div>
                    <button type="button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border-transparent bg-black text-white hover:bg-[#FF003A] disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Submit Review
                    </button>
                </div>
            </div>
        </div>

        @if ($service->package)
            <div class="col-span-12 lg:col-span-4 ">
                <div class="border p-3 sticky top-36 rounded-md">
                    <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:bg-black border hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-bold text-center text-black hover:text-blue-600 rounded-[4px] disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active"
                            id="equal-width-elements-item-1" data-hs-tab="#equal-width-elements-1"
                            aria-controls="equal-width-elements-1" role="tab">
                            Starter
                        </button>
                        <button type="button"
                            class="hs-tab-active:bg-black border hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-bold text-center text-black hover:text-blue-600 rounded-[4px] disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            id="equal-width-elements-item-2" data-hs-tab="#equal-width-elements-2"
                            aria-controls="equal-width-elements-2" role="tab">
                            Standard
                        </button>
                        <button type="button"
                            class="hs-tab-active:bg-black border hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-bold text-center text-black hover:text-blue-600 rounded-[4px] disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            id="equal-width-elements-item-3" data-hs-tab="#equal-width-elements-3"
                            aria-controls="equal-width-elements-3" role="tab">
                            Advance
                        </button>
                    </nav>

                    <div class="mt-3">
                        <div id="equal-width-elements-1" role="tabpanel" aria-labelledby="equal-width-elements-item-1">
                            <h1 class="text-[26px] leading-[32px] py-2 font-bold">
                                ${{ optional($service->package)->starter_price }}</h1>
                            <div class="flex items-center space-x-1">
                                <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe
                                        to
                                        save</span></span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </div>
                            <p class="py-2 text-[18px] leading-[26px]">
                                {{ $service->package->starter_short_description }}
                            </p>
                            <div class="flex items-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class="text-[26px] leading-[32px] py-2 font-bold">
                                    {{ $service->package->starter_deliver_time }} Days Delivery
                                </h1>
                            </div>
                            <div class="py-2">
                                {!! $service->package->starter_full_description !!}
                            </div>
                            <div class="space-y-2">
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-black text-white hover:text-gray-800 hover:bg-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Continue ( ${{ $service->package->starter_price }})
                                </button>
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-white text-black hover:bg-[#1b1021] hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Book a Meeting
                                </button>
                            </div>
                        </div>
                        <div id="equal-width-elements-2" class="hidden" role="tabpanel"
                            aria-labelledby="equal-width-elements-item-2">
                            <h1 class="text-[26px] leading-[32px] py-2 font-bold">${{ $service->package->standard_price }}
                            </h1>
                            <div class="flex items-center space-x-1">
                                <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe
                                        to
                                        save</span></span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </div>
                            <p class="py-2 text-[18px] leading-[26px]">
                                {{ $service->package->standard_short_description }}
                            </p>
                            <div class="flex items-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class="text-[26px] leading-[32px] py-2 font-bold">
                                    {{ $service->package->standard_deliver_time }} Days Delivery
                                </h1>
                            </div>
                            <div class="py-2">
                                {!! $service->package->standard_short_description !!}
                            </div>
                            <div class="space-y-2">
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-black text-white hover:text-gray-800 hover:bg-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Continue ( ${{ $service->package->standard_price }})
                                </button>
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-white text-black hover:bg-[#1b1021] hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Book a Meeting
                                </button>
                            </div>
                        </div>
                        <div id="equal-width-elements-3" class="hidden" role="tabpanel"
                            aria-labelledby="equal-width-elements-item-3">
                            <h1 class="text-[26px] leading-[32px] py-2 font-bold">${{ $service->package->advance_price }}
                            </h1>
                            <div class="flex items-center space-x-1">
                                <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe
                                        to
                                        save</span></span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </div>
                            <p class="py-2 text-[18px] leading-[26px]">
                                {{ $service->package->advance_short_description }}
                            </p>
                            <div class="flex items-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <h1 class="text-[26px] leading-[32px] py-2 font-bold">
                                    {{ $service->package->advance_deliver_time }} Days Delivery
                                </h1>
                            </div>
                            <div class="py-3">
                                {!! $service->package->advance_full_description !!}
                            </div>
                            <div class="space-y-2">
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-black text-white hover:text-gray-800 hover:bg-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Continue ( ${{ $service->package->advance_price }})
                                </button>
                                <button type="button"
                                    class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-white text-black hover:bg-[#1b1021] hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Book a Meeting
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
    <x-section-portfolio />
    <div class="py-6"></div>
    <div>
        <x-section-service />
        <div class="flex justify-center py-10 mb-14">
            <a href="{{ route('servicepage') }}" class="text-primary font-bold flex items-center space-x-2">
                <span class="text-[15px] leading-[15px]">See All Services</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <style type="text/css">
        .slider {
            position: relative;
        }

        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 20px);
            right: 0;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: black !important;
            color: white !important;
        }

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: black !important;
            color: white !important;
        }

        .owl-nav .owl-prev:hover {
            background-color: #FF003A !important;
            color: white !important;
        }

        .owl-nav .owl-next:hover {
            background-color: #FF003A !important;
            color: white !important;
        }
        .custompacity{
            opacity: .2;
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: false,
            center: true,
            autoplay: true,
            dots: false,
            loop: true,
            margin: 10,
            nav: true,
            URLhashListener: true,
            autoplayHoverPause: true,
            startPosition: 'URLHash'
        });
        $('.owl-carousel').on('changed.owl.carousel', function(event) {
            var current = event.item.index;
            // $(`.sliderlinkimage${current}`).removeClass('custompacity')
        });

        // $('.owl-carousel').on('change.owl.carousel', function(event) {
        //     var current = event.item.index;
        //     var hash = $(event.target).find(".owl-item").eq(current).find(".item").attr('data-hash');
        //     $('.' + hash).removeClass('active');
        //     console.log('change',hash);
        // });
    </script>
@endpush
