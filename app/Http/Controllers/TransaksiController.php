<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Product;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transaksi = Transaksi::where('user_id', $user->id)->paginate(6);
        return view('transaksi', compact('transaksi'));
    }

    public function indexSeller()
    {
        $seller = Auth::user()->seller;
        $transaksi = Transaksi::where('seller_id', $seller->id)->paginate(6);
        return view('dashboardSeller.transaksi.index', compact('transaksi'));
    }

    public function indexAdmin()
    {
        $transaksi = Transaksi::paginate(6);
        return view('dashboard.transaksi.index', compact('transaksi'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'product_id'=>'required',
            'harga'=>'required',
            'seller_id'=>'required',
            'jumlah'=>'required',
            'bukti' => 'required|image|file|max:2048' 
        ]);
        $transaksi = new Transaksi();
        $transaksi->product_id = $request->get('product_id');
        $transaksi->seller_id = $request->get('seller_id');
        $transaksi->jumlah = $request->get('jumlah');
        $transaksi->harga = $request->get('harga');
        $transaksi->user_id = $request->user()->id;

        if ($request->file('bukti')) {
            $transaksi->bukti = $request->file('bukti')->store('transaksi-img');
        }

        $jumlah = $request->get('jumlah');
        $product_id = $request->get('product_id');
        $product = Product::where('id', $product_id)->first();

        $stok = $product->stok;
        $product->stok = $stok - $jumlah;
        

        $keranjang_id = $request->get('keranjang_id');
        $keranjang = Keranjang::where('id', $keranjang_id)->first();
        $transaksi->save();
        $product->save();
        $keranjang->delete();

        return redirect('/cart')->with('success', 'Terima Kasih telah melakukan transaksi');
    }

    public function verify($id){
      
        $transaksi = Transaksi::where('id', $id)->first();
            $transaksi->verify = '1';
            $transaksi->save();

        return redirect('/sellerTransaksi');
    }
}
