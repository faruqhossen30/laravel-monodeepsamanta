@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Blog Category" route="blog.index" />
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
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class=" space-y-1">
                        @csrf
                        <x-form.input label="Title" title="title" />
                        <div class="py-2">
                            <x-form.textarea label="Short Description" title="short_description" />
                            @error("short_description")
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                        @error('description')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror

                        <div class="grid grid-cols-12 gap-4 py-2">
                            <div class="col-span-12 lg:col-span-6 p-4 shadow">
                                <h2>About Project</h2>
                                <hr>
                                <x-form.textarea label="Project Description" title="project_description" />
                                <div class="py-2">
                                    <label for="category_ids" class="block text-sm font-medium mb-2 dark:text-white">Select Service</label>

                                    <select id="category_ids" name="category_ids" class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"  multiple="multiple">
                                        <option>Select Categories</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                                <div class="py-2">
                                    <label for="technology_ids" class="block text-sm font-medium mb-2 dark:text-white">Select Tools</label>
                                    <select id="technology_ids" name="technology_ids" class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"  multiple="multiple">
                                        <option>Select Categories</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6 p-4 shadow">
                                {{-- <x-form.select :data="$categories" name="category_id" />
                                <x-form.input label="Meta Title" title="meta_title" /> --}}
                                <x-form.textarea label="Meta Description" title="meta_description" />
                                <x-form.input label="Meta Keyword" title="meta_keyword" />
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                            </div>
                        </div>
                        <hr>

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
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .ck-editor__editable_inline {
            height: 300px;
        }

        .dropify-message p {
            font-size: 24px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
            $('.js-example-basic-multiple').select2();

        });
    </script>
@endpush
