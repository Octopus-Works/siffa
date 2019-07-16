<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Notification;
use App\Link; 

class NotificationViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $notify = Notification::all(); 
        $offer = Link::last(); 
        $q1 = Notification::where('type', 'user')->count();
        $q2 = Notification::where('type', 'rms')->count();
        $view->withnotifications($notify)->withcount1($q1)->withcount2($q2)->withoffer($offer); 
    }
}