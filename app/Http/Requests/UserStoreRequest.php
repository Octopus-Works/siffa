<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'              => 'required',
            'password'              => 'required',
            'email'                 => 'required|email',
            'nationality'           => 'required',
            'mobile'                => 'required', 
            'phone'                 => 'required',
            'commercial_registry'   => 'required|min:4|max:8',
            'city'                  => 'required', 
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
    //         'username.required' =>'This field is required!',
    //         'email.required' => 'This field is required!',
    //         'email.email' => 'This field should contain a valid email!',
    //         'nationality.required' =>'This field is required!',
    //         'mobile.required' => 'This field is required!', 
    //         'phone.required' => 'This field is required!', 
    //         'city.required' => 'This field is required!', 


    //         'commercial_registry.required' => 'This field is required!',
    //         'commercial_registry.min' => 'This field should be at least 4 numbers!', 
    //         'commercial_registry.max' => 'This field should be at most 8 numbers!', 

    //     ];
    // }
}
