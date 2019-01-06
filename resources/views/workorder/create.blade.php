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
                    <h1>Create Workorder</h1>

                    {!! Form::open(['method'=>'POST', 'action'=>'WorkorderController@store', 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('status_id', 'Status:') !!}
                            {!! Form::select('status_id', ['1'=>'New'] + $status, null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('category_id', 'Category:') !!}
                            {!! Form::select('category_id', [''=>''] + $categories, null, ['class'=>'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group-inline">
                            
                            <div class="row">
                                <div class="col">
                                    <label for="due">Due in:</label><br>
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="due" id="due1" autocomplete="off" checked value="1"> 24 Hours
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="due" id="due2" autocomplete="off" value="2"> 3 Days
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="due" id="due3" autocomplete="off" value="3"> 1 Week
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="due" id="due4" autocomplete="off" value="4"> 2 Weeks
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="due" id="due5" autocomplete="off" value="5"> 1 Month
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Due2">Manual Due Date:</label>
                                        <input type="date" name="due2" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Create Work Order', ['class'=>'btn btn-primary col-sm-6 float-left my-3']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
