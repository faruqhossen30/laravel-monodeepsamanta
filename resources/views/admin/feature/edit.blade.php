@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-dashboard.breadcrumb title="feature" subpage="Edit" route="feature.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('feature.update', $feature->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <x-form.input label="feature Name" title="name" :value="$feature->name"/> --}}
                        <x-form.input label="Feature title" title="title" :value="$feature->title" />
                        <x-form.input label="Default Value" title="value" :value="$feature->value" />
                        <x-form.submit_button />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
