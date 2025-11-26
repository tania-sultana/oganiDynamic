<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
         $user = auth('web')->user();
        $orders = Order::latest()->get();
        return view('admin.order.index', compact('orders'));
    }
}



