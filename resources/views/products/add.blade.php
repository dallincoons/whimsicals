@extends('main')

@section('content')

<div class="container add_pro">
    <div class="row">
        <div class="col-sm-10">
            <h1>Add a New Product</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">

            <button type="submit" class="btn btn-default">Upload Photos</button>
            <h4>Or Drag & Drop Pictures Below</h4>
            <div class="upload-drop-zone" id="drop-zone">
                Just drag and drop photos here
            </div>
            <h5>Images Uploaded</h5>
            <img src="/img/whim_roses_1.png" class="thumbnail_img">
            <img src="/img/whim_roses_1.png" class="thumbnail_img">
            <img src="/img/whim_roses_1.png" class="thumbnail_img">
        </div>
        <div class="col-sm-4 col-sm-offset-1">

            <form method="POST" action="/product/add" enctype="multipart/form-data">

                <fieldset class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" placeholder="Adorable Apron">
                </fieldset>
                <fieldset class="form-group">
                    <label for="Price">Price</label>
                    <input type="number" class="form-control" id="Price" placeholder="$0.00" name="price">
                </fieldset>
                <fieldset class="form-group">
                    <label for="quantity">Quantity</label>
                    <select class="form-control" id="quantity" name="quantity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </fieldset>
                <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </fieldset>
                <button type="submit" class="btn btn-default pro_sub">Add Product</button>

                {{ csrf_field() }}

            </form>

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error  }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>


</div>


@stop


@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop