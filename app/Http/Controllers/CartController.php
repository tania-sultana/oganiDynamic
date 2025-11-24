<?php

namespace App\Http\Controllers;

use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
     public function index()
    {
        $cartItems = ProductCart::with('product')
                        ->where('user_id', Auth::id())->get();
        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
        return view('frontend.shoppingCart', compact('cartItems', 'subtotal'));
    }

     public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $product_id = $request->product_id;

        $exists = ProductCart::where('user_id', Auth::id())
                             ->where('product_id', $product_id)
                             ->first();

        if ($exists) {
            return redirect()->back()->with('cart_message', 'Product already in cart!');
        }

        ProductCart::create([
            'user_id' => Auth::id(),
            'product_id' => $product_id,
        ]);

        return redirect()->back()->with('cart_message', 'Product added to cart successfully!');
    }

     public function destroy($cart_id)
    {
        $cartItem = ProductCart::where('id', $cart_id)
                               ->where('user_id', Auth::id())
                               ->firstOrFail();

        $cartItem->delete();

        return redirect()->back()->with('cart_message', 'Product removed from cart successfully!');
    }
}
