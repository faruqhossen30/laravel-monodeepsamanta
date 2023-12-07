<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::paginate();
        return view('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
            'value' => $request->value,
            'user_id' => Auth::user()->id,
        ];

        Feature::create($data);
        Session::flash('create');
        return redirect()->route('feature.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Feature::firstWhere('id',$id);
        return view('admin.feature.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature = Feature::firstWhere('id',$id);
        // return $feature;
        return view('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $data = [
            'title' => $request->title,
            'value' => $request->value,
            'user_id' => Auth::user()->id,
        ];

        Feature::firstWhere('id',$id)->update($data);
        Session::flash('create');
        return redirect()->route('feature.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feature::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('feature.index');
    }
}
