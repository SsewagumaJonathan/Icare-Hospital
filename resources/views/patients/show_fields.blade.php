<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $patient->Name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $patient->Email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('Email_verified_at', 'Email Verified At:') !!}
    <p>{{ $patient->Email_verified_at }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{{ $patient->Status }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('Gender', 'Gender:') !!}
    <p>{{ $patient->Gender }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('Address', 'Address:') !!}
    <p>{{ $patient->Address }}</p>
</div>

<!-- Disease Field -->
<div class="form-group">
    {!! Form::label('Disease', 'Disease:') !!}
    <p>{{ $patient->Disease }}</p>
</div>

<!-- Age Field -->
<div class="form-group">
    {!! Form::label('Age', 'Age:') !!}
    <p>{{ $patient->Age }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="form-group">
    {!! Form::label('Date_of_Birth', 'Date Of Birth:') !!}
    <p>{{ $patient->Date_of_Birth }}</p>
</div>

<!-- Blood Group Field -->
<div class="form-group">
    {!! Form::label('Blood_Group', 'Blood Group:') !!}
    <p>{{ $patient->Blood_Group }}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('Phone_Number', 'Phone Number:') !!}
    <p>{{ $patient->Phone_Number }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $patient->remember_token }}</p>
</div>

