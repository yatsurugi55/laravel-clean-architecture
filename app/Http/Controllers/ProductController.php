<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all()->toArray();
        
        return view('product', compact('products'));
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);

        return view('edit', compact('product'));
    }

    public function update(Request $request, int $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->type = $request->type;
        $product->made_in = $request->made_in;
        $product->stock = $request->stock;
        $product->save();

        return redirect(url('/product'));
    } 

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'type' => $request->type,
            'made_in' => $request->made_in,
            'stock' => $request->stock,
        ]);

        return redirect(url('/product')); 
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->id);

        return view('delete', compact('product'));
    }

    public function remove(Request $request)
    {
        $product = Product::find($request->id);

        $product->delete();
        
        return redirect(url('/product'));
    }
}
