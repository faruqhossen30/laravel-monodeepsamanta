<!-- drawer init and toggle -->
<div class="text-center">
    <button
        class="md:hidden overflow-y-auto text-black bg-white hover:bg-bran font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none "
        type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
        data-drawer-placement="top" aria-controls="drawer-top-example">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
</div>

<!-- drawer component -->
<div id="drawer-top-example"
    class="bg-[#221429] fixed top-0 left-0 right-0 min-h-full z-40 w-full transition-transform duration-1000 -translate-y-full  dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-top-label">

    <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
        class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-14 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="text-white bg-brand px-10 py-20">
        <ul class="list-none space-y-4">
            <li><a href="{{ route('homepage') }}" class="text-2xl font-semibold @if (request()->routeIs('homepage')) text-[#221429] @endif">Home</a></li>
            <li><a href="{{ route('portfoliopage') }}" class="text-2xl font-semibold @if (request()->routeIs('portfoliopage')) text-[#221429] @endif">Portfolio</a></li>
            <li><a href="{{ route('aboutpage') }}" class="text-2xl font-semibold @if (request()->routeIs('aboutpage')) text-[#221429] @endif">About Me</a></li>
            <li><a href="{{ route('servicepage') }}" class="text-2xl font-semibold @if (request()->routeIs('servicepage')) text-[#221429] @endif">Services</a></li>
            <li><a href="{{ route('reviewpage') }}" class="text-2xl font-semibold @if (request()->routeIs('reviewpage')) text-[#221429] @endif">Revies</a></li>
            <li><a href="{{ route('blogpage') }}" class="text-2xl font-semibold @if (request()->routeIs('blogpage')) text-[#221429] @endif">Blog</a></li>
          </ul>
    </div>
    <div class="bg-[#221429] px-10 py-20 space-y-6 h-full">
        <div class="space-y-6">
            <h2 class="text-white text-2xl">Want to work together!</h2>

            <button type="button" class="text-brand hover:text-white border border-brand hover:bg-brand focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Get In Touch</button>
        </div>


        <div class="mt-3 space-x-2 inline-flex items-center">
            <a href="https://www.behance.net/monodeepsamanta" class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-primary border border-white hover:text-white hover:bg-[#FF003A] rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                >
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="bi bi-behance" viewBox="0 0 16 16">
                    <path
                        d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
                </svg>
            </a>
            <a href="https://dribbble.com/monodeepsamanta" class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-primary border border-white hover:text-white hover:bg-[#FF003A] rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                >
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
                </svg>
            </a>
            <a href="https://www.flickr.com/photos/monodeepsamanta/" class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-primary border border-white hover:text-white hover:bg-[#FF003A] rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                >
                <img class="h-4 w-4" src="{{ asset('img/icon/flickr-white.png') }}" alt="">
            </a>
            <a class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-primary border border-white hover:text-white hover:bg-[#FF003A] rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                href="#">
                <img class="h-6 w-6" src="{{ asset('img/icon/500px-monogramwhite.png') }}" alt="">
            </a>
            <a href="https://www.linkedin.com/in/monodeepsamanta/" class="inline-flex justify-center items-center w-10 h-10 text-center text-white hover:bg-primary border border-white hover:text-white hover:bg-[#FF003A] rounded-full focus:outline-none focus:ring-2  focus:ring-offset-2 focus:ring-offset-white transition dark:text-gray-500 dark:hover:text-gray-200 dark:hover:bg-gray-800"
                >
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4" />
                </svg>
            </a>
        </div>
    </div>
</div>
