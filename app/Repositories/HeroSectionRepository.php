<?php

namespace App\Repositories;

use App\Http\Requests\HeroSectionRequest;
use App\Models\HeroSection;
use Arafat\LaravelRepository\Repository;

class HeroSectionRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return HeroSection::class;
    }

    public static function storeByRequest(HeroSectionRequest $request)
    {
        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'herosection');
        }

        return self::create([
            'header' => $request->header,
            'first_title' => $request->first_title,
            'second_title' => $request->second_title,
            'short_description' => $request->short_description,
            'media_id' => $media?->id,
            'btn_name' => $request->btn_name,
            'btn_url' => $request->btn_url,
        ]);
    }

    public static function updateByRequest(HeroSectionRequest $request, HeroSection $herosection)
    {
        $thumbnail = $herosection->media;
        if ($request->hasFile('thumbnail') && $thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->thumbnail,
                'herosection',
                'image',
                $thumbnail
            );
        }
        if ($request->hasFile('thumbnail') && $thumbnail == null) {
            $thumbnail = MediaRepository::storeByRequest(
                $request->thumbnail,
                'herosection',
                'image'
            );
        }
        self::update($herosection, [
            'header' => $request->header,
            'first_title' => $request->first_title,
            'second_title' => $request->second_title,
            'short_description' => $request->short_description,
            'media_id' => $thumbnail ? $thumbnail->id : null,
            'btn_name' => $request->btn_name,
            'btn_url' => $request->btn_url,

        ]);
    }
}
