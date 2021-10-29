<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Ratings Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ratings', 'Ratings:') !!}
    {!! Form::text('ratings', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Baker Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baker', 'Baker:') !!}
    {!! Form::text('baker', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>