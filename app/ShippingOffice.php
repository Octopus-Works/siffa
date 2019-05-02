<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingOffice extends Model
{
    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function officeservice(){
        return $this->hasMany('App\OfficeService');
    }
}
