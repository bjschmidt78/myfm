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

                    <form method="post" action="{{ route('users.store') }}">
    
                        <div class="form-group">
                            @csrf
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                                @if($errors->has('email'))
                                    <div class="alert alert-danger">
                                        Must have email
                                    </div>
                                @endif
                            <input type="email" class="form-control" name="email"/>
                        </div>

                        <div class="form-group">
                            <label for="role_id">Role:</label>
                            @if($roles)
                                <select name="role_id" id="role_id" class="form-control">
                                    @foreach($roles->reverse() as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>

                       <div class="form-group">
                            <label for="is_active">Is Active:</label>                            
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary col-sm-6 float-left my-3">Create User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
