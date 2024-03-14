@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')


    <x-dashboard.breadcrumb title="Service FAQ Create" route="service.index" />
    @if ($errors->any())
        <div class="text-red-500">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <form action="{{ route('service.slider.store', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- <div class="space-y-1 py-2">
                <label for="sliders" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                    Slider Image
                </label>

                <input id="sliders" type="file" name="thumbnails[]" multiple
                    class="py-2 px-3 pr-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Slider Image">
                @error('thumbnails')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div> --}}

            <div class="">
                <div class="grid grid-cols-2 gap-5" id="portfolioImageSection">
                    <div class="col-span-2 lg:col-span-1 border p-4">
                        <input class="dropify" type="file" id="myDropify" name="thumbnails[]">
                        <input type="text" name="captions[]"
                            class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                            placeholder="Caption">
                    </div>

                </div>
            </div>
            <div class="flex flex-row-reverse justify-between">
                {{-- <x-form.submit_button /> --}}
                <button type="button" id="addImageButton"
                    class="py-1 my-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    Add Image
                </button>
            </div>



            <x-form.submit-button title="Update" />
        </form>
        @if ($photos->count())
            <div>
                <div class="py-3 flex items-center text-sm text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">Slider Images</div>
                <div class="flex flex-wrap">
                    @foreach ($photos as $photo)
                        <div class="relative p-2">
                            <a href="{{route('removesliderimage', $photo->id)}}"
                                onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};"
                                class="absolute right-0 p-2 mr-2 bg-red-600 rounded-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </a>
                            <img src="{{ asset('uploads/service/slider/' . $photo->thumbnail) }}"
                                class="w-52 h-52 shadow-md rounded-2xl object-cover" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


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
            createDrofify();
            $(document).on('click', '#addImageButton', function() {
                $('#portfolioImageSection').append(
                    `
                    <div class="col-span-2 lg:col-span-1 border p-4">
                        <input class="dropify" type="file" id="myDropify" name="thumbnails[]">
                        <input type="text" name="captions[]" class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Caption">
                    </div>
                `
                );
                createDrofify();
                console.log('click');
            });

            function createDrofify() {
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop a file here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove': 'Remove',
                        'error': 'Ooops, something wrong happended.'
                    }
                });
            }

        });
    </script>
@endpush
