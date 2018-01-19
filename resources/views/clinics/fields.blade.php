<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_count', 'Device Count:') !!}
    {!! Form::number('device_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Group Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Group Id:') !!}
    {!! Form::number('group_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Opened Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_opened', 'Date Opened:') !!}
    {!! Form::date('date_opened', null, ['class' => 'form-control']) !!}
</div>

<!-- Quickbase Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quickbase_id', 'Quickbase Id:') !!}
    {!! Form::number('quickbase_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quickbase Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quickbase_company', 'Quickbase Company:') !!}
    {!! Form::number('quickbase_company', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clinics.index') !!}" class="btn btn-default">Cancel</a>
</div>
