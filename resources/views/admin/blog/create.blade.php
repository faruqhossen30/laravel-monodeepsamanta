@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Blog Category" route="blogcategory.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('blogcategory.store') }}" method="POST">
                        @csrf
                        <x-form.input label="Title" title="title" />
                        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                        <div class="py-2">
                            <label for="">Category</label>
                            <div class="flex space-x-2">
                                <div class="flex">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-checkbox-group-1">
                                    <label for="hs-checkbox-group-1"
                                        class="text-sm text-gray-500 ms-3 dark:text-gray-400">Apple</label>
                                </div>

                                <div class="flex">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-checkbox-group-2">
                                    <label for="hs-checkbox-group-2"
                                        class="text-sm text-gray-500 ms-3 dark:text-gray-400">Pear</label>
                                </div>

                                <div class="flex">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-checkbox-group-3">
                                    <label for="hs-checkbox-group-3"
                                        class="text-sm text-gray-500 ms-3 dark:text-gray-400">Orange</label>
                                </div>
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
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <style>
        .ck-editor__editable_inline {
            height: 300px;
        }
    </style>
@endpush

@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
