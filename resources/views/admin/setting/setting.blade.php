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
        <x-dashboard.breadcrumb title="Settings" route="settingpage" />

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





    </div>

@endsection
