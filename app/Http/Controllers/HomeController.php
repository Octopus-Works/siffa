<?php

namespace App\Http\Controllers;

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
        return view('pages/home');
    }

    public function index()
    {
        return view('pages/home');
    }
}

