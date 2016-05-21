

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
                        <label for="Title">Title</label>
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

                    <fieldset>
                        single
                        <input type="radio" v-model="dateType" value="single" name="dateType">
                        multi
                        <input type="radio" v-model="dateType" value="multi" name="dateType">
                    </fieldset>

                    <label>Start Date</label>
                    <fieldset class="form-group">
                        <select name="start_month">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="start_day">
                            @foreach(range(1, 31) as $day)
                                <option>{{$day}}</option>
                            @endforeach
                        </select>
                        <select name="start_year">
                            <option>{{$now->year}}</option>
                            <option>{{$now->copy()->addYear()->year}}</option>
                        </select>
                    </fieldset>

                    <div v-show="dateType === 'multi'">

                        <label>End Date</label>
                        <fieldset class="form-group">
                            <select name="end_month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select name="end_day">
                                @foreach(range(1, 31) as $day)
                                    <option>{{$day}}</option>
                                @endforeach
                            </select>
                            <select name="end_year">
                                <option>{{$now->year}}</option>
                                <option>{{$now->copy()->addYear()->year}}</option>
                            </select>
                        </fieldset>
                    </div>

                    <fieldset class="form-group">
                        <label for="venue_name">Venue Name</label>
                        <input  type="text" class="form-control" id="venue_name" name="venue_name" />
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="venue_details">Venue Details</label>
                        <textarea class="form-control" id="venue_details" rows="3" name="venue_details"></textarea>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="details">Additional Information</label>
                        <textarea class="form-control" id="details" rows="3" name="details"></textarea>
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