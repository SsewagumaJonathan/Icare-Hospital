<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>Patient Name</th>
        <th>Payment Date</th>
        <th>Time</th>
        <th>Transaction Id</th>
        <th>Invoice Id</th>
        <th>Amount</th>
        <th>Payment Method</th>
        <th>Description</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->Patient_Name }}</td>
            <td>{{ $payment->Payment_Date }}</td>
            <td>{{ $payment->Time }}</td>
            <td>{{ $payment->Transaction_id }}</td>
            <td>{{ $payment->invoice_id }}</td>
            <td>{{ $payment->Amount }}</td>
            <td>{{ $payment->Payment_Method }}</td>
            <td>{{ $payment->Description }}</td>
            <td>{{ $payment->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
