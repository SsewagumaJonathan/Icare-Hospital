
<li class="header">LABARATORIST</li>
<li class="{{ Request::is('bloodBanks*') ? 'active' : '' }}">
    <a href="{{ route('bloodBanks.index') }}"><i class="fa fa-edit"></i><span>Manage Blood Banks</span></a>
</li>

<li class="{{ Request::is('bloodDonors*') ? 'active' : '' }}">
    <a href="{{ route('bloodDonors.index') }}"><i class="fa fa-edit"></i><span>Manage Blood Donors</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Diagnosis Reports</span></a>
</li>

