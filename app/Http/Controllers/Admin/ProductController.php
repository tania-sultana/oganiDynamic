<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $products = Product::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%");
        })->paginate(10);

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::latest()->get();

        return view('admin.product.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        ProductRepository::storeByRequest($request);

        return to_route('admin.product.index')->withSuccess('Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::latest()->get();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        ProductRepository::updateByRequest($request, $product);

        return to_route('admin.product.index')->withSuccess('Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $media = $product->media;

        if ($media && Storage::exists($media->src)) {
            Storage::delete($media->src);
        }

        $product->delete();

        if ($media) {
            $media->delete();
        }

        return back()->with('success', 'Product deleted successfully!');
    }
}
