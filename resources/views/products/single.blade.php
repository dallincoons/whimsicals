@extends('main')

@section('content')

    <script type="text/template-vue" id="singleProductView">

        <div class="container whim_product">

            <div class="row">
                <div class="col-sm-4 pro_img">
                    <img src="{{$product->images[0]->url}}" id="main_photo">
                </div>

                <div class="col-sm-3 col-sm-offset-1">
                    <h1>{{ $product->title  }}</h1>
                   <h4> {{ $product->description  }} </h4>
                   <p>See more varieties at our next <a href="/events">event</a> or <a href="/contact">contact us</a> for a quote for a custom piece.</p>
                </div>

                @if(!Auth::guest())<a href="/products/{{$product->id}}/edit" >edit</a>@endif

            </div>

        </div>

    </script>

    <single-product product_id="{{$product->id}}"></single-product>

@stop


