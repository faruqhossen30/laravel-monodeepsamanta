<?php

namespace App\Http\Controllers;

use App\Models\Service\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicepageController extends Controller
{
    public function index()
    {
        $services = Service::with('package')->latest()->paginate(12);
        // return $services;
        return view('servicepage', compact('services'));
    }
    public function singleService($slug)
    {
        $service = Service::firstWhere('slug', $slug);
        return view('single.service', compact('service'));
    }
}
