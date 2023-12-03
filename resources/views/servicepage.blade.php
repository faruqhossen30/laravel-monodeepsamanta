@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="flex items-center space-x-2 py-2">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path
            d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
            fill="#FF003A"></path>
        <path
            d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
            fill="#FF003A"></path>
    </svg>
    <h3 class=" text-2xl font-extrabold">Latest article</h3>

</div>
<section>
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-4 border p-2">
            <div>
                <a href="#">
                    <img src="img/service.webp" alt="" class="hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold"><h2>Starting at $350</h2></a>
            </div>
        </div>
        <div class="col-span-4 border p-2">
            <div>
                <a href="#" class="">
                    <img src="img/service.webp" alt="" class=" hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold"><h2>Starting at $350</h2></a>
            </div>
        </div>
        <div class="col-span-4 border p-2">
            <div>
                <a href="#" class="">
                    <img src="img/service.webp" alt="" class=" hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold"><h2>Starting at $350</h2></a>
            </div>
        </div>
        <div class="col-span-4 border p-2">
            <div>
                <a href="#" class="">
                    <img src="img/service.webp" alt="" class=" hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold"><h2>Starting at $350</h2></a>
            </div>
        </div>
        <div class="col-span-4 border p-2">
            <div>
                <a href="#" class="">
                    <img src="img/service.webp" alt="" class=" hover:scale-105 transition-transform duration-300 ease-in-out">
                </a>
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold"><h2>Starting at $350</h2></a>
            </div>
        </div>
    </div>
</section>
<x-chat-action />


@endsection

@push('style')

@endpush

@push('script')

@endpush
