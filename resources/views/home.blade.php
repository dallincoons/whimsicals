@extends('main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1 col-sm-6 col-sm-offset-2  home_option our_work hvr-sweep-to-top">
                <a href="/products"><h2 class="animated slideInUp">Our Work</h2></a>
            </div>

            <div class="col-md-3 col-md-offset-1 col-sm-6 col-sm-offset-2  home_option our_story hvr-sweep-to-top">
                <a href="/contact"><h2 class="animated slideInUp">Our Story</h2></a>
            </div>

            <div class="col-md-3 col-md-offset-1 col-sm-6 col-sm-offset-2 home_option up_events hvr-sweep-to-top">
                <a href="/events"><h2 class="animated slideInUp">Upcoming Events</h2></a>
            </div>
        </div>

    </div>

@stop