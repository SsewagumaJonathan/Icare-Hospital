<!-- Bed Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Bed_Number', 'Bed Number:') !!}
    {!! Form::text('Bed_Number', null, ['class' => 'form-control']) !!}
</div>

<!-- Patients Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patients_id', 'Patients Id:') !!}
    {!! Form::number('patients_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Allotment Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Allotment_Type', 'Allotment Type:') !!}
    {!! Form::text('Allotment_Type', null, ['class' => 'form-control']) !!}
</div>

<!-- Discharge Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Discharge_Time', 'Discharge Time:') !!}
    {!! Form::text('Discharge_Time', null, ['class' => 'form-control','id'=>'Discharge_Time']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Discharge_Time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bedAllotments.index') }}" class="btn btn-default">Cancel</a>
</div>
