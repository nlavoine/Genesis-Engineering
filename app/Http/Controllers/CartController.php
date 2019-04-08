<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrix =0;

    public function __construct(){
        if($oldCart){
            $this->items = $oldCart->items;

        }
    }

    public function index() {
        return view('cart/index');
    }

    public function details() {
        return view('cart/details');
    }

    public function add($item, $id) {
        $storedItem =

    }




    /*public function valid() {
        echo "valider panier";
    }*/
}
