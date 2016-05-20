@extends('main')

@section('content')

  <div class="container member_home">
    <div class="row member_welcome">
        <h2>Welcome! What would you like to do?</h2>
    </div>
    <div class="row">
        <div class="col-md-2 member_choices">
            <a href="/events/create"><h2>Add New Event <i class="fa fa-calendar-plus-o"></i></h2></a>
        </div>
        <div class="col-md-2 col-md-offset-1 member_choices">
            <a><h2>Edit Events <i class="fa fa-calendar-check-o"></i></h2></a>
        </div>
        <div class="col-md-2 col-md-offset-1 member_choices">
            <a><h2>Add New Product <i class="fa fa-plus-circle"></i></h2></a>
        </div>
        <div class="col-md-2 col-md-offset-1 member_choices">
            <a><h2>Edit Products <i class="fa  fa-edit"></i></h2></a>
        </div>
    </div>
  </div>

@stop