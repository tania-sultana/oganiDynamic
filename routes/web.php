<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/shop-details/{product?}', 'shopDetails')->name('shopDetails');
    Route::get('/shopping-cart', 'shoppingCart')->name('shoppingCart');
    Route::get('/blog-details/{blog}', 'blogDetails')->name('blogDetails');
    Route::get('/checkout', 'checkout')->name('checkOut');
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
        Route::get('/add-to-cart', 'index')->name('user.addToCart');
        Route::post('/add-to-cart/store', 'store')->name('user.addToCart.store');
        Route::get('/add-to-cart/sub-total', 'updateSubtotal')->name('user.addToCart.updateSubtotal');
        Route::get('/add-to-cart/delete/{cart}', 'destroy')->name('user.addToCart.delete');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/user-checkout', 'index')->name('user.checkOut');
        Route::post('/user-checkout/store', 'store')->name('checkOut.store');
        Route::get('/user-checkout/success', 'success')->name('user.checkout.success');
    });
});

// admin routes include
require base_path('routes/admin.php');
