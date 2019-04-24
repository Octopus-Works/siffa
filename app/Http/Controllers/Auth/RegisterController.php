<?php

namespace App\Http\Controllers\Auth;

use Session; 
use App\User;
use App\Image; 
use App\ShippingOffice; 
use App\ShippingService;
use App\ApplicationDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\GenerateCredentials;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserStoreRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function mail(UserStoreRequest $request){
        
        // Will return only validated data
        $validated = $request->validated(); 
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


        $filenameWithExt = $request->file('financial_photo')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('financial_photo')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('financial_photo')->storeAs('public/financial_assignment', $fileNameToStore);
        $Image = new Image;  
        $Image->imageable_id = $user->id;
        $Image->imageable_type = 'App\ApplicationDetail';
        $Image->url = '/storage/financial_assignment/'. $fileNameToStore;
        $Image->save();


        $data = array('username' => $username, 'password' => $password); 
        Mail::to($request->email)->send(new GenerateCredentials($data));
        Session::flash('Success', 'Registeration is completed');
        return redirect()->route('about');

    }
}
