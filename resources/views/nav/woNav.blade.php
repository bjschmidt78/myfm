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
        <a class="nav-link" href="{{ asset('/workorder') }}">Workorder Index</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorder/create') }}">Create Workorder</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/listWorkOrder') }}">List Workorders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/newWorkOrder') }}">New Workorder</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/test') }}">test</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/test2') }}">test2</a>
    </li>


</ul>