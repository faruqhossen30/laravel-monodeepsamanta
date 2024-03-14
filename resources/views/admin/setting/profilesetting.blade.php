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
<div class="flex justify-between py-2">
    <x-dashboard.breadcrumb title="Settings" route="settingpage" />

    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
        class="inline-flex items-center px-4 py-2 space-x-1 text-sm font-medium text-center text-gray-800 border border-gray-200 rounded-lg dark:text-gray-400 dark:bg-slate-900 dark:border-gray-800"
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
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add
                    Service</a>
            </li>
            <li>
                <a href="{{route('portfolio.create')}}"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add
                    Portfolio</a>
            </li>
        </ul>
    </div>

</div>
<section
    class="container p-8 mx-auto bg-gray-200 border-2 rounded-md dark:bg-gray-800 dark:text-slate-400 dark:border-gray-500">

    <div class="grid grid-cols-6 gap-8">
        <div class="col-span-2 bg-white rounded-md">
            <div class="p-10">
                <h3 class="py-2 text-4xl font-semibold text-center">Jamed Allan</h3>
                <p class="py-2 text-xl text-center">email</p>

                <a href="#" class="flex items-start justify-center py-2">
                    <img src="{{ asset('img/pic.png') }}" class="h-40 rounded-full" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-white bg-gray-400 rounded-full max-w-6 max-h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </a>


                <div class="items-center text-center ">
                    <h3 class="inline-block p-2 text-center bg-red-600 rounded-md">Updead New Photo</h3>
                </div>
                <div class="p-4 my-4 space-y-2 text-center bg-blue-300 rounded-lg">
                    <p class="text-sm ">Update a new avater. Larger image will be resized automatically.</p>
                    <p class="text-sm">Maximum upload size is 1 <b>MB</b></p>
                </div>
                <p class="mt-2 text-sm text-center">Member Since:29 Sectember 2023</p>
            </div>
        </div>
        <div class="col-span-4 bg-gray-100 rounded-md">
            <div class="">
                <h2 class="px-12 py-8 text-3xl font-semibold">Edit Profile</h2>
                <div class="pb-8 bg-white rounded-b-lg">
                    <form class="max-w-2xl mx-auto ">

                        <div class="grid md:grid-cols-2 md:gap-8">
                            <div class="relative z-0 w-full my-5 mt-12 group">
                                <label for="floating_first_name" class="">Full name</label>
                                <input type="text" name="floating_first_name" id="floating_first_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900  border-2 border-gray-300  dark:text-white dark:border-gray-600 dark:focus:border-blue-500 "
                                    placeholder=" Full name" required />

                            </div>
                            <div class="relative z-0 w-full my-5 mt-12 group">

                                <label for="floating_last_name" class="">User name</label>
                                <input type="text" name="floating_last_name" id="floating_last_name"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" User name" required />
                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_password" class="">Password</label>
                                <input type="password" name="floating_password" id="floating_password"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Password" required />

                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_repeat_password"
                                    class="">Confirm password</label>
                                <input type="password" name="repeat_password" id="floating_repeat_password"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Confirm password" required />

                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_email"
                                    class="">Email address</label>
                                <input type="email" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Email address" required />

                            </div>

                            <div class="relative z-0 w-full mb-5 group">
                                <label for="floating_email"
                                    class="">Confirm Email address</label>
                                <input type="email" name="floating_email" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" Confirm Email address" required />

                            </div>


                        </div>

                        <h4 class="py-4 ">Social Profile</h4>
                        <div></div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>

</section>
<div class="px-2 dark:text-slate-400">



</div>

@endsection
