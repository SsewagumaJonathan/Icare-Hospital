<div class="table-responsive">
    <table class="table" id="medicineCategories-table">
        <thead>
            <tr>
                <th>Categoty Name</th>
        <th>Description</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicineCategories as $medicineCategory)
            <tr>
                <td>{{ $medicineCategory->Categoty_Name }}</td>
            <td>{{ $medicineCategory->Description }}</td>
            <td>{{ $medicineCategory->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['medicineCategories.destroy', $medicineCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('medicineCategories.show', [$medicineCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('medicineCategories.edit', [$medicineCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
