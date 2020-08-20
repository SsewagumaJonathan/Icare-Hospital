<!-- Patient Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Patient_Name', 'Patient Name:') !!}
    {!! Form::text('Patient_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Payment_Date', 'Payment Date:') !!}
    {!! Form::text('Payment_Date', null, ['class' => 'form-control','id'=>'Payment_Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Payment_Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Time', 'Time:') !!}
    {!! Form::text('Time', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Transaction_id', 'Transaction Id:') !!}
    {!! Form::text('Transaction_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    {!! Form::number('invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Amount', 'Amount:') !!}
    {!! Form::number('Amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Payment_Method', 'Payment Method:') !!}
    {!! Form::text('Payment_Method', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('Description', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-default">Cancel</a>
</div>
