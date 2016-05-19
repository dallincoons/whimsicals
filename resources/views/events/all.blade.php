@extends('main')

@section('content')


    <div class="container events_wrapper">
        <div class="row">
            <h2>Upcoming Events <span>Come see us in person!</span></h2>
        </div>

        <div class="row">
            <div class="event_container">
                <div class="event_date">
                    <h3>June 1-2</h3>
                    <h3>2016</h3>
                </div>
                <div class="event_info">
                    <h3>The Fancy Boutique</h3>
                    <h4>400 E Fake Street Ste. 107 Layton, UT</h4>
                    <h4>Open 8-8 everyday!</h4>
                    <h4>Find us in the big ballroom, Table #3!</h4>
                </div>
                <div class="event_description">
                    <p>Event will be held on May 14, 2016. The expo will have vendor booths from all over selling their antique, vintage, homemade crafts, and food. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="event_container">
                <div class="event_date">
                    <h3>June 1-2</h3>
                    <h3>2016</h3>
                </div>
                <div class="event_info">
                    <h3>The Fancy Boutique</h3>
                    <h4>400 E Fake Street Ste. 107 Layton, UT</h4>
                    <h4>Open 8-8 everyday!</h4>
                    <h4>Find us in the big ballroom, Table #3!</h4>
                </div>
                <div class="event_description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget ipsum ac magna luctus gravida at convallis urna. Duis vel eleifend mi. Duis et nisi condimentum, accumsan nisi a, efficitur ex. Maecenas ex dui, accumsan quis vulputate nec, rhoncus in erat. Curabitur eu purus vitae ex ullamcorper consectetur et dignissim est. Pellentesque eget mi consectetur, blandit orci nec, finibus ipsum. Morbi a cursus tellus, eget iaculis dui. Etiam elementum aliquet bibendum. Aenean vitae quam porttitor, vestibulum mauris at, vestibulum nulla. Nunc lorem enim, auctor ac nisi id, aliquam porttitor ex. Cras vitae tellus et justo condimentum consectetur vel vitae dui. Sed fringilla porttitor aliquam. Duis congue, nisl et pretium laoreet, lacus erat accumsan lacus, sed consectetur ante nibh ut sem. Nunc tincidunt augue sapien, in tempor eros iaculis sit amet.</p>
                </div>
            </div>
        </div>

        @foreach($events as $event)

            <div class="row">
                <div class="event_container">
                    <div class="event_date">
                        <h3>{{$event->start_date->format('M')}}, {{$event->start_date->format('d')}}</h3>
                        <h3>{{$event->start_date->year}}</h3>
                        <h3></h3>
                    </div>
                    <div class="event_info">
                        <h3>{{$event->venue_name}}</h3>
                        <h4>{{$event->street_address}} {{$event->city}}, {{$event->state}}</h4>
                        <h4>{{$event->venue_details}}</h4>
                    </div>
                    <div class="event_description">
                        <p>{{$event->detail}}</p>
                    </div>
                </div>
            </div>

        @endforeach


    </div>


@stop
