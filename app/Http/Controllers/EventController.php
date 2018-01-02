<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;
use App\Event;

class EventController extends Controller
{
    protected $calendar;

    public function __construct(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }

    public function index()
    {
        $events = [];
        $data = Event::with('contract')->get();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => '/contract/' . $value->contract->id,
                    ]
                );
            }
        }
        $calendar = $this->calendar->addEvents($events);

        return view('fullCalendar', compact('calendar'));
    }
}