@extends('layouts.app')
@section('title', 'add vehicle')
@section('content')
@include('subviews.nav')
  
<div class="col-md-9">
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h5>Add New Vehicle</h5>
    </div>
    <div>
        <a href="{{ '/vehicles' }}">Back</a>
    </div>

    <form action="/vehicles" method="POST">
         @include('vehicle.form') 
        <button type="submit" class="btn btn-primary float-right mr-5">Add New Vehicle</button>
    </form>
</div>

@endsection