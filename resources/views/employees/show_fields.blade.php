<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $employee->Name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $employee->Email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('Email_verified_at', 'Email Verified At:') !!}
    <p>{{ $employee->Email_verified_at }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{{ $employee->Status }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('Gender', 'Gender:') !!}
    <p>{{ $employee->Gender }}</p>
</div>

<!-- Role Name Field -->
<div class="form-group">
    {!! Form::label('Role_Name', 'Role Name:') !!}
    <p>{{ $employee->Role_Name }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('City', 'City:') !!}
    <p>{{ $employee->City }}</p>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('State', 'State:') !!}
    <p>{{ $employee->State }}</p>
</div>

<!-- Skills Field -->
<div class="form-group">
    {!! Form::label('Skills', 'Skills:') !!}
    <p>{{ $employee->Skills }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('Password', 'Password:') !!}
    <p>{{ $employee->Password }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $employee->remember_token }}</p>
</div>

