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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
