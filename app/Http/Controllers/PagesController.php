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

    public function mission(){
        return view('pages.about.mission_statement');
    }

    public function laws(){
        return view('pages.about.laws');
    }

    public function becomeamember(){
        return view('pages.members.become_member');
    }

    public function membors_list(){
        return view('pages.members.member_list');
    }

    public function calendar(){
        return view('pages.news.calendar');
    }
    
    public function events(){
        return view('pages.news.events');
    }

}
