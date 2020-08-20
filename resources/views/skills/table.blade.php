<div class="table-responsive">
    <table class="table" id="skills-table">
        <thead>
            <tr>
                <th>Skill Name</th>
        <th>Employee Id</th>
        <th>Start Date</th>
        <th>Employee History</th>
        <th>Skill Level</th>
        <th>Interviewed Date</th>
        <th>Interviewed Status</th>
        <th>Score</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skills as $skill)
            <tr>
                <td>{{ $skill->Skill_Name }}</td>
            <td>{{ $skill->employee_id }}</td>
            <td>{{ $skill->Start_Date }}</td>
            <td>{{ $skill->Employee_History }}</td>
            <td>{{ $skill->Skill_Level }}</td>
            <td>{{ $skill->Interviewed_Date }}</td>
            <td>{{ $skill->Interviewed_Status }}</td>
            <td>{{ $skill->Score }}</td>
            <td>{{ $skill->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['skills.destroy', $skill->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('skills.show', [$skill->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('skills.edit', [$skill->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
