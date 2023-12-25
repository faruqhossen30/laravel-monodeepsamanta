@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-section-aboutme />
    <x-section-chat />
    <x-section-portfolio />
    <div class="py-14"></div>

@endsection

@push('style')
@endpush

@push('script')
@endpush
