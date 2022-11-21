<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\ForgotPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\TicketController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
use App\Http\Controllers\Frontend\WishlistController;
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

// cart
Route::resource('cart', CartController::class);
Route::get('/view-items/cart', [CartController::class, 'cartItems'])->name('cartItems.view');
Route::get('/view-items/cart/increase/{id}', [CartController::class, 'cartItemsIncrease'])->name('cartItems.view.increase');
Route::get('/view-items/cart/decrease/{id}', [CartController::class, 'cartItemsDecrease'])->name('cartItems.view.decrease');
Route::get('/view-items/cart/remove/{id}', [CartController::class, 'cartItemsRemove'])->name('cartItems.view.remove');

// checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/confirmation/{order_number}', [CheckoutController::class, 'thankyou'])->name('checkout.thankyou');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/business-login', [AuthController::class, 'businessLogin'])->name('business.login');
Route::post('/login/check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'storeRegister'])->name('register.store');

// profile pages
Route::get('/my-account', [FrontendUserController::class, 'myAccount'])->name('myaccount');
Route::get('/order-details/{order}', [FrontendUserController::class, 'orderDetails'])->name('order.details');
Route::get('/change-password', [FrontendUserController::class, 'changePassword'])->name('change.password');
Route::post('/change-password', [FrontendUserController::class, 'changePasswordStore'])->name('change.password.store');
Route::get('/profile/edit', [FrontendUserController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [FrontendUserController::class, 'updateProfile'])->name('profile.update');

Route::get('/shipping-details', [FrontendUserController::class, 'shippingDetails'])->name('shipping.details');
Route::post('/shipping-details/update', [FrontendUserController::class, 'shippingDetailsUpdate'])->name('shipping.details.update');
Route::get('/billing-details', [FrontendUserController::class, 'billingDetails'])->name('billing.details');
Route::post('/billing-details/update', [FrontendUserController::class, 'billingDetailsUpdate'])->name('billing.details.update');

Route::get('/autocomplete-search', [HomeController::class, 'autocompleteSearch'])->name('autocomplete.search');
Route::post('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/page/{page:slug?}', [HomeController::class, 'page'])->name('page');
Route::get('/faqs', [HomeController::class, 'faq'])->name('faq');

// filter page
Route::get('/filter/{type?}/{slug?}', [HomeController::class, 'filter'])->name('filter');

// wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
Route::get('/wishlist/destroy/{wishlist}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');
Route::get('/wishlist/cart/', [WishlistController::class, 'addToCart'])->name('wishlist.cart');

// track order
Route::get('/order-tracker', [HomeController::class, 'orderTracker'])->name('order.tracker');
Route::get('/dhl-tracker', [FrontendUserController::class, 'dhlTracker'])->name('dhl.tracker');

// Helpdesk
Route::get('/help-desk', [TicketController::class, 'helpDesk'])->name('helpDesk');
Route::get('/ticket-Generator/{ticket}', [TicketController::class, 'thankYou'])->name('thankYou');


// Ticket Generator
Route::post('/ticket-Generator', [TicketController::class, 'ticketGenerator'])->name('ticket.generator');
Route::post('/generate-ticket', [TicketController::class, 'generateTicket'])->name('generate.ticket');

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{blog:slug}', [BlogController::class, 'single'])->name('blog');

//Order tracking
Route::get('/order-tracking', [HomeController::class, 'orderTracking'])->name('order-tracking');
Route::get('/order-tracking/other', [HomeController::class, 'orderTrackingOther'])->name('order-tracking-other');


// My orders
Route::get('/my-orders', [FrontendUserController::class, 'myOrders'])->name('my-orders');

// My profile
Route::get('/myProfile', [HomeController::class, 'myProfile'])->name('myProfile');

// Change Profile
Route::get('/myProfile/setting', [HomeController::class, 'changeProfile'])->name('changeProfile');

// About us
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');

// comment
Route::post('/comment/{product}/{parent}', [ProductController::class, 'storeComments'])->name('store.product.comments');

// business register
Route::get('/business-register', [AuthController::class, 'businessRegister'])->name('business.register');
Route::post('/business-register/store', [AuthController::class, 'storeBusinessRegister'])->name('business.register.store');
Route::post('/business-login', [AuthController::class, 'businessLoginCheck'])->name('business.login.check');

//currency setter
Route::post('/set-currency', [HomeController::class, 'setCurrency'])->name('currency.setter');


// Compare
Route::get('/compare', [CompareController::class, 'index'])->name('compare');
Route::get('/compare/auto-complete', [CompareController::class, 'globalSearch'])->name('compare.autocomplete');

// forgot password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// detail
Route::get('/detail/yarn',[HomeController::class,'detailYarn'])->name('detailYarn');
// Knit detail
Route::get('/detail/knit',[HomeController::class,'detailKnit'])->name('detailKnit');
// Knit detail
Route::get('/detail/color',[HomeController::class,'detailColor'])->name('detailColor');

//coupon discount
Route::get('coupon-code/{coupon}', [CheckoutController::class, 'checkCouponCode'])->name('check.coupon.code');

// cashmere type
Route::get('/cashmeretype/vicuna',[HomeController::class,'Typecashmere'])->name('Typecashmere');
// Color card request
Route::get('/Request/colorcard',[HomeController::class,'colorRequest'])->name('colorRequest');
// catalogue request
Route::get('/Request/catalogue',[HomeController::class,'catalogueRequest'])->name('catalogueRequest');
// catalogue request
Route::get('/Request/custom',[HomeController::class,'customMade'])->name('customMade');
// catalogue request
Route::get('/Request/order',[HomeController::class,'orderRequest'])->name('orderRequest');
// private label
Route::get('/Request/private',[HomeController::class,'privateLabel'])->name('privateLabel');
// term and condition
Route::get('/terms/term',[HomeController::class,'termCondition'])->name('termCondition');
// term and condition
Route::get('/cashmeretype/organic',[HomeController::class,'organicCashmere'])->name('organicCashmere');

