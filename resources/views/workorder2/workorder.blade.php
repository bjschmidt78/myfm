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
                    <h1>My Workorder</h1>
					<div class="card-body d-flex flex-column align-items-start">
						<h2></h2>
					</div>
                    
                    <div class="card">
						<div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title" style="margin-top: 12px; margin-bottom: 0">{{$workorder->title}}</h4>
                                <a href="#" class="btn btn-danger" style="margin-bottom: 12px; ">Edit</a>
                            </div>							
                            <div class="d-flex justify-content-between">
                                <h6 class="card-subtitle mb-2 text-muted">Category: {{$workorder->category ? $workorder->category->name : "Category Not Set"}}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Date Created: {{$workorder->created_at->toFormattedDateString()}}</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="card-subtitle mb-2 text-muted">Assigned to: {{$workorder->users ? $workorder->users->name : 'Not Assigned'}}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Date Due: {{$workorder->due ? $workorder->due->toFormattedDateString() : 'No Due Date'}}</h6>
                            </div>
                            <div class="d-flex justify-content-between">                                
                                <h6 class="card-subtitle mb-2 text-muted">Estimated Time to Complete: {{$workorder->est_time ? $workorder->est_time : 'Not Set'}}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Status: {{$workorder->status ? $workorder->status->name : 'Not Set'}}</h6>
                            </div>
                            <br>
                            <h5 class="card-subtitle mb-2">Description:</h6>
							<p class="card-text">{{$workorder->description}}</p>
                            

                            @if($tasks)
                                <h5 class="card-subtitle mb-3">Tasks:</h6><hr>
                                @foreach($tasks as $task)
                                <p class="card-text">Description: {{$task->description}}</p>
                                    <div class="d-flex justify-content-between">  
                                        
                                        <h6 class="card-subtitle mb-2">Estimated Time: {{$task->est_time}}</h6>
                                        <h6 class="card-subtitle mb-2">Assigned User: {{$task->user->name}}</h6>
                                    </div>
                                    <hr>
                                @endforeach
                            @endif


						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
