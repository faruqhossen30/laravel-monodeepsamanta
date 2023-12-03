<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutpageController extends Controller
{
    public function index(): View
    {
        return View('aboutpage');
    }
}
