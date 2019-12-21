<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
    	'caption_en',
    	'caption_ar',
    	'alt',
    	'img_src',
    ];

}
