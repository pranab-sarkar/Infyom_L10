<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Emplyee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Emplyee_Id', 'Emplyee Id:') !!}
    {!! Form::text('Emplyee_Id', null, ['class' => 'form-control']) !!}
</div>