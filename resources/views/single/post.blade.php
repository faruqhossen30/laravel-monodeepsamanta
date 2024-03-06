@extends('layouts.app')
@section('title', 'Home Page')
@section('blog')

    <div class=" bg-[#CFE2F3] py-36 w-full pb-60">
        <div class=" mx-auto">
            <h1 class=" font-bold text-3xl lg:text-[40px] leading-[48px] text[#0b0c0d] max-w-4xl mx-auto text-center mb-10">
                {{ $post->title }}</h1>
            <p class="max-w-xl mx-auto text-center leading-7 text-[#0b0c0d]">{{ $post->short_description }}</p>
        </div>
    </div>
    </div>

    <div class=" w-11/12 max-w-5xl mx-auto -mt-44 ">
        <img class="rounded-md" src="{{ asset('uploads/post/' . $post->thumbnail) }}" alt="">
    </div>

    <div class=" w-11/12 max-w-5xl mx-auto grid grid-cols-12 py-14 px-10 border my-6 rounded-md shadow gap-10 text-sm">
        <div class=" col-span-12 lg:col-span-6">
            <h2 class=" font-semibold mb-5 uppercase">About This Project</h2>
            <p>{{ $post->project_description }}</p>
        </div>
        <div class=" col-span-12 md:col-span-6 lg:col-span-3">
            <h2 class=" font-semibold mb-5">SERVICES</h2>
            <ul>
                @foreach ($post->categories as $cat)
                    <li><a class="underline" href="#">{{ $cat->name }}</a></li>
                @endforeach
                {{-- <li><a class="underline" href="#">Product design</a></li> --}}
            </ul>
        </div>

        <div class=" col-span-12 md:col-span-6 lg:col-span-3">
            <h2 class=" font-semibold uppercase mb-5">Technologies </h2>
            <ul>
                @foreach ($post->softwares as $soft)
                    <li>{{ $soft->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class=" w-11/12 max-w-3xl mx-auto py-10 prose">
        {!!$post->description!!}
    </div>

@endsection
