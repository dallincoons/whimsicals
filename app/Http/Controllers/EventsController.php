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
        $events = Event::latest('time')->future()->get();

        return view('events.all', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(AddEventRequest $request, Event $event)
    {
        $event->create($request->all());

        return redirect('/events');
    }
}
