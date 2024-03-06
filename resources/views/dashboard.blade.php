@php
    use App\Models\Portfolio;
    use App\Models\Service\Service;
    use App\Models\Review;
    $totalportfolio = Portfolio::count();
    $totalservice = Service::count();
    $totalreviews = Review::where('status', true)->count();

@endphp
@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <div class="py-2 flex justify-between">
        <x-dashboard.breadcrumb title="Dashboard" route="dashboard" />

        <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="text-gray-800 dark:text-gray-400 dark:bg-slate-900 border border-gray-200 dark:border-gray-800 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center space-x-1"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            <span>Create</span>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownDivider"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 divide-y-1" aria-labelledby="dropdownDividerButton">
                <li>
                    <a href="{{route('service.create')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Service</a>
                </li>
                <li>
                    <a href="{{route('portfolio.create')}}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Portfolio</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="dark:text-slate-400 px-2">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2 md:gap-6">
            <div
                class="w-full h-full bg-white shadow-md rounded-lg py-2 px-4 dark:bg-slate-900 border border-gray-200 dark:border-gray-800">
                <div class="flex items-center gap-x-4 mb-2">
                    <div
                        class="inline-flex justify-center items-center w-12 h-12  lg:w-14 lg:h-14 rounded-full border-2 border-slate-200 bg-slate-100 dark:border-slate-600 dark:bg-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-normal text-gray-800 dark:text-gray-400">{{$totalportfolio}}</h3>
                        <h6 class="font-normal">Portfolios</h6>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-full bg-white shadow-md rounded-lg py-2 px-4 dark:bg-slate-900 border border-gray-200 dark:border-gray-800">
                <div class="flex items-center gap-x-4 mb-2">
                    <div
                        class="inline-flex justify-center items-center w-12 h-12  lg:w-14 lg:h-14 rounded-full border-2 border-slate-200 bg-slate-100 dark:border-slate-600 dark:bg-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                          </svg>


                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-normal text-gray-800 dark:text-gray-400">{{$totalservice}}</h3>
                        <h6 class="font-normal">Services</h6>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-full bg-white shadow-md rounded-lg py-2 px-4 dark:bg-slate-900 border border-gray-200 dark:border-gray-800">
                <div class="flex items-center gap-x-4 mb-2">
                    <div
                        class="inline-flex justify-center items-center w-12 h-12  lg:w-14 lg:h-14 rounded-full border-2 border-slate-200 bg-slate-100 dark:border-slate-600 dark:bg-slate-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                          </svg>
                    </div>
                    <div class="flex-shrink-0">
                        <h3 class="block text-lg font-normal text-gray-800 dark:text-gray-400">{{$totalreviews}}</h3>
                        <h6 class="font-normal">Reviews</h6>
                    </div>
                </div>
            </div>



        </div>
    </div>

@endsection
