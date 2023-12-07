@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')


    <x-dashboard.breadcrumb title="Service List" route="service.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            <x-form.input label="Title" title="title" />
            <div class="py-1">
                <label for="category_id">Revie Type</label>
                <select name="category_id" id="category_id"
                    class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <textarea name="description" id="editor" cols="30" rows="10"></textarea>
            @error('description')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
            @enderror

            <div class="lg:flex items-center gap-4">
                <div class="w-full">
                    <x-form.input label="Meta Title" title="meta_title" />
                    <x-form.textarea label="Meta Description" title="meta_description" />
                    <x-form.input label="Meta Keyword" title="meta_keyword" />
                </div>
                <div class="w-full">
                    <input class="dropify" type="file" id="myDropify" name="thumbnail">
                </div>
            </div>
            <hr>

            <x-form.submit_button />
        </form>
    </div>

@endsection

@push('style')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .ck-editor__editable_inline {
            height: 300px;
        }

        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
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
