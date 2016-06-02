
    <fieldset class="form-group">
        {!! Form::label('title', 'Event Title') !!}
        {!! Form::input('text', 'title', null, array('class' => 'form-control', 'id' => 'title')) !!}
    </fieldset>
    <fieldset class="form-group">
        {!! Form::label('StreetAddress', 'Street Address') !!}
        {!! Form::input('text', 'street_address', null, array('class' => 'form-control', 'id' => 'StreetAddress')) !!}
    </fieldset>
    <fieldset class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::input('text', 'city', null, array('class' => 'form-control', 'id' => 'city')) !!}
    </fieldset>
    <fieldset class="form-group">
        {!! Form::label('state', 'State') !!}
        {!! Form::input('text', 'state', null, array('class' => 'form-control', 'id' => 'state')) !!}
    </fieldset>

    @include('partials.event-dates')

    <fieldset class="form-group">
        {!! Form::label('venue_name', 'Venue Name') !!}
        {!! Form::input('text', 'venue_name', null, array('class' => 'form-control', 'id' => 'venue_name')) !!}
    </fieldset>
    <fieldset class="form-group">
        {!! Form::label('venue_details', 'Hours') !!}
        {!! Form::textarea('event_hours', null, array('class' => 'form-control', 'id' => 'venue_details', 'rows' => '3')) !!}
    </fieldset>
    <fieldset class="form-group">
        {!! Form::label('details', 'Additional Information') !!}
        {!! Form::textarea('details', null, array('class' => 'form-control', 'id' => 'details', 'rows' => '3', 'placeholder' => "Driving directions, parking information, where to purchase tickets, location inside the event, any special promotions, etc. Get people excited to come!")) !!}
    </fieldset>

    <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Event</button>

    {{ csrf_field() }}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif