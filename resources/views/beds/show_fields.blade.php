<!-- Bed Number Field -->
<div class="form-group">
    {!! Form::label('Bed_Number', 'Bed Number:') !!}
    <p>{{ $beds->Bed_Number }}</p>
</div>

<!-- Bed Type Field -->
<div class="form-group">
    {!! Form::label('Bed_Type', 'Bed Type:') !!}
    <p>{{ $beds->Bed_Type }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $beds->Description }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $beds->remember_token }}</p>
</div>

