<?php

namespace App\Http\Controllers\User;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function productDetailId($id) {
        $product = Product::where('code', $id)->first();
        $data = [
            'product' => $product,
        ];
        return view('products.product-details-id', $data);
    }
}
