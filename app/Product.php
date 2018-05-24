<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

      public function stores(){
        return $this->belongsToMany('App\Store');
      }

      public function reviews(){
        return $this->hasMany('App\Review');
      }

      // public function all(){
      //   return $table->products;
      // }

}
