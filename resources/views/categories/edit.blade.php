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
                    <h1>Edit Category</h1>

                    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['CategoriesController@update', $category->id], 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-6 float-left']) !!}
                        </div>

                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['CategoriesController@destroy', $category->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6 float-right']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
