<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $keranjang = Keranjang::where('user_id', $user->id)->paginate(6);
        return view('cart', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keranjang = new Keranjang();

        if(Keranjang::where('product_id', $request->get('product_id'))->exists()){
            $keranjang = Keranjang::where('product_id', $request->get('product_id'))->first();
            $keranjang->jumlah = $keranjang->jumlah + $request->get('jumlah');
            $keranjang->harga = $keranjang->jumlah * $request->get('harga');

            $keranjang->save();

            return redirect('/product' . '/' . $request->get('product_id'))->with('success', 'Barang Telah di tambahkan ke dalam keranjang');

        }else{
            $request->validate([
                'product_id'=>'required',
                'jumlah' => 'required', 
                'harga' => 'required' 
            ]);
    
            
            $keranjang->user_id = $request->user()->id;
            $keranjang->product_id = $request->get('product_id');
            $keranjang->jumlah = $request->get('jumlah');
            $keranjang->harga = $request->get('jumlah') * $request->get('harga');
    
            $keranjang->save();
    
            return redirect('/product' . '/' . $request->get('product_id'))->with('success', 'Barang Telah di tambahkan ke dalam keranjang');
    
        }
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keranjang = Keranjang::where('id', $id)->first();
        $keranjang->delete();
        return redirect('/cart')->with('success', 'Transaksi telah dihapus');
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
                'first_name' => $request->user()->id,
                'last_name' => 'pratama',
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        return view('cart', ['snap_token' => $snapToken]);
    }

    public function payment_post(Request $request){
        return $request;
    }
}
