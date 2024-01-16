@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div>
        <h3 class="py-2 text-3xl font-bold">Raiffeisen Bank App Redesign</h3>
        <div>
            @foreach ($portfolio->images as $image)
                @if ($image->caption)
                    <div class="py-2">
                        <h2 class="py-2 text-lg shadow-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, facere.</h2>
                    </div>
                @endif
                <img src="{{ asset('uploads/portfolio/image/' . $image->image) }}" class="w-full h-auto" alt="">
            @endforeach
        </div>
    </div>

@endsection

@push('style')
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script>
        var mixer = mixitup('.mixingContainer');
    </script>
@endpush
