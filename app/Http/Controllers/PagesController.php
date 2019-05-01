<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function about(){
        return view('pages/about');
    }

    public function contact(){
        return view('pages/contact');
    }

    public function reports(){
        return view('pages/reports&publications');
    }

    public function shipping_offices(){
        $users = User::all();
        return view('pages/shipping_offices')->withusers($users);
    }

}
