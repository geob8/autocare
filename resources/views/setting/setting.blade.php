@extends('layouts.app')
@section('title', 'Settings')
@section('content')
@include('subviews.nav')
    
<div class="col-9">
  <div class="pt-3 pb-2 mb-3 border-bottom">
    <h5>Settings</h5>
  </div>

  <div class="form-row d-flex justify-content-around">
    <div class="form-group col-md-3">
       <a class="btn btn-primary mb-4" href="{{ url('/mechanics/create') }}">Add New Mechanic</a>
    </div>

     <div class="form-group col-md-3">
        <a class="btn btn-primary mb-4" href="{{ url('/advisers/create') }}">Add New Adviser</a>
      </div>
      <div class="form-group col-md-3">
     </div>
  </div>
 
@endsection