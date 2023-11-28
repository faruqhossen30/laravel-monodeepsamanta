@extends('admin.layouts.app')
@section('title', 'Home Page')
@section('content')
<x-dashboard.breadcrumb title="Dashboard"  route="dashboard" />
<div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
    <p>Dashboard</p>
</div>

@endsection
