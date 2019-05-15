<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable=  [ 
    	'title_en',
    	'title_ar',
    	'description_ar',
    	'description_en',
    	'img_src',
    	'start_date'
    ];
}
