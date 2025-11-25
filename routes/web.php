<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/ogani/shop', 'shop')->name('ogani.shop');
    Route::get('/ogani/blog', 'blog')->name('ogani.blog');
    Route::get('/ogani/contact', 'contact')->name('ogani.contact');
    Route::get('/ogani/{product?}/shopDetails', 'shopDetails')->name('ogani.shopDetails');
    Route::get('/ogani/shoppingCart', 'shoppingCart')->name('ogani.shoppingCart');
    Route::get('/ogani/{blog}/blogDetails', 'blogDetails')->name('ogani.blogDetails');

    Route::get('/ogani/checkout', 'checkout')->name('ogani.checkOut');
    Route::get('/login', 'login')->name('login.create');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register/create', 'createRegister')->name('register.create');
    Route::get('/register/store', 'storeRegister')->name('register.store');

    Route::post('/login', 'login')->name('user.login');
    Route::get('/logout', 'logout')->name('user.logout');
});

Route::middleware('role:user')->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('/addToCart', 'index')->name('ogani.addToCart');
        Route::post('/addToCart', 'store')->name('ogani.addToCart.store');
        Route::get('/updateSubtotal', 'updateSubtotal')->name('ogani.addToCart.updateSubtotal');
        Route::get('/addToCart/{cart}/delete', 'destroy')->name('ogani.addToCart.delete');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('ogani.checkout');
        Route::post('/checkout', 'store')->name('ogani.checkout.store');
        Route::get('/checkout/success', 'success')->name('ogani.checkout.success');
    });
});

// admin routes include
require base_path('routes/admin.php');
