@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <x-section-aboutme />
    <x-section-chat />
    <div class="py-10"></div>
    <x-section-portfolio islink="true"  />
    <div class="py-14"></div>

@endsection

@push('style')
@endpush

@push('script')
@endpush
