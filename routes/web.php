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

use Illuminate\Support\Facades\Mail;

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
    });
});

Route::get('/products', 'User\HomeController@products')->name('products');
Route::get('/product-detail/{id}', 'User\HomeController@productDetailId')->name('product.detail.id');
Route::get('/product-detail', 'User\HomeController@productDetail')->name('product.detail');
Route::get('/contact', 'User\HomeController@contact')->name('contact');
Route::get('/cart', 'User\HomeController@cart')->name('cart');
Route::get('/checkout', 'User\HomeController@checkout')->name('checkout');
Route::get('/about', 'User\HomeController@about')->name('about');

Auth::routes();


//Route::get('/', function () {
////    Route::get('/', function () {
////        return view('index');
////    })->name('home');
////    dd(env('MAIL_USERNAME'));
//    Mail::send('mails.normal', ['name' => 'Linh'], function($m) {
//        $m->subject('Welcome');
//        $m->to('ltlinh311@gmail.com', 'Linh');
//    });
//    dd('done');
//})->name('home');
