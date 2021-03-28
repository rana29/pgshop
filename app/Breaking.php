<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breaking extends Model
{
    protected $fillable = [
        'breaking', 'slug', 'status',
    ];
}

