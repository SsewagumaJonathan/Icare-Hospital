<li class="{{ Request::is('appointments*') ? 'active' : '' }}">
    <a href="{{ route('appointments.index') }}"><i class="fa fa-edit"></i><span>Appointments</span></a>
</li>

<li class="{{ Request::is('bedAllotments*') ? 'active' : '' }}">
    <a href="{{ route('bedAllotments.index') }}"><i class="fa fa-edit"></i><span>Bed Allotments</span></a>
</li>

<li class="{{ Request::is('beds*') ? 'active' : '' }}">
    <a href="{{ route('beds.index') }}"><i class="fa fa-edit"></i><span>Beds</span></a>
</li>

<li class="{{ Request::is('bloodBanks*') ? 'active' : '' }}">
    <a href="{{ route('bloodBanks.index') }}"><i class="fa fa-edit"></i><span>Blood Banks</span></a>
</li>

<li class="{{ Request::is('bloodDonors*') ? 'active' : '' }}">
    <a href="{{ route('bloodDonors.index') }}"><i class="fa fa-edit"></i><span>Blood Donors</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{{ route('employees.index') }}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{{ route('invoices.index') }}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>

<li class="{{ Request::is('medicines*') ? 'active' : '' }}">
    <a href="{{ route('medicines.index') }}"><i class="fa fa-edit"></i><span>Medicines</span></a>
</li>

<li class="{{ Request::is('medicineCategories*') ? 'active' : '' }}">
    <a href="{{ route('medicineCategories.index') }}"><i class="fa fa-edit"></i><span>Medicine Categories</span></a>
</li>

<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="{{ route('patients.index') }}"><i class="fa fa-edit"></i><span>Patients</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{{ route('reports.index') }}"><i class="fa fa-edit"></i><span>Reports</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{{ route('departments.index') }}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

