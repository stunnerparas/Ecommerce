<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ComponentController;
use App\Http\Controllers\Admin\ComponentTypeController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HelpCenterController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\ManageShippingController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeeklyDealsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BusinessController;
use App\Http\Controllers\Admin\CategoryController;

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
Route::resource('blogs', BlogController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('coupon', CouponController::class);
Route::resource('admins', AdminController::class);
Route::resource('roles', RoleController::class);
Route::resource('manageshipping', ManageShippingController::class);
Route::resource('components', ComponentController::class);
Route::resource('helpcenter', HelpCenterController::class);
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

// newsletter
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/ticket/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('/ticket/complete/{ticket}', [TicketController::class, 'completeTicket'])->name('tickets.complete');

// business users
Route::get('/business-users', [BusinessController::class, 'index'])->name('business.users');
Route::get('/business-users/edit/{user}', [BusinessController::class, 'edit'])->name('business.users.edit');
Route::post('/business-users/update/{user}', [BusinessController::class, 'update'])->name('business.users.update');

// reports
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

// global search
Route::get('/search-results', [DashboardController::class, 'globalSearch'])->name('global.search');
Route::get('/filter', [DashboardController::class, 'globalSearchPage'])->name('global.search.page');

// remove category images
Route::get('/remove/{category}/{type}', [CategoryController::class, 'removeImage'])->name('remove.category.image');

// component types
Route::get('/componenttypes/{component}', [ComponentTypeController::class, 'index'])->name('componenttypes.index');
Route::get('/componenttypes/{component}/create', [ComponentTypeController::class, 'create'])->name('componenttypes.create');
Route::post('/componenttypes/{component}/store', [ComponentTypeController::class, 'store'])->name('componenttypes.store');
Route::get('/componenttypes/{componenttype}/edit', [ComponentTypeController::class, 'edit'])->name('componenttypes.edit');
Route::put('/componenttypes/{componenttype}/update', [ComponentTypeController::class, 'update'])->name('componenttypes.update');
Route::delete('/componenttypes/{componenttype}', [ComponentTypeController::class, 'destroy'])->name('componenttypes.destroy');

// requests
Route::get('/color-cards', [RequestController::class, 'colorCards'])->name('colorcards');
Route::get('/color-cards/{colorCard}', [RequestController::class, 'colorCardShow'])->name('colorcards.show');
Route::get('/color-cards/complete/{colorCard}', [RequestController::class, 'completeColorCard'])->name('colorcards.complete');

Route::get('/catalogue', [RequestController::class, 'catalogue'])->name('catalogue');
Route::get('/catalogue/{catalogueRequest}', [RequestController::class, 'catalogueShow'])->name('catalogue.show');
Route::get('/catalogue/complete/{catalogueRequest}', [RequestController::class, 'completeCatalogue'])->name('catalogue.complete');

Route::get('/custom-made', [RequestController::class, 'custom'])->name('custom');
Route::get('/custom-made/{customMade}', [RequestController::class, 'customShow'])->name('custom.show');
Route::get('/custom-made/complete/{customMade}', [RequestController::class, 'customCatalogue'])->name('custom.complete');

Route::get('/made-to-order', [RequestController::class, 'madeToOrder'])->name('madetoorder');
Route::get('/made-to-order/{madeToOrder}', [RequestController::class, 'madeToOrderShow'])->name('madetoorder.show');
Route::get('/made-to-order/complete/{madeToOrder}', [RequestController::class, 'madeToOrderComplete'])->name('madetoorder.complete');
