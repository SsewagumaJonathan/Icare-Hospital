<div class="table-responsive">
    <table class="table" id="bedAllotments-table">
        <thead>
            <tr>
                <th>Bed Number</th>
        <th>Patients Id</th>
        <th>Allotment Type</th>
        <th>Discharge Time</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bedAllotments as $bedAllotment)
            <tr>
                <td>{{ $bedAllotment->Bed_Number }}</td>
            <td>{{ $bedAllotment->patients_id }}</td>
            <td>{{ $bedAllotment->Allotment_Type }}</td>
            <td>{{ $bedAllotment->Discharge_Time }}</td>
            <td>{{ $bedAllotment->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['bedAllotments.destroy', $bedAllotment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bedAllotments.show', [$bedAllotment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bedAllotments.edit', [$bedAllotment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
