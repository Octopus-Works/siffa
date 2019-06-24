<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingOffice extends Model
{
    protected $fillable = [
        'user_id', 'name', 'commerical_registry',
    ];

    public function user(){
        return $this->belongsTo('App\User'); 
    }

    public function officeservice(){
        return $this->hasMany('App\OfficeService');
    }
}
