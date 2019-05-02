<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shippingOffice(){
        return $this->hasOne('App\ShippingOffice');
    }

    public function shippingService(){
        return $this->hasOne('App\ShippingService');
    }

    public function applicationDetail(){
        return $this->hasOne('App\ApplicationDetail');
    }

    public function userdetail(){
        return $this->hasOne('App\UserDetail');
    }
}
