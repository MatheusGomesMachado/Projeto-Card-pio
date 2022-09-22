<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Http\Requests\ProductRequest;

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

        return view('products.index', ['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
          //dd($data);
        $data['establishment_id'] = \Auth::user()->establishment_id;

        $data['price_cents'] = (int) ($data['price_cents'] * 100);

        $product = Product::create($data);

        if ($request->hasFile('image')){

          $imageFile = $request->file('image');

          $image_path = $imageFile->storeAs(
            "images/products/$product->id",
            'image.jpg',
            'public',
          );

          $data['image_path'] = $image_path;
          $product->update(['image_path' => $image_path]);
        }


        //if (isset($data['is_avaliable'])){
        //  $data['is_avaliable'] = 1;
        //} else {
        //  $data['is_avaliable'] = 0
        //}


        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request,Product $product)
    {
        $data = $request->all();
        //dd($data);
        $data['price_cents'] = (int) ($data['price_cents'] * 100);

        $product->update($data);

        return redirect()->route('products.index',$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
