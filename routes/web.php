<?php

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

Route::get('/', 'User\HomeController@index')->name('home');

Route::get('/home', 'User\HomeController@index');

Route::prefix('admin')->group(function() {
    //Admin Log in
    Route::get('login', 'Auth\AdminController@loginForm')->name('admin.login-form');
    Route::post('login', 'Auth\AdminController@login')->name('admin.login');
    Route::middleware(['admin.auth'])->group(function() {
        Route::post('logout', 'Auth\AdminController@logout')->name('admin.logout');
        Route::get('/', 'AdminController@index')->name('admin.index');

        /**
         * Manage user
         */
        Route::resource('user', 'Admin\ManageUserController', ['as' => 'admin']);

        /**
         * Manage Product
         */
        Route::resource('product', 'Admin\ManageProductController', ['as' => 'admin']);
        Route::put('product/{id}/update-image', 'ProductInformationController@updateImage')->name('admin.product.update-image');
        /**
         * Manage Category
         */
        Route::resource('category', 'Admin\CategoryController', ['as' => 'admin']);

        /**
         * Manage Brand
         */
        Route::resource('brand', 'Admin\BrandController', ['as' => 'admin']);

        /**
         * Manage Order
         */
        Route::resource('order', 'Admin\OrderController', ['as' => 'admin']);
        Route::get('order/confirm/{id}', 'Admin\OrderController@confirm')->name('admin.order.confirm');
        Route::get('order/deliver/{id}', 'Admin\OrderController@deliver')->name('admin.order.deliver');
        Route::get('order/cancel/{id}', 'Admin\OrderController@cancel')->name('admin.order.cancel');
    });
});

Route::get('/products', 'User\HomeController@products')->name('products');
Route::get('/category/{id}', 'User\HomeController@category')->name('category');
Route::get('/product/{id}', 'User\ProductController@productDetailId')->name('product.detail.id');
Route::get('/product-detail', 'User\HomeController@productDetail')->name('product.detail');
Route::get('/contact', 'User\HomeController@contact')->name('contact');
Route::get('/cart', 'User\HomeController@cart')->name('cart');
Route::get('/checkout', 'User\HomeController@checkout')->name('checkout');
Route::get('/about', 'User\HomeController@about')->name('about');

/**
 * Order
 */
Route::post('order', 'User\HomeController@order')->name('order');

/**
 * Checkout success
 */
Route::get('checkout/success', 'User\HomeController@checkoutSuccess')->name('checkout.success');

Auth::routes();


//Route::get('/', function () {
//    dd(env('MAIL_USERNAME'));
//    Mail::send('mails.normal', ['name' => 'Linh'], function($m) {
//        $m->subject('Welcome');
//        $m->to('ltlinh311@gmail.com', 'Linh');
//    });
//    dd(Auth::id());
//})->name('home');
