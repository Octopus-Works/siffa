<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationDetail extends Model
{
    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function images(){
        return $this->morphMany('App\Image', 'imageable'); 
    }
}
