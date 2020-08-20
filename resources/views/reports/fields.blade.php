<!-- Report Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Report_Type', 'Report Type:') !!}
    {!! Form::text('Report_Type', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date', 'Date:') !!}
    {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Doctor', 'Doctor:') !!}
    {!! Form::text('Doctor', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Patient', 'Patient:') !!}
    {!! Form::text('Patient', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('reports.index') }}" class="btn btn-default">Cancel</a>
</div>
