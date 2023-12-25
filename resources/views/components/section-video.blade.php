<div>
    <div class="flex justify-between items-center py-3">
        <div class="flex items-center space-x-2 py-2">
            <x-icon.clients />
            <h3 class="text-[26px] font-bold">Client Opinions</h3>
        </div>
        <a href="{{ route('reviewpage') }}" class="text-primary font-bold flex items-center space-x-2">
            <span class="text-[15px] leading-[15px]">See All Testmonials</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>

    <video controls class="w-full">
        <source src="{{ asset('uploads/video/testimonial-video.mp4') }}" type="video/mp4">
    </video>
</div>
