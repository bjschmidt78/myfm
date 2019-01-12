{{-- *********************
***Side Navagation Bar ***
********************* --}}
<br>
<ul class="nav flex-column">
    <h5 class="text-center">Work Orders</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorder/create') }}">Create Workorder</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorder') }}">Workorder Index</a>
    </li>

    <h5 class="text-center">Options</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/categories') }}">Category Options</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/statuses') }}">Status Fields</a>
    </li>


	<h5 class="text-center">Users</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users/create') }}">Create User</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/users') }}">Show Users</a>
    </li>

    <br>
    <h5 class="text-center">Other</h5>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/workorderlist') }}">Workorder List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/test') }}">test</a>
    </li>

    <br>
    <h5>end of line</h5>

</ul>