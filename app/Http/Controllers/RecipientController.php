<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Notification;
use App\InternalMessaging;


class RecipientController extends Controller
{
    public function index(){
        $user = User::find(auth::user()->id);
        return view('rms.index')->withuser($user); 
    }

    public function applications_view(){
        $user = User::where('role_id', '2')->get();
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
        return view('rms/application')->withuser($user)->withid($id);  
    }

    public function account_info(){

        if ( auth::check()){
            $user = User::find(auth::user()->id); 
            return view('rms.index')->withuser($user);
        }
    }

    public function recipients_management(){
        $user = User::where('role_id', '2')->get();
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
 
    public function approved($id){

        $user = User::find($id); 
        if ( $user->applicationdetail->status == "In progress"){
            $user->applicationdetail->status = 3;

            $notify = new Notification; 
            $notify->body = "Upload payment Information";
            $notify->user_id = $id;
            $notify->type = "user";  
            $notify->save();
        }
        else if( $user->applicationdetail->status == "Paid under Registration"){
            $user->applicationdetail->status = 5;

            $notify = new Notification; 
            $notify->body = "Your application is approved";
            $notify->user_id = $id;
            $notify->type = "user";  
            $notify->save();
        }
        $user->applicationdetail->save(); 
        return response('Success'); 
    }

    public function rejected($id){
        $user = User::find($id); 
        $user->applicationdetail->status = 2;
        $user->applicationdetail->save(); 
        return response('Success'); 
    }

}
