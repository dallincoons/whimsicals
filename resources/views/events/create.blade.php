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
        <input  type="text" class="form-control" id="state" rows="3" name="state" />
    </fieldset>
    <fieldset class="form-group">
        <label for="time">Time</label>
        <input  type="date" class="form-control" id="time" rows="3" name="time" />
    </fieldset>
    <fieldset class="form-group">
        <label for="venue_details">venue_details</label>
        <textarea class="form-control" id="venue_details" rows="3" name="venue_details"></textarea>
    </fieldset>
    <fieldset class="form-group">
        <label for="venue_name">venue_name</label>
        <textarea class="form-control" id="venue_name" rows="3" name="venue_name"></textarea>
    </fieldset>
    <fieldset class="form-group">
        <label for="details">details</label>
        <textarea class="form-control" id="details" rows="3" name="details"></textarea>
    </fieldset>

    <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Product</button>

    {{ csrf_field() }}

</form>