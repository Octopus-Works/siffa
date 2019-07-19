<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EventsService;
use App;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.user');
    } 

    public function getCalendarPage(Request $request){
        return view(App::getLocale().'/admin.calendar.index');
    }

    public function getEventsData(Request $request)
    {
        return EventsService::getEventsData();
    }
}
