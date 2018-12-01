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


{{--                     @for ($h = 0; $h <= 8; $h++)
                        @for ($i = 0; $i < 60; $i += 15)
                            {{ $h!=0 ? $h . ' Hours ' : '' }}
                            {{ $i!=0 ? $i . ' Minuets' : '' }}  <br>
                        @endfor
                    @endfor --}}
                
                    <form method="post" action="{{ route('test.store') }}">
                          <div class="form-group">
                              @csrf
                              <label for="name">Share Name:</label>
                              <input type="text" class="form-control" name="share_name"/>
                          </div>
                          <div class="form-group">
                              <label for="price">Share Price :</label>
                              <input type="text" class="form-control" name="share_price"/>
                          </div>
                          <div class="form-group">
                              <label for="quantity">Share Quantity:</label>
                              <input type="text" class="form-control" name="share_qty"/>
                          </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
