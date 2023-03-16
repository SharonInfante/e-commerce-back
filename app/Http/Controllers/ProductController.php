<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('/', compact('products'));
    }

    public function create()
    {
        return view('addProduct');
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

        return redirect()->route('home', $products);
    }
}
