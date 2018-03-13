<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Category;
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
        $categories = Category::get();
        $data = [
            'categories' => $categories,
        ];
        return view('index', $data);
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

    public function category($id) {
        $category = Category::where('name', $id)->first();
        $data = [
            'category' => $category,
        ];
        return view('products.products', $data);
    }
}
