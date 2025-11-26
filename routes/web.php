<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/ogani/shop', 'shop')->name('shop');
    Route::get('/ogani/blog', 'blog')->name('blog');
    Route::get('/ogani/contact', 'contact')->name('contact');
    Route::get('/ogani/{product?}/shopDetails', 'shopDetails')->name('shopDetails');
    Route::get('/ogani/shoppingCart', 'shoppingCart')->name('shoppingCart');
    Route::get('/ogani/{blog}/blogDetails', 'blogDetails')->name('blogDetails');

    Route::get('/ogani/checkout', 'checkout')->name('checkOut');
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
        Route::get('/addToCart', 'index')->name('user.addToCart');
        Route::post('/addToCart', 'store')->name('user.addToCart.store');
        Route::get('/updateSubtotal', 'updateSubtotal')->name('user.addToCart.updateSubtotal');
        Route::get('/addToCart/{cart}/delete', 'destroy')->name('user.addToCart.delete');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('checkOut');
        Route::post('/checkout', 'store')->name('checkOut.store');
        Route::get('/checkout/success', 'success')->name('user.checkout.success');
    });
});

// admin routes include
require base_path('routes/admin.php');
