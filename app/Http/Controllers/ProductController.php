<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::paginate(9);
        return view('shop', compact('product', 'category'));
    }

    public function show($id){
        return view('product',[
           'product' => Product::with('category')->find($id),
           'category' => Category::all()
       ]);
   }
}
