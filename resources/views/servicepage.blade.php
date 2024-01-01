@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<div>
    <div class="flex items-center space-x-2 py-2 pb-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none"><path d="M0.666992 4.41667H15.3337V6.25H0.666992V4.41667ZM0.666992 9.91667H15.3337V8.08333H0.666992V9.91667ZM0.666992 13.5833H7.08366V11.75H0.666992V13.5833ZM0.666992 17.25H7.08366V15.4167H0.666992V17.25ZM11.1262 14.6558L9.83366 13.3542L8.54116 14.6467L11.1262 17.25L15.3337 13.0517L14.032 11.75L11.1262 14.6558ZM0.666992 0.75V2.58333H15.3337V0.75H0.666992Z" fill="#FF003A"></path></svg>
        <h3 class="text-[25px] leading-[32px] font-bold">See My Services</h3>
    </div>
</div>

<div class="grid grid-cols-12 gap-3">
    @foreach ($services as $service)
    <a href="{{route('singleservice', $service->slug)}}" class="group border p-3 col-span-12 md:col-span-6 lg:col-span-4">
        <div class="font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
            <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
        </div>
        <div class="py-2 mt-5 space-y-1">
            <h3 class="text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
            <h2 class="text-primary text-lg font-normal">Starting at ${{ $service->package->starter_price ?? '' }}</h2>
        </div>
    </a>
    @endforeach
</div>

    <x-section-chat />
    <x-section-portfolio />

<div class="py-14"></div>
@endsection

@push('style')
@endpush

@push('script')
@endpush
