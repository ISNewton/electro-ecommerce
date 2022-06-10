<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ProductsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WishlistController;
use App\Models\Admin\Subcategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| This file contains all routes releated to front-end design (user)
|
|
|
*/

Route::get('/',[UserController::class,'index'])->name('home');


Route::get('login',[UserController::class,'display_login_page'])->name('login');

Route::get('register',[UserController::class,'display_login_page'])->name('register');

Route::group(['middleware' => 'auth'],function() {

    Route::get('my_account',[UserController::class,'display_my_account_page'])->name('my_account');
    Route::post('update_profile',[UserController::class,'update_profile'])->name('update_profile');

    Route::get('logout',[UserController::class,'logout'])->name('logout');
});



Route::post('/signup_email_subsription',[UserController::class,'signup_email_subsription'])->name('signup_email_subsription');

///////////////////////////
//  Wishlist \\
Route::get('/wishlist',[WishlistController::class,'get_wishlist'])->name('wishlist');


Route::get('/add_to_wishlist/{id}',[WishlistController::class,'add_to_wishlist']);
Route::get('/product/add_to_wishlist/{id}',[WishlistController::class,'add_to_cart']);

Route::post('/delete_product_from_wishlist/{id}',[WishlistController::class,'delete_product_from_wishlist']);

/////////////////////////
// Cart \\
Route::view('/cart','user.pages.cart')->name('cart');
//Route::get('/cart',fn () => dd(Session::get('cart')[0]['product']->price))->name('cart');

Route::get('/add_to_cart/{id}',[CartController::class,'add_to_cart']);

Route::post('/delete_product_from_cart/{id}',[CartController::class,'remove_product_from_cart']);

Route::post('/edit_product_quantity/{id}',[CartController::class,'edit_product_quantity']);

Route::post('/apply_coupon',[CartController::class,'apply_coupon'])->name('apply_coupon');

Route::post('/delete_coupon',[CartController::class,'delete_coupon'])->name('delete_coupon');


////////////////////////
// Product \\

Route::get('product/{id}',[ProductsController::class,'get_product']);
Route::get('search_product/{name}',[ProductsController::class,'search_product']);



///////////////////////////
// Checkout \\
Route::get('checkout',[UserController::class,'display_checkout_page'])->name('checkout');

Route::post('place_order',[UserController::class,'place_order'])->name('place_order');



// Category \\
Route::get('category/{id}',[UserController::class,'display_category_page'])->name('category');



// Subcategory \\
Route::get('subcategory/{id}',[UserController::class,'display_subcategory_page']);



// Static pages
Route::view('faq','user.pages.faq')->name('faq');
Route::view('terms_and_conditions','user.pages.terms_and_conditions')->name('terms_and_conditions');

Route::view('track_your_order','user.pages.track_your_order')->name('track_your_order');
Route::post('track_your_order',[UserController::class,'track_order'])->name('track_order');


