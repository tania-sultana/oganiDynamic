<?php

namespace App\Repositories;

use App\Enums\OrderStatusEnums;
use App\Enums\PaymentMethodEnums;
use App\Enums\PaymentStatusEnums;
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
        return Order::class;
    }

    public static function storeByRequest(Request $request, $user): Order
    {
        return self::create([
            'user_id' => $user->id,
            'order_code' => strtoupper(Str::random(12)),
            'total_price' => $request->total_price,
            'payment_method' => PaymentMethodEnums::CASH->value,
            'payment_status' => PaymentStatusEnums::UNPAID->value,
            'status' => OrderStatusEnums::PENDING->value
        ]);
    }
}
