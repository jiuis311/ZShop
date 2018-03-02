<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function products() {
        return view('products.products');
    }

    public function productDetail() {
        return view('products.product-details');
    }

    public function contact() {
        return view('contact');
    }

    public function cart() {
        return view('cart');
    }

    public function register(Request $request) {
        dd('Done');
        User::create($request);
    }
}
