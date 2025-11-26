<?php

namespace App\Repositories;

use App\Models\Blog;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;

class BlogRepository extends Repository
{

    public static function model()
    {
        return Blog::class;
    }
    public static function storeByRequest(Request $request)
    {
        $firstMedia = null;
        if ($request->hasFile('first_thumbnail')) {
            $firstMedia = MediaRepository::storeByRequest($request->first_thumbnail, 'blogs', 'image');
        }

        $secondMedia = null;

         if ($request->hasFile('second_thumbnail')) {
            $secondMedia = MediaRepository::storeByRequest($request->second_thumbnail, 'blogs', 'image');
        }
        return self::create([
            'first_title' => $request->first_title,
            'second_title' => $request->second_title,
            'name' => $request->name,
            'designation' => $request->designation,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'first_thumbnail_id' => $firstMedia?->id,
            'second_thumbnail_id' => $secondMedia?->id,
        ]);
    }

    public static function updateByRequest(Request $request, Blog $blog)
    {
        $firstThumbnail = $blog->firstMedia;

        if ($request->hasFile('first_thumbnail') && $firstThumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->first_thumbnail,
                'blogs',
                'image',
                $firstThumbnail
            );
        }

        if ($request->hasFile('first_thumbnail') && $firstThumbnail == null) {
            $first_thumbnail = MediaRepository::storeByRequest(
                $request->first_thumbnail,
                'blogs',
                'image'
            );
        }

        $secondThumbnail = $blog->secondMedia;

        if ($request->hasFile('second_thumbnail') && $secondThumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->second_thumbnail,
                'blogs',
                'image',
                $secondThumbnail
            );
        }

        if ($request->hasFile('second_thumbnail') && $secondThumbnail == null) {
            $second_thumbnail = MediaRepository::storeByRequest(
                $request->second_thumbnail,
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
            'tags' => $request->tags,
            'first_thumbnail_id' => $firstThumbnail ? $firstThumbnail->id : null,
            'second_thumbnail_id' => $secondThumbnail ? $secondThumbnail->id : null,
        ]);
    }
}
