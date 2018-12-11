@extends('layouts.app')

@section('title', 'List Work Orders')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h1>Workorders</h1>
                    

                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 20%">Title</th>
                                <th style="width: 40%">Description</th>
                                <th style="width: 10%">Category</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 10%">Assigned</th>
                                <th style="width: 10%">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($workorders)
                                @foreach($workorders as $workorder)
                                    <tr>
                                        <td><a href="{{route('workorder.show', $workorder->id)}}">{{$workorder->title}}</a></td>
                                        <td>{{str_limit($workorder->description, 120)}}</td>
                                        <td>{{$workorder->category ? $workorder->category->name : 'Category Not Set'}}</td>
                                        <td>{{$workorder->status ? $workorder->status->name : 'Status Not Set'}}</td>
                                        <td>{{$workorder->users ? $workorder->users->name : 'Not Set'}}</td>
                                        <td>{{$workorder->due ? $workorder->due->format('m/d/Y') : 'Not Set'}}</td>
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
