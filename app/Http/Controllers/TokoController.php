<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class TokoController extends Controller
{
    public function index($id)
    {
        $seller = Seller::where('id', $id)->first();
        $product = Product::where('seller_id', $id)->paginate(9);
        return view('toko', compact('seller', 'product'));
    }
}
