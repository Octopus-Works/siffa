<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\GenerateCredentials;
use Session; 
use App\User; 
use App\ShippingOffice; 
use App\ShippingService;
use App\ApplicationDetail; 

class ApplicationController extends Controller
{
    public function mail(Request $request){

        $this->validate($request, [
            'fullname' =>'bail|required',
            'father' => 'bail|required',
            'mother' => 'required', 
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'place_of_birth' =>'required',
            'record' => 'required',
            'nationality' =>'required',
            'address' => 'required',

            'company_name' => 'required',
            'branches_address' => 'required', 
            'shipping_services' => 'required', 
            'position_title' => 'required', 
            'chamber_of_commerce' => 'required', 
            'commercial_registry' => 'bail|required', 

            'shipping_methods' => 'required',
            'shipping_modes' => 'required',
            'src_dest' => 'required',

            'financial_status' => 'required',
            // 'financial_photo' => 'required', 

            'date_of_application' => 'required', 
            // 'signature_photo' => 'required',

            // 'resume_info' => 'required',
            // 'hard_copy' => 'required'

        ]);

        $username = str_random(10); 
        $password = str_random(10);

        $user = new User; 
        $user->username = $username; 
        $user->password = Hash::make($password);     
        $user->fullname = $request->fullname;
        $user->email = $request->email; 
        $user->father_name = $request->father; 
        $user->mother_name = $request->mother;
        $user->date_of_birth = $request->date_of_birth; 
        $user->place_of_birth = $request->place_of_birth; 
        $user->record = $request->record; 
        $user->nationality = $request->nationality; 
        $user->address = $request->address; 
        $user->save(); 

        $office = new ShippingOffice; 
        $office->name = $request->company_name;
        $office->addresses = $request->branches_address;
        $office->shipping_services = $request->shipping_services; 
        $office->position_title = $request->position_title;
        $office->chamber_of_commerce = $request->chamber_of_commerce; 
        $office->commerical_registry = $request->commercial_registry; 
        $office->save();

        $services = new ShippingService; 
        $services->shipping_methods = $request->shipping_methods; 
        $services->shipping_modes = $request->shipping_modes; 
        $services->sources_destinations = $request->src_dest;
        $services->save(); 

        $application = new ApplicationDetail; 
        $application->Financial_assignment_status = $request->financial_status;
        $application->Date_of_application = $request->date_of_application; 
        $application->Resume_information = $request->resume_info;
        $application->save();
        $data = array('username' => $username, 'password' => $password); 
        Mail::to($request->email)->send(new GenerateCredentials($data));
        Session::flash('Success', 'Registeration is completed');
        return redirect('/');

    }
}
