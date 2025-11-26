<?php

namespace App\Repositories;

use App\Models\OrderProduct;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class OrderProductRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return OrderProduct::class;
    }

    public static function storeByRequest(Request $request, $order, $product): OrderProduct
    {
        $totalPrice = $product->price * $product->quantity;
        return self::create([
            'product_id' => $product->product_id,
            'price' => $product->price,
            'quantity' => $product->quantity,
            'total_price' => $totalPrice,
        ]);
    }
}
