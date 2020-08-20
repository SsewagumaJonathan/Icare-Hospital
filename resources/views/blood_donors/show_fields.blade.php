<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $bloodDonor->Name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $bloodDonor->Email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('Email_verified_at', 'Email Verified At:') !!}
    <p>{{ $bloodDonor->Email_verified_at }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('Gender', 'Gender:') !!}
    <p>{{ $bloodDonor->Gender }}</p>
</div>

<!-- Age Field -->
<div class="form-group">
    {!! Form::label('Age', 'Age:') !!}
    <p>{{ $bloodDonor->Age }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('Address', 'Address:') !!}
    <p>{{ $bloodDonor->Address }}</p>
</div>

<!-- Blood Group Field -->
<div class="form-group">
    {!! Form::label('Blood_Group', 'Blood Group:') !!}
    <p>{{ $bloodDonor->Blood_Group }}</p>
</div>

<!-- Donate Date Field -->
<div class="form-group">
    {!! Form::label('Donate_Date', 'Donate Date:') !!}
    <p>{{ $bloodDonor->Donate_Date }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $bloodDonor->remember_token }}</p>
</div>

