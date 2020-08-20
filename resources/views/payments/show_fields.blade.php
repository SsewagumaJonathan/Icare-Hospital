<!-- Patient Name Field -->
<div class="form-group">
    {!! Form::label('Patient_Name', 'Patient Name:') !!}
    <p>{{ $payment->Patient_Name }}</p>
</div>

<!-- Payment Date Field -->
<div class="form-group">
    {!! Form::label('Payment_Date', 'Payment Date:') !!}
    <p>{{ $payment->Payment_Date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('Time', 'Time:') !!}
    <p>{{ $payment->Time }}</p>
</div>

<!-- Transaction Id Field -->
<div class="form-group">
    {!! Form::label('Transaction_id', 'Transaction Id:') !!}
    <p>{{ $payment->Transaction_id }}</p>
</div>

<!-- Invoice Id Field -->
<div class="form-group">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    <p>{{ $payment->invoice_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('Amount', 'Amount:') !!}
    <p>{{ $payment->Amount }}</p>
</div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('Payment_Method', 'Payment Method:') !!}
    <p>{{ $payment->Payment_Method }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $payment->Description }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $payment->remember_token }}</p>
</div>

