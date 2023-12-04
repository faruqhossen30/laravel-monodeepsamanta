<div>
    <div class="flex items-center space-x-2 py-2">
        <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
          </svg>
        <h3 class=" text-2xl font-extrabold">See My Services</h3>
    </div>
</div>

<div class="grid grid-cols-12 gap-5">
    @foreach ([1, 1, 1, 1,3,3] as $item)
        <!--Image Card Start-->
        <div class="group border p-2 col-span-12 md:col-span-6 lg:col-span-4">
            <div class="font-bold  relative overflow-hidden text-white rounded-md shadow cursor-pointer">
                <img class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/service.webp"
                    alt="">
            </div>
            <div class="p-1">
                <a href="#" class="text-xl font-bold">
                    <h3>Landing Page Design for Ads Campaign</h3>
                </a>
                <a href="#" class="text-primary text-lg font-semobold">
                    <h2>Starting at $350</h2>
                </a>
            </div>
        </div>
        <!--Image Card end-->
    @endforeach


</div>