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
                                <th scope="col">Work Order Id</th>
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
                                        <td>{{$task->workorders_id}}</td>
                                        <td>{{$task->description}}</td>
                                        <td>{{$task->est_time}}</td>
                                        <td>{{$task->actual_time}}</td>
                                        <td>{{$task->user->name}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table><!-- / -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
