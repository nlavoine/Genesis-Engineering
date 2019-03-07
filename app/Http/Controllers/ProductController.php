<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product/index', ['products' => $products]);
    }

    public function show($id) {
        $products = Product::where('id', $id)->get();
        $product = $products[0];
        return view('product/show', ['product' => $product]);
    }

}