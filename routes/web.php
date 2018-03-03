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
        Route::resource('user','ManageUserController', ['as' => 'admin']);
        Route::put('user/{id}/update-image', 'ManageUserController@updateImage')->name('admin.user.update.image');
    });
});

Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product-details', 'HomeController@productDetail')->name('product.detail');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Auth::routes();

Route::get('/home', function (){
    return view('index');
});

