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
        <form action="{{ route('service.slider.store', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-1 py-2">
                <label for="sliders" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                    Slider Image
                </label>
                <input id="sliders" type="file" name="thumbnails[]" multiple
                    class="py-2 px-3 pr-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-50 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                    placeholder="Slider Image">
                @error('thumbnails')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-form.submit_button />
        </form>
        @if ($photos->count())
            <div>
                <h3>Old Image</h3>
                <div class="">
                    @foreach ($photos as $photo)
                    <img src="{{asset('uploads/service/slider/'.$photo->thumbnail)}}" class="w-52 p-2" alt="">

                    @endforeach
                </div>
            </div>
        @endif


    </div>


@endsection

@push('style')
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@endpush
