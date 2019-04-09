<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;

class CartController extends Controller {


    public function index() {
        //Session::flush();
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $listIds = [];
        $listQty = [];

        if ($cart) {

            foreach ($cart->items as $item => $qty) {

                array_push($listIds, $item);
                $listQty[$item] = $qty;
            }

            $products = Product::with('images')->find($listIds);

            return view('cart.index', ['products' => $products, 'listQty' => $listQty, 'cart' => $cart]);
        } else {
            return view('cart.index', ['products' => null]);
        }

    }

    public function update(Request $request) {
        $req = $request->all();
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $numPdt = 0;
        $totalPrice = 0;

        foreach ($req as $item => $qty) {
            if (is_numeric($item)) {

                if (array_key_exists($item, $cart->items)) {
                    $cart->items[$item] = $qty;
                    $numPdt += $qty;
                    $price = Product::where('id', $item)->value('price');
                    $totalPrice += $price * $qty;
                }
            }
        }
        $cart->totalPrice = $totalPrice;
        $cart->totalQty = $numPdt;
        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function destroy(Request $request, $id) {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        $numPdt = 0;
        $totalPrice = 0;
        unset($cart->items[$id]);

        foreach ($cart->items as $item => $qty) {
            //dd($qty);
            $numPdt += $qty;
            $price = Product::where('id', $item)->value('price');
            $totalPrice += $price * $qty;
        }

        if(count($cart->items)>0){
            $cart->totalPrice = $totalPrice;
            $cart->totalQty = $numPdt;
            $request->session()->put('cart', $cart);
        }else{
            $request->session()->forget('cart');
        }


        return redirect()->route('cart.index');
    }

    public function details() {
        return view('cart/details');
    }


}
