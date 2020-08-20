

<li class="header">ACCOUNTANT</li>
<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{{ route('invoices.index') }}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Reports</span></a>
</li>



