<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('Email_verified_at', null, ['class' => 'form-control','id'=>'Email_verified_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Disease Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Disease', 'Disease:') !!}
    {!! Form::text('Disease', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Doctors', 'Doctors:') !!}
    {!! Form::text('Doctors', null, ['class' => 'form-control']) !!}
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

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Time', 'Time:') !!}
    {!! Form::text('Time', null, ['class' => 'form-control','id'=>'Time']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone_Number', 'Phone Number:') !!}
    {!! Form::text('Phone_Number', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('appointments.index') }}" class="btn btn-default">Cancel</a>
</div>
