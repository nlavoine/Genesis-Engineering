<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }


    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

}