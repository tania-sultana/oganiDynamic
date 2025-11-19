<?php

namespace App\Repositories;

use App\Http\Requests\HeroSectionRequest;
use App\Models\HeroSection;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

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
            'btn_url' => $request->btn_url

        ]);
    }
}
