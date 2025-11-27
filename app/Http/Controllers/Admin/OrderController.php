<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth('web')->user();
        $orders = Order::latest()->get();

        return view('admin.order.index', compact('orders'));
    }
}
