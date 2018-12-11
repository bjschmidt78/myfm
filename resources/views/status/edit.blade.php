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
                    <h1>Edit Statuses</h1>

                    {!! Form::model($status, ['method'=>'PATCH', 'action'=>['StatusController@update', $status->id], 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Status', ['class'=>'btn btn-primary col-sm-6 float-left']) !!}
                        </div>

                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['StatusController@destroy', $status->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete Status', ['class'=>'btn btn-danger col-sm-6 float-right']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
