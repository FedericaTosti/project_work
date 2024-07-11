<?php

namespace App\Http\Controllers;

// 
use App\Models\Product;

use Illuminate\Http\Request;

// 
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $product = Product::create($request->all());
        // return redirect()->route('products.index');

        // 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
// EDIT
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    //     $product = Product::find($id);
    //     return view('products.edit', compact('product'));
    // }

    // EDIT
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


// UPDATE
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //

    //     $product = Product::find($id);
    //     $product->update($request->all());
    //     return redirect()->route('products.index');
    // }

    // UPDATE

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    // DESTROY
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //

    //     $product = Product::find($id);
    //     $product->delete();
    //     return redirect()->route('products.index');
    // }

    // DESTROY

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
