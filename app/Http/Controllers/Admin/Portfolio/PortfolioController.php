<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(10);
        // return $portfolios;
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        // return $request->all();

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/portfolio/' . $thumbnailname);
        }

        $portfolio_image = null;
        if ($request->file('portfolio_image')) {
            $imagethumbnail = $request->file('portfolio_image');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $portfolio_image = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/portfolio/image/' . $portfolio_image);
        }
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'thumbnail' => $thumbnailname,
            'portfolio_image' => $portfolio_image
        ];

        $porfolio = Portfolio::create($data);

        if(!empty($request->categories)){
            foreach($request->categories as $category){
                PortfolioCategory::create([
                    'portfolio_id' => $porfolio->id,
                    'category_id' => $category
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Portfolio::with('categories')->firstWhere('id', $id);
        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $portfolio = Portfolio::with('categories')->firstWhere('id', $id);
        // $ids = $portfolio->categories->pluck('category_id')->toArray();
        $ids = $portfolio->categories->pluck('id')->toArray();
        // return $ids;
        return view('admin.portfolio.edit', compact('categories', 'portfolio','ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);


        $thumbnailname = null;
        $portfolio_image = null;
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/portfolio/' . $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }


        if ($request->file('portfolio_image')) {
            $imagethumbnail = $request->file('portfolio_image');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $portfolio_image = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/portfolio/image/' . $portfolio_image);
            $data['portfolio_image'] = $portfolio_image;
        }



        $porfolio = Portfolio::firstWhere('id', $id)->update($data);

        if(!empty($request->categories)){
            PortfolioCategory::where('portfolio_id', $id)->delete();

            foreach($request->categories as $category){
                PortfolioCategory::create([
                    'portfolio_id' => $id,
                    'category_id' => $category
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Portfolio::firstwhere('id', $id)->delete();
        return redirect()->route('portfolio.index');
    }
}
