<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests\StoreProductRequest;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;


class ManageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at','desc')->paginate(config('app.user_pagination'));
        foreach ($products as $product) {
            $product->brand = Brand::find($product->brand_id);
            $product->category = Brand::find($product->category_id);
        }
        $data = [
            'products' => $products,
        ];
        return view('admin.productmanage.index', $data);
    }

    public function create() {
        $brands = Brand::get();
        $categories = Category::get();
        $data = [
            'brands' => $brands,
            'categories' => $categories
        ];
        return view('admin.productmanage.create', $data);
    }

    public function store(StoreProductRequest $request) {
        $data = $request->all();
        if ($request->hasFile('img')) {
            $imgLink = $request->file('img')->store('public/images');
            $imgLink = substr($imgLink, 7);
            $data["image"] = $imgLink;
        }
        $data['price'] = str_replace('.', '', $data['price']);
        Product::create($data);
        return redirect()->route('admin.product.index');
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Delete success'
        ]);
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $imgs = explode(" ", $product->image);
        $data = [
            'product' => $product,
            'imgs' => $imgs
        ];
        return view('admin.productmanage.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::get();
        $categories = Category::get();
        $data = [
            'brands' => $brands,
            'categories' => $categories,
            'product' => $product,
        ];
        return view('admin.productmanage.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data = array_slice($data, 2);
        Product::where('id',$id)->update($data);
        return redirect()->route('admin.product.index');
    }
}
