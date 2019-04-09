<?php

namespace App\Http\Controllers\Backoffice;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Product;
use App\Image;

class ProductController extends Controller {


    public function index() {
        $products = Product::paginate(10);

        return view('Backoffice.product.index', ['products' => $products]);
    }

    public function show(Product $product) {

        //$category = Category::all();
        //$parentId = $product->id;
        //$categories = Category::whereNull('parent_id')->with('children')->get();
        //$subcategories = $product->category->children;
        //dd($categories);

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
        // Validate inputs
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0|not_in:0',
            'details_1' => 'required',
            'details_2' => 'required',
            'details_3' => 'required',
            'stock' => 'required|integer|min:0',
            'img_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_1' => 'required',
            'img_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_2' => 'required',
            'img_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_3' => 'required',
        ], [
            'required' => 'Le champ :attribute est requis.',
        ]);

        // Create product
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');
        $product->category_id = 1;
        $product->save();

        // Check image file 1 is valid
        $file_1 = $request->file('img_1');
        if ($file_1->isValid()) {
            $name = 'visuel-1';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_1->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);

            $img_1 = new Image;
            $img_1->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_1->product_id = $product->id;
            $img_1->order = 1;
            $img_1->save();
        }

        // Check image file 2 is valid
        $file_2 = $request->file('img_2');
        if ($file_2->isValid()) {
            $name = 'visuel-2';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_2->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);

            $img_2 = new Image;
            $img_2->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_2->product_id = $product->id;
            $img_2->order = 2;
            $img_2->save();
        }

        // Check image file 3 is valid
        $file_3 = $request->file('img_3');
        if ($file_3->isValid()) {
            $name = 'visuel-3';
            $extension = '.' . $file_1->getClientOriginalExtension();
            $file_3->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);

            $img_3 = new Image;
            $img_3->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $img_3->product_id = $product->id;
            $img_3->order = 3;
            $img_3->save();
        }

        return redirect()->route('admin.product.show', ['product' => $product]);
    }

    /**
     * @param Product $product
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Product $product, Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0|not_in:0',
            'stock' => 'required|integer|min:0',
            'details_1' => 'required',
            'details_2' => 'required',
            'details_3' => 'required',
            'img_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'required' => 'Le champ :attribute est requis.',
        ]);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');

        $product->save();

        $file_1 = $request->file('img_1');
        if (!is_null($file_1) && $file_1->isValid()) {
            $name = 'visuel-1';
            $extension = '.' . $file_1->getClientOriginalExtension();
            /*$dateBackup = date('Y-m-d');
            Storage::move('/assets/images/products/product_' . $product->id . '/' . $name . '.*', '/assets/images/products/product_' . $product->id . '/backup/' . $name . '_' . $dateBackup . '.*');*/
            $file_1->move(public_path('/assets/images/products/product_' . $product->id . '/'), $name . $extension);
            $image = Image::where('product_id', $product->id)
                ->where('order', 1)
                ->first();
            $image->url = '/assets/images/products/product_' . $product->id . '/' . $name . $extension;
            $image->save();
        }

        $file_2 = $request->file('img_2');
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

        $file_3 = $request->file('img_3');
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