<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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

        return view('frontend.index', compact('user', 'herosection', 'products', 'blogs'));
    }
    public function shop()
    {
        $products = Product::all();
        return view('frontend.shop', compact('products'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('frontend.blog', compact('blogs'));
    }
    public function contact()
    {
        $contact = Contact::latest()->first();
        return view('frontend.contact', compact('contact'));
    }
    public function shopDetails(Product $product)
    {
        return view('frontend.shopDetails', compact('product'));
    }
    public function shoppingCart()
    {
        return view('frontend.shoppingCart');
    }
    public function blogDetails(Blog $blog)
    {
        return view('frontend.blogDetails', compact('blog'));
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
