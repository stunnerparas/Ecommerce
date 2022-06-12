<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/product/{product:slug}', [ProductController::class, 'product'])->name('product');
Route::resource('cart', CartController::class);
Route::get('/view-items/cart', [CartController::class, 'cartItems'])->name('cartItems.view');
Route::get('/view-items/cart/increase/{id}', [CartController::class, 'cartItemsIncrease'])->name('cartItems.view.increase');
Route::get('/view-items/cart/decrease/{id}', [CartController::class, 'cartItemsDecrease'])->name('cartItems.view.decrease');
Route::get('/view-items/cart/remove/{id}', [CartController::class, 'cartItemsRemove'])->name('cartItems.view.remove');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/confirmation/{order_number}', [CheckoutController::class, 'thankyou'])->name('checkout.thankyou');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'storeRegister'])->name('register.store');

Route::get('/my-account', [FrontendUserController::class, 'myAccount'])->name('myaccount');
Route::get('/order-details/{order?}', [FrontendUserController::class, 'orderDetails'])->name('order.details');
