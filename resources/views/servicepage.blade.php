@extends('layouts.app')
@section('title', 'Dashboard & UX/UI Designer | Service')
@section('content')
    <div class="flex flex-row items-center justify-between py-3 lg:py-10">
        <div class="flex items-center space-x-2" data-aos="fade-down" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                <path
                    d="M0.666992 4.41667H15.3337V6.25H0.666992V4.41667ZM0.666992 9.91667H15.3337V8.08333H0.666992V9.91667ZM0.666992 13.5833H7.08366V11.75H0.666992V13.5833ZM0.666992 17.25H7.08366V15.4167H0.666992V17.25ZM11.1262 14.6558L9.83366 13.3542L8.54116 14.6467L11.1262 17.25L15.3337 13.0517L14.032 11.75L11.1262 14.6558ZM0.666992 0.75V2.58333H15.3337V0.75H0.666992Z"
                    fill="#FF003A"></path>
            </svg>
            <h3 class="text-lg lg:text-[26px] font-bold">See My Services</h3>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-3">
        @foreach ($services as $service)
            <a href="{{ route('singleservice', $service->slug) }}"
                class="col-span-12 p-3 border group md:col-span-6 lg:col-span-4" data-aos="fade" data-aos-duration="2000">
                <div class="relative overflow-hidden font-bold text-white rounded-md shadow cursor-pointer">
                    @if ($service->video)
                        <video autoplay loop muted class="w-full h-full">
                            <source src="{{ asset('uploads/service/video/' . $service->video) }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                            class="transition duration-500 group-hover:scale-110 group-hover:rotate-3" alt="">
                    @endif


                </div>
                <div class="py-2 mt-5 space-y-1">
                    <h3 class="text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                    <h2 class="text-lg font-normal text-primary">Starting at ${{ $service->package->starter_price ?? '' }}
                    </h2>
                </div>
            </a>
        @endforeach
        <div class="pt-5">
            {{ $services->links() }}
        </div>
    </div>

    <x-section-chat />
    <x-section-portfolio />

    {{-- <div class="py-14"></div> --}}
@endsection

@push('style')
@endpush

@push('script')
@endpush
