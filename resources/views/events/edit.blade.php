

@extends('main')

@section('content')

  <div class="container update_event" id="update_event">
    <div class="row">
      <div class="col-sm-3">

        @include('partials.member-side-nav')

      </div>
      <div class="col-sm-9">
        <h2>Edit Event</h2>
        <form method="POST" action="/events/{{$event->id}}">
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="edit_title">Event Title</label>
            <input type="text" class="form-control" id="edit_title" name="title" value="{{$event->title}}">
          </div>
          <div class="form-group">
            <label for="edit_street">Street Address</label>
            <input type="text" class="form-control" id="edit_street" name="street_address" value="{{$event->street_address}}">
          </div>
          <div class="form-group">
            <label for="edit_city">City</label>
            <input type="text" class="form-control" id="edit_city" name="city" value="{{$event->city}}">
          </div>
          <div class="form-group">
            <label for="edit_state">State</label>
            <input type="text" class="form-control" id="edit_state" name="state" value="{{$event->state}}">
          </div>

          @include('partials.event-dates')

          <div class="form-group">
            <label for="edit_vname">Venue Name</label>
            <input type="text" class="form-control" id="edit_vname" name="venue_name" value="{{$event->venue_name}}">
          </div>
          <div class="form-group">
            <label for="edit_vhours">Hours</label>
            <textarea class="form-control" id="edit_vhours" name="event_hours" rows="3">{{$event->event_hours}}</textarea>
          </div>
          <div class="form-group">
            <label for="edit_details">Additional Information</label>
            <textarea class="form-control" id="edit_details" rows="3" name="details">{{$event->details}}</textarea>
          </div>
          <button type="submit" class="btn btn-default">Update</button>
          <div class="other_options pull-right">
            <button class="btn btn-danger" @click.prevent="deleteEvent({{$event->id}})">Delete</button>
            <button class="btn btn-warning">Go Back</button>
          </div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>

@stop


@section('scripts.footer')
@stop