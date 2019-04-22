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
            'fullname' =>'required',
            'father' => 'required',
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
            'chamber_of_commerce' => 'numeric|min:4|required', 
            'commercial_registry' => 'numeric|min:4|required', 

            'shipping_methods' => 'required',
            'shipping_modes' => 'required',
            'src_dest' => 'required',

            'financial_status' => 'required',
            'financial_photo' => 'image|required', 

            'date_of_application' => 'required', 
            'signature_photo' => 'required',

            'resume_info' => 'required',
            'hard_copy' => 'required'
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
    //         'fullname.required' =>'This field is required!',
    //         'father.required' => 'This field is required!',
    //         'mother.required' => 'This field is required!', 
    //         'email.required' => 'This field is required!',
    //         'email.mail' => 'This field should contain a valid email!',
    //         'date_of_birth.required' => 'This field is required!',
    //         'place_of_birth.required' => 'This field is required!',
    //         'record.required' => 'This field is required!',
    //         'nationality.required' =>'This field is required!',
    //         'address.required' => 'This field is required!',

    //         'company_name.required' => 'This field is required!',
    //         'branches_address.required' => 'This field is required!', 
    //         'shipping_services.required' => 'This field is required!', 
    //         'position_title.required' => 'This field is required!', 
            
    //         'chamber_of_commerce.required' => 'This field is required!',
    //         'chamber_of_commerce.numeric' => 'This field should be a number!',
    //         'chamber_of_commerce.min' => 'This field should be at least 4 numbers!',

    //         'commercial_registry.required' => 'This field is required!',
    //         'commercial_registry.numeric' => 'This field should be a number!', 
    //         'commercial_registry.min' => 'This field should be at least 4 numbers!', 

    //         'shipping_methods.required' => 'This field is required',
    //         'shipping_modes.required' => 'This field is required',
    //         'src_dest.required' => 'This field is required',

    //         'financial_status.required' => 'This field is required',
    //         'financial_photo' => 'image|required', 

    //         'date_of_application.required' => 'This field is required', 
    //         'signature_photo' => 'required',

    //         'resume_info' => 'required',
    //     ];
    // }
}
