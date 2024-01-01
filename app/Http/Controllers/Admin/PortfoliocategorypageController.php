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

        $category = Category::firstWhere('slug', $slug);
        $portfolios = Portfolio::where('category_id', $category->id)->paginate(3);

        // return $portfolios;

        return view('portfoliocategorypage', compact('category','portfolios'));
    }
}
