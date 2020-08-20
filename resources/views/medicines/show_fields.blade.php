<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $medicine->Name }}</p>
</div>

<!-- Medicine Categoty Field -->
<div class="form-group">
    {!! Form::label('Medicine_Categoty', 'Medicine Categoty:') !!}
    <p>{{ $medicine->Medicine_Categoty }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $medicine->Description }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{{ $medicine->Status }}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('Company', 'Company:') !!}
    <p>{{ $medicine->Company }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $medicine->Price }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $medicine->remember_token }}</p>
</div>

