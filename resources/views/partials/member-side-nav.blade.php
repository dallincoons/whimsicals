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
                <li @if(Request::is('events/create')) class="active" @endif><a href="/events/create"><i class="fa fa-calendar-plus-o"></i> Add New Event</a></li>
                <li role="separator" class="line_divide"></li>
                <li @if(Request::is('events/edit')) class="active" @endif><a href="/events/edit"><i class="fa fa-calendar-check-o"></i> Edit Events</a></li>
                <li role="separator" class="line_divide"></li>
                <li @if(Request::is('products/create')) class="active" @endif><a href="/products/create"><i class="fa fa-plus-circle"></i> Add New Product</a></li>
                <li role="separator" class="line_divide"></li>
                <li @if(Request::is('products/edit')) class="active" @endif><a href="/products/edit"><i class="fa  fa-edit"></i> Edit Products</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>