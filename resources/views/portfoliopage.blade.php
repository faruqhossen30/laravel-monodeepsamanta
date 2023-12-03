@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="space-x-3 ">
    <button  data-filter="*" class="galarybtn">All Capabilities</button>
    <button  data-filter=".app" class="galarybtn">Apps</button>
    <button  data-filter=".dashboard" class="galarybtn">Dashboard</button>
    <button  data-filter=".landing" class="galarybtn">Landing Page</button>
    <button data-filter=".website" class="galarybtn">Website</button>
</div>
<!--Image Gellary Section Start From Here-->
<div class="continer md:container  w-11/12 mx-auto space-y-8 overflow-hidden">


    <!--Image Card Parent Start Here-->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-5 mixingContainer">

        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Banking-Apps-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Banking App Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->
         <!--Image Card Start-->
        <div class="img_card dashboard mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Active-Desk-Co-Working-Space-UIUX-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Dashboard UI/UX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->

         <!--Image Card Start-->
        <div class="img_card landing mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/MCCN-Doctor.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Surgery Doctor Landing Page</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->
          <!--Image Card Start-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Website-UX-and-UI-design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Crypto Platform Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->
                                    <!--Difficult Image-->
         <!--Image Card Start-->
        <div class="img_card mix group sm:col-start-1 sm:col-end-3 md:col-start-2 md:col-end-4" >
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Leave-a-projectl.webp" alt="">
            <div class="absolute w-full left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20 text-center space-y-2">
                <h1 class="text-4xl font-bold">HAVE A PROJECT</h1>
                <h2 class="text-2xl font-bold">THAT NEEDS SOME SOME</h2>
                <button class="inline-block py-2 px-7 bg-red-600 rounded-sm hover:text-red-600 hover:bg-white transition">Let's Chat</button>
            </div>
        </div>
         <!--Image Card end-->
                                     <!--Dificult Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Real_Estate Tamplete.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Real Estate Template</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
         <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Airline-App-UIUX-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Emirates Airline App UI/UX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Fitness-App-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Fitness App UI​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/crypto_platform_design.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Crypto Platform Design​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Travel-App-UI-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Travel App UI​​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Etisalat_ios_app.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Etisalat Ios App UI/UX​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Job_website_Design.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Job Website Design​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->

                                    <!--Difficult Image-->
         <!--Image Card Start-->
         <div class="img_card mix group sm:col-start-1 sm:col-end-3 md:col-start-2 md:col-end-4" >
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class="w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Leave-a-projectl.webp" alt="">
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20 text-center space-y-2 w-full">
                <h1 class="text-4xl font-bold">HAVE A PROJECT</h1>
                <h2 class="text-xl font-bold">THAT NEEDS SOME SOME</h2>
                <button class="inline-block py-2 px-7 bg-red-600 rounded-sm hover:text-red-600 hover:bg-white transition">Let's Chat</button>
            </div>
        </div>
         <!--Image Card end-->
                                     <!--Dificult Image Card end-->
        <!--Image Card Start-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Marketplace-UIUX-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Marketplace Website Design​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Starbucks-UI-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Starbucks UI Design​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Beauty_Shop_Design.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Beauty Shop Redesign​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/gamming Apps.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Gaming Apps​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->

        <!--Image Card end-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Responsive_Website-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Responsive Website Design​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Geeker.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Geeker App UI/UX​</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Flight-Booking-Application-Design-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Flight Booking Application</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/After-Shock-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">After Shock Ecommerce</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Emax-Apps-UIUX-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">EMAX Apps UI/UX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Restaurant-Pro-Website-UIUX-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Restaurant Pro Website UIUX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Restaurant-apps-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Restaurant App UIUX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Kaman-App-Design-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Kaman App Design UIUX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card end-->
        <div class="img_card landing mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Landingpage-Thumbnails.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Landing Page Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Mockup-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Mockup Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card dashboard mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Dashboard-banner-2.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Dashboard UIUX Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Mobile-Apps-Mockup-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Mobile Apps Mockup</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card landing mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Doctor-Landing-Page-Thumbnails-2.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Doctor Landing Page UIUX</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card app mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Mobile-Application-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Mobile Application Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Company-Brand-Identity.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Company Brand Identity</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card website mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Nu_Istument-Website-Design-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Nu Instruments Brochure</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
        <!--Image Card Start-->
        <div class="img_card mix group">
            <!--layer start-->
            <div class="h-full w-full absolute top-0 left-0 bg-gradient-to-t from-gray-800 opacity-70 hidden  group-hover:block transition z-10"></div>
            <!--layer end-->
            <img  class=" w-full group-hover:scale-110 group-hover:rotate-3 transition duration-500" src="img/Portfullio/Modern_Logo-Design-Portfolio-Thumbnail.webp" alt="">
            <div class="absolute group-hover:bottom-6 group-hover:left-6 hidden group-hover:block bottom-0 z-20">
                <h1 class="text-2xl">Modern Logo Design</h1>
                <a href="#" class="hover:text-red-500 transition ">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <!--Image Card end-->
    </div>
    <!--Image Card Parent End Here-->
</div>

@endsection

@push('style')

@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset('js/mixitup.min.js')}}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
    </script>
@endpush
