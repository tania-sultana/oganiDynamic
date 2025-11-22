<?php

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;


Route::prefix('/admin')->middleware(['web'])->name('admin.')->group(function () {

    Route::middleware(['role:admin'])->group(function () {

     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

 Route::controller(HeroSectionController::class)->group(function () {
    Route::get('heroSection', 'index')->name('herosection.index');
    Route::get('heroSection/create', 'create')->name('herosection.create');
    Route::post('heroSection/store', 'store')->name('herosection.store');
    Route::get('heroSection/edit/{herosection?}', 'edit')->name('herosection.edit');
    Route::post('heroSection/update/{herosection?}', 'update')->name('herosection.update');
    Route::get('heroSection/delete/{herosection?}', 'destroy')->name('herosection.destroy');
 });

 Route::controller(CarouselController::class)->group(function () {
    Route::get('carousel', 'index')->name('carousel.index');
    Route::get('carousel/create', 'create')->name('carousel.create');
    Route::post('carousel/store', 'store')->name('carousel.store');
    Route::get('carousel/edit/{carousel}', 'edit')->name('carousel.edit');
    Route::put('carousel/update/{carousel}', 'update')->name('carousel.update');
    Route::get('carousel/delete/{carousel}', 'destroy')->name('carousel.destroy');
 });

 Route::controller(ProductController::class)->group(function () {
    Route::get('product', 'index')->name('product.index');
    Route::get('product/create', 'create')->name('product.create');
    Route::post('product/store', 'store')->name('product.store');
    Route::get('product/show/{product}', 'show')->name('product.show');
    Route::get('product/edit/{product}', 'edit')->name('product.edit');
    Route::put('product/update/{product}', 'update')->name('product.update');
    Route::get('product/delete/{product}', 'destroy')->name('product.destroy');
 });

 Route::controller(BlogController::class)->group(function () {
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/create', 'create')->name('blog.create');
    Route::post('blog/store', 'store')->name('blog.store');
    Route::get('blog/show/{blog}', 'show')->name('blog.show');
    Route::get('blog/edit/{blog}', 'edit')->name('blog.edit');
    Route::put('blog/update/{blog}', 'update')->name('blog.update');
    Route::get('blog/delete/{blog}', 'destroy')->name('blog.destroy');

    Route::get('/blog/{blog}/social-links', 'socialLink')->name('blog.socialLink.index');
    Route::post('/blog/{blog}/socialL-link-update', 'socialLinkUpdate')->name('blog.socialLink.store');
 });

 Route::controller(ContactController::class)->group(function () {
    Route::get('contact', 'index')->name('contact.index');
    Route::post('contact/update/{contact?}', 'update')->name('contact.store');

 });



});
