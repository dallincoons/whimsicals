

@extends('main')

@section('content')

    <div class="container add_event" id="add_event" inline-template>
        <div class="row">
            <div class="col-sm-3">

                @include('partials.member-side-nav')

            </div>
            <div class="col-sm-9">
                <h2>Add New Event</h2>
                <form method="POST" action="/events" enctype="multipart/form-data">

                    <fieldset class="form-group">
                        <label for="Title">Event Title</label>
                        <input type="text" class="form-control" id="Title" name="title">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="StreetAddress">Street Address</label>
                        <input type="text" class="form-control" id="StreetAddress" name="street_address">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" type="number" id="city" name="city" />
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="state">State</label>
                        <input  type="text" class="form-control" id="state" name="state" />
                    </fieldset>

                    @include('partials.event-dates')

                    <fieldset class="form-group">
                        <label for="venue_name">Venue Name</label>
                        <input  type="text" class="form-control" id="venue_name" name="venue_name" />
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="venue_details">Hours</label>
                        <textarea class="form-control" id="venue_details" rows="3" name="event_hours"></textarea>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="details">Additional Information</label>
                        <textarea class="form-control" id="details" rows="3" name="details" placeholder="Driving directions, parking information, where to purchase tickets, location inside the event, any special promotions, etc. Get people excited to come!"></textarea>
                    </fieldset>

                    <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Event</button>

                    {{ csrf_field() }}

                </form>
            </div>
        </div>
    </div>






@stop


@section('scripts.footer')
@stop