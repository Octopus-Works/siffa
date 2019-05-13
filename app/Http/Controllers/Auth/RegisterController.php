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
        
        $validated = $request->validated(); 
        $username = str_random(10); 
        $password = str_random(10);

        $user = new User; 
        $user->username = $username; 
        $user->password = Hash::make($password);
        $user->email = $request->email; 
        $user->save(); 

        $details = new UserDetail; 
        $details->user_id = $user->id; 
        $details->fullname = $request->fullname;
        $details->father_name = $request->father; 
        $details->mother_name = $request->mother;
        $details->date_of_birth = $request->date_of_birth; 
        $details->place_of_birth = $request->place_of_birth;
        $details->mobile_number = $request->mobile_number;
        $details->phone_number = $request->phone_number;
        $details->website = $request->website; 
        $details->record = $request->record; 
        $details->nationality = $request->nationality; 
        $details->address = $request->address; 
        $details->save(); 

        $office = new ShippingOffice;
        $office->user_id = $user->id;
        $office->name = $request->company_name;
        $office->addresses = $request->branches_address;
        $office->shipping_services = $request->shipping_services; 
        $office->position_title = $request->position_title;
        $office->chamber_of_commerce = $request->chamber_of_commerce; 
        $office->commerical_registry = $request->commercial_registry; 
        $office->save();
 
        $services = new ShippingService; 
        $services->user_id = $user->id;
        $chk = implode(' ', $request->shipping_methods);
        $chk1 = implode(' ', $request->shipping_modes);
        $services->shipping_methods = $chk;
        $services->shipping_modes = $chk1;
        $services->sources_destinations = $request->src_dest;
        $services->save(); 

        $officeservice = new OfficeService;
        $officeservice->shipping_office_id = $office->id;
        $officeservice->shipping_service_id = $services->id;
        $officeservice->save();
        

        $application = new ApplicationDetail; 
        $application->user_id = $user->id;
        $application->Financial_assignment_status = $request->financial_status;
        $application->Date_of_application = $request->date_of_application; 
        $application->Resume_information = $request->resume_info;
        $application->save();
        // $request->file('financial_photo')
        
        $counter = 0; 
        foreach ($request->files->all() as $file) {
            $filenameWithExt = $file->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $file->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            if ( $counter == 0 )
            $path = $request->file('financial_photo')->storeAs('public/application', $fileNameToStore);
            else if ( $counter == 1 )
            $path = $request->file('signature_photo')->storeAs('public/application', $fileNameToStore);
            else
            $path = $request->file('hard_copy')->storeAs('public/application', $fileNameToStore);

            $Image = new Image;  
            $Image->imageable_id = $user->id;
            $Image->imageable_type = 'App\ApplicationDetail';
            $Image->url = '/storage/application/'. $fileNameToStore;
            $Image->save();
            error_log($counter); 
            $counter++; 
        }
        

        $data = array('username' => $username, 'password' => $password); 
        Mail::to($request->email)->send(new GenerateCredentials($data));
        Session::flash('Success', 'Registeration is completed');
        return response('Success');
        // return redirect()->route('about');

    }
}
