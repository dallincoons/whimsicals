<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Http\Requests\EventRequest;
use Carbon\Carbon;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $events = Event::future()->get();

        return view('events.all', compact('events'));
    }

    public function create()
    {
        $now = Carbon::now();

        flash()->success('Event has been created');

        return view('events.create', compact('now'));
    }

    public function store(EventRequest $request, Event $event)
    {

        $request['start_date'] = Carbon::createFromDate($request->start_year, $request->start_month, $request->start_day)->toDateTimeString();

        if($request->dateType === 'multi')
        {
            $request['end_date'] = Carbon::createFromDate($request->end_year, $request->end_month, $request->end_day)->toDateTimeString();
        }

        $event->create($request->all());

        return redirect('/events');
    }

    public function edit(Event $event)
    {
        $now = Carbon::now();

        flash()->success('Event has been edit');

        return view('events.edit', compact('event', 'now'));
    }

    public function showPanel()
    {
        $events = Event::latest('start_date')->future()->get();

        return view('events.panel', compact('events'));
    }

    public function update(Request $request, Event $event)
    {

        $event->update($request->all());

        return redirect('/events/edit');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function delete(Request $request)
    {
        Event::destroy($request->selected_events);

        flash()->success('Events have been edited');

        return back();
    }

    public function destroy(Event $event)
    {
        $event->delete();

        flash()->success('Event has been edited');

        return 'success';
    }
}
