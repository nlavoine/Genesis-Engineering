<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 /**

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newProducts = Product::all()->sortBy('created_at')->take(4);
        $newProducts->load('images');


        //Récupère le 1er produit aléatoire (+ images) de chaque catégorie
        $categories = Category::all()->where('parent_id', null);
        $rangeProducts = [];

        foreach($categories as $category){
            $rangeProducts[]=Product::with('images')->where('category_id', $category->id)->inRandomOrder()->first();
        }

        return view('home', ['newProducts' => $newProducts], ['rangeProducts' => $rangeProducts]);
    }

    public function about(){
        return view('home/about');
    }
    public function forbidden(){
        return view('forbidden');
    }

}
