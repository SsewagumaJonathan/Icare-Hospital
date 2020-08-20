<!-- Department Name Field -->
<div class="form-group">
    {!! Form::label('Department_Name', 'Department Name:') !!}
    <p>{{ $department->Department_Name }}</p>
</div>

<!-- Date Created Field -->
<div class="form-group">
    {!! Form::label('Date_Created', 'Date Created:') !!}
    <p>{{ $department->Date_Created }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $department->remember_token }}</p>
</div>

