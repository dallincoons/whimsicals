@extends('main')

@section('content')

    <div class="container update_event">
        <div class="row">
            <div class="col-sm-3">

                @include('partials.member-side-nav')

            </div>
            <div class="col-sm-9">
                <h2>Edit Event</h2>
                <form method="POST" action="/products/{{$product->id}}">
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="edit_title">Event Title</label>
                        <input type="text" class="form-control" id="edit_title" name="title" value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <label for="edit_street">Street Address</label>
                        <textarea type="text" class="form-control" id="edit_description" name="description">{{$product->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    <div class="other_options pull-right">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="submit" class="btn btn-warning">Go Back</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@stop

@section('scripts.footer')
@stop