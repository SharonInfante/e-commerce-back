<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $products = new Product();

        $products->product_name = $request->product_name;
        $products->code = $request->code;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->image = $request->image;

        $products->save();

        return response()->json($products);
    }

    public function show($id)
    {
        $products = Product::find($id);
        return response()->json($products);
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return response()->json($products); 
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        $products->product_name = $request->product_name;
        $products->code = $request->code;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->image = $request->image;

        $products->save();

        return response()->json($products);
    }

    public function destroy(Request $request, $id){

        $products = Product::findOrFail($id);
        $products->id = $request->id;
        $products->delete();

        return response()->json($products);
    }
}
