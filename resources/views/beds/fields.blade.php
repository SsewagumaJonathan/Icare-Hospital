<!-- Bed Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Bed_Number', 'Bed Number:') !!}
    {!! Form::text('Bed_Number', null, ['class' => 'form-control']) !!}
</div>

<!-- Bed Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Bed_Type', 'Bed Type:') !!}
    {!! Form::text('Bed_Type', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beds.index') }}" class="btn btn-default">Cancel</a>
</div>
