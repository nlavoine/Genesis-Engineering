<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

class ProductController extends Controller
{
    public function index($sortby) {
        $products = Product::all()->sortBy($sortby);
        return view('product.index', ['products' => $products]);
    }

    public function show(Product $product) {
        $images = Image::where('product_id', $product->id)
            ->orderBy('order', 'asc')
            ->get();
        return view('product.show', ['product' => $product, 'images'=>$images]);
    }

}