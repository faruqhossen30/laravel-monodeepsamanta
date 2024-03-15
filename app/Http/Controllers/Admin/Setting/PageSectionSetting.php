<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Image;

class PageSectionSetting extends Controller
{

    /**
     * Show the form for creating a section setting page
     *
     * @return \Illuminate\Http\Response
     */

    public function chatSectionCreate()
    {
        return view('admin.setting.chat-section');
    }
    public function chatSectionStore(Request $request)
    {

        // return option('chat_section_video');

        $path = option('chat_section_thumbnail');
        $pathimage = 'uploads/settings/chat/' . $path;

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            if ($pathimage) {
                if (file_exists($pathimage)) {
                    unlink($pathimage);
                }
            };
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/settings/chat/'), $thumbnailname);
            option(['chat_section_thumbnail' => $thumbnailname]);
        }


        $videopath = option('chat_section_video');
        $pathvideo = 'uploads/settings/chat/' . $videopath;
        $video = null;
        if ($request->file('video')) {

            if ($pathvideo) {
                if (file_exists($pathvideo)) {
                    unlink($pathvideo);
                }
            };
            $imagethumbnail = $request->file('video');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $video = Str::uuid() . '.' . $extension;
            $request->file('video')->move(public_path('uploads/settings/chat/'), $video);
            option(['chat_section_video'=> $video]);
        }

        return redirect()->back();
    }
}
