<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\OrderBilling;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductCart;
use App\Repositories\OrderBillingRepository;
use App\Repositories\OrderProductRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        $catItem = ProductCart::where('user_id', $user->id)->get();

        dd($user , $catItem);

        $order = OrderRepository::storeByRequest($request, $user);

        $orderProduct = OrderProductRepository::storeByRequest($request, $order->id);
        $orderBilling = OrderBillingRepository::storeByRequest($request, $order->id);


















        // $cart = session('cart', []);
        // if (empty($cart)) {
        //     return back()->with('error', 'Your cart is empty!');
        // }

        // $data = $request->validated();

        // DB::beginTransaction();
        // try {
        //     $order = Order::create([
        //         'user_id'        => auth()->id(),
        //         'order_code'     => 'ORD-' . strtoupper(Str::random(8)),
        //         'total_price'    => collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']),
        //         'payment_method' => $data['payment_method'],
        //         'payment_status' => 'pending',
        //         'status'         => 'processing',
        //     ]);

        //     foreach ($cart as $item) {
        //         OrderProduct::create([
        //             'order_id'    => $order->id,
        //             'product_id'  => $item['product_id'],
        //             'price'       => $item['price'],
        //             'quantity'    => $item['quantity'],
        //             'total_price' => $item['price'] * $item['quantity'],
        //         ]);
        //     }

        //     OrderBilling::create([
        //         'order_id'   => $order->id,
        //         'user_id'    => auth()->id(),
        //         'first_name' => $data['first_name'],
        //         'last_name'  => $data['last_name'],
        //         'country'    => $data['country'],
        //         'address'    => $data['address'],
        //         'city'       => $data['city'],
        //         'state'      => $data['state'],
        //         'postcode'   => $data['postcode'],
        //         'phone'      => $data['phone'],
        //         'email'      => $data['email'],
        //     ]);

        //     DB::commit();

        //     session()->forget('cart');

        //     return redirect()->route('ogani.checkout.success');
        // } catch (\Throwable $e) {
        //     DB::rollBack();
        //     return back()->with('error', 'Something went wrong: ' . $e->getMessage());
        // }
    }

    public function success()
    {
        return view('frontend.checkout-success');
    }
}



