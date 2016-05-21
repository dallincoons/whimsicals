@extends('main')

@section('content')

    <div class="container add_pro">
        <div class="row">
            <div class="col-sm-10">
                <h1>Add an image</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-4 col-sm-offset-1">

                <button type="submit" class="btn btn-default">Upload Photos</button>
                <h4>Or Drag & Drop Pictures Below</h4>
                <form action="/products/image" method="POST" class="dropzone upload-drop-zone" id="upload_images">
                    {{ csrf_field() }}
                </form>

            </div>

        </div>


    </div>




@stop


@section('scripts.footer')
@stop