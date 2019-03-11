<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\Image;


class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('Backoffice.product.index', ['products' => $products]);
    }

    public function show(Product $product) {
        return view('Backoffice.product.show', ['product' => $product]);
    }

    public function create(Product $product) {

        return view('Backoffice.product.create');
    }
    public function edit(Product $product) {

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

        $messages = [
            'required' => 'Le champ :attribute est requis.',
            //'max' => 'Valeur max = :max'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'details_1' => 'required',
            'stock' => 'required',
        ], $messages);


        if ($validator->fails()) {

            return redirect()->route('admin.product.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');






        $product->save();

        $img_1->url =$request->input('img_1');
        $img_1->product_id = $product->id;
        $img_2->url =$request->input('img_2');
        $img_2->product_id = $product->id;
        $img_3->url =$request->input('img_3');
        $img_3->product_id = $product->id;


        return redirect()->route('admin.product.show', ['product' => $product]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {
        $product = Product::find($request->id);

        $messages = [
            'required' => 'Le champ :attribute est requis.',
            //'max' => 'Valeur max = :max'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'details_1' => 'required',
        ], $messages);


        if ($validator->fails()) {

            return redirect()->route('admin.product.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details_1 = $request->input('details_1');
        $product->details_2 = $request->input('details_2');
        $product->details_3 = $request->input('details_3');
        $product->stock = $request->input('stock');


        $product->save();

        //return view('user.result', $data);

        return redirect()->route('admin.product.show', ['product' => $product]);
    }


    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product) {

        $product->delete();

        return redirect()->route('admin.product.index');
    }

}