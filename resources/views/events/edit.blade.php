

@extends('main')

@section('content')

  <div class="container-fluid edit_event">
    <div class="row">
      <div class="col-sm-2">
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

          </table>
      </div>
    </div>
    <div class="row">
      <div class=" col-sm-1 pull-right">
        <button class="btn btn-danger" type="submit">Delete Selected</button>
      </div>
    </div>
  </div>

@stop


@section('scripts.footer')
@stop