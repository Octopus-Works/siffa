<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
    	'title_en',
    	'title_ar',
    	'description_ar',
        'description_en',
        'content_en',
    	'content_ar',
    	'img_src',
    ];
}
