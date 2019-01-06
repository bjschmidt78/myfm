{{-- *********************
***Side Navagation Bar ***
********************* --}}
<br>
<ul class="nav flex-column">
    <h5 class="text-center">Lookup Tables</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/categories') }}">Show Categories</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/statuses') }}">Show Statuses</a>
    </li>


	<h5 class="text-center">Users</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users') }}">Show Users</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users/create') }}">Create User</a>
    </li>

	<h5 class="text-center">Work Orders</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorder/create') }}">Create Workorder</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorder') }}">Workorder Index</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorderlist') }}">Workorder List</a>
    </li>


    <br>
    <h5 class="text-center">Other</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/test') }}">test</a>
    </li>



    
    <br>
    <h5>end of line</h5>

</ul>