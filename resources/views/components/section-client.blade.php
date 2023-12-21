<div class="hidden lg:flex justify-between items-center">
    <div class="flex items-center space-x-2 py-2">
        <x-icon.lock />
        <h3 class="text-[26px] font-bold">Clients</h3>
    </div>
    {{-- <a href="#" class="text-primary font-bold flex space-x-2">
        <span>See All Portfolios</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>

    </a> --}}
</div>
<section class="hidden lg:grid grid-cols-12 gap-4 py-4">
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center py-4">
        <img class="p-6 object-center" src="{{ asset('img/client/nasa.webp') }}" alt="">
    </div>
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center items-center py-4">
        <img class="h-8" src="{{ asset('img/client/cricket.webp') }}" alt="">
    </div>
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center items-center py-4">
        <img class="h-8" src="{{ asset('img/client/cloaked.webp') }}" alt="">
    </div>
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center items-center py-4">
        <img class="h-8" src="{{ asset('img/client/jeep.webp') }}" alt="">
    </div>
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center py-4">
        <img class="p-6 object-center" src="{{ asset('img/client/ritter.webp') }}" alt="">
    </div>
    <div class="col-span-3 md:col-span-2 border p-2 flex justify-center py-4">
        <img class="p-6 object-center" src="{{ asset('img/client/vegan.webp') }}" alt="">
    </div>
</section>
