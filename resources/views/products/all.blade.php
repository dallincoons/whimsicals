@extends('main')

@section('content')

    <div class="whim_products">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h1>Our Work</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h3>We love making beautiful things. Each piece is carefully planned and handcrafted.
                        Visit us at our next <a href="/events">event</a> to see all of the unique options we have, or <a href="/contact">contact us</a> for a custom quote.</h3>
                </div>
            </div>

        </div>
    </div>


    <div class="whim_products">
        <div class="container">
            <div class="row products_grid">


                @foreach($products as $product)

                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <a href="/products/{{$product->id}}">
                                <img src="/img/whim_roses_1.png" alt="...">
                            </a>
                            <div class="caption">
                                <a href="/products/{{$product->id}}"><h3>{{ $product->title }}</h3></a>
                            </div>
                        </div>

                    </div>

                @endforeach

            </div>

            {{--Add Pagination if needed--}}

            {{--<div class="pagination_wrapper text-center">--}}
                {{--<nav>--}}
                    {{--<ul class="pagination">--}}
                        {{--<li>--}}
                            {{--<a href="#" aria-label="Previous">--}}
                                {{--<span aria-hidden="true">&laquo;</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><a href="#">5</a></li>--}}
                        {{--<li>--}}
                            {{--<a href="#" aria-label="Next">--}}
                                {{--<span aria-hidden="true">&raquo;</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            {{--</div>--}}

        </div>
    </div>

@stop