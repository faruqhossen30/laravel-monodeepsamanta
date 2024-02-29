<div class="flex flex-row justify-between items-center py-3 lg:py-10">
    <div class="flex items-center space-x-2">
        <x-icon.thumbnail />
        <h3 class="text-lg lg:text-[26px] font-bold">Check Out My Portfolio</h3>
    </div>
    @isset($islink)
        <a href="{{ route('portfoliopage') }}" class="text-brand font-bold flex items-center space-x-2">
            <span class="text-[15px] leading-[15px]">See All Portfolios</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="#FF003A" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                data-slot="icon" class="w-4 h-4 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    @endisset
</div>
