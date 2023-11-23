<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BlogcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BlogCategory::paginate();
        return view('admin.blogcategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $thumbnailname = null;


        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname
        ];

        BlogCategory::create($data);
        Session::flash('create');
        return redirect()->route('blogcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = BlogCategory::firstWhere('id',$id);
        return view('admin.blogcategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id
        ];
        BlogCategory::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('blogcategory.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('blogcategory.index');
    }
}
