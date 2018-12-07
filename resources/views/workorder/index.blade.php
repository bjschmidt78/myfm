@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
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
                                        <th scope="col">Estimated Time:</th>
                                        <th scope="col">Total Time:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($workorders)
                                        @foreach($workorders as $workorder)
                                            <tr>
                                                <td>{{$workorder->id}}</td>                                                
                                                <td><a href="{{route('workorder.edit', $workorder->id)}}">{{$workorder->title}}</a></td>
                                                <td>{{str_limit($workorder->description, 150)}}</td>
                                                <td>{{$workorder->category ? $workorder->category->name : 'Not Set'}}</td>
                                                <td>{{$workorder->priority ? $workorder->priority->name : 'Not Set'}}</td>
                                                <td>{{$workorder->due ? $workorder->due->format('m/d/Y') : 'Not Set'}}</td>
                                                <td>{{$workorder->users ? $workorder->users->name : 'Not Set'}}</td>
                                                <td>{{$workorder->est_time < 60 ? $workorder->est_time . ' minuets' : floor($workorder->est_time / 60) . ':' . $workorder->est_time % 60 }}</td>
                                                <td>{{$workorder->act_time < 60 ? $workorder->act_time . ' minuets' : floor($workorder->act_time / 60) . ':' . $workorder->act_time % 60 }}</td>

                                                

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
