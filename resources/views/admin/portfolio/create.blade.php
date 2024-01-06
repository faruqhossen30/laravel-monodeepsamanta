@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Portfolio List" route="portfolio.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-form.input label="Portfolio Title" title="title" />
                        <div class="py-1">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" id="category_id"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Review Type</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:flex md:space-x-6 my-2">
                            <div class="max-w-md">
                                <label for="myDropify" class="py-2">Portfolio Thumbnail</label>
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                            </div>
                        </div>
                        <hr>
                        <h3>Portfolio</h3>
                        <div class="">
                            <div class="grid grid-cols-2 gap-5" id="portfolioImageSection">
                                <div class="col-span-2 lg:col-span-1 border p-4">
                                    <input class="dropify" type="file" id="myDropify" name="portfolio_image[]">
                                    <input type="text" name="captions[]" class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Caption">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <x-form.submit_button />
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
            createDrofify();
            $(document).on('click', '#addImageButton', function() {
                $('#portfolioImageSection').append(
                    `
                    <div class="col-span-2 lg:col-span-1 border p-4">
                        <input class="dropify" type="file" id="myDropify" name="portfolio_image[]">
                        <input type="text" name="captions[]" class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Caption">
                    </div>
                `
                );
                createDrofify();
                console.log('click');
            });

            function createDrofify(){
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
