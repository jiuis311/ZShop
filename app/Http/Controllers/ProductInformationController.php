<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductInformationController extends Controller
{
    /**
     * Update product image
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateImage(Request $request, $id) {
        if (!$request->hasFile('img')) {
            return redirect()->route('admin.product.show', [
                'id' => $id,
            ]);
        }
        $imgLink = $request->file('img')->store('public/images');
        $imgLink = substr($imgLink, 7);
        $data["image"] = $imgLink;
        Product::find($id)->update($data);
        return redirect()->route('admin.product.show', [
            'id' => $id,
        ]);
    }
}
