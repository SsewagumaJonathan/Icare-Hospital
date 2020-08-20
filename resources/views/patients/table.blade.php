<div class="table-responsive">
    <table class="table" id="patients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Status</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Disease</th>
        <th>Age</th>
        <th>Date Of Birth</th>
        <th>Blood Group</th>
        <th>Phone Number</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->Name }}</td>
            <td>{{ $patient->Email }}</td>
            <td>{{ $patient->Email_verified_at }}</td>
            <td>{{ $patient->Status }}</td>
            <td>{{ $patient->Gender }}</td>
            <td>{{ $patient->Address }}</td>
            <td>{{ $patient->Disease }}</td>
            <td>{{ $patient->Age }}</td>
            <td>{{ $patient->Date_of_Birth }}</td>
            <td>{{ $patient->Blood_Group }}</td>
            <td>{{ $patient->Phone_Number }}</td>
            <td>{{ $patient->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
