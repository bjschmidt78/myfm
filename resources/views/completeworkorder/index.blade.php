@extends('layouts.app')

@section('title', 'Edit Work Order')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')
        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <br>

                    <div class="card" style="width: 100%;">
                        
                        <div class="card-body">
                            <h3 class="card-title">Complete Workorder:</h3>
                            {!! Form::model($workorder, ['method'=>'PATCH', 'action'=>['CompleteWorkorderController@update', $workorder->id], 'files'=>true]) !!}
                                
                                <h5 class="card-title">Title:<br>{{$workorder->title}}</h5>
                                <h5 class="card-title">Assigned To:<br>{{is_null($workorder->users) ? 'Not Assigned' : $workorder->users->name}}</h5>
                                <input type="hidden" name="completed_by" value="{{\Auth::user()->id}}">
         
{{--                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">User:</span>
                                    </div>
                                    <select name="users_id" id="users_id" class="form-control">
                                        @foreach ($users as $user)
                                                <option value="{{$user->id}}"{{$user->id == $workorder->users->id ? 'selected' : ''}}>{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}

                             {{--    <div class="input-group">
                                    <h3>User id: {{\Auth::user()->id}} User Name: {{\Auth::user()->name}}</h3>
                                </div> --}}

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Time to complete:</span>
                                    </div>
                                    <select name="act_time" id="act_time" class="form-control">
                                        @for ($h = 0; $h <= 8; $h++)
                                            @for ($m = 0; $m < 60; $m += 15)
                                                <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
                                            @endfor
                                        @endfor                                       
                                    </select>
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Complete Work Order', ['class'=>'btn btn-primary col-md-6']) !!}
                                </div>

                            {!! Form::close() !!}
{{-- ********Must create a task complete function and add a controller to update the task status --}}
                            
                            {{-- @if($tasks->count()>0)
                            	<h5 class="card-subtitle mb-2">Tasks</h6>
                                <form method="post" action="{{ route('tasks.store') }}">
	                                <div class="form-group">
	                                    @csrf
	                                    <input type="hidden" class="form-control" name="workorders_id" value='{{$workorder->id}}'/>
	                                    <div class="form-row">
	                                        <div class="col">
	                                            <input type="text" class="form-control" name="description" placeholder="Task Description" />
	                                        </div>
	                                    </div>
	                                    <div class="form-row">
	                                        <div class="col">
	                                            <div class="input-group mb-3 pr-0">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text" id="basic-addon1">Assigned User</span>
	                                                </div>
	                                                @if($users)
	                                                    <select name="user_id" id="user_id" class="form-control">
	                                                        @foreach($users as $user)
	                                                            <option value="{{$user->id}}">{{$user->name}}</option>
	                                                        @endforeach
	                                                    </select>
	                                                @endif
	                                            </div>
	                                        </div>
	                                        <div class="col">
	                                            <div class="input-group mb-3">
	                                                <div class="input-group-prepend">
	                                                    <span class="input-group-text">Estimated Time</span>
	                                                </div>
	                                                <select name="est_time" class="form-control">
	                                                    @for ($h = 0; $h <= 8; $h++)
	                                                        @for ($m = 0; $m < 60; $m += 15)
	                                                            <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
	                                                        @endfor
	                                                    @endfor                                       
	                                                </select>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </form>
                            @endif         --}}                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
