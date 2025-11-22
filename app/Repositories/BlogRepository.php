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

    public static function updateByRequest(Request $request , Blog $blog)
    {
       $first_thumbnail = $blog->firstMedia()->first();

        if ($request->hasFile('first_thumbnail') && $first_thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->first_thumbnail,
                'blogs',
                'image',
                $first_thumbnail
            );
        }

        if ($request->hasFile('first_thumbnail') && $first_thumbnail == null) {
            $first_thumbnail = MediaRepository::storeByRequest(
                $request->first_thumbnail,
                'blogs',
                'image'
            );
        }

       $second_thumbnail = $blog->secondMedia()->first();

        if ($request->hasFile('second_thumbnail') && $second_thumbnail) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->second_thumbnail,
                'blogs',
                'image',
                $second_thumbnail
            );
        }

        if ($request->hasFile('second_thumbnail') && $second_thumbnail == null) {
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
            'first_thumbnail_id' => $first_thumbnail ? $first_thumbnail->id : null,
            'second_thumbnail_id' => $second_thumbnail ? $second_thumbnail->id : null,
        ]);
    }
}
