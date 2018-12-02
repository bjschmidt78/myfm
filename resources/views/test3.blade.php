@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav.woNav')
        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>List Tasks</h1>

					<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Description</th>
                                <th scope="col">Estimated Time</th>
                                <th scope="col">Actual Time</th>
                                <th scope="col">Assigned To:</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @if($tasks)
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{$task->id}}</td> 
                                        <td>{{$task->description}}</td>
                                        <td>{{$task->est_time}}</td>
                                        <td>{{$task->actual_time}}</td>
                                        <td>{{$task->user->name}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table><!-- / -->
                    
                    <form method="post" action="{{ route('test3.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Description:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <div class="form-group">
                            <label for="role_id">User Assigned:</label>
                            @if($users)
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="role_id">Estimated Time:</label>
                                <select name="est_time" id="est_time" class="form-control">


                                    @for ($h = 0; $h <= 8; $h++)
                                        @for ($m = 0; $m < 60; $m += 15)
                                            <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
                                        @endfor
                                    @endfor


                                    
                                        
                                    
                                </select>
                        </div>
                          

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>

 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
