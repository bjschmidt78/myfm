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
                    <h1>Workorders</h1>
                    

                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Discription</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Assigned to:</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if($workorders)
                                        @foreach($workorders as $workorder)
                                            <tr>
                                                <td>{{$workorder->id}}</td>                                                
                                                <td><a href="{{route('workorder.edit', $workorder->id)}}">{{$workorder->title}}</a></td>
                                                <td>{{$workorder->description}}</td>
                                                <td>{{$workorder->category->name}}</td>
                                                <td>{{$workorder->priority->name}}</td>
                                                <td>{{$workorder->due ? $workorder->due->diffForHumans() : 'Not Set'}}</td>
                                                <td>{{$workorder->user_id ? $workorder->user->name : 'Not Assigned'}}</td>

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
