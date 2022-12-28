<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all()->take(4);
        return view('index', [
            'category' => $category, 
            'product' => $product 
        ]);
    }
}
