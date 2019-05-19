<?php  

namespace App\Services;

use App\Event;

class EventsService {

    public static function getEventsData(){
        // code here
        $response = new \stdClass;
        $response->status = true;
        $response->data = [];  
        $events = Event::all();
        foreach($events as $event)
        {
            $eventElement = new \stdClass;
            $eventElement->title =  $event->title_en;
            $eventElement->start = $event->start_date;
            $eventElement->end = date('Y-m-d 00:00:00' , strtotime($event->start_date . '+1 days'));
            $response->data []= $eventElement;
        }
        return json_encode($response);
    }
}
