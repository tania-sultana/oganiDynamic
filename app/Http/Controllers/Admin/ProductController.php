<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Repositories\MediaRepository;
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
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        $media = null;
        if ($request->hasFile('thumbnail')) {
            $media = MediaRepository::storeByRequest($request->thumbnail, 'product');
        }

         Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'additional_information' => $request->additional_information,
            'weight' => $request->weight,
            'media_id' => $media ? $media->id : null,
        ]);
        return to_route('admin.product.index')->withSuccess('Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
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
        if($media)
            $media->delete();
        return back()->with('success', 'Product deleted successfully!');
    }
}
