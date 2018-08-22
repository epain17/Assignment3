<?php

namespace App\Http\Controllers;
use App\Product;
use App\Review;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
  public function create()
  {
    $products = Product::all();
    return view("addReview", ["products" => $products]);
  }

  public function store(Request $request)
  {
            $review = new Review;

            $review->product_id = $request->input("game");
            $review->name = $request->input("name");
            $review->comment = $request->input("comment");
            $review->grade = $request->input("grade");

            $createdAt = Carbon::now();
            $review->created_at = $createdAt;
            $review->save();

            return redirect()->route('products.show', ['id' => $review->product_id])->with('message', 'Review added');


    }
}
