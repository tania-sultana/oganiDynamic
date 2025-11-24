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
        } elseif ($request->hasFile('thumbnail') && !$thumbnail) {
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
            // 'media_id' => $thumbnail ? $thumbnail->id : null,
        ]);
    }
}
