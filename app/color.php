<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
     protected $fillable = [
        'color_name',
    ];

     
 public function color(){
    	return $this->belongsTo(color::class,'color_id','id');
    }
}
