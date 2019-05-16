<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use App\InternalMessaging;


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
        if ( auth::user()->role->name == 'RMS')
        {
            $mail = InternalMessaging::where('sender_id', auth::user()->id)
                                        ->orWhere('receiver_id', 0)
                                        ->get();
            return view('rms/view_messages')->withmail($mail);                             
        }
        return view('rms/view_messages');
    }

    public function application($id){
        $user = User::find($id);
        return view('rms/application')->withuser($user); 
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
