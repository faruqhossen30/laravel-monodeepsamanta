@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <x-section-service />
    <x-section-chat />
    <x-section-portfolio />


@endsection

@push('style')
@endpush

@push('script')
@endpush
