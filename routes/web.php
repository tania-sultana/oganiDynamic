<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(App\Http\Controllers\FrontendController::class)->group(function () {

// });
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/ogani/shop', 'shop')->name('ogani.shop');
    Route::get('/ogani/blog', 'blog')->name('ogani.blog');
    Route::get('/ogani/contact', 'contact')->name('ogani.contact');
    Route::get('/ogani/shopDetails', 'shopDetails')->name('ogani.shopDetails');
    Route::get('/ogani/shoppingCart', 'shoppingCart')->name('ogani.shoppingCart');
    Route::get('/ogani/blogDetails', 'blogDetails')->name('ogani.blogDetails');
    Route::get('/ogani/checkout', 'checkout')->name('ogani.checkOut');

});
