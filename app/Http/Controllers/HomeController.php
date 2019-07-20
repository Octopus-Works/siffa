<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Auth; 
use App\News;
use App\Ad;
use App\Event;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function redirect()
    {
        if ( auth::user()->role->name == 'user'){
            return redirect('/user');
        } 
        else if ( auth::user()->role->name == 'RMS'){
            return redirect('/rms');
        } 
     
        else
        $gallery = Gallery::all();
        $news =  News::all();
        $events = Event::all();
        $ads = Ad::all();
        return view(App::getLocale().'/pages/home')->withnews($news)->withevents($events)->withads($ads)->withgallery($gallery);   
     }

    public function index()
    {
        $gallery = Gallery::all();
        $news =  News::all();
        $events = Event::all();
        $ads = Ad::all();
        return view(App::getLocale().'/pages/home')->withnews($news)->withevents($events)->withads($ads)->withgallery($gallery);
    }
}

