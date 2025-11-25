<?php

namespace App\Repositories;

use App\Models\Order;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        //return User::class;
    }

    public static function storeByRequest(Request $request, $user): Order
    {
       return self::create([
            'user_id' => $user->id,
            'order_code' => Str::random(8),
            'total_price' => $request->total,
            'payment_method' => $request->payment_method,
            'payment_status' => 
            'status' => 'pending',

       ]);
    }
}
