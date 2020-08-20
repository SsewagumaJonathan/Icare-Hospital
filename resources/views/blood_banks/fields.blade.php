<!-- Blood Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Blood_Group', 'Blood Group:') !!}
    {!! Form::text('Blood_Group', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::text('Status', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bloodBanks.index') }}" class="btn btn-default">Cancel</a>
</div>
