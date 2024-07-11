<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 
use App\Models\Product;

class HomeController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function show($id)
    {
        // $product = Product::find($id);
        // return view('product', compact('product'));

        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
