<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\ShippingOffice; 
use App\ShippingService;
use App\ApplicationDetail; 

class ApplicationController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [

            'fullname' =>'required',
            'father' => 'required',
            'mother' => 'required', 
            'date_of_birth' => 'required|date',
            'place_of_birth' =>'required',
            'record' => 'required',
            'nationality' =>'required',
            'address' => 'required',

            'company_name' => 'required',
            'branches_address' => 'required', 
            'shippingservices' => 'required', 
            'position' => 'required', 
            'chamber_of_commerce' => 'required', 
            'commercial_registry' => 'required', 

            'shipping_methods' => 'required',
            'shipping_modes' => 'required',
            'src_dest' => 'required',

            'financial_status' => 'required',
            'financial_photo' => 'required|image', 

            'date_of_application' => 'required', 
            'signature_photo' => 'required|image',

            'resume_info' => 'required',
            'hard_copy' => 'required|image'

        ]);

        //Images needs a seperate image table
        
        $user = new User; // Auto generated name. 
        $user->fullname = $request->fullname; 
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
        $office->addresses = $request; 
        $office->shipping_services = $request; 
        $office->position_title = $request;
        $office->chamber_of_commerce = $request; 
        $office->commercial_registry = $request; 
        $office->save();

        $services = new ShippingService; 
        $services->shipping_methods = $request->shipping_methods; 
        $services->shipping_modes = $request->shipping_modes; 
        $services->sources_destinations = $request->src_dest;
        $services->save(); 

        $applicatoin = new ApplicationDetail; 
        $application->Financial_assignment_status = $request->financial_status;
        $application->Date_of_application = $request->date_of_application; 
        $applicatoin->Resume_information = $request->resume_info;
        return redirect('/')->with('status', 'Profile Updated');


    }
}
