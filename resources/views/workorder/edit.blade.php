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
                            <h5 class="card-title">Edit Workorder</h5>
                            <div>
                                {!! Form::model($workorder, ['method'=>'PATCH', 'action'=>['WorkorderController@update', $workorder->id], 'files'=>true]) !!}
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group col-9 pl-0">
                                            {!! Form::label('title', 'Title:') !!}
                                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-3 pr-0">
                                            {!! Form::label('users_id', 'Assigned To:') !!}
                                            {!! Form::select('users_id', [''=>'Choose Options'] + $user, null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            {!! Form::label('category_id', 'Category:') !!}
                                            {!! Form::select('category_id', [''=>'Choose Options'] + $categories, null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('priority_id', 'Priority:') !!}
                                            {!! Form::select('priority_id', [''=>'Choose Options'] + $priority, null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('status_id', 'Status:') !!}
                                            {!! Form::select('status_id', [''=>'Choose Options'] + $status, null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('due', 'Due Date:') !!}
                                            {!! Form::date('due', null, ['class'=>'form-control']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label('est_time', 'Estimated Time:') !!}
                                            {!! Form::select('est_time', ['0'=>'Choose Options'] + $est_time, null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('act_time', 'Actual Time:') !!}
                                            {!! Form::select('act_time', ['0'=>'Choose Options'] + $est_time, null, ['class'=>'form-control']) !!}
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', 'Description:') !!}
                                        {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 4]) !!}
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            {!! Form::submit('Update Work Order', ['class'=>'btn btn-primary col-sm-6 float-right']) !!}
                                        </div>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                            <h5 class="card-subtitle mb-2">Tasks</h6>
                            @if(!$tasks->isEmpty())
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col">Estimated Time</th>
                                            <th scope="col">Actual Time</th>
                                            <th scope="col">Assigned To:</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tasks as $task)
                                            <tr>
                                                <td>{{$task->description}}</td>
                                                <td>{{$task->est_time}}</td>
                                                <td>{{$task->actual_time}}</td>
                                                <td>{{$task->user->name}}</td>
                                            </tr>
                                        @endforeach
                                </table><!-- / -->
                            @endif
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
                                                    <span class="input-group-text" id="basic-addon1">Estimated Time</span>
                                                </div>
                                                <select name="est_time" id="est_time" class="form-control">
                                                    @for ($h = 0; $h <= 8; $h++)
                                                        @for ($m = 0; $m < 60; $m += 15)
                                                            <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
                                                        @endfor
                                                    @endfor                                       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="input-group mb-3x">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Actual Time</span>
                                                </div>
                                                <select name="actual_time" id="actual_time" class="form-control">
                                                    @for ($h = 0; $h <= 8; $h++)
                                                        @for ($m = 0; $m < 60; $m += 15)
                                                            <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
                                                        @endfor
                                                    @endfor                                       
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary col-12">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
