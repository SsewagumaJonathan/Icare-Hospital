
<li class="header">DOCTOR</li>
<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="{{ route('patients.index') }}"><i class="fa fa-edit"></i><span>Patients</span></a>
</li>

<li class="{{ Request::is('appointments*') ? 'active' : '' }}">
    <a href="{{ route('appointments.index') }}"><i class="fa fa-edit"></i><span>Appointments</span></a>
</li>

<li class="{{ Request::is('bedAllotments*') ? 'active' : '' }}">
    <a href="{{ route('bedAllotments.index') }}"><i class="fa fa-edit"></i><span>Bed Allotments</span></a>
</li>

<li class="{{ Request::is('bloodBanks*') ? 'active' : '' }}">
    <a href="{{ route('bloodBanks.index') }}"><i class="fa fa-edit"></i><span>Blood Banks</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Reports</span></a>
</li>


