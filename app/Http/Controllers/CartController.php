<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

public function index()
{
    $cartItems = Cart::instance('cart')->content();
    return view('cart.index', compact('cartItems'));
}
public function addToCart(Request $request)
{
    $product = Product::find($request->id);
    $price = $product->sale_price ? $product->sale_price : $product->regular_price;
    Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Product');


    return redirect()->back()->with('message','Success ! Item has been added successfully!');
}  
}
