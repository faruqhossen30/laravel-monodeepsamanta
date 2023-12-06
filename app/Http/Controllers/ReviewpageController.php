<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewpageController extends Controller
{
    public function index(): View
    {
        return View('reviewpage');
    }
}
