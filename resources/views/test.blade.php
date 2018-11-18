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
                    <h1>Main</h1>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="category">Category</label>
                                <select class="form-control" id="category">
                                    <option>HVAC</option>
                                    <option>Power</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="asset">Asset</label>
                                <select class="form-control" id="category">
                                    <option>AHU-1</option>
                                    <option>AHU-2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="estimated-time">Estimated Time</label>
                                <select class="form-control" id="estimated-time">
                                    <option>15 min</option>
                                    <option>30 min/option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="assigned">assigned</label>
                                <select class="form-control" id="assigned">
                                    <option>Jo</option>
                                    <option>Bob</option>
                                </select>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Describe problem here."></textarea>
                        </div>
                        <legend class="col-form-label pt-0">Priority</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                None
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Low
                            </label>
                        </div>
                        
                        {{-- 
                        ********
                        Use this line to allow for camera access for files
                        <input type="file" accept="image/*" capture="camera">
                        ******** 
                        --}}
                        
                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-10">
                    <h1>Tasks</h1>
                    <form action="/action_page.php">
                        <div class="form-group col-md-6">
                            <label for="style">Style</label>
                            <select class="form-control" id="style">
                                <option>list</option>
                                <option>dropdown</option>
                                <option>checkbox</option>
                                <option>radio</option>
                            </select>
                        </div>                        
                        <div class="form-group col-md-12">
                            <label for="name">task name:</label>
                            <input type="name" class="form-control" id="title" placeholder="Title">
                        </div>

                        
                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
