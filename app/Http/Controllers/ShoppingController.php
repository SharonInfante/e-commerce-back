<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    public function index($id)
    {
        $shopping = Product::find($id);
        return response()->json($shopping);
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        $quantity = $request->quantity;
        $price = $request->price;

        $user = Auth::user();

        $shopping = new Shopping();
        $shopping->product_id = $product;
        $shopping->quantity = $quantity;
        $shopping->price = $price;
        $shopping->save();

        return response()->json($product, $shopping);
    } 

    public function update(Request $request, $id)
    {
        $shopping = Shopping::find($id);

        $shopping->quantity = $request->quantity;
        $shopping->price = $shopping->product->price * $request->quantity;
        $shopping->save();
        $shopping->save();

        return response()->json($shopping);
    }

    public function destroy(Request $request, $id)
    {
        $shopping = Shopping::findOrFail($id);
        $shopping->id = $request->id;
        $shopping->delete();

        return response()->json($shopping);
    }
}

