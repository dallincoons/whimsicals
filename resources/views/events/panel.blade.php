

@extends('main')

@section('content')

  <div class="container-fluid edit_event">
    <form method="POST" action="/events">
      {{ method_field('DELETE' )}}
    <div class="row">
      <div class="col-sm-2">

        @include('partials.member-side-nav')

      </div>
      <div class="col-sm-10">
        <h2>Edit/Delete Events</h2>
          <table class="table table-striped table-hover table-bordered table-responsive">
            <tr>
              <th>Edit</th>
              <th>Event Title</th>
              <th>Street Address</th>
              <th>City</th>
              <th>State</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Venue Name</th>
              <th>Venue Details</th>
              <th>Additional Info</th>
              <th>Delete</th>
            </tr>

            <tr>
              <td><a>Edit</a></td>
              <td>Fall Show</td>
              <td>123 Main St</td>
              <td>Salt Lake City</td>
              <td>UT</td>
              <td>09/10/16</td>
              <td>09/12/16</td>
              <td>Delta Center</td>
              <td>Table #3</td>
              <td>Come for tons of fun.</td>
              <td>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                  </label>
                </div>
              </td>
            </tr>

            <tr>
              <td><a>Edit</a></td>
              <td>Winter Show</td>
              <td>200 S 1600 N</td>
              <td>Layton</td>
              <td>UT</td>
              <td>11/01/16</td>
              <td>11/01/16</td>
              <td>--</td>
              <td>--</td>
              <td>Come for tons of fun!</td>
              <td>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                  </label>
                </div>
              </td>
            </tr>

          @foreach($events as $event)
            <tr>
              <td><a href="/events/{{$event->id}}/edit">Edit</a></td>
              <td>{{$event->title}}</td>
              <td>{{$event->street_address}}</td>
              <td>{{$event->city}}</td>
              <td>{{$event->state}}</td>
              <td>{{$event->start_date->format('m/d/Y')}}</td>
              <td>{{$event->end_date->format('m/d/Y')}}</td>
              <td>{{$event->venue_name}}</td>
              <td>{{$event->venue_details}}</td>
              <td>{{$event->details}}</td>
              <td>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="selected_events[]" value="{{$event->id}}">
                  </label>
                </div>
              </td>
            <tr>
          @endforeach

          </table>
      </div>
    </div>

    <div class="row">
      <div class=" col-sm-1 pull-right">
        <button class="btn btn-danger" type="submit">Delete Selected</button>
      </div>
    </div>
      {{ csrf_field() }}
    </form>
  </div>

@stop


@section('scripts.footer')
@stop