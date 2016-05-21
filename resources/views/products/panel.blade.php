@extends('main')

@section('content')

    <div class="container-fluid edit_event">
        <form method="POST" action="/products">
            {{ method_field('DELETE' )}}
            <div class="row">
                <div class="col-sm-2">

                    @include('partials.member-side-nav')

                </div>
                <div class="col-sm-10">
                    <h2>Edit/Delete Products</h2>
                    <table class="table table-striped table-hover table-bordered table-responsive">
                        <tr>
                            <th>Edit</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Delete</th>
                        </tr>

                        <tr>
                            <td><a>Edit</a></td>
                            <td>Fall Show</td>
                            <td>123 Main St</td>
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td><a href="/products/{{$product->id}}/edit">Edit</a></td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="selected_products[]" value="{{$product->id}}">
                                        </label>
                                    </div>
                                </td>
                            <tr>
                        @endforeach

                    </table>
                </div>
            </div>

            <div class="row">
                <div class=" col-sm-1 pull-right">
                    <button class="btn btn-danger" type="submit">Delete Selected</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>

@stop

@section('scripts.footer')
@stop
