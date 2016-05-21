

@extends('main')

@section('content')

  <div class="container update_event">
    <div class="row">
      <div class="col-sm-3">
        <div class="sidebar-nav">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <span class="visible-xs navbar-brand">Edit/Update Options</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="/create"><i class="fa fa-calendar-plus-o"></i> Add New Event</a></li>
                <li role="separator" class="line_divide"></li>
                <li class="active"><a href="#"><i class="fa fa-calendar-check-o"></i> Edit Events</a></li>
                <li role="separator" class="line_divide"></li>
                <li><a href="/add"><i class="fa fa-plus-circle"></i> Add New Example Product</a></li>
                <li role="separator" class="line_divide"></li>
                <li><a href="#"><i class="fa  fa-edit"></i> Edit Example Products</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <h2>Edit Event</h2>
        <form>
          <div class="form-group">
            <label for="edit_title">Event Title</label>
            <input type="text" class="form-control" id="edit_title">
          </div>
          <div class="form-group">
            <label for="edit_street">Street Address</label>
            <input type="text" class="form-control" id="edit_street">
          </div>
          <div class="form-group">
            <label for="edit_city">City</label>
            <input type="text" class="form-control" id="edit_city">
          </div>
          <div class="form-group">
            <label for="edit_state">State</label>
            <input type="text" class="form-control" id="edit_state">
          </div>
          <fieldset>
            single
            <input type="radio" v-model="dateType" value="single" name="dateType">
            multi
            <input type="radio" v-model="dateType" value="multi" name="dateType">
          </fieldset>
          <div class="form-group">
            <label for="edit_vname">Venue Name</label>
            <input type="text" class="form-control" id="edit_vname">
          </div>
          <div class="form-group">
            <label for="edit_vdetails">Venue Details</label>
            <textarea class="form-control" id="edit_vdetails" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="edit_details">Additional Information</label>
            <textarea class="form-control" id="edit_details" rows="3" name="details"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Update</button>
          <div class="other_options pull-right">
            <button type="submit" class="btn btn-danger">Delete</button>
            <button type="submit" class="btn btn-warning">Go Back</button>
          </div>

        </form>
      </div>
    </div>
  </div>






@stop


@section('scripts.footer')
@stop