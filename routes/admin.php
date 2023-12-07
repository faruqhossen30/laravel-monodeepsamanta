<?php

use App\Http\Controllers\Admin\Blog\BlogcategoryController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Portfolio\PortfolioController;
use App\Http\Controllers\Admin\Review\ReviewController;
use App\Http\Controllers\Admin\Review\ReviewtypeController;
use App\Http\Controllers\Admin\Service\FeatureController;
use App\Http\Controllers\Admin\Service\ServiceController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('blogcategory', BlogcategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('reviewtype', ReviewtypeController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('feature', FeatureController::class);
});
