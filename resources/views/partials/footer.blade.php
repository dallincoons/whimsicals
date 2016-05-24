<footer>

    @if(Auth::guest())
    <div class="admin_login pull-left">
        <a href="/login">Log In</a>
    </div>
    @endif
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <h5>(801) 500-5000</h5>
            </div>

            <div class="col-sm-4">
                <h4>Whimsicals</h4>
                <h6>by MarDee</h6>
            </div>

            <div class="col-sm-4">
                <h5>123 Main St Salt Lake City, UT</h5>
            </div>

        </div>

    </div>
</footer>