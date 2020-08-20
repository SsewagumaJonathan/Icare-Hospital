<!-- Blood Group Field -->
<div class="form-group">
    {!! Form::label('Blood_Group', 'Blood Group:') !!}
    <p>{{ $bloodBank->Blood_Group }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{{ $bloodBank->Status }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $bloodBank->remember_token }}</p>
</div>

