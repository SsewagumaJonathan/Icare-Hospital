<!-- Report Type Field -->
<div class="form-group">
    {!! Form::label('Report_Type', 'Report Type:') !!}
    <p>{{ $report->Report_Type }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('Date', 'Date:') !!}
    <p>{{ $report->Date }}</p>
</div>

<!-- Doctor Field -->
<div class="form-group">
    {!! Form::label('Doctor', 'Doctor:') !!}
    <p>{{ $report->Doctor }}</p>
</div>

<!-- Patient Field -->
<div class="form-group">
    {!! Form::label('Patient', 'Patient:') !!}
    <p>{{ $report->Patient }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $report->Description }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $report->remember_token }}</p>
</div>

