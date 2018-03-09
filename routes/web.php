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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/home', function (){
    return view('index');
});

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
        Route::resource('user', 'ManageUserController', ['as' => 'admin']);
        /**
         * Manage Product
         */
        Route::resource('product', 'ManageProductController', ['as' => 'admin']);
        Route::put('product/{id}/update-image', 'ProductInformationController@updateImage')->name('admin.product.update-image');
    });
});

Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product-detail', 'HomeController@productDetail')->name('product.detail');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/about', 'HomeController@about')->name('about');

Auth::routes();


