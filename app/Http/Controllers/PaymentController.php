<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(request $request){

    }
    
    public function payment(Request $request){
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-ZQVX2VQJLRYI0SHKe689jzUn';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    'id' => 'a1',
                    'price' => '20000000',
                    'quantity' => 1,
                    'name' => 'ROG'
                ],
                [
                    'id' => 'b1',
                    'price' => '500000',
                    'quantity' => 1,
                    'name' => 'Headset'
                ]
            ),
            'customer_details' => array(
                'first_name' => 'Irba',
                'last_name' => 'Adika',
                'email' => $request->get('irba@gmail.com'),
                'phone' => $request->get('088888888888'),
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        return view('payment', ['snap_token' => $snapToken]);
    }

    public function payment_post(Request $request){
        return $request;
    }
}
