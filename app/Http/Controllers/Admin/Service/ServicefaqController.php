<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Service;
use App\Models\Service\ServiceFaq;
use Illuminate\Http\Request;

class ServicefaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $service = Service::firstWhere('id', $id);
        $faqs = ServiceFaq::where('service_id', $id)->get();
        return view('admin.service.faq.create', compact('service','faqs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);
        if(!empty($request->question)){
            $answer = $request->answer;
            ServiceFaq::where('service_id', $id)->delete();

            foreach($request->question as  $index => $question){
                ServiceFaq::create([
                    'service_id' => $id,
                    'question' => $question,
                    'answer' => $answer[$index]
                ]);
            }
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
