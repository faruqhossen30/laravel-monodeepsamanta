@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Blog Category" route="blogcategory.index" />
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
                        <div class="md:flex md:space-x-6">
                            <div class="max-w-md">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                            </div>
                            <div class="max-w-md">
                                <p class=" min-w-max p-2">Select Category</p>
                                <hr>
                                @foreach ($categories as $category)
                                    <div class="flex p-2">
                                        <input type="checkbox" name="categories[]" value="{{$category->id}}"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="hs-checked-checkbox">
                                        <label for="hs-checked-checkbox"
                                            class="text-sm text-gray-500 ms-3 dark:text-gray-400">{{$category->name}}</label>
                                    </div>
                                @endforeach

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
