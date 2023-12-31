<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewpageController extends Controller
{
    public function index():View
    {
        $reviews = Review::with('type')->paginate(10);
        // return $reviews;
        return view('reviewpage', compact('reviews'));
    }
}
