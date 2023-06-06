<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController; 

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// User Page Routes

Route::controller(HomeController::class)->group(function (){
    Route::get('/','index');
    Route::get('/redirect','redirect');
    Route::get('/logout','logout');

    // Products Part
    Route::get('/product_details/{id}','product_details');
    Route::post('/product_details/{id}','products_review');
    Route::get('/product_all','product_all');
    // Products By Brand
    Route::get('/all_product_brand/{id}','all_product_brand');
    // Products By Category
    Route::get('/all_product_category/{id}','all_product_category');
    // Contact
    Route::get('/contact','contact');
    Route::post('/feedback','add_feedback');
    // About
    Route::get('/about','about');
    // Blog
    Route::get('/blog','blog');
    Route::get('/post_details/{id}','post_details');
    Route::get('/all_post_brand/{id}','all_post_brand');
    Route::post('/post_details/{id}','post_comment');
    // Cart
    Route::get('/cart','cart_user');
    Route::post('/add_cart/{id}','add_cart');

    // Checkout
    Route::post('/checkout/{id}','checkout');
    Route::get('/confirm_order/{id}','confirm_order');
    // Order Delete
    Route::get('/delete_order/{id}','delete_order');
    //Route::post('/confirm_order/{id}','confirm_order');
});

// Admin Dashboard Routes
    

Route::controller(AdminController::class)->group(function (){
    // Category Part
    Route::get('/view_category','view_category');
    Route::get('/create_category','create_category');
    Route::post('/create_category','create');
    Route::get('/delete_category/{id}','delete');
    Route::get('/edit_category/{id}','edit_category');
    Route::post('/update_category_confirm/{id}','update_category_confirm');

    // Brand Part
    Route::get('/view_brands','view_brands');
    Route::get('/create_brand','create_brand');
    Route::post('/create_brand','createbrand');
    Route::get('/delete_brand/{id}','delete_brand');
    Route::get('/edit_brand/{id}','edit_brand');
    Route::post('/update_brand_confirm/{id}','update_brand_confirm');

    // Users Part
    Route::get('/view_users','view_users');
    Route::get('/view_user_details/{id}','view_user_details');
    Route::get('/edit_user_details/{id}','edit_user_details');
    Route::get('/delete_user/{id}','delete_brand');
    Route::post('/update_user_confirm/{id}','update_user_confirm');

    // Products Part
    Route::get('/view_products','view_products');
    Route::get('/create_product','create_product');
    Route::post('/create_product','createproduct');
    Route::get('/view_product_details/{id}','view_product_details');
    Route::get('/edit_product_details/{id}','edit_product_details');
    Route::get('/delete_product/{id}','delete_product');
    Route::post('/update_product_confirm/{id}','update_product_confirm');
    
    // Blog Post Part
    Route::get('/view_brands_blogs','view_brands_blogs');
    Route::get('/create_post','create_post');
    Route::post('/create_post','createpost');
    Route::get('/view_post_details/{id}','view_post_details');
    Route::get('/edit_post/{id}','edit_post');
    Route::post('/update_post_confirm/{id}','update_post_confirm');
    Route::get('/delete_post/{id}','delete_post');

    // Comments Post Part
    Route::get('/view_comments','view_comments');
    Route::get('/delete_comment/{id}','delete_comment');

    // OrderShipment Part
    Route::get('/view_ordershipment','view_ordershipment');
    Route::get('/create_ordershipment','create_ordershipment');
    Route::post('/create_ordershipment','createordershipment');
    Route::get('/edit_ordershipment/{id}','edit_ordershipment');
    Route::post('/update_ordershipment_confirm/{id}','update_ordershipment_confirm');
    Route::get('/delete_ordershipment/{id}','delete_ordershipment');

    // Payment Part
    Route::get('/view_payment','view_payment');
    Route::get('/create_payment','create_payment');
    Route::post('/create_payment','createpayment');
    Route::get('/edit_payment/{id}','edit_payment');
    Route::post('/update_payment_confirm/{id}','update_payment_confirm');
    Route::get('/delete_payment/{id}','delete_payment');

    // Feedback Post Part
    Route::get('/view_feedback','view_feedback');
    Route::get('/delete_feedback/{id}','delete_feedback');

    // Receipts Part
    Route::get('/view_receipts','view_receipts');
    // Route::get('/accept_receipt/{id}','accept_receipt');

});
    