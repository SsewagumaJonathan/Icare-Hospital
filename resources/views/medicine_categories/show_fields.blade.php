<!-- Categoty Name Field -->
<div class="form-group">
    {!! Form::label('Categoty_Name', 'Categoty Name:') !!}
    <p>{{ $medicineCategory->Categoty_Name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $medicineCategory->Description }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $medicineCategory->remember_token }}</p>
</div>

