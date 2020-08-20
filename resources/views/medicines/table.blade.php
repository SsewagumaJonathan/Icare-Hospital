<div class="table-responsive">
    <table class="table" id="medicines-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Medicine Categoty</th>
        <th>Description</th>
        <th>Status</th>
        <th>Company</th>
        <th>Price</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicines as $medicine)
            <tr>
                <td>{{ $medicine->Name }}</td>
            <td>{{ $medicine->Medicine_Categoty }}</td>
            <td>{{ $medicine->Description }}</td>
            <td>{{ $medicine->Status }}</td>
            <td>{{ $medicine->Company }}</td>
            <td>{{ $medicine->Price }}</td>
            <td>{{ $medicine->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['medicines.destroy', $medicine->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('medicines.show', [$medicine->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('medicines.edit', [$medicine->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
