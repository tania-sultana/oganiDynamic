<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Card;
use App\Models\Category;
use App\Models\Contact;
use App\Models\HeroSection;
use App\Models\Product;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth('web')->user();
        $herosection = HeroSection::latest()->first();
        $products = Product::all();
        $blogs = Blog::all();
        $categories = Category::all();
        $searchCategories = Category::pluck('name');
        $topRatedProducts = Product::where('rating', '>=', 4.5)->take(3)->get();
        $cards = Card::all();
        return view('frontend.index', compact('user', 'herosection', 'products', 'blogs', 'categories', 'searchCategories', 'topRatedProducts', 'cards'));
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
        $productThumbnail = Product::all();
        $products = Product::all();
        $categories = Category::pluck('name', 'id');
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)->get();

        return view('frontend.shopDetails', compact('product', 'products', 'categories', 'relatedProducts', 'productThumbnail'));
    }

    public function shoppingCart()
    {
        $cartItems = ProductCart::with('product')->where('user_id', auth()->id())->get();
        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('frontend.shoppingCart', compact('cartItems', 'subtotal'));
    }

    public function blogDetails(Blog $blog)
    {
        $latestBlogs = Blog::latest()->take(3)->get();
        return view('frontend.blogDetails', compact('blog', 'latestBlogs'));
    }

    public function checkout()
    {
        $items = Product::all();
        return view('frontend.checkOut', compact('items'));
    }

    public function login()
    {
        return view('auth.login');
    }
}
