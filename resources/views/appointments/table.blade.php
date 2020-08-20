<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Disease</th>
        <th>Doctors</th>
        <th>Date</th>
        <th>Time</th>
        <th>Phone Number</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->Name }}</td>
            <td>{{ $appointment->Email }}</td>
            <td>{{ $appointment->Email_verified_at }}</td>
            <td>{{ $appointment->Disease }}</td>
            <td>{{ $appointment->Doctors }}</td>
            <td>{{ $appointment->Date }}</td>
            <td>{{ $appointment->Time }}</td>
            <td>{{ $appointment->Phone_Number }}</td>
            <td>{{ $appointment->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('appointments.show', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('appointments.edit', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
