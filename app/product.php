<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [

        'name', 'catagory_id','regular_price','offer_price','description','youtube','start','end','color_id','size_id','image' 
    ];

      public function catagory(){
    	return $this->belongsTo(Catagory::class,'catagory_id','id');
    }

    public function brand(){
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function color(){
    	return $this->hasMany(color::class,'color_id','id');
    }


    public function sizes(){
    	return $this->belongsTo(size::class,'size_id','id');
    }
}
