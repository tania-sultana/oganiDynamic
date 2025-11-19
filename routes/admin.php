<?php

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroSectionController;

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
    Route::post('heroSection', 'store')->name('herosection.store');
    Route::get('heroSection/edit/{herosection?}', 'edit')->name('herosection.edit');
    Route::post('heroSection/update/{herosection?}', 'update')->name('herosection.update');
    Route::get('heroSection/delete/{herosection?}', 'destroy')->name('herosection.destroy');
 });

 Route::controller(CarouselController::class)->group(function () {
    Route::get('carousel', 'index')->name('carousel.index');
    Route::get('carousel/create', 'create')->name('carousel.create');
    Route::post('carousel', 'store')->name('carousel.store');
    Route::get('carousel/edit/{carousel}', 'edit')->name('carousel.edit');
    Route::put('carousel/update/{carousel}', 'update')->name('carousel.update');
    Route::get('carousel/delete/{carousel}', 'destroy')->name('carousel.destroy');
 });




});
