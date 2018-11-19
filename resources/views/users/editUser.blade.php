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
                    <h1>Edit User</h1>

                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id], 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    Must have email
                                </div>
                            @endif
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('role_id', 'Role:') !!}
                            {!! Form::select('role_id', $roles + $roles, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('is_active', 'Is Active:') !!}
                            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6 float-left']) !!}
                        </div>

                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['UsersController@destroy', $user->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6 float-right']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
