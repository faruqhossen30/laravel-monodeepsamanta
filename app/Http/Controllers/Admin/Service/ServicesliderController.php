<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Service;
use App\Models\Service\ServiceSlider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Image;

class ServicesliderController extends Controller
{
    public function create($id): View
    {
        $service = Service::firstWhere('id', $id);
        $photos = ServiceSlider::where('service_id', $id)->get();
        // return $service;
        return view('admin.service.slider.create', compact('service','photos'));
    }
    public function store(Request $request, $id)
    {
        // return $request->all();

        $request->validate([
            'thumbnails' => 'required|array'
        ]);

        if(!empty($request->file('thumbnails'))){

            // ServiceSlider::where('service_id', $id)->delete();

            foreach ($request->file('thumbnails') as $imagefile) {
                $imagethumbnail = $imagefile;
                $extension = $imagethumbnail->getClientOriginalExtension();
                $thumbnailname = Str::uuid() . '.' . $extension;
                Image::make($imagethumbnail)->save('uploads/service/slider/' . $thumbnailname);

                ServiceSlider::create([
                    'service_id'=> $id,
                    'thumbnail'=> $thumbnailname
                ]);
            }
        }



        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function removeImage(string $id)
    {
        $slider = ServiceSlider::firstWhere('id', $id);

        // return $slider;
        $path = 'uploads/service/slider/'.$slider->thumbnail;

        // return $path;

        if (file_exists($path)) {
            unlink($path);
            // echo 'File ' . $image->image . ' has been deleted';
        }

        $slider->delete();

        // return $image;
        return redirect()->back();
    }
}
