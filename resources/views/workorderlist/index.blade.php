@extends('layouts.app')

@section('title', 'List Work Orders')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-navy">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Workorder List</h1>

                    <form method="POST" action="{{ route('workorderlist.store') }}">
                        <div class="form-check-inline">
                            @csrf
                            <h6>Statuses</h6>
                        </div>

                        @foreach($statuses as $status)
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="statuses[]" value="{{$status->id}}" id="status_{{$status->name}}" {{$status->name == "Complete" ? "" : "checked"}}>
                            <label class="form-check-label" for="status_{{$status->name}}">{{$status->name}}</label>
                        </div>
                        @endforeach
                        <br>
                        {{-- <div class="form-check-inline">
                            <h6>Categories</h6>
                        </div>

                        @foreach($categories as $category)
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{$category->id}}" id="status_{{$category->name}}">
                            <label class="form-check-label" for="status_{{$category->name}}">{{$category->name}}</label>
                        </div>
                        @endforeach
                        
                        <br>
                        <div class="form-check-inline">
                            <h6>Priorities</h6>
                        </div>
                        
                        @foreach($priorities as $priority)
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="priorities[]" value="{{$priority->id}}" id="status_{{$priority->name}}">
                            <label class="form-check-label" for="status_{{$priority->name}}">{{$priority->name}}</label>
                        </div>
                        @endforeach                     --}}

                        <div class="form-group">
                            <label for="User">Select User:</label>
                            <select class="form-select-inline" name="User" id="user">
                                <option value="">All Users</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>                        

                            <label for="Date">Sort Date By:</label>
                            <select class="form-select-inline" name="Date" id="user">
                                <option value="1">Due Date Assending</option>
                                <option value="2">Due Date Decending</option>
                                <option value="3">Created Date Assending</option>
                                <option value="4">Created Date Decending</option>                            
                            </select>                        
                        </div>
                        <button type="submit" class="btn btn-primary">Sort</button>
                    </form>

                    <br>
                    <hr>
                    <br>                              

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Status:</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Assigned to:</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Estimated Time:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($workorders)
                                @foreach($workorders as $workorder)
                                    <tr>
                                        <td>{{$workorder->status ? $workorder->status->name : 'Not Set'}}</td>              
                                        <td><a href="{{route('workorderlist.show', $workorder->id)}}">{{$workorder->title}}</a></td>
                                        <td>{{$workorder->category ? $workorder->category->name : 'Not Set'}}</td>
                                        <td>{{$workorder->users ? $workorder->users->name : 'Not Assigned'}}</td>
                                        <td>{{$workorder->priority ? $workorder->priority->name : 'Not Set'}}</td>
                                        <td>{{$workorder->due ? $workorder->due->format('m/d/Y') : 'Not Set'}}</td>
                                        <td>{{$workorder->est_time < 60 ? $workorder->est_time . ' minuets' : floor($workorder->est_time / 60) . ':' . $workorder->est_time % 60 }}</td>
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
