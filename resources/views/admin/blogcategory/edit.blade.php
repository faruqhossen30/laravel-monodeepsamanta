@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="Bloc Category" subpage="Edit"  route="blogcategory.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('blogcategory.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input label="Category Name" title="name" :data="$category->name"/>
                        <x-form.submit-button/>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
