@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <ol class="flex items-center whitespace-nowrap min-w-0 p-2" aria-label="Breadcrumb">
        <li class="text-sm">
            <a href="{{route('dashboard')}}" class="flex items-center text-gray-500 hover:text-blue-600" >
                Dashboard
                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600" width="16"
                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </a>
        </li>
        <li class="text-sm">
            <a href="{{route('portfolio.index')}}" class="flex items-center text-gray-500 hover:text-blue-600" >
                portfolio
                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600" width="16"
                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </a>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Show
        </li>
    </ol>
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <ul class=" flex flex-col">
                <li
                    class="inline-flex items-center gap-x-3.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    Name: {{ $portfolio->title }}
                </li>
                <li
                    class="inline-flex items-center gap-x-3.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">

                    Author: Super Admin
                </li>
            </ul>

            <div>
                <x-button.edit_button route="portfolio" :id="$portfolio->id" />
                <x-button.delete_button route="portfolio" :id="$portfolio->id" />
            </div>
        </div>
    </div>

@endsection
