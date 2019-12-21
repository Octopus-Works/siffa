<?php

namespace App\Http\Controllers\Auth;


use Session; 
use Auth;
use App\User;
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
        $validated = $request->validated(); 
        $userId = 1; 
        try{
            $email    = $request->email; 
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
                'mobile_number' => $request->mobile,
                'phone_number'  => $request->phone,
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

            Auth::login($user);
            $userId = $user->id; 
            $shippingOffice->officeservices()->attach($shippingService);
            $data = array('email' => $email, 'password' => $password); 
            Mail::to($request->email)->send(new GenerateCredentials($data));

        } catch(\Exception $e){
            $userObject = User::find($userId);
            if ($userObject != null)
            $userObject->delete();
            Session::flash('message', "Error in Registration data!");
            return back(); 
        }

        Session::flash('message', 'Credentials has been sent to your email');
        return redirect()->route('index');
       
    }
}
