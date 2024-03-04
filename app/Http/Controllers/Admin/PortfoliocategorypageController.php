<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfoliocategorypageController extends Controller
{
    public function index($slug)
    {
        $category = null;
        if (isset($_GET['category'])) {
            $category = trim($_GET['category']);
        }



        $category = Category::firstWhere('slug', $category ?? $slug);
        $categories = Category::get();

        $portfolios = Portfolio::where('category_id', $category->id)->paginate();

        // return $portfolios;

        return view('portfoliocategorypage', compact('category', 'categories', 'portfolios'));
    }
    public function portfolioAll()
    {

        $categories = Category::get();

        $portfolios = Portfolio::latest()->paginate();

        return $portfolios;

        return view('portfoliocategorypage', compact('category', 'categories', 'portfolios'));
    }
}
