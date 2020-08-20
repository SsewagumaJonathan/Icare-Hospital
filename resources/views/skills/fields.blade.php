<!-- Skill Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Skill_Name', 'Skill Name:') !!}
    {!! Form::text('Skill_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::number('employee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Start_Date', 'Start Date:') !!}
    {!! Form::text('Start_Date', null, ['class' => 'form-control','id'=>'Start_Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Start_Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Employee History Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Employee_History', 'Employee History:') !!}
    {!! Form::textarea('Employee_History', null, ['class' => 'form-control']) !!}
</div>

<!-- Skill Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Skill_Level', 'Skill Level:') !!}
    {!! Form::text('Skill_Level', null, ['class' => 'form-control']) !!}
</div>

<!-- Interviewed Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Interviewed_Date', 'Interviewed Date:') !!}
    {!! Form::text('Interviewed_Date', null, ['class' => 'form-control','id'=>'Interviewed_Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Interviewed_Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Interviewed Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Interviewed_Status', 'Interviewed Status:') !!}
    {!! Form::text('Interviewed_Status', null, ['class' => 'form-control']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Score', 'Score:') !!}
    {!! Form::text('Score', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('skills.index') }}" class="btn btn-default">Cancel</a>
</div>
