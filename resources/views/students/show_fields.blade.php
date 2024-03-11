<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $student->id }}</p>
</div>

<!-- Name En Field -->
<div class="col-sm-12">
    {!! Form::label('name_en', 'Name En:') !!}
    <p>{{ $student->name_en }}</p>
</div>

<!-- Name Bn Field -->
<div class="col-sm-12">
    {!! Form::label('name_bn', 'Name Bn:') !!}
    <p>{{ $student->name_bn }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $student->updated_at }}</p>
</div>

