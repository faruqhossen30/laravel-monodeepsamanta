<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfoliopageController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request)
    {
        // $portfolios = [1,2,3,4,5,6];
        $portfolios = Portfolio::with(['categories'=>fn ($q) => $q])->get();

        $data = PortfolioCategory::get()->pluck('category_id')->toArray();
        $ids = array_values(array_unique($data));

        $categories = Category::whereIn('id', $ids)->get();



        // return $portfolios;

        return view('portfoliopage', compact('portfolios','categories'));
    }
}
