<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class StripeController extends Controller
{
    //
    public function session(Request $request , Menu $menu)
    {
        Stripe::setApiKey(config('stripe.sk'));

        // dd($menu);

        $session = StripeSession::create([
            
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => $menu->name,
                            "description" => $menu->description
                        ],
                        'unit_amount'  => $menu->price *100,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment', // the mode of payment
            'success_url' => route('success'), // route when success 
            'cancel_url'  => route('home.home'), // route when failed or canceled
        ]);

        return redirect()->away($session->url);
    }
    
}
