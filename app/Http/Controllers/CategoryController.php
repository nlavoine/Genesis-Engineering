<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $category->load('products');

        return view('category.index', ['category' => $category]);
    }
}
