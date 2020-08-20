<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Status</th>
        <th>Gender</th>
        <th>Role Name</th>
        <th>City</th>
        <th>State</th>
        <th>Skills</th>
        <th>Password</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->Name }}</td>
            <td>{{ $employee->Email }}</td>
            <td>{{ $employee->Email_verified_at }}</td>
            <td>{{ $employee->Status }}</td>
            <td>{{ $employee->Gender }}</td>
            <td>{{ $employee->Role_Name }}</td>
            <td>{{ $employee->City }}</td>
            <td>{{ $employee->State }}</td>
            <td>{{ $employee->Skills }}</td>
            <td>{{ $employee->Password }}</td>
            <td>{{ $employee->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
