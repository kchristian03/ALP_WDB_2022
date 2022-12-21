
<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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
    return view('users.index');
    // return view('development.development');
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

Route::group(['middleware' => ['user']], function() {
    Route::resource('adress', AdressController::class);
  });
Route::resource('cartdetail', CartDetailController::class)->middleware('user');

Route::resource('productreview', ProductReviewController::class)->middleware('auth');



Route::resource('transactions', TransactionController::class)->middleware('user');
Route::get('/products', [ProductController::class, 'index']);

Route::get('/laravel', function () {
    return view('index');
});

Route::get('/adress',function(){
    return view ('users.adress');
});

Route::get('/single-product/{product}', [ProductController::class, 'show']);

Route::get('/orderdetail/{transaction}', [TransactionController::class, 'showorderdetail']);

Route::get('/single-product/{category}', [ProductController::class, 'categorized']);

Route::get('/single-product' , [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/checkout', [TransactionController::class, 'seecheckout']);

Route::get('/cart', function () {
    return view('users.cart');
});


Route::get('/categories', [CategoryController::class, 'index']);


Route::get('/single-product', function () {
    return view('users.single-product');
});

Route::get('/wishlist', function () {
    return view('users.wishlist');
});

Route::get('/my-account', [ProfileController::class, 'accountdash']);

Route::get('/contact', function () {
    return view('users.contact');
});
