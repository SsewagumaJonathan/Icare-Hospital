<div class="table-responsive">
    <table class="table" id="beds-table">
        <thead>
            <tr>
                <th>Bed Number</th>
        <th>Bed Type</th>
        <th>Description</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($beds as $beds)
            <tr>
                <td>{{ $beds->Bed_Number }}</td>
            <td>{{ $beds->Bed_Type }}</td>
            <td>{{ $beds->Description }}</td>
            <td>{{ $beds->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['beds.destroy', $beds->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('beds.show', [$beds->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('beds.edit', [$beds->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
