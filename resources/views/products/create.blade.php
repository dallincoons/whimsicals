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

        {!! Form::open(array('action'=> 'ProductsController@store', 'method' => 'POST', 'files' => true, 'id' => 'upload_images')) !!}

            <div class="col-sm-4 col-sm-offset-1">

                @include('partials.forms.product')

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

        {!! Form::close() !!}

    </div>

</div>

@stop


@section('scripts.footer')

    <script>

//        Dropzone.options.uploadImages = {
//            paramName : 'product_image',
//            autoProcessQueue   : false,
//            parallelUploads    : 1,
//            maxFiles: 2,
//            acceptedFiles : '.jpg, .jpeg, .png, .bmp',
//            previewsContainer: "#previews", // Define the container to display the previews
//
//            init: function() {
//                var myDropzone = this;
//
//                // First change the button to actually tell Dropzone to process the queue.
//                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
//
//                    // Make sure that the form isn't actually being sent.
//                    e.preventDefault();
//                    e.stopPropagation();
//                    myDropzone.processQueue();
//                });
//
//                this.on("success", function(files, response) {
//
//                    window.location = "/products/" + response;
//
//                    // Gets triggered when the files have successfully been sent.
//                    // Redirect user or notify of success.
//                });
//            }
//        };


    </script>

@stop