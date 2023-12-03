@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
<x-dashboard.breadcrumb title="Blog Category"  route="blogcategory.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('portfolio.store') }}" method="POST">
                        @csrf
                        <x-form.input label="Portfolio Title" title="title" />
                        <div>
                            <input type="file" id="myDropify" name="thumbnail">
                        </div>
                        <x-form.submit_button/>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('style')
<link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/js/dropify.js') }}"></script>

@endpush
