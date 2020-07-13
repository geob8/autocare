@extends('layouts.app')
@section('title', 'Mechanic')
@section('content')
@include('subviews.nav')
 
<div class="col-md-9">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h5>Add New Mechanic</h5>
  </div>
  <div>
    <a href="{{ ('/settings') }}">Back</a>
  </div>
  
    <form action="{{ url('/mechanics') }}" method="POST">
      @csrf
      <div class="form-row d-flex justify-content-around">
        <div class="form-group col-md-3">
          <label for="input">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Mechanic Name" autocomplete="off">
          <div>{{ $errors->first('mechanic') }}</div> 
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