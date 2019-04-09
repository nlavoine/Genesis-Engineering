<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Cart;
use Session;

class ProductController extends Controller
{
    public function index($id) {
        $products = Product::all()->sortBy($sortby);
        return view('product.index', ['products' => $products]);
    }

    public function show(Product $product) {
        $images = Image::where('product_id', $product->id)
            ->orderBy('order', 'asc')
            ->get();
        return view('product.show', ['product' => $product, 'images'=>$images]);
    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()-> route('cart.index', ['id' => $id]);

    }

}