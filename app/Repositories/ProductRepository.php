<?php

namespace App\Repositories;

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

    public static function storeByRequest(Request $request): Product
    {
        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'product');
        }

        return self::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'additional_information' => $request->additional_information,
            'weight' => $request->weight,
            'media_id' => $media ? $media->id : null,
        ]);
        return $product;
    }

    public static function updateByRequest(Request $request, Product $product)
    {
        $thumbnail = $product->Media;

        if ($request->hasFile('thumbnail') && $thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->file('thumbnail'),
                'products',
                'image',
                $thumbnail
            );
        } elseif ($request->hasFile('thumbnail') && ! $thumbnail) {
            $thumbnail = MediaRepository::storeByRequest(
                $request->file('thumbnail'),
                'products',
                'image'
            );
        }

        self::update($product, [
            'name' => $request->name,
            'category' => $request->category,
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
