<?php

namespace App\Repositories;

use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class CarouselRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Carousel::class;
    }

    public static function updateByRequest(CarouselRequest $request, Carousel $carousel)
    {
       $thumbnail = $carousel->media;
        if ($request->hasFile('thumbnail') && $thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->thumbnail,
                'carousel',
                'image',
                $thumbnail
            );
        }
        if ($request->hasFile('thumbnail') && $thumbnail == null) {
            $thumbnail = MediaRepository::storeByRequest(
                $request->thumbnail,
                'carousel',
                'image'
            );
        }
        self::update($carousel, [
            'header' => $request->header,
            'media_id' => $thumbnail ? $thumbnail->id : null,
        ]);
    }
}


