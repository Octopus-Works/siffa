<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ShippingOffice;
use App\ShippingService; 
use DB;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function reports(){
        return view('pages.reports&publications');
    }

    public function shipping_offices(){
        $users = User::all();
        return view('pages/shipping_offices')->withusers($users);
    }

    public function mission(){
        return view('pages.about.mission_statement');
    }

    public function laws(){
        return view('pages.about.laws');
    }

    public function trading_conditions(){
        return view('pages.about.trading_conditions');
    }

    public function becomeamember(){
        return view('pages.members.become_member');
    }

    public function members_list(Request $request){
        $users = User::where('role_id', '2')->get();

        $query = DB::table('shipping_offices')
        ->join('shipping_services', 'shipping_services.id', 'shipping_offices.id')
        ->get(); 

        return view('pages.members.member_list')->withusers($users)->withquery($query);

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
        return view('pages.members.member_list')->withusers($users)->withquery($query);

    }

    public function calendar(){
        return view('pages.news.calendar');
    }
    
    public function events(){
        return view('pages.news.events');
    }

    public function latest(){
        return view('pages.gallery.latest');
    }

    public function archive(){
        return view('pages.gallery.archive');
    }

    public function president_message(){
        return view('pages.directors.president_message');
    }

    public function board_members(){
        return view('pages.directors.board_members');
    }


    
}
