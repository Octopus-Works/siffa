<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Auth;

class UserController extends Controller
{
	public function appStatus(){
        return view('user/app_status'); 
    }

    public function userCompanyInfo($id){
        $user = User::find($id); 
        return view('user/company_info')->withuser($user);
    }

    public function companyInfo($id){
        $user = User::find($id); 
        return view('pages.company_info')->withuser($user);
    }

    public function accountInfo(){
        if ( auth::check()){
            $user = User::find(auth::user()->id); 
            return view('user.index')->withuser($user);
        }
    }
}
