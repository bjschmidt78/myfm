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
                    <h1>Edit Workorder</h1>

                    {!! Form::model($workorder, ['method'=>'PATCH', 'action'=>['WorkorderController@update', $workorder->id], 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', 'Category:') !!}
                            {!! Form::select('category_id', [''=>'Choose Options'] + $categories, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('priority_id', 'Priority:') !!}
                            {!! Form::select('priority_id', [''=>'Choose Options'] + $priority, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('due', 'Due Date:') !!}
                            {!! Form::date('due', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="row justify-content-center">
                            
                            <div class="form-group col-md-6">
                                {!! Form::label('est_time', 'Estimated Time:') !!}
                                {!! Form::select('est_time', ['0'=>'Choose Options'] + $est_time, null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('act_time', 'Actual Time:') !!}
                                {!! Form::select('act_time', ['0'=>'Choose Options'] + $est_time, null, ['class'=>'form-control']) !!}
                            </div>

                        </div>

                        <div class="form-group">
                            {!! Form::label('users_id', 'Assigned To:') !!}
                            {!! Form::select('users_id', [''=>'Choose Options'] + $user, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 4]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Work Order', ['class'=>'btn btn-primary col-sm-6 float-left']) !!}
                        </div>

                    {!! Form::close() !!}

                    <br>
                    <br>
                    @if($tasks)
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Work Order Id</th>
                                <th scope="col">Description</th>
                                <th scope="col">Estimated Time</th>
                                <th scope="col">Actual Time</th>
                                <th scope="col">Assigned To:</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{$task->id}}</td>
                                    <td>{{$task->workorders_id}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->est_time}}</td>
                                    <td>{{$task->actual_time}}</td>
                                    <td>{{$task->user->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><!-- / -->
                    @endif
                    <br>
                    <br>


                    <form method="post" action="{{ route('test3.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Task Description:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Assigned Worker:</label>
                            @if($users)
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="workorders_id" value='{{$workorder->id}}'/>
                        </div>
                        <div class="form-group">
                            <label for="est_time">Estimated Time:</label>
                            <select name="est_time" id="est_time" class="form-control">
                                @for ($h = 0; $h <= 8; $h++)
                                    @for ($m = 0; $m < 60; $m += 15)
                                        <option value="{{($h*'60')+$m}}">{{($h=='0' ? '00' : ('0' . $h)).' : ' . ($m=='0' ? '00' : $m)}}</option>    
                                    @endfor
                                @endfor                                       
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="actual_time">Actual Time:</label>
                            <select name="actual_time" id="actual_time" class="form-control">
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
