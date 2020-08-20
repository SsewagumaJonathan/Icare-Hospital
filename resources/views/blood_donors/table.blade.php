<div class="table-responsive">
    <table class="table" id="bloodDonors-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Address</th>
        <th>Blood Group</th>
        <th>Donate Date</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bloodDonors as $bloodDonor)
            <tr>
                <td>{{ $bloodDonor->Name }}</td>
            <td>{{ $bloodDonor->Email }}</td>
            <td>{{ $bloodDonor->Email_verified_at }}</td>
            <td>{{ $bloodDonor->Gender }}</td>
            <td>{{ $bloodDonor->Age }}</td>
            <td>{{ $bloodDonor->Address }}</td>
            <td>{{ $bloodDonor->Blood_Group }}</td>
            <td>{{ $bloodDonor->Donate_Date }}</td>
            <td>{{ $bloodDonor->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['bloodDonors.destroy', $bloodDonor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bloodDonors.show', [$bloodDonor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bloodDonors.edit', [$bloodDonor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
