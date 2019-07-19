<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ShippingOffice;
use App\ShippingService; 
use DB;
use App;

class PagesController extends Controller
{
    public function about(){
        return view(App::getLocale().'/pages.about');
    }

    public function contact(){
        return view(App::getLocale().'/pages.contact');
    }

    public function reports(){
        return view(App::getLocale().'/pages.reports&publications');
    }

    public function shipping_offices(){
        $users = User::all();
        return view(App::getLocale().'/pages/shipping_offices')->withusers($users);
    }

    public function mission(){
        return view(App::getLocale().'/pages.about.mission_statement');
    }

    public function laws(){
        return view(App::getLocale().'/pages.about.laws');
    }

    public function trading_conditions(){
        return view(App::getLocale().'/pages.about.trading_conditions');
    }

    public function becomeamember(){
        return view(App::getLocale().'/pages.members.become_member');
    }

    public function members_list(Request $request){
        $users = User::where('role_id', '2')->get();

        $query = DB::table('shipping_offices')
        ->join('shipping_services', 'shipping_services.id', 'shipping_offices.id')
        ->get(); 

        return view(App::getLocale().'/pages.members.member_list')->withusers($users)->withquery($query);

    }
    
    public function test(Request $request){
        $users = User::where('role_id', '2')->get();
  
        $s = implode(' ', $request->shipping_modes);

        $temp = ShippingService::all(); 
        $arr = array(); 
        foreach($temp as $t){
            if (count(array_intersect($request->shipping_modes, explode(" ", $t->shipping_modes))) == count($request->shipping_modes))
            {
                array_push($arr,$t->id); 
            }
        }

        $query = DB::table('shipping_offices')
        ->join('shipping_services', 'shipping_services.id', 'shipping_offices.id')
        ->join('user_details', 'user_details.id', 'shipping_offices.id')
        ->where('city', $request->city)
        ->whereIn('shipping_offices.id', $arr)
        ->get(); 
        return view(App::getLocale().'/pages.members.member_list')->withusers($users)->withquery($query);

    }

    public function calendar(){
        return view(App::getLocale().'/pages.news.calendar');
    }
    
    public function events(){
        return view(App::getLocale().'/pages.news.events');
    }

    public function latest(){
        return view(App::getLocale().'/pages.gallery.latest');
    }

    public function archive(){
        return view(App::getLocale().'/pages.gallery.archive');
    }

    public function president_message(){
        return view(App::getLocale().'/pages.directors.president_message');
    }

    public function board_members(){
        return view(App::getLocale().'/pages.directors.board_members');
    }


    
}
