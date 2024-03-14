<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageSectionSetting extends Controller
{

    /**
     * Show the form for creating a section setting page
     *
     * @return \Illuminate\Http\Response
     */

    public function chatSection(){
        return view('admin.setting.chat-section');
    }
}
