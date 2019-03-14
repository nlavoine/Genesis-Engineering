<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Product;
use App\Image;


class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('Backoffice.product.index', ['products' => $products]);
    }

    public function show(Product $product) {

        $product->load('images');
        return view('Backoffice.product.show', ['product' => $product]);
    }

    public function create() {

        return view('Backoffice.product.create');
    }

    public function edit(Product $product) {
        $product->load('images');
        return view('Backoffice.product.edit', ['product' => $product]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {

        $product = new Product;
        $img_1 = new Image;
        $img_2 = new Image;
        $img_3 = new Image;

        $file_1 = $request->file('img_1');
        $file_2 = $request->file('img_2');
        $file_3 = $request->file('img_3');


        $messages = [
            'required' => 'Le champ :attribute est requis.',
            //'max' => 'Valeur max = :max'
        ];

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'details_1' => 'required',
            'details_2' => 'required',
            'details_3' => 'required',
            'stock' => 'required',
            'img_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_1' => 'required',
            'img_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_2' => 'required',
            'img_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_3' => 'required',
        ], $messages);


        /*if ($validator->fails()) {

            return redirect()->route('admin.product.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }*/

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');
        $product->category_id = 1;


        $product->save();

        if ($file_1->isValid()) {
            $name = 'visuel-1';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_1->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $img_1->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_1->product_id = $product->id;
            $img_1->order = 1;
            $img_1->save();
        }


        if ($file_2->isValid()) {
            $name = 'visuel-2';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_2->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $img_2->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_2->product_id = $product->id;
            $img_2->order = 2;
            $img_2->save();
        }


        if ($file_3->isValid()) {
            $name = 'visuel-3';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_3->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $img_3->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_3->product_id = $product->id;
            $img_3->order = 3;
            $img_3->save();
        }


        return redirect()->route('admin.product.show', ['product' => $product]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Product $product, Request $request) {

        $file_1 = $request->file('img_1');
        $file_2 = $request->file('img_2');
        $file_3 = $request->file('img_3');

        $messages = [
            'required' => 'Le champ :attribute est requis.',
            //'max' => 'Valeur max = :max'
        ];

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'details_1' => 'required',
            'details_2' => 'required',
            'details_3' => 'required',
            'img_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], $messages);


        /*if ($validator->fails()) {

            return redirect()->route('admin.product.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }*/

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');

        $product->save();


        if (!is_null($file_1) && $file_1->isValid()) {

            $name = 'visuel-1';
            $extension = '.' . $file_1->getClientOriginalExtension();
            Storage::move('/assets/images/products/product_' . $product->id . '/' . $name . '.*', '/assets/images/products/product_' . $product->id . '/backup/' . $name . '_' . new Date('Y-m-d') . '.*');
            $file_1->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $image = Image::where('product_id', $product->id)
                ->where('order', 1)
                ->first();
            $image->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $image->save();
        }


        if (!is_null($file_2) && $file_2->isValid()) {
            $name = 'visuel-2';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_2->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $image = Image::where('product_id', $product->id)
                ->where('order', 2)
                ->first();
            $image->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $image->save();
        }


        if (!is_null($file_3) && $file_3->isValid()) {
            $name = 'visuel-3';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_3->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $image = Image::where('product_id', $product->id)
                ->where('order', 3)
                ->first();
            $image->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $image->save();
        }


        return redirect()->route('admin.product.show', ['product' => $product]);
    }


    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product) {

        $images = Image::where('product_id', $product->id)->get();
        foreach ($images as $image) {
            $image->delete();
        }


        $product->delete();

        return redirect()->route('admin.product.index');
    }

}