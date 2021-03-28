<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
    protected $fillable = [

         'payment_id','shipping_id','order_no','order_total',
    ];

      public function payment(){
    	return $this->belongsTo(Payment::class,'payment_id','id');
    }

     public function shipping(){
    	return $this->belongsTo(Shipping::class,'shipping_id','id');
    }

     public function orderdetils(){
    	return $this->hasMany(Orderdetils::class,'order_id','id');
    }

}
