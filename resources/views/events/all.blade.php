@extends('main')

@section('content')


<div class="events_body">


    <div class="container">
        <div class="events_wrapper">


            <div class="row">
                <h2>Upcoming Events</h2>
            </div>

            @foreach($events as $event)

                <div class="row">
                    <div class="event_container">
                        <div class="event_date">
                            <h3>{{$event->start_date->format('M')}} {{$event->start_date->format('d')}} @if($event->end_date > $event->start_date) - {{ $event->end_date->format('d') }}@endif</h3>
                            <h3>{{$event->start_date->year}}</h3>
                        </div>
                        <div class="event_info">
                            <h3>{{$event->venue_name}}</h3>
                            <h4>{{$event->street_address}} {{$event->city}}, {{$event->state}}</h4>
                            <h4>{{$event->venue_details}}</h4>
                        </div>
                        <div class="event_description">
                            <p>{{$event->details}}</p>
                        </div>
                        @if(!Auth::guest())<a href="/events/{{$event->id}}/edit" >edit</a>@endif
                    </div>
                    <div class="line_divide"></div>
                </div>

            @endforeach
        </div>
    </div>
</div>

@stop
