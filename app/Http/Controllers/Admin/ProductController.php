<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'details_1' => 'alpha_num|nullable',
            'details_2' => 'alpha_num|nullable',
            'details_3' => 'alpha_num|nullable',
            'category_id' => 'required|numeric',
        ]);

        $product = new Product;

        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->stock = $validated['stock'];
        $product->details_1 = $validated['details_1'];
        $product->details_2 = $validated['details_2'];
        $product->details_3 = $validated['details_3'];
        $product->category_id = $validated['category_id'];

        $product->save();

        $request->session()->flash('success', 'Ajout de produit fait !!! Bravoooooooooooooo <3 ;-)');

        return redirect()->route('admin.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Category $categories)
    {
        $categories = Category::all();
        $product->load('category');

        return view('admin.products.edit', ['product' => $product], ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
