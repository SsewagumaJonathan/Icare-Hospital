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

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('Gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Age', 'Age:') !!}
    {!! Form::text('Age', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Blood Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Blood_Group', 'Blood Group:') !!}
    {!! Form::text('Blood_Group', null, ['class' => 'form-control']) !!}
</div>

<!-- Donate Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Donate_Date', 'Donate Date:') !!}
    {!! Form::text('Donate_Date', null, ['class' => 'form-control','id'=>'Donate_Date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#Donate_Date').datetimepicker({
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
    <a href="{{ route('bloodDonors.index') }}" class="btn btn-default">Cancel</a>
</div>
