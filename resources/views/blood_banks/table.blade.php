<div class="table-responsive">
    <table class="table" id="bloodBanks-table">
        <thead>
            <tr>
                <th>Blood Group</th>
        <th>Status</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bloodBanks as $bloodBank)
            <tr>
                <td>{{ $bloodBank->Blood_Group }}</td>
            <td>{{ $bloodBank->Status }}</td>
            <td>{{ $bloodBank->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['bloodBanks.destroy', $bloodBank->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bloodBanks.show', [$bloodBank->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bloodBanks.edit', [$bloodBank->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
