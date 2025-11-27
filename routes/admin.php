<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['role:admin'])->name('admin.')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(HeroSectionController::class)->group(function () {
        Route::get('hero-section', 'index')->name('herosection.index');
        Route::get('hero-section/create', 'create')->name('herosection.create');
        Route::post('hero-section/store', 'store')->name('herosection.store');
        Route::get('hero-section/edit/{herosection?}', 'edit')->name('herosection.edit');
        Route::post('hero-section/update/{herosection?}', 'update')->name('herosection.update');
        Route::get('hero-section/delete/{herosection?}', 'destroy')->name('herosection.destroy');
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

    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index')->name('category.index');
        Route::get('category/create', 'create')->name('category.create');
        Route::post('category/store', 'store')->name('category.store');
        Route::get('category/edit/{category}', 'edit')->name('category.edit');
        Route::put('category/update/{category}', 'update')->name('category.update');
        Route::get('category/delete/{category}', 'destroy')->name('category.destroy');
    });

    Route::controller(CardController::class)->group(function () {
        Route::get('card', 'index')->name('card.index');
        Route::get('card/create', 'create')->name('card.create');
        Route::post('card/store', 'store')->name('card.store');
        Route::get('card/edit/{card}', 'edit')->name('card.edit');
        Route::put('card/update/{card}', 'update')->name('card.update');
        Route::get('card/delete/{card}', 'destroy')->name('card.destroy');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('order', 'index')->name('order.index');
        Route::post('order/store', 'store')->name('order.store');
        Route::get('order/edit/{order}', 'edit')->name('order.edit');
        Route::put('order/update/{order}', 'update')->name('order.update');
        Route::get('order/delete/{order}', 'destroy')->name('order.destroy');
    });
});
