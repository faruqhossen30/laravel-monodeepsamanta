<?php

namespace App\Http\Controllers;

use App\Models\Service\Service;
use App\Models\Service\ServiceFaq;
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
        $service = Service::with('features','faqs','package','sliders')->firstWhere('slug', $slug);

        // return $service;

        return view('single.service', compact('service'));
    }
}
