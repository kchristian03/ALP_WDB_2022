<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('development.development');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//route dibawah ini digunakan selama proses development -- USER

// Route::get('/shop-left-sidebar', function () {
//     return view('users.shop-left-sidebar');
// });
Route::resource('cartdetail', CartController::class);
Route::get('/shop-left-sidebar', [ProductController::class, 'index']);

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/single-product/{product}', [ProductController::class, 'show']);

Route::get('/single-product' , [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/blog-details-sidebar', function () {
    return view('users.blog-details-sidebar');
});

Route::get('/blog-details', function () {
    return view('users.blog-details');
});

Route::get('/blog-left-sidebar', function () {
    return view('users.blog-left-sidebar');
});

Route::get('/blog-right-sidebar', function () {
    return view('users.blog-right-sidebar');
});

Route::get('/blog', function () {
    return view('users.blog');
});

Route::get('/cart', function () {
    return view('users.cart');
});

Route::get('/checkout', function () {
    return view('users.checkout');
});

Route::get('/compare', function () {
    return view('users.compare');
});

Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/faq', function () {
    return view('users.faq');
});

Route::get('/index-2', function () {
    return view('users.index-2');
});

Route::get('/index', function () {
    return view('users.index');
});

Route::get('/my-account', function () {
    return view('users.my-account');
});

Route::get('/shop-grid', function () {
    return view('users.shop-grid');
});

// Route::get('/shop-left-sidebar', function () {
//     return view('users.shop-left-sidebar');
// });

Route::get('/shop-list-fullwidth', function () {
    return view('users.shop-list-fullwidth');
});

Route::get('/shop-list-left-sidebar', function () {
    return view('users.shop-list-left-sidebar');
});

Route::get('/shop-list-right-sidebar', function () {
    return view('users.shop-list-right-sidebar');
});

Route::get('/shop-right-sidebar', function () {
    return view('users.shop-right-sidebar');
});

Route::get('/single-product-affiliate', function () {
    return view('users.single-product-affiliate');
});

Route::get('/single-product-gallery-left', function () {
    return view('users.single-product-gallery-left');
});

Route::get('/single-product-gallery-right', function () {
    return view('users.single-product-gallery-right');
});

Route::get('/single-product-group', function () {
    return view('users.single-product-group');
});

Route::get('/single-product-normal', function () {
    return view('users.single-product-normal');
});

Route::get('/single-product-sale', function () {
    return view('users.single-product-sale');
});

Route::get('/single-product-slider', function () {
    return view('users.single-product-slider');
});

Route::get('/single-product-sticky-left', function () {
    return view('users.single-product-sticky-left');
});

Route::get('/single-product-sticky-right', function () {
    return view('users.single-product-sticky-right');
});

Route::get('/single-product-tab-style-left', function () {
    return view('users.single-product-tab-style-left');
});

Route::get('/single-product-tab-style-right', function () {
    return view('users.single-product-tab-style-right');
});



Route::get('/wishlist', function () {
    return view('users.wishlist');
});
