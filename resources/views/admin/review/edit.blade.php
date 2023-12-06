@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Reviews" route="review.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">


        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-form.input label="Buyer Name" title="name" value="{{$review->name}}" />
                        <x-form.input label="Rating" title="rating" type="number" value="{{$review->rating}}" />
                        <x-form.input label="Review Date" title="date" type="datetime-local" />


                        <div class="py-1">
                            <label for="review_type_id">Revie Type</label>
                            <select name="review_type_id" id="review_type_id"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Review Type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @if($type->id == $review->review_type_id) selected @endif>{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error("review_type_id")
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-form.input label="Review URL" title="revie_url" type="text" value="{{$review->revie_url}}" />
                        <div class="py-2">
                            <label for="review">Review Text</label>
                            <textarea name="review" id="review" class="py-3 text-black px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="5" placeholder="This is a review text."> {{$review->review}}</textarea>
                            @error("review")
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <hr>

                        <div class="md:flex md:space-x-6">
                            <div class="max-w-md">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail" data-default-file="{{asset('uploads/review/'.$review->thumbnail)}}" >
                            </div>
                        </div>
                        <x-form.submit_button />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        });
    </script>
@endpush
