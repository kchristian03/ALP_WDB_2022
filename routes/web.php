<?php

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
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/cart', function () {
    return view('users.cart');
});

Route::get('/cart', function () {
    return view('users.cart');
});

Route::get('/checkout', function () {
    return view('users.checkout');
});

Route::get('/contact', function () {
    return view('users.contact');
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

Route::get('/single-product', function () {
    return view('users.single-product');
});

Route::get('/wishlist', function () {
    return view('users.wishlist');
});
