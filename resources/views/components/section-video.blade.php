<div>
    <div class="items-center justify-between hidden py-3 lg:flex lg:pt-[60px] lg:pb-8">
        <div class="flex items-center py-2 space-x-2" data-aos="fade-right" data-aos-duration="1000">
            <x-icon.clients />
            <h2 class="text-[26px] font-bold">Client Opinions</h2>
        </div>
        <a href="{{ route('reviewpage') }}" class="flex items-center space-x-2 font-bold text-primary" data-aos="fade-left" data-aos-duration="1000">
            <span class="text-[15px] leading-[15px]">See All Testmonials</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>

    <video controls class="w-full" data-aos="zoom-in" data-aos-duration="1000">
        <source src="{{ asset('uploads/video/testimonial-video.mp4') }}" type="video/mp4">
    </video>
</div>
