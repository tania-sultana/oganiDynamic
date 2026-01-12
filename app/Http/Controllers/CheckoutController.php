<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\ProductCart;
use App\Repositories\OrderBillingRepository;
use App\Repositories\OrderProductRepository;
use App\Repositories\OrderRepository;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = auth('web')->user();
        $items = ProductCart::where('user_id', $user->id)->get();

        return view('frontend.checkOut', compact('items', 'user'));
    }

    public function store(OrderRequest $request)
    {
        $user = auth('web')->user();
        $catItems = ProductCart::where('user_id', $user->id)->get();

        $order = OrderRepository::storeByRequest($request, $user);

        foreach ($catItems ?? [] as $product) {
            OrderProductRepository::storeByRequest($request, $order, $product);
        }

        $orderBilling = OrderBillingRepository::storeByRequest($request, $order);

        ProductCart::where('user_id', $user->id)->delete();

        return to_route('user.checkout.success')->with('success', 'Order placed successfully!');
    }

    public function success()
    {
        return view('frontend.checkoutSuccess');
    }
}
