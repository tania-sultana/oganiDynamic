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


    public static function updateByRequest(Request $request, Blog $blog)
{
    $first_thumbnail = $blog->firstMedia;
    $second_thumbnail = $blog->secondMedia;

    if ($request->hasFile('first_thumbnail') && $first_thumbnail) {
        $first_thumbnail = MediaRepository::updateByRequest(
            $request->file('first_thumbnail'),
            'blogs',
            'image',
            $first_thumbnail
        );
    } elseif ($request->hasFile('first_thumbnail') && !$first_thumbnail) {
        $first_thumbnail = MediaRepository::storeByRequest(
            $request->file('first_thumbnail'),
            'blogs',
            'image'
        );
    }

    if ($request->hasFile('second_thumbnail') && $second_thumbnail) {
        $second_thumbnail = MediaRepository::updateByRequest(
            $request->file('second_thumbnail'),
            'blogs',
            'image',
            $second_thumbnail
        );
    } elseif ($request->hasFile('second_thumbnail') && !$second_thumbnail) {
        $second_thumbnail = MediaRepository::storeByRequest(
            $request->file('second_thumbnail'),
            'blogs',
            'image'
        );
    }

    self::update($blog, [
        'first_title' => $request->first_title,
        'second_title' => $request->second_title,
        'name' => $request->name,
        'designation' => $request->designation,
        'short_description' => $request->short_description,
        'description' => $request->description,
        'category' => $request->category,
        'tag' => $request->tag,
        'first_thumbnail_id' => $first_thumbnail ? $first_thumbnail->id : null,
        'second_thumbnail_id' => $second_thumbnail ? $second_thumbnail->id : null,
    ]);
}



}
