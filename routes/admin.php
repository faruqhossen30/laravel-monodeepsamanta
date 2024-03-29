<?php

use App\Http\Controllers\Admin\Blog\BlogcategoryController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Portfolio\PortfolioController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\SoftwareController;
use App\Http\Controllers\Admin\Review\ReviewController;
use App\Http\Controllers\Admin\Review\ReviewtypeController;
use App\Http\Controllers\Admin\Service\FeatureController;
use App\Http\Controllers\Admin\Service\ServiceController;
use App\Http\Controllers\Admin\Service\ServicefaqController;
use App\Http\Controllers\Admin\Service\ServicepackageController;
use App\Http\Controllers\Admin\Service\ServicesliderController;
use App\Http\Controllers\Admin\Setting\PageSectionSetting;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Gallery\GalleryCategoryController;
use App\Http\Controllers\Gallery\GalleryController;
use App\Http\Controllers\ServicepageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('blogcategory', BlogcategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('post', PostController::class);
    Route::resource('software', SoftwareController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('reviewtype', ReviewtypeController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('gallery-category', GalleryCategoryController::class);

    Route::get('portfolio/{id}/delete',[ PortfolioController::class, 'removeImage'])->name('removeportfolionimage');

    Route::resource('service', ServiceController::class);
    Route::get('service/{id}/create-faq', [ServicefaqController::class, 'create'])->name('service.faq.create');
    Route::post('service/{id}/create-faq', [ServicefaqController::class, 'store'])->name('service.faq.store');

    Route::get('service/{id}/create-package', [ServicepackageController::class, 'create'])->name('service.package.create');
    Route::post('service/{id}/create-package', [ServicepackageController::class, 'store'])->name('service.package.store');

    Route::get('service/{id}/create-slider', [ServicesliderController::class, 'create'])->name('service.slider.create');
    Route::post('service/{id}/create-slider', [ServicesliderController::class, 'store'])->name('service.slider.store');

    Route::get('service/{id}/delete',[ ServicesliderController::class, 'removeImage'])->name('removesliderimage');

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/chat-section', [PageSectionSetting::class, 'chatSectionCreate'])->name('setting.chatsection');
        Route::post('/chat-section', [PageSectionSetting::class, 'chatSectionStore'])->name('setting.chatsection.store');
        Route::get('/profile-setting', function(){
            return view('admin.setting.profilesetting');
        })->name('profile.setting');
    });

});
