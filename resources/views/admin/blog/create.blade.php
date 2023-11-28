@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
<x-dashboard.breadcrumb title="Blog Category"  route="blogcategory.index" />
    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{ route('blogcategory.store') }}" method="POST">
                        @csrf
                        <x-form.input label="Title" title="title" />
                        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                        <x-form.submit_button/>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
<script src="{{asset('js/ckeditor.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/ckeditor.css')}}">
<style>

    .ck-editor__editable_inline{
            height: 300px;
        }

</style>
@endpush

@push('script')
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
@endpush
