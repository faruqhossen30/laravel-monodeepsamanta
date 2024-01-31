<?php

namespace App\Http\Controllers;

use App\Models\Service\Service;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {

        // return $request->all();

        $service = Service::firstWhere('id', $request->id);
        $item = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $service->title,
                ],
                'unit_amount' => $request->price * 100,
            ],
            'quantity' => 1,
        ];

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        // dd($stripe);

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [$item],
            'mode' => 'payment',
            'success_url' => 'http://localhost:4242/success',
            'cancel_url' => 'http://localhost:4242/cancel',
        ]);

        return redirect()->away($checkout_session->url);
    }
    public function success()
    {
        return "checkout";
    }
    public function cancel()
    {
        return "checkout";
    }
}
