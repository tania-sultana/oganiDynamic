<?php

namespace App\Repositories;

use App\Http\Requests\ProductRequest;
use App\Models\Blog;
use App\Models\Product;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class ProductRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Product::class;
    }


    public static function updateByRequest(Request $request, Product $product)
{
    $thumbnail = $product->Media;
    // $second_thumbnail = $blog->secondMedia;

    if ($request->hasFile('thumbnail') && $thumbnail) {
        $thumbnail = MediaRepository::updateByRequest(
            $request->file('thumbnail'),
            'blogs',
            'image',
            $thumbnail
        );
    } elseif ($request->hasFile('thumbnail') && !$thumbnail) {
        $thumbnail = MediaRepository::storeByRequest(
            $request->file('thumbnail'),
            'blogs',
            'image'
        );
    }



    self::update($product, [
    'name' => $request->name,
    'price' => $request->price,
    'discount_price' => $request->discount_price,
    'short_description' => $request->short_description,
    'description' => $request->description,
    'additional_information' => $request->additional_information,
    'weight' => $request->weight,
    'thumbnail_id' => $thumbnail?->id ?? $product->thumbnail_id,
]);

}



}
