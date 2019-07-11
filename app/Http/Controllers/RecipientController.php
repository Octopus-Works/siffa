<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Image;
use App\Notification;
use App\InternalMessaging;
use App\Services\ImageUploadService;

class RecipientController extends Controller
{
    public function index(){
        $user = User::find(auth::user()->id);

        $image = Image::where('imageable_type', 'App\UserDetail')->where('imageable_id', $user->id)->orderBy('id', 'desc')->first();
        return view('rms.index')->withuser($user)->withimage($image);
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

    public function rmsMiniUpdate(Request $request){
        
        // $validated = $request->validated(); 
        $user = User::find(Auth::user()->id); 
        $user->userdetail()->update([
            'fullname'      => $request->fullname,
            'father_name'   => $request->father, 
            'mother_name'   => $request->mother,
        ]);

        if( isset($request->email))
            $user->email = $request->email;
        if( isset($request->password))
            $user->password  = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('Success'); 
    }

    public function rmsPhotoUpload(Request $request){
        $user = User::find(auth::user()->id); 
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, $user->id, "App\UserDetail");

        return response("Success", 200);
    }

    public function application($id){
        $user = User::find($id);
        $image = Image::where('imageable_type', 'App\ApplicationDetail')->where('imageable_id', $id)->orderBy('id', 'desc')->first();
        return view('rms/application')->withuser($user)->withid($id)->withimage($image);  
    }

    public function recipients_management(){
        $user = User::where('role_id', '2')->get();
        return view('rms.user_management')->withuser($user);
    }

    public function block($id){
        $user = User::find($id); 
        $user->blocked = true; 
        $user->save(); 
        return response("Success", 200);
    }

    public function unblock($id){
        $user = User::find($id); 
        $user->blocked = false; 
        $user->save(); 
        return response("Success", 200);
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
        return response("Success", 200);
    }

    public function rejected($id){
        $user = User::find($id); 
        $user->applicationdetail->status = 2;
        $user->applicationdetail->save(); 
        return response("Success", 200);
    }

}
