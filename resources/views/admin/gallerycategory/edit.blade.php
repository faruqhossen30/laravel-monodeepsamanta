@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Gallery Category" subpage="Edit" route="category.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('gallery-category.update', $gallerycategory->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <x-form.input label="Category Name" name="name" :value="$gallerycategory->name" />
                        <x-form.submit-button  title="Update"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
