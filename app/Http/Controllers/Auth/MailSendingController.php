<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\GenerateCredentials;

class MailSendingController extends Controller
{
    public function mail(Request $request){

      $request->session()->put('email', $request->email);

      return redirect('/');
      // Mail::to($request->email)->send(new GenerateCredentials());

      // return 'Email was sent!'; 
    }
}
