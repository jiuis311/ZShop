<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
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

    /**
     * Checkout view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function checkout() {
        return view('checkout');
    }

    public function order(Request $request) {
        $data = $request->all();
        $order = Order::create($data);
        $items = $request->item;
        foreach ($items as $item) {
            $item['order_id'] = $order->id;
            OrderDetail::create($item);
        }
        return redirect()->route('checkout.success');
    }

    /**
     * About
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    public function checkoutSuccess() {
        return view('checkout_success');
    }
}
