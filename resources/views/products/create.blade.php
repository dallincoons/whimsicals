@extends('main')

@section('content')

<div class="container add_pro" id="add_product" inline-template>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1>Add a New Product</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">

            @include('partials.member-side-nav')

        </div>

        <form method="POST" action="/products" enctype="multipart/form-data" class="dropzone" id="upload_images">




        <div class="col-sm-4 col-sm-offset-1">

                <fieldset class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" placeholder="Adorable Apron">
                </fieldset>
                <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="How this product is made, typical variations, price range, colors, etc."></textarea>
                </fieldset>
            <input type="file" class="btn btn-default" value="Upload Photos" name="product_image">
            <h4>Or Drag & Drop Picture Below</h4>

            <div class="table table-striped files upload-drop-zone" id="previews">

                <div class="dz-message" data-dz-message><span>Drop Your Image Here</span></div>

            </div>

                <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Product</button>

                {{ csrf_field() }}


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

        </form>

    </div>

</div>

@stop


@section('scripts.footer')
@stop