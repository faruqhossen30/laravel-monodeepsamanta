@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')


    <x-dashboard.breadcrumb title="Service FAQ Create" route="service.index" />
    @if ($errors->any())
        <div class="text-red-500">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
        <form action="{{ route('service.package.store', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-between">
                <x-package.package-starter :package="$package" />
                <x-package.package-standard :package="$package" />
                <x-package.package-advance :package="$package" />

            </div>

            <x-form.submit_button />
        </form>
    </div>

@endsection

@push('style')
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@endpush
