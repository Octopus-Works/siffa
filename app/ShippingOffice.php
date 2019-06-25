<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingOffice extends Model
{
    protected $fillable = [
        'user_id', 'name', 'commercial_registry',
    ];

    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function officeservices(){
        return $this->belongsToMany('App\ShippingService', 'App\OfficeService');
    }
}
