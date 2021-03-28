<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetils extends Model
{
    public function product(){
    	return $this->belongsTo(product::class,'product_id','id');
    }

   
}
