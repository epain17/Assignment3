<?php

namespace App\Http\Controllers;
use App\Product;


use Illuminate\Http\Request;

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
        return view("index", [
          "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->input("title");
        $product->publisher = $request->input("publisher");
        $product->price = $request->input("price");
        $product->description = $request->input("description");
        $product->image = $product->input("image");
        $product->save();

        foreach ($request->input("stores") as $store)
        {
          $productInStock = new ProductStore;
          $productInStock->store_id = $store;
          $productInStock->product_id = $product->id;
          $productInStock->save();
        }

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view("show", ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);

      return view("products.edit", ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->title = $request->input("title");
      $product->publisher = $request->input("publisher");
      $product->price = $request->input("price");
      $product->description = $request->input("description");
      $product->image = $product->input("image");
      $product->save();

      foreach ($request->input("stores") as $store)
      {
        $productInStock = new ProductStore;
        $productInStock->store_id = $store;
        $productInStock->product_id = $product->id;
        $productInStock->save();
      }

      return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        ProductStore::destroy()->all()->where('product_id', $id);
    }
}
