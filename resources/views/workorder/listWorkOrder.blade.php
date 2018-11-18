@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>Work Orders</h1>
                    <table class="table">
						<thead>
							<tr>
								<th style="width: 20%">Title</th>
								<th style="width: 40%">Description</th>
								<th>Status</th>
								<th>Assigned</th>
								<th>Due Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Order shelving</td>
								<td>Need to order 5 shelves.  Two for David and 3 for IT.  Order from Amazon.  The red shelves.</td>
								<td>Not started</td>
								<td>Not assigned</td>
								<td>05/05/2005</td>
							</tr>
							<tr>
								<td>Adjust thermostat schedule</td>
								<td>Need to add a winter schedule to Metisys to adjust the heat settings daily for the thermostats in the open areas.  Also schedule it to only work during the winter and add the schedule for the cooling setpoints in the summer.</td>
								<td>Not started</td>
								<td>Not assigned</td>
								<td>05/20/2005</td>
							</tr>

					  	</tbody>
					</table><!-- /table -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
					