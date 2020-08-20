<!-- Bed Number Field -->
<div class="form-group">
    {!! Form::label('Bed_Number', 'Bed Number:') !!}
    <p>{{ $bedAllotment->Bed_Number }}</p>
</div>

<!-- Patients Id Field -->
<div class="form-group">
    {!! Form::label('patients_id', 'Patients Id:') !!}
    <p>{{ $bedAllotment->patients_id }}</p>
</div>

<!-- Allotment Type Field -->
<div class="form-group">
    {!! Form::label('Allotment_Type', 'Allotment Type:') !!}
    <p>{{ $bedAllotment->Allotment_Type }}</p>
</div>

<!-- Discharge Time Field -->
<div class="form-group">
    {!! Form::label('Discharge_Time', 'Discharge Time:') !!}
    <p>{{ $bedAllotment->Discharge_Time }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $bedAllotment->remember_token }}</p>
</div>

