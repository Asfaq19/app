<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product.index',compact('products'));
    }

    public function create()
    {
        $product = new Product();
        return view('product.create',compact('product'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        Product::create($data);

        return redirect('products');
    }

    public function show($product)
    {
        $product = Product::where('id',$product)->firstOrFail();

        return view('product.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        $product->update($data);

        return redirect('products/'.$product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('products');
    }
}
