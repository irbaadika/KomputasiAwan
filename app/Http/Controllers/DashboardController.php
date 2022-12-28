<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Merk;
use App\Models\User;
use App\Models\Service;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        $category = Category::all();
        $merk = Merk::all();
        $product = Product::all();
        $transaksi = Transaksi::all();
        $seller = User::where('role','seller');
        $admin = User::where('role','admin');
        $buyer = User::where('role','buyer');
        return view('dashboard.index',[
            'category' => $category,
            'merk' => $merk,
            'product' => $product,
            'seller' => $seller,
            'admin' => $admin,
            'buyer' => $buyer,
            'transaksi' => $transaksi,
        ]);
    }

    public function seller(Request $request)
    {
        if($request->user()->seller->verify == '0'){
            return redirect('/')->with('gagal', 'Silahkan hubungi admin untuk melakukan verifikasi');
        }
       elseif($request->user()->seller->verify == '1'){
        $seller = Auth::user()->seller;
        $category = Category::all();
        $product = Product::where('seller_id', $seller->id);
        $service = Service::where('seller_id', $seller->id);
        $transaksi = Transaksi::where('seller_id', $seller->id);
            return view('dashboardSeller.index',[
                'category' => $category,
                'product' => $product,
                'service' => $service,
                'transaksi' => $transaksi,
            ]);
       }
    }

}
