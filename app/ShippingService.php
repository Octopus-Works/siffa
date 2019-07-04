<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingService extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function officeservices(){
        return $this->belongsToMany('App\ShippingOffice');
    }
}
