

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
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered">

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
              <td>{{$event->event_hours}}</td>
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