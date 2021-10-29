<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $food->name }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $food->price }}</p>
</div>

<!-- Ratings Field -->
<div class="col-sm-12">
    {!! Form::label('ratings', 'Ratings:') !!}
    <p>{{ $food->ratings }}</p>
</div>

<!-- Baker Field -->
<div class="col-sm-12">
    {!! Form::label('baker', 'Baker:') !!}
    <p>{{ $food->baker }}</p>
</div>

