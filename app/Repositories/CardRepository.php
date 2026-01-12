<?php

namespace App\Repositories;

use App\Models\Card;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class CardRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Card::class;
    }

    public static function storeByRequest(Request $request)
    {
        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'card');
        }

        return self::create([
            'category_id' => $request->category,
            'offer' => $request->offer,
            'btn_name' => $request->btn_name,
            'btn_url' => $request->btn_url,
            'media_id' => $media?->id,
        ]);
    }

    public static function updateByRequest(Request $request, Card $card)
    {
        $thumbnail = $card->Media;
        if ($request->hasFile('thumbnail') && $thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->file('thumbnail'),
                'cards',
                'image',
                $thumbnail
            );
        } elseif ($request->hasFile('thumbnail') && ! $thumbnail) {
            $thumbnail = MediaRepository::storeByRequest(
                $request->file('thumbnail'),
                'cards',
                'image'
            );
        }
        self::update($card, [
            'category' => $request->category,
            'offer' => $request->offer,
            'btn_name' => $request->btn_name,
            'btn_url' => $request->btn_url,
            'thumbnail_id' => $thumbnail?->id ?? $card->thumbnail_id,
        ]);
    }
}
