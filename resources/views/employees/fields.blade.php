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

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::text('Status', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('Gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Role_Name', 'Role Name:') !!}
    {!! Form::text('Role_Name', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('City', 'City:') !!}
    {!! Form::text('City', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('State', 'State:') !!}
    {!! Form::text('State', null, ['class' => 'form-control']) !!}
</div>

<!-- Skills Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Skills', 'Skills:') !!}
    {!! Form::textarea('Skills', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Password', 'Password:') !!}
    {!! Form::password('Password', ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">Cancel</a>
</div>
