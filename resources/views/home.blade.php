@extends('main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3 home_option our_work">
                <a href="/all"><h2 class="animated slideInUp">Our Work</h2></a>
            </div>

            <div class="col-sm-3 col-sm-offset-1 home_option our_story">
                <a href="/contact"><h2 class="animated slideInUp">Our Story</h2></a>
            </div>

            <div class="col-sm-3 col-sm-offset-1 home_option up_events">
                <a href="/events"><h2 class="animated slideInUp">Upcoming Events</h2></a>
            </div>



        </div>

    </div>

@stop