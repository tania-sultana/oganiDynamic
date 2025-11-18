<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $user = auth('web')->user();

        return view('frontend.index', compact('user'));
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function shopDetails()
    {
        return view('frontend.shopDetails');
    }
    public function shoppingCart()
    {
        return view('frontend.shoppingCart');
    }
    public function blogDetails()
    {
        return view('frontend.blogDetails');
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
