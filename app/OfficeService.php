<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeService extends Model
{
    public function shippingoffice(){
        return $this->belongsTo('App\ShippingOffice'); 
    }

    public function shippingservice(){
        return $this->belongsTo('App\ShippingService');
    }
}
