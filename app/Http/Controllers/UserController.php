<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification; 
use App\Image; 
use app\User;
use Auth;

class UserController extends Controller
{
	public function appStatus(){
        return view('user/app_status'); 
    }
    
    public function paymentNotification(Request $request){
        if($request->has('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/applicationPayment', $fileNameToStore);
            $i = new Image;  
            $i->imageable_id = auth::user()->id;
            $i->imageable_type = 'App\ApplicationDetail';
            $i->url = '/storage/applicationPayment/'. $fileNameToStore;
            $i->save();
        }

        $user = User::find(auth::user()->id); 
        if ( $user->applicationdetail->status == "Approved under Payment"){
            $user->applicationdetail->status = 4;
        }
        $user->applicationdetail->save(); 

        $notify = new Notification; 
        $notify->body = "Uploaded payment Information";
        $notify->user_id = auth::user()->id;
        $notify->type = "rms";  
        $notify->save();
        return response('Success'); 
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
