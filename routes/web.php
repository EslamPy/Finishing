<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LatestNewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardProduct;
use App\Http\Controllers\Admin\EditProductController;
use App\Http\Controllers\Admin\AddProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\PaypalController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/welcome-with-news', [WelcomeController::class, 'withNews'])->name('welcome.withNews');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');


Route::get('/products/{id?}', [ProductsController::class, 'show'])->name('products');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/latest-news', 'NewsController@latestNews')->name('latest_news');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/404', [ErrorController::class, 'index'])->name('404');

Route::get('/latest', [LatestNewsController::class, 'index'])->name('latest');

Route::get('/dash', [DashboardController::class, 'index'])->name('dash');
Route::get('/product', [DashboardProduct::class, 'index'])->name('product');
Route::delete('/products/delete', [DashboardProduct::class, 'delete'])->name('products.delete');
Route::delete('/products/delete/{id}', [DashboardProduct::class, 'deleteSingle'])->name('products.delete.single');

Route::get('/edit', [EditProductController::class, 'index'])->name('edit');
Route::get('/edit/{id}', [EditProductController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [EditProductController::class, 'update'])->name('update');

Route::get('/add', [AddProductController::class, 'index'])->name('add');
Route::post('/store', [AddProductController::class, 'store'])->name('store');

// Authentication Routes
Auth::routes();

// Custom Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::get('/password/reset', [ResetPasswordController::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('payment', [PaypalController::class, 'payment'])->name('payment');
Route::get('cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');