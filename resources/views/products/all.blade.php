@extends('main')

@section('content')

    <div class="whim_products">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h1>Products</h1>
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
                            <a href="/product/{{$product->id}}">
                                <img src="/img/whim_roses_1.png" alt="...">
                            </a>
                            <div class="caption">
                                <a href="/product/{{$product->id}}"><h3>{{ $product->title }}</h3></a>
                                <a><h5>{{ $product->price }}</h5></a>
                            </div>
                        </div>

                    </div>

                @endforeach

            </div>

            <div class="pagination_wrapper text-center">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@stop