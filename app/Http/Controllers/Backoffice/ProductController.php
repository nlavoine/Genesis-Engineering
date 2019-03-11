<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('back_office.product.index', ['products' => $products]);
    }

    public function show(Product $product) {
        return view('back_office.product.show', ['product' => $product]);
    }

    public function edit(Product $product) {
        return view('back_office.product.edit', ['product' => $product]);
    }


    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product) {
        //$productToDelete = Product::find($product);
        //$product->delete();
        Product::destroy($product);


        //return redirect()->route('admin.product.index');
    }

}