<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EventsService;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.user');
    } 

    public function getCalendarPage(Request $request){
        return view('admin.calendar.index');
    }

    public function getEventsData(Request $request)
    {
        return EventsService::getEventsData();
    }
}
