<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\HeroSection;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $user = auth('web')->user();
        $herosection = HeroSection::latest()->first();
        $products = Product::all();
        $blogs = Blog::all();
        $categories = Category::all();

        return view('frontend.index', compact('user', 'herosection', 'products', 'blogs', 'categories'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('frontend.shop', compact('products'));
    }

    public function blog(Blog $blog)
    {
        $blogs = Blog::all();
        return view('frontend.blog', compact('blog', 'blogs'));
    }

    public function contact()
    {
        $contact = Contact::latest()->first();
        return view('frontend.contact', compact('contact'));
    }

    public function shopDetails(Product $product)
    {
        $products = Product::all();
        $categories = Product::select('category')->distinct()->pluck('category');
        $relatedProducts = Product::where('category', $product->category)
                              ->where('id', '!=', $product->id)
                              ->get();
        return view('frontend.shopDetails', compact('product', 'products', 'categories', 'relatedProducts'));
    }

    public function shoppingCart()
    {
        return view('frontend.shoppingCart');
    }

    public function blogDetails(Blog $blog)
    {
        $latestBlogs = Blog::latest()->take(3)->get();
        return view('frontend.blogDetails', compact('blog', 'latestBlogs'));
    }

    public function checkout()
    {
        return view('frontend.checkOut');
    }

    public function login()
    {
        return view('auth.login');
    }

}
