<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeeklyDealsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/checklogin', [AuthController::class, 'checkLogin'])->name('checklogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('admin');
Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change.password')->middleware('admin');
Route::post('/change-password', [AuthController::class, 'changePasswordStore'])->name('change.password.store')->middleware('admin');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('sliders', SliderController::class);
Route::resource('deals', WeeklyDealsController::class);
Route::resource('types', TypeController::class);
Route::resource('categories', CategoryController::class);
Route::resource('attributes', AttributeController::class);
Route::resource('products', ProductController::class);
Route::resource('pages', PageController::class);
Route::resource('faqs', FaqController::class);
Route::resource('users', UserController::class);
Route::post('/product/featured-image/{product}', [ProductController::class, 'featuredImage'])->name('featured.image');
Route::post('/product/gallery/{product}', [ProductController::class, 'gallery'])->name('gallery');
Route::get('/product/image/delete/{id}/{type}', [ProductController::class, 'imageDelete'])->name('image.delete');

Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::post('/company/{company}', [CompanyController::class, 'update'])->name('company.update');

// orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.delete');
Route::get('/orders/{order}', [OrderController::class, 'orderItems'])->name('orders.items');
Route::post('order-status/{order}', [OrderController::class, 'changeOrderStatus'])->name('order.status');

// activity log
Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
