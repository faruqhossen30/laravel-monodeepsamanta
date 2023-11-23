<?php

use App\Http\Controllers\Admin\Blog\BlogcategoryController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('blogcategory', BlogcategoryController::class);
});
