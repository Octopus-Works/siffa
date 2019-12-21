<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 

class LocalizationController extends Controller
{
    public function index($locale)
    {   
        error_log($locale); 
        App::setLocale($locale);
        
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
