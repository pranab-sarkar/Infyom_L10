<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $teacher->id }}</p>
</div>

<!-- Name En Field -->
<div class="col-sm-12">
    {!! Form::label('name_en', 'Name En:') !!}
    <p>{{ $teacher->name_en }}</p>
</div>

<!-- Name Bn Field -->
<div class="col-sm-12">
    {!! Form::label('name_bn', 'Name Bn:') !!}
    <p>{{ $teacher->name_bn }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $teacher->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $teacher->updated_at }}</p>
</div>

