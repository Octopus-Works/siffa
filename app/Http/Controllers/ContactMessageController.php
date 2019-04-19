<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'message' => 'required',
            'subject' => 'required', 
            'email' => 'required|email',
            'nationality' => 'required', 
        ]);     
        $email = $request->get('email');
        $subject = $request->get('subject');

        Mail::send('vendor.notifications.contact_email',
          array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'nationality' => $request->get('nationality'),
            'user_message' => $request->get('message')
              ), function($message) use($email,$subject) 
         {
        $message->from($email);
        $message->to('aamghed@gmail.com' , 'Admin')->subject("website contact us alret The subject is:".$subject);
        });
       

    }
}
