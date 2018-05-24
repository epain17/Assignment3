<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $table = 'reviews';

  public function reviews()
  {
    return $this->hasOne('App\Product');
  }

  public function getReviews()
  {
    return $table->product_id;
  }

}
