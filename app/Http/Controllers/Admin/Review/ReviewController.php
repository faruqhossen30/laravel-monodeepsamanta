<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\ReviewType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::paginate(10);
        // return $reviews;
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = ReviewType::get();
        return view('admin.review.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'rating'         => 'required',
            'date'           => 'required',
            'review_type_id' => 'required',
            'review'         => 'required'
        ]);

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/review/' . $thumbnailname);
        }


        $data = [
            'name' => $request->name,
             'slug' => Str::slug($request->name, '-'),
            'rating' => $request->rating,
            'date' => $request->date,
            'review' => $request->review,
            'thumbnail' => $thumbnailname,
            'review_type_id' => $request->review_type_id,
            'revie_url' => $request->revie_url,
            'user_id' => Auth::user()->id
        ];

        Review::create($data);

        Session::flash('create');
        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::firstWhere('id', $id);
        return view('admin.review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $types = ReviewType::get();
        $review = Review::firstWhere('id', $id);

        return view('admin.review.edit', compact('review','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'           => 'required',
            'rating'         => 'required',
            'date'           => 'required',
            'review_type_id' => 'required',
            'review'         => 'required'
        ]);

        $thumbnailname = null;
        $data = [
            'name' => $request->name,
             'slug' => Str::slug($request->name, '-'),
            'rating' => $request->rating,
            'date' => $request->date,
            'review' => $request->review,
            'review_type_id' => $request->review_type_id,
            'revie_url' => $request->revie_url
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/review/' . $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }




        Review::firstWhere('id', $id)->update($data);

        Session::flash('update');
        return redirect()->route('review.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Review::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('review.index');
    }
}
