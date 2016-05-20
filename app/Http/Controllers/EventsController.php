<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Http\Requests\AddEventRequest;
use Carbon\Carbon;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::latest('start_date')->future()->get();

        return view('events.all', compact('events'));
    }

    public function create()
    {
        $now = Carbon::now();

        return view('events.create', compact('now'));
    }

    public function store(AddEventRequest $request, Event $event)
    {

        $request->merge(['start_date' => Carbon::createFromDate($request->start_year, $request->start_month, $request->start_day)->toDateTimeString()]);

        if($request->dateType === 'multi')
        {
            $request->merge(['end_date' => Carbon::createFromDate($request->end_year, $request->end_month, $request->end_day)->toDateTimeString()]);
        }

        $event->create($request->all());

        return redirect('/events');
    }
}
