<!-- Department Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Department_Name', 'Department Name:') !!}
    {!! Form::text('Department_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Created Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date_Created', 'Date Created:') !!}
    {!! Form::text('Date_Created', null, ['class' => 'form-control','id'=>'Date_Created']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Date_Created').datetimepicker({
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
    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
</div>
