<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service\Service;
use App\Models\Service\ServiceFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servies = Service::paginate();
        return view('admin.service.index', compact('servies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        // return $request->all();

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/service/' . $thumbnailname);
        }
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'thumbnail' => $thumbnailname,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword
        ];

        $service = Service::create($data);

        if(!empty($request->featuredetails)){
            $starter = $request->starter;
            $standard = $request->standard;
            $advanced = $request->advanced;


            foreach($request->featuredetails as  $index => $feature){
                ServiceFeature::create([
                    'service_id' => $service->id,
                    'feature' => $feature,
                    'starter' => $starter[$index],
                    'standard' => $standard[$index],
                    'advanced' => $advanced[$index]
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('service.index');
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
        $categories = Category::get();
        $service = Service::with('features')->firstWhere('id', $id);
        // return $service;
        return view('admin.service.edit', compact('categories','service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        // return $request->all();



        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/service/' . $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }

        $update = Service::firstWhere('id', $id)->update($data);

        if($update && !empty($request->featuredetails)){
            ServiceFeature::where('service_id', $id)->delete();
            $starter = $request->starter;
            $standard = $request->standard;
            $advanced = $request->advanced;


            foreach($request->featuredetails as  $index => $feature){
                ServiceFeature::create([
                    'service_id' => $id,
                    'feature' => $feature,
                    'starter' => $starter[$index],
                    'standard' => $standard[$index],
                    'advanced' => $advanced[$index]
                ]);
            }
        }

        Session::flash('update');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::firstWhere('id', $id)->delete();
        Session::flash('update');
        return redirect()->route('service.index');
    }
}
