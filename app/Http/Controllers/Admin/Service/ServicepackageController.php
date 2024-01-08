<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Service;
use App\Models\Service\ServicePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicepackageController extends Controller
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
        $package = ServicePackage::firstWhere('service_id', $id);

        // return $package;
        return view('admin.service.package.create', compact('service','package'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'starter_price'              => 'required',
            'starter_deliver_time'       => 'required',
            'starter_short_description'  => 'required',
            'starter_full_description'   => 'required',
            'standard_price'             => 'required',
            'standard_deliver_time'      => 'required',
            'standard_short_description' => 'required',
            'standard_full_description'  => 'required',
            'advance_price'              => 'required',
            'advance_deliver_time'       => 'required',
            'advance_short_description'  => 'required',
            'advance_full_description'   => 'required'
        ]);



        $data = [
            'service_id'                 => $id,
            'starter_price'              => $request->starter_price,
            'starter_deliver_time'       => $request->starter_deliver_time,
            'starter_short_description'  => $request->starter_short_description,
            'starter_full_description'   => $request->starter_full_description,
            'standard_price'             => $request->standard_price,
            'standard_deliver_time'      => $request->standard_deliver_time,
            'standard_short_description' => $request->standard_short_description,
            'standard_full_description'  => $request->standard_full_description,
            'advance_price'              => $request->advance_price,
            'advance_deliver_time'       => $request->advance_deliver_time,
            'advance_short_description'  => $request->advance_short_description,
            'advance_full_description'   => $request->advance_full_description
        ];

        // ServicePackage::create($data);
        ServicePackage::updateOrCreate(['service_id' => $id], $data);

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
