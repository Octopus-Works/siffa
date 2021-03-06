<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserStoreRequest;
use App;
use Auth; 
use App\User;
use App\Image; 
use App\Services\ImageUploadService;

class ApplicationController extends Controller
{

    public function show(){

    }

    public function edit(){
        
        if ( Auth::check())
        {
            $user = User::find(Auth::user()->id); 
            
            $image = Image::where('imageable_type', 'App\ApplicationDetail')->where('imageable_id', $user->id)->orderBy('id', 'desc')->first();

            return view(App::getLocale().'/user.application_info')->withuser($user)->withimage($image);
        }

        return view(App::getLocale().'/user.application_info');
        
    }

    public function update(Request $request){
        
        // $validated = $request->validated(); 
        $user = User::find(Auth::user()->id); 

        $user->userdetail()->update([
            'fullname'      => $request->fullname,
            'father_name'   => $request->father, 
            'mother_name'   => $request->mother,
            'date_of_birth' => $request->date_of_birth, 
            'place_of_birth'=> $request->place_of_birth, 
            'mobile_number' => $request->mobile,
            'phone_number'  => $request->phone,
            'website'       => $request->website,
            'record'        => $request->record,
            'nationality'   => $request->nationality, 
            'address'       => preg_replace( "/\r|\n/", "", $request->address ),
        ]);

        $user->shippingOffice()->update([
            'name'      => $request->company_name,
            'position_title'      => $request->position_title,
            'chamber_of_commerce' => $request->chamber_of_commerce,
            'commercial_registry' => $request->commercial_registry,
        ]);

        if ( isset($request->city))
            $user->shippingOffice->city = $request->city;
        $user->shippingOffice->save();
        
        if ( isset($request->shipping_modes))
            $user->shippingService->shipping_modes = implode(' ', $request->shipping_modes);
        
        $user->shippingService->sources_destinations = $request->src_dest;
        $user->shippingService->save();
        
        $user->applicationDetail()->update([
            'Financial_assignment_status' => $request->financial_status,
            'Date_of_application'         => $request->date_of_application,
        ]);

        if( isset($request->email))
            $user->email = $request->email;
        if( isset($request->password))
            $user->password  = Hash::make($request->password);
        $user->save();
        
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, $user->id, "App\ApplicationDetail");

        return response('Success', 200); 
    }

    public function miniUpdate(Request $request){
        
        // $validated = $request->validated(); 
        $user = User::find(Auth::user()->id); 
        $user->userdetail()->update([
            'fullname'      => $request->fullname,
            'father_name'   => $request->father, 
            'mother_name'   => $request->mother,
            'website'       => $request->website,
        ]);

        $user->shippingOffice()->update([
            'name'      => $request->company_name,
        ]);

        $user->email = $request->email;
        if( isset($request->password))
            $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('Success'); 
    }

    public function imageUpload(Request $request){
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, Auth::user()->id, "App\ApplicationDetail");
    }
}
