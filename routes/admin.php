<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| This file contains all routes releated to (admin)
|
|
|
*/


Route::group(['prefix' => 'admin','middleware' => 'admin' ],function() {

    //Profile
    Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::view('/change_password','admin.auth.change_password');
    Route::post('/update_password',[AdminController::class,'update_password']);
    Route::view('/profile','admin.auth.profile');

    Route::get('/',[AdminController::class,'index'])->name('dashboard');


   //Categories
    Route::get('get/category_id/{id}',[CategoryController::class,'get_categories']);
    Route::resource('categories',CategoryController::class);

    // Subcategories
    Route::resource('subcategories',SubcategoryController::class);

    //Brands
    Route::resource('brands',BrandController::class);


    //Coupons
    Route::resource('coupons',CouponController::class);


    //Newsletters
    Route::resource('newsletters',NewsletterController::class)->only('index','store','destroy');

    // Products
    Route::put('products/reverseStatus/{product}',[ProductController::class,'reverseStatus'])->name('products.reverse');
    Route::resource('products',ProductController::class);




    //Sections
    Route::put('sections/removeProduct/{product}',[SectionController::class,'removeProduct'])->name('sections.removeProduct');
    Route::resource('sections',SectionController::class);



    //Orders
    Route::resource('orders',OrderController::class);



    Route::group(['prefix' => 'settings'],function() {

        Route::view('/','admin.pages.settings')->name('settings');

        Route::post('update_settings/',[SettingsController::class,'update_settings'])->name('update_settings');

    });

    //Users
    Route::resource('users',UserController::class)->only('index','destroy');



});

Route::get('send_email',function() {
    $data = [
        'name' => 'BLUD',
        'email' => 'shit@gmail.com'
    ];

    Mail::to('ashrfconq@gmail.com')->send(new \App\Mail\SendOrderEmail($data));
    return 'hi';
});
