@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="md:container  w-11/12 mx-auto py-14">
    <h1 class="text-2xl p-4 mb-2 font-bold"><i class="text-red-500  fa-solid fa-circle-info"></i></i> About Me</h1>
    <!--Flex Start From Here-->
    <div class="flex flex-wrap justify-between">
        <!--left Start From Here-->
        <div class="w-full md:w-8/12 p-4 md:pr-16 space-y-12">
            <div class="space-y-2 text-lg mb-14 md:mb-0">
                <p>I am Monodeep Samanta, the leading UI/UX designer. I create designs that help your website turn visitors into loyal customers. So your business can increase margins. One call with me will change your UX/UI ideas forever. 15-30 minutes of consultation will take your business to the next level. My designs will make your ads and marketing better regardless of your target audience and their locations.</p>
                <p>I am really good at what I do. People love my designs because they are easy to use with satisfying layouts. With my visionary concepts, more people will return to your website and show interest in your products and services. I can handle big projects and make your business grow. Let’s make your website amazing. Contact me today, and have a flying start!</p>
            </div>
            <div class="hidden md:block">
                <h1 class="text-2xl mb-3 font-bold"><i class="text-red-500 fa-solid fa-bars-staggered"></i> I’m Expert In</h1>

                <button class="btn">Website Design</button> <button class="btn">App Design</button><button  class="btn">Landing Page Design</button><button  class="btn">Design Advice</button> <button class="btn">Graphic Design</button> <button class="btn">Web Design</button> <button class="btn">Logo Designesign Advice</button> <button class="btn">Adobe Photoshop</button> <button class="btn">WordPress</button> <button class="btn">Social media Marketing</button> <button class="btn">Digital Marketing</button> <button class="btn">Flyer Design</button> <button class="btn">UI Design</button><button class="btn">Digital Marketing</button> <button class="btn">UX Design</button>
            </div>
        </div>
        <!--left End From Here-->
                <div class="w-full md:w-4/12 border h-full p-4 rounded-md">
                    <div class="space-y-3">
                        <P> <i class="fa-solid fa-user"></i>
                            15 Years of Experience</P>
                            <P class="font-medium text-lg">I speak</P>
                            <P><span class="text-gray-500 font-medium">English </span> <span class="text-red-400 font-medium">Fluent</span></P>
                            <h3 class="font-medium text-xl">My Online presence</h3>
                            <div>
                                <a href="#"><i class="socialIcon fab fa-behance"></i></a>
                                <a href="#"><i class=" socialIcon fab fa-dribbble"></i></a>
                                <a href="#"><i class="socialIcon fab fa-flickr"></i></a>
                                <a href="#"><i class="socialIcon fab fa-500px"></i></a>
                                <a href="#"><i class="socialIcon fab fa-linkedin"></i></a>

                            </div>
                            <p class="font-medium text-lg">Contact Me On</p>
                    </div>
                    <a class="contact_btn" href="#">Via What's App</a>

                    <a class="contact_btn" href="#">Via Skype</a>

                    <a class="contact_btn" href="#">Via Email</a>
                </div>
                <!--left Area end from here-->
    </div>
    <!--Flex End From Here-->
</div>
<!--md:container  w-11/12 mx-auto End From Here-->

<!--Have a new Project Design Start From Here-->
<div class="md:container  w-11/12 mx-auto text-white text-center py-12 space-y-2 rounded-lg " style="background-image: url(img/action-bg.webp);">
    <h1 class="text-4xl font-bold">HAVE A PROJECT</h1>
    <h3 class="font-bold text-2xl">THAT NEED SOME SOME <img class="inline" src="https://monodeepsamanta.com/wp-content/uploads/2023/05/love-uk.png" alt=""></h3>
    <button class="text-lg font-semibold bg-red-600 inline-block py-1 px-8 rounded-md hover:bg-gray-200 hover:text-red-600 transition"><i class="fa-brands fa-rocketchat"></i> Let's Chat</button>
</div>
<!--Have a new Project Design End From Here-->

<!--Check Out My Portfolio Section Design Start From Here-->
<div class="md:container  w-11/12 mx-auto py-24">
    <h2 class="text-2xl font-bold mb-8"><i class="text-red-600 fa-solid fa-image"></i> Check Out My Portfolio</h2>

    <!--Card Parent Start Here-->
    <div class=" grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-4 gap-5">

        <!--Image Card Start-->
        <div class="img_card group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/appui.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">App UI</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->

         <!--Image Card Start-->
        <div class="img_card  group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/dashboard.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Dashboard</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->

         <!--Image Card Start-->
        <div class="img_card group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/website.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Website</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->

         <!--Image Card Start-->
        <div class="img_card group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/landing-page.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Landing Page</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->

    </div>

    <!--Card Parent End Here-->
</div>
<x-chat-action />


@endsection

@push('style')

@endpush

@push('script')

@endpush
