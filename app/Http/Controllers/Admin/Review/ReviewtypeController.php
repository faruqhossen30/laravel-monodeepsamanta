<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\ReviewType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = ReviewType::paginate();
        return view('admin.reviewtype.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviewtype.create');
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

        ReviewType::create($data);
        Session::flash('create');
        return redirect()->route('reviewtype.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type = ReviewType::firstWhere('id',$id);
        return view('admin.reviewtype.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $type = ReviewType::firstWhere('id',$id);
        return view('admin.reviewtype.edit', compact('type'));
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
            'slug' => $request->name
        ];
        ReviewType::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('reviewtype.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ReviewType::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('reviewtype.index');
    }
}
