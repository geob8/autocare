@extends('layouts.app')
@section('title', 'Adviser')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h5>Add New Adviser</h5>
  </div>
  <div>
    <a href="{{ ('/settings') }}">Back</a>
  </div>
  
    <form action="{{ url('/advisers') }}" method="POST">
      @csrf
      <div class="form-row d-flex justify-content-around">
        <div class="form-group col-md-3">
          <label for="input">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Adviser Name" autocomplete="off">
          <div>{{ $errors->first('adviser') }}</div> 
        </div>
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-3">
        </div>
      </div>
         <button type="submit" class="btn btn-primary float-right mr-5">Submit</button>
    </form>   
  </div>  
</div>

@endsection