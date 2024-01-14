<div class="p-4 lg:p-0 md:flex justify-between mt-16 space-y-10  md:space-x-10" id="lightgallery">
    <!--FEATURED WORK section start from here-->
    <div class="md:w-7/12 space-y-4">
        <p class="text-primary font-black text-[14px] leading-[14px] tracking-widest">FEATURED WORK</p>
        <h2 class="text-2xl font-bold pt-4 pb-2">Creativity by Monodeep Samanta</h2>
        <p class="text-lg">Explore a Gallery of Creativity by Monodeep Samanta: Unveil a collection of exquisite UI/UX
            design Portfolios. Immerse in a journey of innovation, aesthetics, and User-centric excellence. Discover the
            power of design That inspires, engages, and transforms digital experiences. People love my designs because
            they are easy to use with satisfying layouts. Let’s make your website amazing. Contact me today, and have a
            flying start!</p>


        <a href="{{ route('servicepage') }}"
            class="text-primary font-bold hover:text-black transition flex items-center space-x-2">See All
            <span>Service</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
    <!--FEATURED WORK section End from here-->
    <div class="group w-full md:w-5/12 relative h-full overflow-hidden  cursor-pointer rounded-md mx-auto">
        <!--layer start-->
        <div class="h-full w-full absolute top-0 left-0 bg-black opacity-50 hidden  group-hover:block transition z-10">
        </div>
        <!--layer end-->
        <a href="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}" data-lg-size="1024-800">
            <img class="group-hover:scale-110 transition duration-300 w-full h-auto"
                src="{{ asset('img/Portfullio/Monodeep-Samanata-UIUX-Designer.webp') }}" alt="">
        </a>
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
            <div class="bg-[#FF003A] rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
    </div>
</div>
