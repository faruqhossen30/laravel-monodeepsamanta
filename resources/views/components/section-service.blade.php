@php
    use App\Models\Service\Service;
    $services = Service::with('package')->latest()
        ->take(8)
        ->get();

@endphp
<div class="flex justify-between items-center pt-6 pb-3">
    <div class="flex items-center space-x-2 py-3">
        <x-icon.listcheck />
        <h3 class="text-[26px] font-bold leading-[39px]">See My Services</h3>
    </div>
    <a href="{{ route('servicepage') }}" class="text-primary font-bold flex items-center space-x-2">
        <span class="text-[15px] leading-[15px]">See All Services</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            data-slot="icon" class="w-4 h-4 font-bold">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </a>
</div>

<div class="grid grid-cols-12 gap-5">
    @foreach ($services as $service)
        <!--Image Card Start-->
        <div class="group border p-2 col-span-12 md:col-span-6 lg:col-span-4">
            <div class="font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
                <img src="{{asset('uploads/service/'.$service->thumbnail)}}" class="group-hover:scale-110 group-hover:rotate-3 transition duration-500"
                    alt="">
            </div>
            <div class="p-1">
                <a href="{{route('singleservice', $service->slug)}}" class="text-xl font-bold">
                    <h3>{{$service->title}}</h3>
                </a>
                <a href="{{route('singleservice', $service->slug)}}" class="text-primary text-lg font-semobold">
                    <h2>Starting at ${{$service->package->starter_price ?? ''}}</h2>
                </a>
            </div>
        </div>
        <!--Image Card end-->
    @endforeach


</div>
<div class="h-20"></div>
