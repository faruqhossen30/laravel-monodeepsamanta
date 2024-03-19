@php
    use App\Models\Service\Service;
    $services = Service::with('package')
        ->take(6)
        ->get();
@endphp



{{-- <div class="flex items-center justify-between py-2 lg:py-10">
    <div class="flex items-center space-x-2">
        <x-icon.listcheck />
        <h3 class="text-lg lg:text-[26px] font-bold leading-[39px]">See My Services</h3>
    </div>
    @isset($islink)
        <a href="{{ route('servicepage') }}" class="flex items-center space-x-2 font-bold text-primary">
            <span class="text-[15px] leading-[15px]">See All Services</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    @endisset
</div> --}}

<div class="flex flex-row items-center justify-between py-3 lg:pt-[60px] lg:pb-8">
    <div class="flex items-center space-x-2" data-aos="fade" data-aos-duration="2000">
        <x-icon.listcheck />
        <h2 class="text-lg lg:text-[26px] font-bold">See My Services</h2>
    </div>
    @isset($islink)
        <a href="{{ route('servicepage') }}" class="flex items-center space-x-2 font-bold text-brand" data-aos="fade" data-aos-duration="2000">
            <span class="text-[15px] leading-[15px]">See All Services</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    @endisset
</div>


{{-- Mobile service slider start --}}
<div class="md:hidden">
    <div id="serviceslider" class="grid grid-cols-2 gap-2 owl-carousel owl-theme sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($services as $service)
            <a href="{{ route('singleservice', $service->slug) }}"
                class="col-span-12 p-3 md:col-span-6 lg:col-span-4" data-aos="fade" data-aos-duration="2000">
                <div class="relative overflow-hidden font-bold text-white rounded-md shadow cursor-pointer">
                    <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                        class="transition duration-500 group-hover:scale-110 group-hover:rotate-3" alt="">
                </div>
                <div class="py-2 mt-5 space-y-1">
                    <h3 class="text-md lg:text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                    <h2 class="font-normal text-md text-brand lg:text-lg">Starting at
                        ${{ $service->package->starter_price ?? '' }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</div>
{{-- Mobile service slider start --}}
<div class="hidden grid-cols-12 gap-3 lg:grid">
    @foreach ($services as $service)
        <a href="{{ route('singleservice', $service->slug) }}"
            class="col-span-12 p-3 border group md:col-span-6 lg:col-span-4" data-aos="fade" data-aos-duration="2000">
            <div class="relative overflow-hidden font-bold text-white rounded-md shadow cursor-pointer">
                <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                    class="transition duration-500 group-hover:scale-110 group-hover:rotate-3" alt="">
            </div>
            <div class="py-2 mt-5 space-y-1">
                <h3 class="text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                <h2 class="text-lg font-normal text-primary">Starting at ${{ $service->package->starter_price ?? '' }}
                </h2>
            </div>
        </a>
    @endforeach
</div>

{{-- <div class="h-5 lg:h-20"></div> --}}
