<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Auth;

class UserController extends Controller
{
	public function app_status(){
        return view('user/app_status'); 
    }

    public function company_info($id){
        $user = User::find($id); 
        return view('user/company_info')->withuser($user);
    }

    public function account_info(){
        if ( auth::check()){
            $user = User::find(auth::user()->id); 
            return view('user.index')->withuser($user);
        }
    }
}
