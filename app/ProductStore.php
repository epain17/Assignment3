<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoductStore extends Model
{
    protected $table = 'products_stores';

    public function stores()
    {
      return $table->hasOne('App\Store');
    }

    public function products()
    {
      return $table->hasOne('App\Product');
    }

}
