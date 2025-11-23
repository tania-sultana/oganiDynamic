<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
// use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
         $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,

        ]);

        return to_route('admin.category.index')->withSuccess('Category created successfully!');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

   public function update(CategoryRequest $request, Category $category)
{
    $category->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
    ]);

    return to_route('admin.category.index')->withSuccess('Category updated successfully!');
}

public function destroy(Category $category)
{
    $category->delete();
    return back()->with('success', 'Category deleted successfully!');

}
}
