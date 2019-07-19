<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Auth; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirect()
    {
        if ( auth::user()->role->name == 'user'){
            return redirect('/user');
        } 
        else if ( auth::user()->role->name == 'RMS'){
            return redirect('/rms');
        } 
     
        else
        return view(App::getLocale().'/pages/home');
    }

    public function index()
    {
        return view(App::getLocale().'/pages/home');
    }
}

