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
                    <h1>All Users</h1>
					

                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users)
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>                                                
                                                <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table><!-- / -->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
