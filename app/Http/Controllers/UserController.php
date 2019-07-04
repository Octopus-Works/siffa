<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification; 
use App\Image; 
use app\User;
use Auth;
use App\Services\ImageUploadService;

class UserController extends Controller
{
	public function appStatus(){
        return view('user/app_status'); 
    }
    
    public function paymentNotification(Request $request){

        foreach($request->files as $file)
        ImageUploadService::imageUpload($file,Auth::user()->id, "App\ApplicationDetail");

        $user = User::find(auth::user()->id); 
        if ( $user->applicationdetail->status == "Approved under Payment"){
            $user->applicationdetail->status = 4;
        }
        $user->applicationdetail->save(); 

        $notify = new Notification; 
        $notify->body = "Payment Information uploaded";
        $notify->user_id = auth::user()->id;
        $notify->type = "rms";  
        $notify->save();
        return response('Success'); 
    }

    public function userCompanyInfo($id){
        $user = User::find($id); 
        $image = Image::where('imageable_type', 'App\ShippingOffice')->orderBy('id', 'desc')->first();
        return view('user/company_info')->withuser($user)->withimage($image);
    }

    public function companyInfo($id){
        $user = User::find($id); 
        return view('pages.company_info')->withuser($user);
    }

    public function accountInfo(){
        if ( auth::check()){
            $user = User::find(auth::user()->id); 
            $image = Image::where('imageable_type', 'App\UserDetail')->orderBy('id', 'desc')->first();

            return view('user.index')->withuser($user)->withimage($image);

        }
    }

    public function photoUpload(Request $request){
        $user = User::find(auth::user()->id); 
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, $user->id, "App\UserDetail");

        return response("Success", 200);
    }
}
