<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.user');
    } 

    public function getCalendarPage(Request $request){
        return view('admin.calendar.index');
    }
}
