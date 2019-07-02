<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserStoreRequest;
use App\Mail\GenerateCredentials;
use Auth; 
use Session; 
use App\User;
use App\Image; 
use App\ShippingOffice; 
use App\ShippingService;
use App\ApplicationDetail;
use App\Services\ImageUploadService;

class ApplicationController extends Controller
{

    public function show(){

    }

    public function edit(){
        
        if ( Auth::check())
        {
            $user = User::find(Auth::user()->id); 
     
            return view('user.application_info')->withuser($user); 
        }

        return view('user.application_info');
        
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

        $user->shippingOffice()->updateOrCreate([
            'name'      => $request->company_name,
            'city'      => $request->city,
            'addresses' => preg_replace( "/\r|\n/", "", $request->branches_address ),
            'shipping_services'   => $request->shipping_services,
            'position_title'      => $request->position_title,
            'chamber_of_commerce' => $request->chamber_of_commerce,
            'commercial_registry' => $request->commercial_registry,
        ]);

        if ( $request->shipping_methods ){
            $user->shippingService()->update([
                'shipping_methods'     => implode(' ', $request->shipping_methods),
                'shipping_modes'       => implode(' ', $request->shipping_modes),
                'sources_destinations' => $request->src_dest,
            ]);
        }

        $user->applicationDetail()->update([
            'Financial_assignment_status' => $request->financial_status,
            'Date_of_application'         => $request->date_of_application,
            'Resume_information'          => $request->resume_info,
        ]);

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, $user->id, "App\ApplicationDetail");

        return redirect()->back()->with('Success'); 
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

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, $user->id, "App\ApplicationDetail");

        return redirect()->back()->with('Success'); 
    }

    public function imageUpload(Request $request){
        foreach($request->files as $file)
        ImageUploadService::imageUpload($file, Auth::user()->id, "App\ApplicationDetail");
    }
}
