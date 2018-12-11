@extends('layouts.app')

@section('title', 'Status Page')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <h1>Statuses</h1>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($statuses)
                                @foreach($statuses as $status)
                                    <tr>
                                        <td>{{$status->id}}</td>                                                
                                        <td><a href="{{route('statuses.edit', $status->id)}}">{{$status->name}}</a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table><!-- / -->
                </div>
                <div class="col-md-5">
                     {!! Form::open(['method'=>'POST', 'action'=>'StatusController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Status', ['class'=>'btn btn-primary col-sm-6 float-left my-3']) !!}
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
