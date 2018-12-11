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
                                <a href="{{route('workorder.edit', $workorder->id)}}" class="btn btn-danger" style="margin-bottom: 12px; ">Edit</a>
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Task Description</th>
                                            <th scope="col">Estimated Time</th>
                                            <th scope="col">Assigned To</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            @foreach($tasks as $task)
                                                <tr>
                                                    <td>{{$task->description}}</td>
                                                    <td>{{$task->est_time}}</td>
                                                    <td>{{$task->user->name}}</td>
                                                    <td>
                                                        <form method="POST" action="{{ route('workorder.destroy', $task->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table><!-- / -->
                            @endif

                           {{--  @if($tasks)
                                <h5 class="card-subtitle mb-3">Tasks:</h6>
                                @foreach($tasks as $task)

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Task: {{$task->description}}</li>
                                        <li class="list-group-item">Estimated Time: {{$task->est_time}}</li>
                                        <li class="list-group-item">Assigned User: {{$task->user->name}}</li>
                                    </ul>
                            <form method="POST" action="{{ route('workorder2.destroy', $task->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="workoerderId" value="{{$workorder->id}}">
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                                @endforeach
                            @endif                            --}} 
                            

						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
