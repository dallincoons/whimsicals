@extends('main')



@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-right-1 about">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum eleifend tellus sed tempus. Suspendisse et odio nisl. Donec imperdiet commodo lectus sit amet sollicitudin. Vestibulum vitae porttitor massa. Nam placerat purus a sapien fringilla, in vulputate felis posuere. Vestibulum ac accumsan risus. Integer hendrerit egestas porttitor. Suspendisse consequat et eros et volutpat. Integer lobortis accumsan posuere. Fusce iaculis ante non placerat bibendum.</p>
            <p>Quisque nulla ligula, aliquet non pretium venenatis, egestas pulvinar est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla vitae blandit sapien, non faucibus justo. Nunc tempus sem nibh, euismod lacinia sem convallis sed. In dignissim vestibulum ante, in lacinia arcu condimentum eget. Curabitur finibus nisi eu massa viverra volutpat. Nam a lorem mattis est porta elementum. Cras vitae egestas metus, et efficitur mi. Duis laoreet aliquet iaculis. Quisque elementum feugiat sem, eget pharetra tellus gravida ac. Nam efficitur non urna ut pulvinar.</p>
            <h3>- MarDee</h3>
        </div>
        <div class="col-sm-2">

        </div>
        <div class="col-sm-4 contact">
            <h2>Contact</h2>
            <form>
                <div class="form-group">
                    <label for="contact_name">Your Name</label>
                    <input type="text" class="form-control" id="contact_name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="contact_email">Email address</label>
                    <input type="email" class="form-control" id="contact_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="contact_subject">Subject</label>
                    <input type="text" class="form-control" id="contact_subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="contact_message">Your Message</label>
                    <textarea class="form-control" rows="3" id="contact_message" placeholder="What's on your mind?"></textarea>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>


@stop