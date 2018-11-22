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
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 4]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Work Order', ['class'=>'btn btn-primary col-sm-6 float-left']) !!}
                        </div>

                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['WorkorderController@destroy', $workorder->id]]) !!}
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
