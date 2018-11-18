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
                    <h1>Create User</h1>
					<form action="/action_page.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="First Last">
                        </div>    
                        <div class="form-group">
                            <label for="password">Password</label>
                        	<input type="password" class="form-control" id="password">
                        </div>
                        <div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="style">User Type</label>
	                            <select class="form-control" id="style">
	                                <option>Administrator</option>
	                                <option>Super User</option>
	                                <option>User</option>
	                            </select>
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="style">Active</label>
	                            <select class="form-control" id="style">
	                                <option>Active</option>
	                                <option>Not Active</option>
	                                <option>Suspended</option>
	                            </select>
	                        </div>
                        </div>       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
					