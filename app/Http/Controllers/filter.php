<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User; 


class filter extends Controller
{



    public function filter(Request $request)
    {

        

        $filterd = $user->filter(function ($user) {
            $chk = implode(' ', $request->shipping_methods);
            $chk1 = implode(' ', $request->shipping_modes);

        }


    }

    //
}
