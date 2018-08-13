<?php

namespace App\Http\Controllers;
use App\Product;
use App\Review;
use App\Store;
use App\ProductStore;
use Carbon\Carbon;


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
      $stores = Store::all();
        return view("create", [
          "stores" => $stores
        ]);
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
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->price = $request->input("price");
        //$inStockArray();
        $createdAt = Carbon::now();
        $product->created_at = $createdAt;
        $product->save();


       $inStock = $request->input("stores");


        foreach ($inStock as $store)
         {https://appdividend.com/2018/02/23/laravel-5-6-crud-tutorial/
           $productInStock = new ProductStore;
           $productInStock->store_id = $store;
           $productInStock->product_id = $product->id;
           $productInStock->save();
         }

        return redirect()->route('products.index')->with('message', 'Game added');
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
        $reviews = Review::all()->where('product_id', $id);
        $product_store = ProductStore::all()->where('product_id', $id);

        $storesWithProduct = [];

        foreach ($product_store as $pS )
        {
            $store = Store::all()->where('id', $pS->store_id)->first();
            $storesWithProduct[] = $store;
        }
        return view("show", ["product" => $product, "reviews" => $reviews, "stores" =>
    $storesWithProduct]);
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
      $product_store = ProductStore::all()->where('product_id', $id);

      return view("edit", ["product" => $product]);
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
      $product->image = $request->input("image");
      $product->save();

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
        return redirect()->route('products.index')->with('success',
        'Game has been  deleted');

    }
}
