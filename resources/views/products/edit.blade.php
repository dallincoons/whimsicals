@extends('main')

@section('content')

    <div class="container update_event" id="update_product" inline-template>
        <div class="row">
            <div class="col-sm-3">

                @include('partials.member-side-nav')

            </div>

            <div class="col-sm-9">
                <h2>Edit Product</h2>
                {!! Form::model($product, array('action'=> ['ProductsController@update', $product->id], 'method' => 'POST', 'files' => true)) !!}
                    {{ method_field('PATCH') }}

                    @include('partials.forms.product')

                    <button type="submit" class="btn btn-default" name="update" value="Update">Update</button>
                    <div class="other_options pull-right">
                        <button class="btn btn-danger" name="delete" value="Delete">Delete</button>
                        <a type="submit" class="btn btn-warning" href="/products/edit">Go Back</a>
                    </div>
                    {{ csrf_field() }}
                {!! Form::close() !!}
            </div>

        </div>

    </div>

@stop

@section('scripts.footer')
@stop