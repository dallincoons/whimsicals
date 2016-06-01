<fieldset class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::input('text', 'title', null, array('class' => 'form-control', 'id' => 'title', 'placeholder' => 'Adorable Apron')) !!}
</fieldset>

<fieldset class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, array('class' => 'form-control', 'id' => 'description', 'rows' => '3', 'placeholder' => 'How this product is made, typical variations, price range, colors, etc.')) !!}
</fieldset>

<input type="file" class="btn btn-default" value="Upload Photos" name="product_image">