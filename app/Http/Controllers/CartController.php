<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = ProductCart::with('product')
            ->where('user_id', auth('web')->id())->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('frontend.shoppingCart', compact('cartItems', 'subtotal'));
    }

    public function store(Request $request)
    {
        $user = auth('web')->user();

        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $productId = $request->product_id;

        $exists = ProductCart::where('user_id', $user->id)->where('product_id', $productId)->first();

        if ($exists) {
            return back()->with('cart_message', 'Product already in cart!');
        }

        $product = Product::findOrFail($productId);

        ProductCart::create([
            'user_id' => $user->id,
            'product_id' => $productId,
            'quantity' => 1,
            'price' => $product->price,
        ]);

        return redirect()->route('shoppingCart')
            ->with('cart_message', 'Product added to cart successfully!');
    }

    public function destroy($cartId)
    {
        $cartItem = ProductCart::where('id', $cartId)->where('user_id', auth('web')->id())->firstOrFail();

        $cartItem->delete();

        return back()->with('cart_message', 'Product removed from cart successfully!');
    }
}
