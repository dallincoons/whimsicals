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
                <form action="/product/image" method="POST" class="dropzone upload-drop-zone" id="upload_images">
                    {{ csrf_field() }}
                </form>

                {{--<div class="dropzone-previews" id="previewsContainer"></div>--}}

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
                    <input class="form-control" type="number" id="quantity" name="quantity" />
                </fieldset>
                <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </fieldset>

                <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Product</button>

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
@stop