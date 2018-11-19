@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 ben-nav">
            @include('nav/woNav')

        </div>
        <div class="col-md-10 ben-body">
            <h1>Categories</h1>
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
                            @if($categories)
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>                                                
                                        <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}}</a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table><!-- / -->
                </div>
                <div class="col-md-5">
                     {!! Form::open(['method'=>'POST', 'action'=>'CategoriesController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create Category', ['class'=>'btn btn-primary col-sm-6 float-left my-3']) !!}
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
