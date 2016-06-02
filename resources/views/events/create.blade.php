

@extends('main')

@section('content')

    <div class="container add_event" id="add_event" inline-template>
        <div class="row">
            <div class="col-sm-3">

                @include('partials.member-side-nav')

            </div>
            <div class="col-sm-9">
                <h2>Add New Event</h2>
                {!! Form::open(array('method' => 'POST', 'files' => true, 'action' => 'EventsController@store')) !!}

                    @include('partials.forms.event')

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop

@section('scripts.footer')
@stop