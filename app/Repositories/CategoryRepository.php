<?php

namespace App\Repositories;

use App\Models\Category;
use Arafat\LaravelRepository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Category::class;
    }
    public  static function storeByRequest(Request $request)
    {
        return self::create([
            'name' => $request->name,
        ]);
    }

    public static function updateByRequest(Request $request, Category $category)
    {
        self::update($category, [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
    }
}
