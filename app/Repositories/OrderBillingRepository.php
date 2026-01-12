<?php

namespace App\Repositories;

use App\Models\OrderBilling;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class OrderBillingRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return OrderBilling::class;
    }

    public static function storeByRequest(Request $request, $order): OrderBilling
    {
        return self::create([
            'order_id' => $order->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postcode' => $request->postcode,
            'state' => $request->state,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
    }
}
