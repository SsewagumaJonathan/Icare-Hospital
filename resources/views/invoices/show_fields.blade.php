<!-- Patient Name Field -->
<div class="form-group">
    {!! Form::label('Patient_Name', 'Patient Name:') !!}
    <p>{{ $invoice->Patient_Name }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    <p>{{ $invoice->Title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $invoice->Description }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{{ $invoice->Status }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('Amount', 'Amount:') !!}
    <p>{{ $invoice->Amount }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $invoice->remember_token }}</p>
</div>

