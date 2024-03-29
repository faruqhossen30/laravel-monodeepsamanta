<?php

use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\Admin\PortfoliocategorypageController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\PortfoliopageController;
use App\Http\Controllers\PostpageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewpageController;
use App\Http\Controllers\ServicepageController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('portfolio', [PortfoliopageController::class, 'index'])->name('portfoliopage');
Route::get('portfolio/{slug}', [PortfoliopageController::class, 'singlePortfolio'])->name('singleportfolio');
Route::get('portfolio/category/{slug}', [PortfoliocategorypageController::class, 'index'])->name('portfoliocategorypage');
Route::get('about-me', [AboutpageController::class, 'index'])->name('aboutpage');
Route::get('services', [ServicepageController::class, 'index'])->name('servicepage');
Route::get('services/{slug}', [ServicepageController::class, 'singleService'])->name('singleservice');
Route::get('reviews', [ReviewpageController::class, 'index'])->name('reviewpage');
// Route::get('blogs', [BlogpageController::class, 'index'])->name('blogpage');
// Route::get('blog/{slug}', [BlogpageController::class, 'singleBlog'])->name('singleblog');

Route::get('blogs', [PostpageController::class, 'index'])->name('blogpage');
Route::get('blog/{slug}', [PostpageController::class, 'singlePost'])->name('singleblog');

// Route::get('contact', [ContactpageController::class, 'index'])->name('contactpage');

Route::get('cart', [CardController::class, 'index'])->name('cartpage');
Route::get('cart/{price}/{id}', [CardController::class, 'store'])->name('cartstore');
Route::get('cart/{id}', [CardController::class, 'remove'])->name('cartremove');


Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkoutpage');
// Route::get('stripe', [StripePaymentController::class, 'stripe']);
// Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
