{{-- *********************
***Side Navagation Bar ***
********************* --}}
<br>
<ul class="nav flex-column">
	<h5 class="text-center">Users</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users') }}">Show Users</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users/create') }}">Create User</a>
    </li>

  	<h5 class="text-center">Catagories</h5>
	<li class="nav-item">
        <a class="nav-link" href="{{ asset('/categories') }}">Show Categories</a>
    </li>

	<h5 class="text-center">Work Orders</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/listWorkOrder') }}">List Workorders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/newWorkOrder') }}">New Workorder</a>
    </li>


</ul>