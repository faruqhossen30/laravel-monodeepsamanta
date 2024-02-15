@php
    use App\Models\Service\Service;
    $services = Service::with('package')
        ->take(6)
        ->get();
@endphp






<div class="flex justify-between items-center pt-6 pb-3">
    <div class="flex items-center space-x-2 py-3">
        <x-icon.listcheck />
        <h3 class="text-lg lg:text-[26px] font-bold leading-[39px]">See My Services</h3>
    </div>
    @isset($islink)
        <a href="{{ route('servicepage') }}" class="text-primary font-bold flex items-center space-x-2">
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
    <div id="serviceslider" class="owl-carousel owl-theme grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach ($services as $service)
            <a href="{{ route('singleservice', $service->slug) }}"
                class="p-3 col-span-12 md:col-span-6 lg:col-span-4">
                <div class="font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
                    <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                        class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
                </div>
                <div class="py-2 mt-5 space-y-1">
                    <h3 class="text-md lg:text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                    <h2 class="text-md text-brand lg:text-lg font-normal">Starting at
                        ${{ $service->package->starter_price ?? '' }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</div>
{{-- Mobile service slider start --}}
<div class="hidden lg:grid grid-cols-12 gap-3">
    @foreach ($services as $service)
        <a href="{{ route('singleservice', $service->slug) }}"
            class="group border p-3 col-span-12 md:col-span-6 lg:col-span-4">
            <div class="font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
                <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                    class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" alt="">
            </div>
            <div class="py-2 mt-5 space-y-1">
                <h3 class="text-xl font-bold hover:text-[#FF003A]">{{ $service->title }}</h3>
                <h2 class="text-primary text-lg font-normal">Starting at ${{ $service->package->starter_price ?? '' }}
                </h2>
            </div>
        </a>
    @endforeach
</div>

<div class="h-20"></div>
