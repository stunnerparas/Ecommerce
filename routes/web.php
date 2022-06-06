<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
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
