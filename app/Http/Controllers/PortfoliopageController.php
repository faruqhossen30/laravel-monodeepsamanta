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

        $portfolios = Portfolio::with('category')->latest()->get();
        $categories = Category::get();
        // return $portfolios;

        return view('portfoliopage', compact('portfolios', 'categories'));
    }
    /**
     * Display the user's profile form.
     */
    public function singlePortfolio(Request $request, $slug):View
    {

        $portfolio = Portfolio::firstWhere('slug', $slug);
        // return $portfolio;
        return view('single.portfolio', compact('portfolio'));
    }
}
