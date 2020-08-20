<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $appointment->Name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $appointment->Email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('Email_verified_at', 'Email Verified At:') !!}
    <p>{{ $appointment->Email_verified_at }}</p>
</div>

<!-- Disease Field -->
<div class="form-group">
    {!! Form::label('Disease', 'Disease:') !!}
    <p>{{ $appointment->Disease }}</p>
</div>

<!-- Doctors Field -->
<div class="form-group">
    {!! Form::label('Doctors', 'Doctors:') !!}
    <p>{{ $appointment->Doctors }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('Date', 'Date:') !!}
    <p>{{ $appointment->Date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('Time', 'Time:') !!}
    <p>{{ $appointment->Time }}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('Phone_Number', 'Phone Number:') !!}
    <p>{{ $appointment->Phone_Number }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $appointment->remember_token }}</p>
</div>

