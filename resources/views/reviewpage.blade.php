@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <section>
        <h1 class="flex items-center text-2xl space-x-2 py-4 my-8 font-bold">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                fill="none">
                <path
                    d="M17.334 0.833984H2.66732C1.65898 0.833984 0.833984 1.65898 0.833984 2.66732V19.1673L4.50065 15.5007H17.334C18.3423 15.5007 19.1673 14.6757 19.1673 13.6673V2.66732C19.1673 1.65898 18.3423 0.833984 17.334 0.833984ZM17.334 13.6673H3.73982L2.66732 14.7398V2.66732H17.334V13.6673Z"
                    fill="#FF003A"></path>
                <path
                    d="M10.0013 12.7507L11.4405 9.60648L14.5846 8.16732L11.4405 6.72815L10.0013 3.58398L8.56214 6.72815L5.41797 8.16732L8.56214 9.60648L10.0013 12.7507Z"
                    fill="#FF003A"></path>
            </svg>
            <span>Reviews</span>
        </h1>
    </section>

    <section class="p-2 md:p-0">
        @foreach ($reviews as $review)

            <div class="md:flex py-4">
                <div class="flex space-x-3">
                    <div class="flex justify-center items-center p-6 bg-zinc-200 w-8 h-8 rounded-full">
                        <span class="font-bold">PM</span>
                    </div>
                    <div class="space-y-2">
                        <h3 class="font-bold text-lg">{{$review->name}}</h3>
                        <div class="flex items-center space-x-2 font-bold">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <p>{{$review->rating}}</p>
                            <p class="text-gray-500">{{$review->date->format('d M, Y')}}</p>
                        </div>
                        <div>
                            <p>{{$review->review}}</p>
                        </div>
                        <div class="flex space-x-2 py-2 items-center">
                            <p class="text-sm">Originally Posted on:</p>
                            <a href="{{$review->review_url}}" class="flex text-primary font-bold ">{{$review->type->name}}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-center">
                        <img src="{{ asset('uploads/review/'.$review->thumbnail ) }}" alt="">
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-primary font-bold text-center">Similar Works

                        </a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach

    </section>


@endsection

@push('style')
@endpush

@push('script')
@endpush
