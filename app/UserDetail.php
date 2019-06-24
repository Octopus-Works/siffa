<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'user_id', 'fullname', 'nationality', 'mobile_number', 'phone_number',
    ];

    public function user(){
        return $this->belongsTo('App\User'); 
    }
}
