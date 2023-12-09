@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<div>
    <h3 class="p-2 text-xl font-bold">Raiffeisen Bank App Redesign</h3>
    <div>
        <img src="{{asset('uploads/portfolio/'.$portfolio->thumbnail)}}" alt="">
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
