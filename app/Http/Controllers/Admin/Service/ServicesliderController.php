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
    public function create($id)
    {
        $service = Service::firstWhere('id', $id);
        $photos = ServiceSlider::where('service_id', $id)->get();
        // return $photos;
        return view('admin.service.slider.create', compact('service', 'photos'));
    }
    public function store(Request $request, $id)
    {
        // return $request->all();


        if (!empty($request->file('thumbnails'))) {

            // ServiceSlider::where('service_id', $id)->delete();

            foreach ($request->file('thumbnails') as $imagefile) {
                $imagethumbnail = $imagefile;
                $extension = $imagethumbnail->getClientOriginalExtension();
                $thumbnailname = Str::uuid() . '.' . $extension;
                Image::make($imagethumbnail)->save('uploads/service/slider/' . $thumbnailname);

                ServiceSlider::create([
                    'service_id' => $id,
                    'thumbnail' => $thumbnailname
                ]);
            }
        }


        if (!empty($request->file('video'))) {
            $captions = $request->video_caption;
            foreach ($request->file('video') as $index => $videofile) {
                $videohumbnail = $videofile;
                $extension = $videohumbnail->getClientOriginalExtension();
                $videoName = Str::uuid() . '.' . $extension;
                $request->file('video')[$index]->move(public_path('uploads/service/video/'), $videoName);

                ServiceSlider::create([
                    'service_id' => $id,
                    'video'        => $videoName,
                    'caption'      => $captions[$index],
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
        if ($slider->thumbnail) {
            $path = 'uploads/service/slider/' . $slider->thumbnail;

            if (file_exists($path)) {
                unlink($path);
                // echo 'File ' . $image->image . ' has been deleted';
            }
        }

        if ($slider->video) {
            $path = 'uploads/service/video/' . $slider->video;

            if (file_exists($path)) {
                unlink($path);
                // echo 'File ' . $image->image . ' has been deleted';
            }
        }



        $slider->delete();

        // return $image;
        return redirect()->back();
    }
}
