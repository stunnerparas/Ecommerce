<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/checklogin', [AuthController::class, 'checkLogin'])->name('checklogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change.password');
Route::post('/change-password', [AuthController::class, 'changePasswordStore'])->name('change.password.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('sliders', SliderController::class);
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
