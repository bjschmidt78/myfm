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

                        {{Form::hidden('description', 'Default_Task')}}
                        {{Form::hidden('status', 'Not_Set')}}
                        {{Form::hidden('user_id', '1')}}

                        <div class="form-group">
                            {!! Form::label('estimated_time', 'Estimated Time:') !!}
                            {!! Form::text('estimated_time', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('actual_time', 'Actual Time:') !!}
                            {!! Form::text('actual_time', null, ['class'=>'form-control']) !!}
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
