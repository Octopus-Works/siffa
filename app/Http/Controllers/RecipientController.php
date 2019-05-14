<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;

class RecipientController extends Controller
{
    public function index(){
        $user = User::find(auth::user()->id);
        return view('rms.index')->withuser($user); 
    }

    public function applications_view(){
        $user = User::all();
        return view('rms/view_applications')->withuser($user);
    }

    public function messages_view(){
        return view('rms/view_messages');
    }

    public function application(){
        return view('rms/application');
    }

    public function account_info(){

        if ( auth::check()){
            $user = User::find(auth::user()->id); 
            return view('rms.index')->withuser($user);
        }
    }

    public function recipients_management(){
        $user = User::all(); 
        return view('rms.user_management')->withuser($user);
    }

    public function block($id){
        $user = User::find($id); 
        $user->blocked = true; 
        $user->save(); 
    }

    public function unblock($id){
        $user = User::find($id); 
        $user->blocked = false; 
        $user->save(); 
    }
 
}
