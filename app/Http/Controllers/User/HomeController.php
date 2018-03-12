<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Product;
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

    public function productDetailId($id) {
        $product = Product::where('code', $id);
        $data = [
            'product' => $product
        ];
        return view('products.product-details-id', $data);
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

    public function checkout() {
        return view('checkout');
    }

    public function about() {
        return view('about');
    }
}
