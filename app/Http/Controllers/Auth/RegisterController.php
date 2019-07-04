<?php

namespace App\Http\Controllers\Auth;

use Session; 
use App\User;
use App\Image; 
use App\UserDetail; 
use App\OfficeService; 
use App\ShippingOffice; 
use App\ShippingService;
use App\ApplicationDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\GenerateCredentials;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Role;

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

        // Returns the Role record of user so I can specify the user role on register
        $role = Role::where('name', 'user')->firstOrFail(); 


        // Validation call from app\Requests\UserStoreRequest.php
        // $validated = $request->validated(); 
        $username = str_random(10); 
        $password = str_random(10);
        $user = User::Create([
            'username' => $username,
            'password' => Hash::make($password),
            'email'    => $request->email,
            'role_id'  => $role->id,
        ]);

        UserDetail::Create([
            'user_id'       => $user->id,
            'fullname'      => $request->fullname,
            'nationality'   => $request->nationality,
            'mobile_number' => "+963" . $request->mobile,
            'phone_number'  => "+963" . $request->phone,
        ]);

        $shippingOffice = ShippingOffice::Create([
            'user_id'   => $user->id,
            'name'      => $request->company_name,
            'commercial_registry' => $request->commercial_registry,
            'city'      => $request->city, 
        ]);
        
        $shippingService = ShippingService::Create([
            'user_id' => $user->id,
        ]);

        ApplicationDetail::Create([
            'user_id' => $user->id,
            'status'  => 1,
        ]);

        $shippingOffice->officeservices()->attach($shippingService);
        $data = array('username' => $username, 'password' => $password); 
        Mail::to($request->email)->send(new GenerateCredentials($data));
        
        return response('success', 200);

        // $application = new ApplicationDetail; 
        // $application->user_id = $user->id;
        // $application->Financial_assignment_status = $request->financial_status;
        // $application->Date_of_application = $request->date_of_application; 
        // $application->Resume_information = $request->resume_info;
        // $application->save();
        // $request->file('financial_photo')


        // $details->father_name = $request->father; 
        // $details->mother_name = $request->mother;
        // $details->date_of_birth = $request->date_of_birth; 
        // $details->place_of_birth = $request->place_of_birth;
        // $details->website = $request->website; 
        // $details->record = $request->record; 
        // $details->address = preg_replace( "/\r|\n/", "", $request->address ); 
        // $details->save(); 

        // $office = new ShippingOffice;
        // $office->addresses = preg_replace( "/\r|\n/", "", $request->branches_address ); 
        // $office->shipping_services = $request->shipping_services; 
        // $office->position_title = $request->position_title;
        // $office->chamber_of_commerce = $request->chamber_of_commerce; 
        // $office->save();

        // $services = new ShippingService; 
        // $services->user_id = $user->id;
        // $chk = implode(' ', $request->shipping_methods);
        // $chk1 = implode(' ', $request->shipping_modes);
        // $services->shipping_methods = $chk;
        // $services->shipping_modes = $chk1;
        // $services->sources_destinations = $request->src_dest;
        // $services->save(); 
       
    }
}
