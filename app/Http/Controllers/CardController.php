<?php

namespace App\Http\Controllers;

use App\Models\Service\Service;
use Illuminate\Http\Request;
use Cart;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartitems = Cart::content();

        // return $cartitems;
        return view('cartpage', compact('cartitems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$price,$id)
    {
        $service = Service::firstWhere('id', $id);

        // return $id;
        Cart::add([
            'id'       => $id,
            'name'     => $service->title,
            'qty'      => 1,
            'price'      => $price
        ]);

        return redirect()->back();
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
    public function remove(string $id)
    {
        Cart::remove($id);
        return redirect()->back();
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
